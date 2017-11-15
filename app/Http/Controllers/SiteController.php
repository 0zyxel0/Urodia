<?php

namespace App\Http\Controllers;

use App\Patient;
use App\checkupRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


   public function dashboard()
    {
       return view('content.content-dashboard');
    }

  public function profile()
    {
       return view('content.content-profile');
    }

    public function reports()
    {
        return view('content.content-reports');
    }


  public function test()
    {
       return view('content.test');
    }

    public function viewPatientRecords()
    {
        $data = Patient::all ();
       // dd($data);
       return view('content.content-patientRecords')->withData ( $data );
    }

    public function addPatientRecords()
    {
        return view('content.content-newRecord');
    }

  public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('content.content-dashboard');
    }

    public function viewCheckupRecords()
    {
        $data2 = checkupRecord::all ();
        dd($data2);

        //return view('content.content-checkup')->withData ( $data2 );
    }


}
