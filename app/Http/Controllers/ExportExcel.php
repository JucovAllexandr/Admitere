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
    public function export(Request $request){
        if (Auth::check()) {
            if (Elev::all()->count()>0) {
                    $spec = Specialitate::find($request->sp);
                    Excel::create($spec->denumire, function ($excel) use($request) {
                        $excel->sheet('Elevi', function ($sheet) use($request){
                            $id = $request->sp;
                            //$elevi = Elev::where('id_specialitate','=',$id,'id_specialitate2','=',$id,'id_specialitate3','=',$id)->get();
                            $elevi = Elev::where('id_specialitate','=',$id)->orWhere('id_specialitate2','=',$id)
                                ->orWhere('id_specialitate3','=',$id)->get();
                            //dd($elevi);
                            $spec = Specialitate::find($request->sp);
                            $sheet->loadView('excel.export',['elevi'=>$elevi,'specialitate'=>$spec->denumire]);
                            $sheet->cells('A2:T2', function($cells) {
                                $cells->setBackground('#C0C0C0 ');
                                $cells->setAlignment('center');
                                $cells->setValignment('center');
                                $cells->setTextRotation(90);
                            });
                            $sheet->setHeight(2, 360);
                        });
                    })->export('xlsx');

            }else
                abort(404);
        }else
            abort(404);
    }
}
