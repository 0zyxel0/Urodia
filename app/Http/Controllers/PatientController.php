<?php

namespace App\Http\Controllers;


use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Patient;
use App\checkupRecord;
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
        $address = $request->input('address');
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
            'address'=>$address,
            'email'=>$email,
            'obsIns'=>$obsIns,
            'menopause'=>$menopause,
            'gender'=>$gender,
            'created_at'=>$created_at,
            'updated_at'=>$updated_at
            );

            DB::table('patients')->insert($data);

            $id= $partyid;

        return redirect('profile/'.$id);
        //return redirect('profile');

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

    public function viewProfile($id)    {

        $q = Patient::where('partyid', $id)->get();
        $convs = json_encode($q);


        $q2 = checkupRecord::where('partyid',$id)
            ->orderBy('created_at', 'desc')
            ->get();
        $convs2 = json_encode($q2);


        return view('content.content-profile',[ 'data' => json_decode($convs,true),'data2' => json_decode($convs2,true)  ]);

    }


    public function viewCheckupRecord($id){



        $q = checkupRecord::where('checkid', $id)
            ->orderBy('created_at', 'desc')
            ->get();

        $convs = json_encode($q);



       return view('content.content-viewcheck',['data'=>json_decode($convs,true)]);
    }



    public function newRecordDiagnosis($id){


        $q = Patient::where('partyid', $id)
            ->get();


        $convs = json_encode($q);

        return view('content.content-diagnosis', [ 'data' => json_decode($convs,true) ]);
    }


    public function saveDiagnosis(Request $request)
    {
        // Patient::create(Request::all());
        $partyid = Uuid::uuid();


        $data = array(
            'partyid'=>$partyid,
        );

        DB::table('diagnosis')->insert($data);

        $id= $partyid;

        return redirect('profile/'.$id);
        //return redirect('profile');

    }

    public function addCheckupRecord($id)
{

    $q = Patient::where('partyid', $id)
        ->get();
    $convs = json_encode($q);


    return view('content.content-checkup', [ 'data' => json_decode($convs,true) ]);
}
//TESTING ELOQUENT
    public function testTable($id)
    {

       $data = checkupRecord::all ();
        $filtered = $data->where('partyid',$id);
        //dd($data);
        dd($filtered);


    }

    public function storeCheckupRecord(Request $request)
    {

        // Patient::create(Request::all());
        $checkid = Uuid::uuid();
        $partyid = $request->input('partyid');
        $complaint_summary = $request->input('complaint_summary');
        $complaint_details = $request->input('complaint_details');
        $diagnosis_details = $request->input('diagnosis_details');
        $treatment_details = $request->input('treatment_gvn');
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');



        $data = array(
            'checkid'=>$checkid,
            'partyid'=>$partyid,
            'complaint_summary' =>$complaint_summary,
            'complaint_details'=>$complaint_details,
            'diagnosis_details'=>$diagnosis_details,
            'treatment_details'=>$treatment_details,
            'created_at'=>$created_at,
            'updated_at'=>$updated_at
        );

        DB::table('checkup_records')->insert($data);

        $id= $partyid;

        return redirect('profile/'.$id);
        //return redirect('profile');

    }



}
