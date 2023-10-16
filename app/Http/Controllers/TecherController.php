<?php

namespace App\Http\Controllers;
use App\models\ajax;
use Illuminate\Http\Request;

class TecherController extends Controller
{
    public function index(){
        return view('teacher.index');
    }



    public function allData(){

       $data = ajax::orderBy('id','DESC')->GET();
         return response()->json($data);

    }
}
