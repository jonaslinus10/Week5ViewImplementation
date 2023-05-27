<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard_view');
    }

    public function resident_record()
    {
        return view('resident_record');
    }

    public function user(){
        
        return view('user_view');
    }

}
