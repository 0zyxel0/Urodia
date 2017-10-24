<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('content.content-login');
    }

   public function dashboard()
    {
       return view('content.content-dashboard');
    }

  public function profile()
    {
       return view('content.content-profile');
    }


  public function test()
    {
       return view('content.test');
    }

    public function viewPatientRecords()
    {
       return view('content.content-PatientRecords');
    }

    public function addPatientRecords()
    {
        return view('content.content-newRecord');
    }

}
