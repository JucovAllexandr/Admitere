<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use PDF;
use App\Elev;
use Auth;

class PdfController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            if (Elev::where('id', $request->id)->count()) {
                $elev = Elev::where('id', $request->id)->get();
                $pdf = PDF::loadView('pdf.admiterea', ['elev' => $elev]);
                return $pdf->stream();
                //return $pdf->download('invoice.pdf');
            }
            else
                abort(404);
        } else
            abort(404);
    }
}
