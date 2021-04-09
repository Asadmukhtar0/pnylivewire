<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    //
    public function sendmail(Request $request){
    	$data = [
    		'name' => $request->name,
    		'email' => $request->email,
    		'msg' => $request->msg
    	];
      Mail::send('mail', $data, function($message) {
         $message->to('axad03213@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
         $message->from('axad03213@gmail.com','Virat Gandhi');
      });
      echo "HTML Email Sent. Check your inbox.";
    }
}
