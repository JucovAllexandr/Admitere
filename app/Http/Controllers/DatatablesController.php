<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Datatables;
use App\User;
use App\Nationality;
class DatatablesController extends Controller
{
    public function getIndex()
    {
        return view('data_out');
    }

    public function anyData()
    {
        $users = User::select(['id','name','email','created_at','updated_at']);
        //$users = Nationality::select(['id','name','email','created_at','updated_at']);
        return Datatables::of($users)->make(true);
    }

}
