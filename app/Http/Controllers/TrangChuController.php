<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrangChuController extends Controller
{
    function getTrangChu(){
        
        return view('trangChu');
    }
    function getFeedBack(){
        return view('feedBack');
    }
    function getRegisterAndLogin(){
        return view('registAndLogin');
    }
}
