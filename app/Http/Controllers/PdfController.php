<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use PDF;
use App\Elev;
use Auth;
class PdfController extends Controller
{
    public function index(){
        if(Auth::user()->elev_id == 0)
            return redirect('/data');
        else
        {   
            $elev = Elev::where('id',Auth::user()->elev_id)->get();
            $pdf= PDF::loadView('pdf.admiterea',['elev'=>$elev]);
            return $pdf->stream();
            //return $pdf->download('invoice.pdf');
        }
    }
}
