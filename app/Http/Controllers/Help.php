<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
class Help extends Controller
{
    public function message(Request $request){
        $this->validate($request,[
            'name' => 'required|string',
            'email' => 'required|email',
            'sub' => 'required|string',
            'message' => 'required|string',
            //'g-recaptcha-response' => 'required|captcha',
        ]);

        Mail::send('message',['name'=>$request->name,'email'=>$request->email, 'subject'=>$request->sub ,'bodyMessage'=>$request->get('message'),],function($m) use ($request)
        {
            $m->from('cipc@cipc.info.md');
            $m->to($request->email);
        });
        //Session::set('send_msg',true);
        return redirect('/help');
    }

}

