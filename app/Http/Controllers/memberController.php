<?php
namespace App\Http\Controllers;
class memberController extends Controller{
    public  function info($id){
        return view('info',
            ['name'=>'yansup']);
    }
};
