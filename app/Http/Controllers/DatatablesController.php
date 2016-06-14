<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Datatables;
use App\Elev;
class DatatablesController extends Controller
{
    public function getIndex()
    {
        return view('data_out');
    }

    public function anyData()
    {
        $elevi = Elev::select(['id','id_specialitate','id_specialitate2','id_specialitate3','nume','prenume','media1','media2','media3']);

        //$elevi = Elev::join('users', 'posts.user_id', '=', 'users.id')
          //  ->select(['id_specialitate','id_specialitate2','id_specialitate3','nume','prenume']);


        //$users = Nationality::select(['id','name','email','created_at','updated_at']);
        return Datatables::of($elevi)->addColumn('specialitate1', function ($sp) {
            foreach ($sp->specialitates()->get() as $e)
        return $e->denumire;
        })->addColumn('media1', function ($sp) {
                return $sp->media1;
        })->addColumn('specialitate2', function ($sp) {
            foreach ($sp->specialitates2()->get() as $e)
                return $e->denumire;
        })->addColumn('specialitate3', function ($sp) {
            foreach ($sp->specialitates3()->get() as $e)
                return $e->denumire;
        })->addColumn('pdf', function ($elevi) {
            return '<a href="'.url('/pdf/'.$elevi->id).'" class="btn btn-xs btn-primary">Pdf'.$elevi->id.'</a>';
        })->addColumn('media2', function ($sp) {
            return $sp->media2;
        })->addColumn('media3', function ($sp) {
            return $sp->media3;
        })->editColumn('id', '{{$id}}')->make(true);
    }

}