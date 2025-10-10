<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;   
use App\Models\Opd;      
use App\Models\Opdpart;
use Illuminate\Support\Facades\DB;
 
use Carbon\Carbon;

class OpdController extends Controller
{
    public function registeredlist(Request $request)
    {
        $records = null;
        $date = $request->input('rdate'); // expected in dd-mm-yyyy or whatever format your input gives
        if (!$date)
        {
            $date = \Carbon\Carbon::now()->format('d-m-Y'); // default to today in dd-mm-yyyy
        }
        if ($date)
        {
            $formattedDate = \Carbon\Carbon::createFromFormat('d-m-Y', $date)->format('Y-m-d');
            $records = Opd::select('REG_NO', 'PATIENT_NAME', 'CONSULTANT', 'ptype', 'cur_date')->whereDate('cur_date', $formattedDate)->where('CONSULTANT', 'Dr.SIVAMURUGAN')->get();   
        }
        return view('doctpanel/opd_pages.indexopd', compact('records', 'date'));   
        
    }
    
    public function opdOldNewData(string $regno)
    {
       
       $patDetails = null;
       if($regno)
       {
        $patDetails = Opd::select('REG_NO', 'PATIENT_NAME', 'ptype','SEX','age')->where('REG_NO', $regno)->first();
        $allergy_data = DB::table('allergy')->where('regno', $regno)->pluck('allergy');

        $records = Opdpart::select('created_at','type','id','name')
        ->where('regno', $regno)
        ->orderBy('created_at', 'asc')
        ->get();// here u have used data as array in the model so it will be automatically converted into php array
        //That means Laravel will automatically decode the data JSON into an array every time you fetch it
        // from the database — so you don’t need any json_decode() in your controller or blade anymore.
        

        return view('doctpanel/opd_pages.opd_oldnew', compact('patDetails', 'regno','allergy_data','records')); 
       }
    }

    public function report($regno){
      $reports = Opdpart::select('created_at','type','id','name','regno','consultant')
        ->where('regno', $regno)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('doctpanel/opd_pages.report_list',compact('reports'));
    }


    public function show($id){

        $recordata = Opdpart::where('id', $id)->first();
        $datas = $recordata->data ?? [];     
        $grouped = [];
        
        $removeLists = [
            'spine' => [
                'Aggravating_factors' => 'None',
                'bladder'             => 'Incontinence',
                'bowel'               => 'Abnormal',
                'Injections'          => 'Trigger',
                'Allergies'           => 'N/A',
                'Social_History'      => 'NKDA',
                'General_Appearance'  => 'Distressed',
                'Posture'             => 'erect',
                'ROM'                 => 'Restricted',
                'sensation'           => 'Decreased',
                'Past_Medical_History'=> 'None',
                'Current_meds_none'   =>  'none',
            ],
            'spinal_deformity' => [
                'Weakness' => 'Unsteady_gait',
                'Bladdercheckbox' => 'checkbox',
                'BracingCasting'  => 'Bracing_Casting',
                'Physiotherapys'  => 'Physiotherapy',
                'Non-consanguity_checkbox' => 'checkbox',
                'Siblings_checkbox' => 'checkbox',
                'Birth_History_checkbox' => 'checkbox',
                'Pushprone_test'  => 'checkbox',
                'Suspension(Traction)'  => 'checkbox',
                'Bendings'  => 'checkbox',
                'Pronehyperextension_test'  => 'checkbox',
                'Sensations'  => 'Intact',
            ],
            'knee' => [],
            'leg' => [],
            'hand_wrist' => [],
            'shoulder_elbow' => [
                'Relation_to_trauma' => 'checkbox',
                'Prior_Treatment_Attempted' => 'Yes',
                'fatigue' => 'Yes',
                'anteriorly' => 'checkbox',
                'LateralAspect' => 'checkbox',
                'posteriorly' => 'checkbox',
            ], 
        ];
        $removeList = $removeLists[$recordata->type];
        foreach ($datas as $key => $value) {
            $title = $value['title'] ?? '';
            $valStr = implode(', ', $value['values'] ?? []);

            if (isset($removeList[$key]) && $removeList[$key] === $valStr) {
                continue;
            }
            $grouped[$title][$key] = $valStr;
        }
        return view('doctpanel/opd_pages.report', [
            'grouped' => $grouped,
            'recordata' => $recordata,
        ]);
        }
}
?>
