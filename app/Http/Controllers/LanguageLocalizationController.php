<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LanguageLocalizationController extends Controller
{
     public function index(Request $request){
        if($request->lang <> ''){
            app()->setLocale($request->lang);
        }
        echo trans('alert.success');
      


	    }

}
