<?php

namespace App\Http\Controllers;


use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Patient;
use DB;
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newPatientRecord()
    {
        return view("content.content-newRecord");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // Patient::create(Request::all());
        $partyid = Uuid::uuid();
        $givenName = $request->input('givenName');
        $familyName = $request->input('familyName');
        $middleName = $request->input('middleName');
        $birthday = date("Y-m-d", strtotime($request->input('birthday')));
        $age = $request->input('age');
        $email = $request->input('email');
        $obsIns = $request->input('obsIns');
        $menopause = $request->input('menopause');
        $gender = $request->input('gender');
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');


        $data = array(
            'partyid'=>$partyid,
            'givenName' =>$givenName,
            'familyName'=>$familyName,
            'middleName'=>$middleName,
            'birthday'=>$birthday,
            'age'=>$age,
            'email'=>$email,
            'obsIns'=>$obsIns,
            'menopause'=>$menopause,
            'gender'=>$gender,
            'created_at'=>$created_at,
            'updated_at'=>$updated_at
            );

            DB::table('patients')->insert($data);



        return $partyid;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return $request->all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
