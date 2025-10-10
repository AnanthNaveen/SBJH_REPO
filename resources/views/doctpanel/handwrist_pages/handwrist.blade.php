<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('Sweetalerts/sweetalert2.min.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<style>
    .highlight {
        background: linear-gradient(90deg, rgba(98, 191, 117, 0.1), rgba(98, 191, 117, 0.05));
        border-radius: 6px;
        padding: 10px;
        margin-bottom: 10px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .checkbox-group {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        /* margin-bottom: 15px; */
    }

    .checkbox-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    input[type="checkbox"] {
        width: 18px;
        height: 18px;
        cursor: pointer;
    }

    input[type="text"] {
        padding: 10px 12px;
        border: 2px solid #e2e8f0;
        border-radius: 6px;
        font-size: 14px;
        transition: border-color 0.3s ease;
        width: 100%;
        max-width: 200px;
    }

    textarea {
        padding: 10px 12px;
        border: 2px solid #e2e8f0;
        border-radius: 6px;
        font-size: 14px;
        transition: border-color 0.3s ease;
        width: 100%;
        max-width: 200px;
        margin-left: 5px;
    }

    textarea:focus {
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .inline-input {
        display: inline-block;
        width: auto;
        min-width: 100px;
        margin-left: 5px;
    }

    label {
        font-weight: 400;
        color: #4a5568;
        margin-bottom: 1px;
        display: block;
    }

    .label1 {
        font-weight: 400;
        color: #4a5568;
        margin-bottom: 1px;
        display: block;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        background: white;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .section {
        margin-bottom: 10px;
        background: #f1fbef;
        border-radius: 12px;
        padding: 25px;
        border-left: 4px solid #418a68;
    }

    .row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .col {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .inline-input {
        display: inline-block;
        width: auto;
        min-width: 100px;
        margin-left: 5px;
    }

    .col h5 {
        color: #2d3748;
        margin-bottom: 15px;
        font-size: 1.1em;
        border-bottom: 2px solid #a2f4b0;
        padding-bottom: 8px;
        margin-top: 15px;
    }

    .subsection {
        margin-top: 20px;
        padding-top: 15px;
        border-top: 1px solid #a2f4b0;
    }

    .subsection h6 {
        color: #418a68;
        margin-bottom: 10px;
        font-size: 1em;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #e2e8f0;
    }

    th {
        background: linear-gradient(135deg, #126328 0%, rgb(103, 156, 37) 100%);
        color: white;
        font-weight: 500;
    }

    td input[type="text"] {
        width: 100%;
        max-width: none;
        margin: 0;
    }

    .flexdiv {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .flexdiv1 {
        display: flex;
        gap: 10px;
        margin: 8px;
        align-items: center;
    }

    .header {
        background: linear-gradient(135deg, #2E7D32, #43A047);
        color: #fff;
        font-weight: bold;
        text-align: center;
        letter-spacing: 1px;
        padding: 10px 0;
        border-radius: 12px;
        margin: 20px 0;

    }

    .header h1 {
        font-size: 1.9em;
        font-weight: 400;
    }

    .inline_row {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    input:disabled,
    textarea:disabled {
        background-color: #f0f0f0;
        color: #999;
        cursor: not-allowed;
    }

    .percentagediv {
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .error-field {
        border: 2px solid red !important;
        outline: none !important;
    }
    .modified_table{
        border-bottom: none;
        background: none;
        box-shadow: none;
    }
    .modified_table td {
        border-bottom: none;
    }

    @media (max-width: 768px) {
        .container {
            margin: 10px;
            border-radius: 10px;
        }

        .content {
            padding: 20px;
        }

        .row {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        .checkbox-group {
            flex-direction: column;
            gap: 10px;
        }
    }
</style>
<form action="" id="handandwrist">
    <div>
        <div class="header">
            <h1>HAND AND WRIST</h1>
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="col">
                <div class="form-group" data-group="dominant-hand" data-exclusive="true" data-title="Dominant Hand">
                    <h5><b>Dominant Hand :</b></h5>
                    <div class="checkbox-group" >
                        <div class="checkbox-item">
                            <input type="checkbox" name="dominant_hand" value="Right">
                            <label for="">Right</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="dominant_hand" value="Left">
                            <label for="">Left</label>
                        </div>
                    </div>
                </div>
                <div class="form-group" >
                    <h5><b>Chief Complaints :</b></h5>
                    <div class="checkbox-group" data-title="Chief Complaints">
                        <div class="checkbox-item">
                            <input type="checkbox" name="chief_complaints" value="Pain">
                            <label for="">Pain</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="chief_complaints" value="Swelling">
                            <label for="">Swelling</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="chief_complaints" value="Deformity">
                            <label for="">Deformity</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="chief_complaints" value="Loss of Function">
                            <label for="">Loss Of Function</label>
                        </div>
                    </div>
                </div>
                <div class="form-group" data-group="Side" data-exclusive="true">
                    <h5><b>Side:</b></h5>
                    <div class="checkbox-group" data-title="Chief Complaints">
                        <div class="checkbox-item">
                            <input type="checkbox" name="side" value="Right">
                            <label for="">Right</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="side" value="Left">
                            <label for="">Left</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="side" value="Both">
                            <label for="">Both</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h5><b>Symptoms:</b></h5>
                    <div class="checkbox-group" data-title="Chief Complaints" >
                        <div class="checkbox-item">
                            <label for="" class="label1">Duration:</label>
                            <input type="text" class="inline-input" value="" name="duration">
                        </div>
                    </div>
                </div>       
                <div class="form-group" data-title="Chief Complaints" data-group="Chief Complaints" data-exclusive="true">
                <h5><b>Onset:</b></h5>
                    <div class="checkbox-group" >
                        <div class="checkbox-item">
                            <input type="checkbox" name="onset" value="Insidious">
                            <label for="">Insidious</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="onset" value="Sudden">
                            <label for="">Sudden</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h5><b>Character Of Pain:</b></h5>
                    <div class="checkbox-group" data-title="Chief Complaints">
                        <div class="checkbox-item">
                            <input type="checkbox" name="character_pain" value="Throbbing">
                            <label for="">Throbbing</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="character_pain" value="Pricking">
                            <label for="">Pricking</label>
                        </div>
                    </div>
                </div>
                <div>
                    <h5><b>Aggravating Factors</b></h5>
                    <div class="checkbox-group" data-group="Aggravating_factors" data-title="Chief Complaints" >
                        <div class="checkbox-item" >
                            <input type="checkbox" name="Aggravating_factors" value="Exercise">
                            <label for="">Exercise</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Aggravating_factors" value="Strenuous Activity">
                            <label for="">Strenuous Activity</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Aggravating_factors" value="Walking">
                            <label for="">Walking</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Aggravating_factors" value="Overhead Activities">
                            <label for="">Overhead Activities</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Aggravating_factors" value="Running">
                            <label for="">Running</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Aggravating_factors" value="Others" data-target="#input1">
                            <label for="">Others</label>
                            <input type="text" class="inline-input"  name="Aggravating_factors_other" id="input1" disabled>
                        </div>
                    </div>
                </div>
                <div>
                    <h5><b>Relieving Factors</b></h5>
                    <div class="checkbox-group" data-group="Relieving factors" data-title="Chief Complaints">
                        <div class="checkbox-item">
                            <input type="checkbox" name="relieving_factors" value="Rest">
                            <label for="Aggravating_factors">Rest</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="relieving_factors" value="Medication">
                            <label for="">Medication</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="relieving_factors" value="Lying Down">
                            <label for="">Lying Down</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="relieving_factors" value="Others" data-target="#input2">
                            <label for="">Others</label>
                            <input type="text" class="inline-input"  name="relieving_factors_others" id="input2" disabled>
                        </div>
                    </div>
                </div>
                <div class="checkbox-group mt-4" data-title="Relation To Trauma" data-group="Relation To Trauma" data-exclusive="true">
                    <div class="checkbox-item">
                        <label for="" class="label1">Relation To Trauma:</label>
                        <input type="checkbox" name="relation_to_trauma" value="Yes">
                        <label for="">Yes</label>
                        <input type="checkbox" name="relation_to_trauma" value="No">
                        <label for="">No</label>
                    </div>
                </div>
                <div class="checkbox-group mt-3" data-group="History Of Fever" data-exclusive="true">
                    <div class="checkbox-item" data-title="Chief Complaints" >
                        <label for="" class="label1">Any H/O Of Fever:</label>
                        <input type="checkbox" name="history_of_feverno" value="No" data-target="#input4">
                        <label for="">No</label>
                        {{-- <input type="text" class="inline-input" name="history_fever_no" id="input4" disabled> --}}
                        <input type="checkbox" name="history_of_feveryes" value="Yes" data-target="#input3">
                        <label for="">Yes</label>
                        <input type="text" class="inline-input" name="history_fever_yes" id="input3" disabled>
                    </div>
                </div>
                <div class="checkbox-group mt-3" data-title="Chief Complaints">
                    <div class="checkbox-item">
                        <label for="" class="label1">Pain Severity:</label>
                        <input type="text" class="inline-input"  name="pain_severity">
                    </div>
                </div>
                <div class="checkbox-group mt-3" data-title="Chief Complaints">
                    <div class="checkbox-item">
                        <label for="" class="label1">Prior Treatment Attempted:</label>
                        <input type="text" class="inline-input" placeholder="" name="treatment_attempted">
                    </div>
                </div>
                <div class="checkbox-group mt-3" data-title="Chief Complaints">
                    <div class="checkbox-item">
                        <label for="" class="label1">Pain Worst In :</label>
                        <input type="text" class="inline-input" placeholder="" name="pain_worst">
                    </div>
                </div>
                <div class="checkbox-group mt-3" data-title="Chief Complaints">
                    <div class="checkbox-item">
                        <label for="" class="label1">Activities Of daily living:</label>
                        <input type="text" class="inline-input" placeholder="" name="activities_daily_living">
                    </div>
                </div>
                <div class="checkbox-group mt-3" data-title="Chief Complaints">
                    <div class="checkbox-item">
                        <label for="" class="label1">Patient had similiar complaints in the Past:</label>
                        <input type="text" class="inline-input" placeholder="" name="patient_complaints_past">
                    </div>
                </div>
                <div>
                    <h5><b>Other Complaints</b></h5>
                    <div class="checkbox-group" data-group="Other Complaint" data-title="Other Complaint" data-exclusive="true">
                        <div class="checkbox-item">
                            <label>Fatigue:</label>
                            <input type="checkbox" name="fatigue" value="No - fatigue">
                            <label for="">No</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="fatigue" value="Yes" data-target="#input5">
                            <label for="">Yes</label>
                            <input type="text" name="fatigue_yes" id="input5" disabled>
                        </div>
                      
                    </div>
                </div>
                <div class="mt-2" style="display: flex;flex-wrap:wrap;gap:5px;row-gap:20px;" data-group="Other Complaint" data-title="Other Complaint">
                    <div>
                        <label for="" class="label1">Bladder:</label>
                        <input type="text" class="inline-input" placeholder="Describe Bladder"  name="bladder">
                    </div>
                    <div>
                        <label for="" class="label1">Bowel:</label>
                        <input type="text" class="inline-input" placeholder="Describe Bowel" name="bowel">
                    </div>
                    <div>
                        <label for="" class="label1">Fever:</label>
                        <input type="text" class="inline-input" placeholder="Describe Fever" name="fever">
                    </div>
                    <div>
                        <label for="" class="label1">Weight loss:</label>
                        <input type="text" class="inline-input" placeholder="Describe Weight loss" name="weight_loss">
                    </div>
                    <div>
                        <label for="" class="label1">Weight gain:</label>
                        <input type="text" class="inline-input" placeholder="Describe Weight gain" name="weight_gain">
                    </div>
                    <div>
                        <label for="" class="label1">Loss of Appetite:</label>
                        <input type="text" class="inline-input" placeholder="Describe Loss of Appetite" name="loss_appetite">
                    </div>
                    <div>
                        <label for="" class="label1">Others:</label>
                        <input type="text" class="inline-input" placeholder="Describe Others" name="Other_Complaint">
                    </div>
                </div>
            </div>
            <div class="col">  
                <div data-group="past medical history" data-title="Past Medical History" >
                    <h5><b>Past Medical History</b></h5>
                    <table class="modified_table">
                        <tbody>
                            <tr>
                                <td>
                                    <label for="">Hypertension</label>
                                </td>
                                <td>
                                    <div class="checkbox-item" >
                                        <label for="" class="label1">Since:</label>
                                        <input type="text" class="inline-input" placeholder="" name="Hypertension"style="width:45%;">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Thyroid</label>
                                </td>
                                <td>
                                    <div class="checkbox-item" >
                                        <input type="text" class="inline-input" placeholder="" name="Thyroid" style="width:45%;">
                                        <label for="" class="label1">years ago</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Diabetics</label>
                                </td>
                                <td>
                                    <div class="checkbox-item" >
                                        <label for="" class="label1">Since</label>
                                        <input type="text" class="inline-input" placeholder=""  name="Diabetics" style="width:45%;">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Tuberculosis</label>
                                </td>
                                <td>
                                    <div class="checkbox-item">
                                        <input type="text" class="inline-input" placeholder="" name="Tuberculosis" style="width:45%;">
                                        <label for="" class="label1">years ago</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div style="display:flex;gap:180px;">
                                        <label for="" class="label1" style="font-weight:bold;">Type Of Disorder</label>
                                        <label for="" class="label1" style="font-weight:bold;">Duration</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Heart Disorder</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;" data-title="Disorders" >
                                        <input type="text" name="Heart_Disorder">
                                        <label for="">Since</label>
                                        <input type="text" name="Heart_Disorder_since">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Liver Disease</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;" data-title="Disorders" >
                                        <input type="text" name="Liver_Disease" >
                                        <label for="">Since</label>
                                        <input type="text" name="Liver_Disease_since">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Renal Problem</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;" data-title="Disorders">
                                        <input type="text" name="Renal_Problem" >
                                        <label for="">Since</label>
                                        <input type="text" name="Renal_Problem_since" >
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Gastro - Enterology</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;" data-title="Disorders">
                                        <input type="text" name="Gastro_Enterology" >
                                        <label for="">Since</label>
                                        <input type="text" name="Gastro_Enterology_since" >
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Respiratory</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;" data-title="Disorders">
                                        <input type="text" name="Respiratory" >
                                        <label for="">Since</label>
                                        <input type="text" name="Respiratory_since" >
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Neurology</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;" data-title="Disorders">
                                        <input type="text" name="Neurology" >
                                        <label for="">Since</label>
                                        <input type="text" name="Neurology_since" >
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Previous Surgery</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;" data-title="Surgical History">
                                        <input type="text" name="Previous_Surgery" >
                                        <label for="">Since</label>
                                        <input type="text" name="Previous_Surgery_since" >
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Previous Surgery 1</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;" data-title="Surgical History">
                                        <input type="text" name="Previous_Surgery_1" >
                                        <label for="">Since</label>
                                        <input type="text" name="Previous_Surgery_1_since" >
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Other</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;" data-title="Disorders">
                                        <input type="text" name="Other" >
                                        <label for="">Since</label>
                                        <input type="text" name="Other_since" >
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h5><b>Personal History</b></h5>
                <div class="mt-2" style="display: flex;flex-wrap:wrap;gap:5px;row-gap:20px;" data-title="Personal History" data-group="Personal History">
                    <div>
                        <label for="" class="label1">Alcohol:</label>
                        <input type="text" class="inline-input" placeholder="Describe Alcohol" name="Alcohol">
                    </div>
                    <div>
                        <label for="" class="label1">Smoking:</label>
                        <input type="text" class="inline-input" placeholder="Describe Smoking" name="Smoking">
                    </div>
                    <div>
                        <label for="" class="label1">Job:</label>
                        <input type="text" class="inline-input" placeholder="Describe Job" name="Job">
                    </div>
                    <div> 
                        <label for="" class="label1">Sports:</label>
                        <input type="text" class="inline-input" placeholder="Describe Sports" name="Sports">
                    </div>
                    <div>
                        <label for="" class="label1">Others:</label>
                        <input type="text" class="inline-input" placeholder="Describe Others" name="Others">
                    </div>
                </div>
                <div class="subsection mt-4" data-title="Allergies">
                    <div class="checkbox-item" >
                        <label for="" class=""><b>Allergies:</b></label>
                        <textarea class="ms-0" placeholder="" style="max-width: 50%;height:50px;" name="Allergies"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="col">
                <h5><b>Regional Examination</b></h5>
                <div data-title="Regional Examination">
                <div class="checkbox-item mt-3" >
                    <label for=""><b>Inspection:</b></label>
                    <textarea class="ms-0" placeholder="" style="max-width: 50%;height:50px;" name="Inspection"></textarea>
                </div>
                <div class="checkbox-item mt-3" >
                    <label for=""><b>Palpation:</b></label>
                    <textarea class="ms-2" placeholder="" style="max-width: 50%;height:50px;" name="Palpation"></textarea>
                </div>
                <div class="checkbox-item mt-3" >
                    <label for=""><b>Deformity:</b></label>
                    <textarea  placeholder="" style="max-width: 50%;height:50px;" name="Deformity"></textarea>
                </div>
                </div>
                <div class="form-group mt-3" data-group="Movements" data-title="Movements">
                    <label class="label1 mb-2"><b>Movements:</b></label>
                    <ul>
                        <li class="mb-2">
                        <div class="gap-2">Wrist Flexion:
                            <div class="d-flex mt-2 align-items-center gap-3 ms-1"> 
                                <label>Dorsiflexion:</label>
                                <input type="text" class="inline-input" name="Dorsiflexion" style="margin-left: 44px">
                            </div>
                            <div class="d-flex mt-2 align-items-center"> 
                                <label>Palmar Flexion:</label>
                                <input type="text" class="inline-input"  name="Palmar_Flexion" style="margin-left: 44px">
                            </div>
                        </div>
                        </li>
                        <li class="mb-2" >Finger Movements:
                        <input type="text" class="inline-input ms-2" placeholder="" name="finger_movements">
                        </li>
                        <li class="mb-2" >Thumb Movements:
                        <input type="text" class="inline-input" placeholder="" name="thumb_movements">
                        </li>
                    </ul>
                </div>
              
            </div>
            <div class="col">
                <h5><b>Special Test:</b></h5>
                <div class="form-group mt-3" data-title="Special Test">
                    <div class="ms-3 mb-2"><b>Carpal Tunnel Tests:</b></div>
                    <table style="width: 65%;" class="modified_table">
                        <tbody>
                            <tr data-group="tinel_sign" data-exclusive="true">
                                <td><li class="ms-1"> Tinel's Sign:</li></td>
                                <td>
                                    <div class="checkbox-item" >
                                        <input type="text" class="form-control form-control-sm test-input" name="tinel_sign">
                                    </div>
                                </td>
                            </tr>
                            <tr data-group="Phalen Test" data-exclusive="true">
                                <td><li class="ms-1">Phalen's Test:</li></td>
                                <td>
                                    <div class="checkbox-item" >
                                        <input type="text" class="form-control form-control-sm test-input" name="phalen_test">
                                    </div>
                                </td>
                            </tr>
                            <tr data-group="Durkan Compression Test" data-exclusive="true">
                                <td><li class="ms-1">Durkans Compression Test:</li></td>
                                <td>
                                    <div class="checkbox-item" >
                                        <input type="text" class="form-control form-control-sm test-input" name="Durkan_Compression_Test">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Finkelstein's Test:</b></td>
                                <td>
                                    <div class="checkbox-item">
                                        <input type="text" class="form-control form-control-sm test-input" name="Finkelstein_Test">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><b>DRUJ Instability Test:</b></td>
                                <td>
                                    <div class="checkbox-item" >
                                        <input type="text" class="form-control form-control-sm test-input" name="DRUJ_Instability_Test">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="checkbox-item mt-3 subsection" data-title="Diagnosis">
                    <label for=""><b>Diagnosis:</b></label>
                    <textarea class="ms-4" placeholder="" style="max-width: 50%;height:50px;" name="diagnosis"></textarea>
                </div>
            </div>
        </div>
        <div style="display: flex;justify-content:center;margin-top:20px;">
            <button type="submit" class="btn btn-success" style="font-size: 25px;width: 200px;">Save</button>
        </div>
        <input type="hidden" value="{{ optional($patDetails)->PATIENT_NAME }}" id="patient_name">
        <input type="hidden" value="{{ optional($patDetails)->REG_NO }}" id="regno">
        <input type="hidden" value="{{ optional($patDetails)->age }}" id="age">
        <input type="hidden" value="{{ optional($patDetails)->SEX }}" id="sex">
    </div>
</form>
<script src="{{ asset('Sweetalerts/sweetalert2.all.min.js') }}"></script>
@php
    $regnos = optional($patDetails)->REG_NO;
    $currentRecord = \App\Models\Opdpart::select('data','regno')
        ->where('type', 'hand_wrist')
        ->where('regno', $regnos)
        ->whereDate('created_at', \Carbon\Carbon::today())
        ->latest()
        ->first();
@endphp
<script>
    if (!Object.entries) {
        Object.entries = function (obj) {
            return Object.keys(obj).map(function (key) {
                return [key, obj[key]];
            });
        };
    }
    const allergyData = @json($allergy_data);
    let formDataFromDB = @json($currentRecord->data ?? []);
        document.addEventListener('DOMContentLoaded', () => {
            populateForm(document.getElementById('handandwrist'), formDataFromDB);
        });
        function populateForm(form, data) {
            Object.entries(data).forEach(([key, field]) => {
                if (field?.values) {
                    // Fill checkboxes or multi-selects
                    field.values.forEach(val => {
                        let checkbox = form.querySelector(`[name="${key}"][value="${val}"]`);
                        if (checkbox) {
                            checkbox.checked = true;
                            let temp = checkbox.dataset.target;
                            let targetemp = form.querySelector(temp);
                            if (targetemp) {
                                targetemp.disabled = false;
                            }
                        }
                    });
                    // If it's a single value and not a checkbox
                    if (field.values.length === 1) {
                        let input = form.querySelector(`[name="${key}"]`);
                        if (input && input.type !== 'checkbox') {
                            input.value = field.values[0];
                        }
                    }
                } else {
                    // Simple single-value fields
                    let input = form.querySelector(`[name="${key}"]`);
                    if (input) input.value = field;
                }
            });
        }
    document.querySelectorAll('[data-group]').forEach(group => {
        const checkboxes = group.querySelectorAll('input[type="checkbox"]');
        const isExclusive = group.dataset?.exclusive === "true";
            checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const target = checkbox.dataset.target;
                const relatedInput = target ? document.querySelector(target) : null;
                // Exclusive group: uncheck others
                if (isExclusive && checkbox.checked) {
                    checkboxes.forEach(cb => {
                        if (cb !== checkbox) {
                            cb.checked = false;
                            // Disable related input if any
                            const cbTarget = cb.dataset.target;
                            if (cbTarget) {
                                const cbInput = document.querySelector(cbTarget);
                                if (cbInput){
                                    cbInput.disabled = true;
                                    cbInput.value = '';
                                    cbInput.classList.remove("error-field");
                                }
                            }
                        }
                    });
                }
                // For any checkbox, handle its own related input
                if (relatedInput) {
                        if (checkbox.checked) {
                            relatedInput.disabled = false;
                        } else {
                            relatedInput.disabled = true;
                            relatedInput.value = '';
                            relatedInput.classList.remove("error-field");
                        }
                    }
            });
        });
    });

    document.getElementById('handandwrist').addEventListener('submit', function(e) {
    e.preventDefault();
    const json = getFormDataAsJSON(this); 
    if (!json) return;

    $.ajax({
        url: '{{ route('save.handwrist.details') }}',  
        type: 'POST',
        data: JSON.stringify(json),                      
        contentType: 'application/json',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: response.message || 'Form submitted successfully!',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.reload();  
            });
        },
        error: function(xhr) {
            let message = xhr.responseJSON?.message || 'Something went wrong!';
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: message
            });
        }
    });
});
function getFormDataAsJSON(formElement) {
    const formData = new FormData(formElement);
    const json = {};
    let hasValue = false;
    for (const [key, value] of formData.entries()) {
        if (!value) continue;
        const inputEl = formElement.querySelector(`[name="${key}"][value="${value}"]`) || formElement.querySelector(
            `[name="${key}"]`);
        if (inputEl?.type === "checkbox" && inputEl.dataset.target) {
            const relatedInput = document.querySelector(inputEl.dataset.target);
            if (relatedInput && !relatedInput.value.trim()) {
                let errorname = relatedInput.getAttribute('name').replace(/_/g, " ");
                Swal.fire({
                    icon: 'error',
                    title: 'Required Field Missing',
                    text: `${errorname || 'This field'} is required.`,
                }).then(() => {
                    // Scroll to input
                    relatedInput.scrollIntoView({
                        behavior: "smooth",
                        block: "center"
                    });
                    // Highlight with red border
                    relatedInput.classList.add("error-field");
                    relatedInput.addEventListener("input", function handler() {
                        relatedInput.classList.remove("error-field");
                        relatedInput.removeEventListener("input", handler);
                    });
                });
                return null;
            }
        }
        let title = null;
        const groupDiv = inputEl?.closest('[data-title]');
        if (groupDiv) {
            title = groupDiv.getAttribute('data-title');
        }
        hasValue = true;
        // Store values with title if available
        if (title) {
            if (!json[key]) {
                json[key] = {
                    title: title,
                    values: []
                };
            }
            json[key].values.push(value);
        } else {
            if (json[key] === undefined) {
                json[key] = value;
            } else {
                json[key] = [].concat(json[key], value);
            }
        }
    }
    var patientName = document.getElementById('patient_name') ? document.getElementById('patient_name').value.trim() : '';
    var regno = document.getElementById('regno') ? document.getElementById('regno').value.trim() : '';
    var age = document.getElementById('age') ? document.getElementById('age').value.trim() : '';
    var sex = document.getElementById('sex') ? document.getElementById('sex').value.trim() : '';
    if (!hasValue) {
        Swal.fire({
            icon: 'warning',
            title: 'No fields selected!',
            text: 'Please select at least one field and fill in related values if required.',
        });
        return null;
    }
    json.name = patientName;
    json.regno = regno;
    json.age = age;
    json.sex = sex;
    json.allergies = allergyData;
    json.consultant = "Dr.sivamurugan";
    json.type = "hand_wrist";
    return json;
}
</script>
  