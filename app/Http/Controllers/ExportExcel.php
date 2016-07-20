<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Excel;
use App\Elev;
use Auth;
use App\Specialitate;

class ExportExcel extends Controller
{
    public function export(Request $request)
    {
        if (Auth::check() && (Auth::user()->moderator || Auth::user()->admin)) {
            if (Elev::all()->count() > 0) {
                //$spec = Specialitate::find($request->sp);
                Excel::create("export", function ($excel)  {
                    $excel->sheet('Elevi', function ($sheet) {

                        //$elevi = Elev::where('id_specialitate','=',$id,'id_specialitate2','=',$id,'id_specialitate3','=',$id)->get();
//                        $elevi = Elev::where('id_specialitate', '=', $id)->orWhere('id_specialitate2', '=', $id)
//                            ->orWhere('id_specialitate3', '=', $id)->get();

                        $elevi = Elev::all();
                        //dd($elevi);
                       // $spec = Specialitate::find($request->sp);
                        $sheet->loadView('excel.export', ['elevi' => $elevi, 'specialitate' => "Concurs"]);
                        $sheet->cells('A2:AA2', function ($cells) {
                            $cells->setBackground('#C0C0C0 ');
                            $cells->setAlignment('center');
                            $cells->setValignment('center');
                            $cells->setTextRotation(90);
                        });
                        $sheet->setHeight(2, 360);
                    });
                })->export('xls');

            } else
                abort(404);
        } else
            abort(404);
    }

    public function raport(Request $request)
    {
        if (Auth::check() && (Auth::user()->moderator || Auth::user()->admin)) {
            if (Elev::all()->count() > 0) {

                $spec = Specialitate::find($request->sp);
                Excel::create($spec->denumire, function ($excel) use ($request) {
                    $excel->sheet('Elevi', function ($sheet) use ($request) {
                        $id = $request->sp;
                        //$elevi = Elev::where('id_specialitate','=',$id,'id_specialitate2','=',$id,'id_specialitate3','=',$id)->get();
                        $elevi = Elev::where('id_specialitate', '=', $id)->orWhere('id_specialitate2', '=', $id)
                            ->orWhere('id_specialitate3', '=', $id)->get();
                        $media=0;
                        $i=0;
                        //$tmp = new Arrey(count($elevi));
                        foreach ($elevi as $e) {
                            if ($e->id_specialitate == $id) {
                                {
                                    $media=$e->media1;
                                }
                            } elseif ($e->id_specialitate2 == $id) {

                                {
                                    $media=$e->media2;
                                }
                            } elseif ($e->id_specialitate3 == $id) {
                                {
                                    $media=$e->media3;
                                }
                            }

                            $tmp[$i] = ['nume' => $e->nume . ' ' . $e->prenume, 'media' => $media];
                            $i++;
                        }

                        $size = count($tmp)-1;
                        for ($i = $size; $i>=0; $i--) {
                            for ($j = 0; $j<=($i-1); $j++)
                                if ($tmp[$j]["media"] < $tmp[$j+1]["media"]) {
                                    $k = $tmp[$j];
                                    $tmp[$j] = $tmp[$j+1];
                                    $tmp[$j+1] = $k;
                                }
                        }

                       // dd($tmp);
                        $spec = Specialitate::find($request->sp);
                        $sheet->loadView('excel.raport', ['elevi' => $tmp, 'specialitate' => $spec->denumire]);
                        $sheet->cells('A2:C2', function ($cells) {
                            $cells->setBackground('#C0C0C0 ');
                            $cells->setAlignment('center');
                            $cells->setValignment('center');
                            $cells->setTextRotation(90);
                        });
                        $sheet->setHeight(2, 200);
                    });
                })->export('xls');

            } else
                abort(404);
        } else
            abort(404);
    }
}
