<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ListBuilder;
use App\Patient;
use App\category;
use App\checkupRecord;
use DB;
use App\categorylist;
use App\categorylistcontent;
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
    public function saveChecklistData(Request $request)
    {

        $checklistid =

        $data =  $request->except('userpartyid','_token','createdBy','submit');
        $d = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        $by = Auth::user()->name;

        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');
        $id =$request->input('userpartyid');
        $data2 = array(
            'partyid'=>$request->input('userpartyid'),
            'listdata'=>$d,
            'createdBy'=>$by,
            'created_at'=>$created_at,
            'updated_at'=>$updated_at
        );

        // dd($data2);
        DB::table('list_builders')->insert($data2);
        // echo 'success';
        return redirect('checkup/' .$id);
    }


    public function saveCategoryListData(Request $request){


        $checklistid = Uuid::uuid();
        $partyid =  $request->get('userpartyid');
        $by = Auth::user()->name;
        $list = new categorylist();

        $content = new categorylistcontent();


        $list->checklistid = $checklistid;
        $list->partyid = $partyid;
        $list->createdBy = $by;
        $list->save();
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');
        $checklistdata = $request->get('checklist');
        $dataset = [];
        foreach($checklistdata as $key => $value) {
            $dataset[] = [
                'checklistid' => $checklistid,
                'categoryid' => $key,
                'isCheck' =>$value,
                'created_at' => $created_at,
                'updated_at'=>$updated_at
            ];
        }



        DB::table('categorylistcontents')->insert($dataset);


        return redirect('checkup/' .$partyid);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function viewProfile($id)    {

        $q = Patient::where('partyid', $id)->get();
        $convs = json_encode($q);


        $q2 = checkupRecord::where('partyid',$id)
            ->orderBy('created_at', 'desc')
            ->get();
        $convs2 = json_encode($q2);


        // $q3 = ListBuilder::where('partyid',$id)
        //         ->get();


        $q3 = categorylist::where('partyid',$id)
            ->get();

        $convs3 = json_encode($q3);

        return view('content.content-profile',[ 'data' => json_decode($convs,true),'data2' => json_decode($convs2,true),'data3' =>json_decode($convs3,true)  ]);

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

        $categories = category::where('parent_id', '=', 'id')->get();




        return view('content.content-diagnosisList',compact('categories','q'));
    }


    public function saveDiagnosis(Request $request)
    {
        $input = $request->all();

        //return Request::all();
        // Patient::create(Request::all());
        //  $partyid = $request->input('userpartyid');





        // DB::table('list_builders')->insert($input);
        dd($input);
//
        //      $id= $partyid;
//
        //       return redirect('profile/'.$id);
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

    public function displayDiagnostic($id){


        // $rr = ListBuilder::where('id', $id)
        //   ->pluck('listdata');
        // $rr2 = json_decode($rr[0],true);
        // $convs = json_encode($rr2);

        //return view('content.content-list', [ 'data' => json_decode($convs,true) ]);


        $query = DB::table('categorylists')
            ->select('categories.title','categorylistcontents.ischeck')
            ->join('categorylistcontents','categorylists.checklistid' , '=','categorylistcontents.checklistid')
            ->join('categories','categorylistcontents.categoryid','=','categories.id')
            ->where('categorylists.checklistid' ,$id)
            ->get();
        $convs = json_encode($query);

        return view('content.content-list', [ 'data' => json_decode($convs,true) ]);
    }



    public function getdiagnosistally(){

        $jsonData = ListBuilder::all()->pluck('listdata');



        $testValues = $jsonData->flatMap(function($json){
            $data = collect(json_decode($json, true)['checklist']);
            return $data->filter(function($item)
            {

                $keys = ['a','b','c','d','e','f','g','h','i','j','k'];
                return str_contains($item, $keys);
            });

        });

        $result = array_count_values($testValues->all());


        return view('content.content-diagnostictally',  compact('result'));



    }


    public function generateDataTally(){
        $query = DB::table('categorylistcontents')
            ->select( 'categories.title','categorylistcontents.categoryid',DB::raw('count(categorylistcontents.ischeck) as count'))
            ->join ('categories' ,'categorylistcontents.categoryid' ,'=','categories.id')
            ->join ('categorylists','categorylists.checklistid','=','categorylistcontents.checklistid')
            ->where('categorylistcontents.isCheck','=',1)
            ->groupBy('categorylistcontents.categoryid')
            ->get();


        $data = json_encode($query);
        //dd($data);
        return view('content.content-diagnosticcount',  [ 'data' => json_decode($data,true) ]);
    }

}
 