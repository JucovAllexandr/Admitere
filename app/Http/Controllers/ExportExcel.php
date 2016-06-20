<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Excel;
use App\Elev;
use Auth;
class ExportExcel extends Controller
{
    public function export(){
        if (Auth::check()) {
            if (Elev::all()->count()>0) {

                Excel::create('Elevi', function ($excel) {
                    $excel->sheet('Elevi', function ($sheet) {
                        $elevi = Elev::all();
                        $sheet->loadView('excel.export',['elevi'=>$elevi]);
                        $sheet->cells('A1:T1', function($cells) {
                            $cells->setBackground('#C0C0C0 ');
                            $cells->setAlignment('center');
                            $cells->setValignment('center');
                            $cells->setTextRotation(90);
                        });
                        $sheet->setHeight(1, 400);
                    });
                })->export('xlsx');

            }else
                abort(404);
        }else
            abort(404);
    }
}
