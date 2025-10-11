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
        /* border-bottom: 1px solid #e2e8f0; */
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
    }
</style>

<form id="shoulder_elbow">
    <input type="hidden" value="{{ optional($patDetails)->PATIENT_NAME }}" id="patient_name">
    <input type="hidden" value="{{ optional($patDetails)->REG_NO }}" id="regno">
    <input type="hidden" value="{{ optional($patDetails)->age }}" id="age">
    <input type="hidden" value="{{ optional($patDetails)->SEX }}" id="sex">
    <div>
        <div class="header">
            <h1>SHOULDER & ELBOW</h1>
        </div>
    </div>

    <div class="section">
        <div class="row">
            <div class="col">
                <h5>Chief Complaint</h5>
                <div class="checkbox-group" data-title="Chief Complaint">
                    <div class="checkbox-item">
                        <input type="checkbox" name="Chief_Complaint" value="Pain">
                        <label for="">Pain</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Chief_Complaint" value="Swelling">
                        <label for="">Swelling</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Chief_Complaint" value="Limitation_of_Movements">
                        <label for="">Limitation of Movements </label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Chief_Complaint" value="Instability">
                        <label for="">Instability</label>
                    </div>
                </div>
                <div class="form-group" data-title="Chief Complaint" data-group="Side" data-exclusive="true">
                    <h5>Side:</h5> 
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Side" value="Right">
                            <label for="">Right</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Side" value="Left">
                            <label for="">Left</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Side" value="Both">
                            <label for="">Both</label>
                        </div>
                    </div>
                </div>
                <div data-title="Chief Complaint">
                    <h5>Symptoms Duration:</h5>
                    <div class="form-group">
                        <textarea name="Symptoms_Duration" placeholder="Symptoms Duration"></textarea>
                    </div>
                </div>
                <div data-title="Chief Complaint">
                    <h5>Onset:</h5>
                    <div class="checkbox-group" data-group="Onset" data-exclusive="true">
                       <div class="checkbox-item">
                            <input type="checkbox" name="Onset" value="Insidious">
                            <label for="">Insidious</label>
                        </div>
                       <div class="checkbox-item">
                            <input type="checkbox" name="Onset" value="Sudden">
                            <label for="">Sudden</label>
                        </div>
                    </div>
                </div>
                <div data-title="Chief Complaint">
                    <h5>Radiation:</h5>
                    <div class="checkbox-group" data-group="Radiation" data-exclusive="true">
                       <div class="checkbox-item">
                            <input type="checkbox" name="Radiation" value="Base_of_shoulder_axilla">
                            <label for="">Base of shoulder axilla</label>
                        </div>
                       <div class="checkbox-item">
                            <input type="checkbox" name="Radiation" value="Outer_aspect_of_upper_arm">
                            <label for="">Outer aspect of upper arm</label>
                        </div>
                    </div>
                </div>
                <div data-title="Chief Complaint">
                    <h5>Character:</h5>
                    <div class="checkbox-group" data-group="Character" data-exclusive="true">
                       <div class="checkbox-item">
                            <input type="checkbox" name="Character" value="Throbbing">
                            <label for="">Throbbing</label>
                        </div>
                       <div class="checkbox-item">
                            <input type="checkbox" name="Character" value="Pricking">
                            <label for="">Pricking</label>
                        </div>
                    </div>
                </div>
                <div data-title="Chief Complaint" data-group="Aggravating_factors">
                    <h5>Aggravating factors:</h5>
                    <div class="checkbox-group">
                       <div class="checkbox-item">
                            <input type="checkbox" name="Aggravating_factors" value="Exercise">
                            <label for="">Exercise</label>
                        </div>
                       <div class="checkbox-item">
                            <input type="checkbox" name="Aggravating_factors" value="Strenuous_activity">
                            <label for="">Strenuous activity</label>
                        </div>
                       <div class="checkbox-item">
                            <input type="checkbox" name="Aggravating_factors" value="Overhead_activities">
                            <label for="">Overhead activities</label>
                        </div>
                       <div class="checkbox-item">
                            <input type="checkbox" name="Aggravating_factors" value="Walking">
                            <label for="">Walking</label>
                        </div>
                       <div class="checkbox-item">
                            <input type="checkbox" name="Aggravating_factors" value="Running">
                            <label for="">Running</label>
                        </div>
                    </div>
                    <div class="checkbox-group mt-3">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Aggravating_factors" value="Others" data-target="#input4">
                            <label for="">Others</label>
                        </div>
                        <input type="text" placeholder="Specify others" id="input4" name="Aggravating_factors_others" disabled>
                    </div>
                        
                </div>
                <div data-title="Chief Complaint">
                    <h5>Relieving factors:</h5>
                    <div class="checkbox-group" data-group="Relieving_factors">
                       <div class="checkbox-item">
                            <input type="checkbox" name="Relieving_factors" value="Rest">
                            <label for="">Rest</label>
                        </div>
                       <div class="checkbox-item">
                            <input type="checkbox" name="Relieving_factors" value="Medication">
                            <label for="">Medication</label>
                        </div>
                       <div class="checkbox-item">
                            <input type="checkbox" name="Relieving_factors" value="Lying_down">
                            <label for="">Lying down</label>
                        </div>
                       <div class="checkbox-item">
                            <input type="checkbox" name="Relieving_factors" value="Pricking" data-target="#input5">
                            <label for="">Others</label>
                        </div>
                        <input type="text" placeholder="Specify others" name="Relieving_factors_Others" id="input5" disabled>
                        
                    </div>
                </div>

                <div class="form-group" data-title="Relation to trauma" data-group="Relation_to_trauma" data-exclusive="true">
                    <h5>Relation to trauma:</h5>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Relation_to_trauma" value="No">
                            <label for="">No</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Relation_to_trauma" value="checkbox" data-target="#input6">
                            <label for="">Yes</label>
                        </div>
                        <input type="text" id="input6" placeholder="Specify Relation to trauma" name="Relation_to_trauma_Description" disabled>
                    </div>
                </div>
                <div data-title="Relation to trauma">
                    <h5>Any H/O fever:</h5>
                    <div class="checkbox-group" data-group="Any_H/O_fever" data-exclusive="true">
                       <div class="checkbox-item">
                            <input type="checkbox" name="Any_H/O_fever" value="Yes">
                            <label for="">Yes</label>
                        </div>
                       <div class="checkbox-item">
                            <input type="checkbox" name="Any_H/O_fever" value="No">
                            <label for="">No</label>
                        </div>
                    </div>
                </div>
                <div data-title="Instability">
                    <h5>Instability:</h5>
                    <div class="checkbox-group" data-group="Instability" data-exclusive="true">
                       <div class="checkbox-item">
                            <input type="checkbox" name="Instability" value="Voluntary">
                            <label for="">Voluntary</label>
                        </div>
                       <div class="checkbox-item" style="margin-left:45px">
                            <input type="checkbox" name="Instability" value="Disvoluntary">
                            <label for="">Disvoluntary</label>
                        </div>
                    </div>
                    <div style="display: flex; gap:10px;align-items:center">
                        <label for="">Onset & Duration:</label>
                        <input type="text" style="margin-left: 44px;margin-bottom:5px;" name="Onset_&_Duration">
                    </div>
                    <div style="display: flex; gap:10px;align-items:center">
                        <label for="">Associated Movements:</label>
                        <input type="text" style="margin-bottom:5px;" name="Associated_Movements">
                    </div>
                    <div style="display: flex; gap:10px;align-items:center">
                        <label for="">How Frequent:</label>
                        <input type="text" style="margin-left: 66px;margin-bottom:5px;" name="How_Frequent">
                    </div>
                    <div style="display: flex; gap:10px;align-items:center">
                        <label for="">No of Dislocation:</label>
                        <input type="text" style="margin-left:44px;" name="No_of_Dislocation">
                    </div>
                </div>

                <div data-title="Instability">
                    <h5>Pain Severity:</h5>
                    <div class="checkbox-group" data-group="Pain_Severity" data-exclusive="true">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Pain_Severity" value="1">
                            <label for="">1</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Pain_Severity" value="2">
                            <label for="">2</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Pain_Severity" value="3">
                            <label for="">3</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Pain_Severity" value="4">
                            <label for="">4</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Pain_Severity" value="5">
                            <label for="">5</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Pain_Severity" value="6">
                            <label for="">6</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Pain_Severity" value="7">
                            <label for="">7</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Pain_Severity" value="8">
                            <label for="">8</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Pain_Severity" value="9">
                            <label for="">9</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Pain_Severity" value="10">
                            <label for="">10</label>
                        </div>
                    </div>
                </div>
                <div class="form-group" data-title="Prior Treatment Attempted">
                    <h5>Prior Treatment Attempted:</h5>
                    <div class="checkbox-group" data-group="Prior_Treatment_Attempted" data-exclusive="true">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Prior_Treatment_Attempted" value="No">
                            <label for="">No</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Prior_Treatment_Attempted" value="Yes" data-target="#input7">
                            <label for="">Yes</label>
                        </div>
                        <input type="text" placeholder="Prior Treatment Attempted" id="input7" disabled name="Prior_Treatments_Attempted">
                    </div>
                </div>
                <div class="form-group" data-title="Prior Treatment Attempted">
                    <h5>Shoulder dislocation:</h5>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <label for="">Any:</label>
                        </div>
                        <input type="text" placeholder="Specify Any" name="Shoulder_dislocation">
                    </div>
                </div>
                <div class="form-group" data-title="Prior Treatment Attempted" data-group="Pain_is_worst_in" data-exclusive="true">
                    <h5>Pain is worst in:</h5>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Pain_is_worst_in" value="Morning">
                            <label for="">Morning</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Pain_is_worst_in" value="Night">
                            <label for="">Night</label>
                        </div>
                    </div>
                </div>
                <div data-title="Prior Treatment Attempted">
                    <h5>Activity of daily living:</h5>
                    <div class="form-group">
                        <textarea name="Activity_of_daily_living" placeholder="Activity of daily living"></textarea>
                    </div>
                </div>
            </div>
            <div class="col">
                <div data-title="Prior Treatment Attempted">
                    <h5>Patient had Similiar complaint in the Past:</h5>
                    <div class="form-group">
                        <textarea  name="Patient_had_Similiar_complaint_in_the_Past" placeholder="Specify complaint"></textarea>
                    </div>
                </div>
                <div data-title="Other Complaints">
                    <h5>Other Complaints:</h5>
                    <div class="checkbox-group" data-group="Fatigue" data-exclusive="true">
                        <div class="checkbox-item">
                            <label>Fatigue:</label>
                            <input type="checkbox" name="fatigue" value="No">
                            <label for="">No</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="fatigue" value="Yes" data-target="#input8">
                            <label for="">Yes</label>
                        </div>
                        <input type="text" placeholder="Specify Other Complaints" name="Fatigue" disabled id="input8">
                    </div>
                </div>
                <div class="mt-2" style="display: flex;flex-wrap:wrap;gap:5px;row-gap:20px;" data-title="Other Complaints">
                    <div>
                        <label for="" class="label1">Bladder:</label>
                        <input type="text" class="inline-input" placeholder="Describe Bladder" name="Bladder">
                    </div>
                    <div>
                        <label for="" class="label1">Bowel:</label>
                        <input type="text" class="inline-input" placeholder="Describe Bowel" name="Bowel">
                    </div>
                    <div>
                        <label for="" class="label1">Fever:</label>
                        <input type="text" class="inline-input" placeholder="Describe Fever" name="Fever">
                    </div>
                    <div>
                        <label for="" class="label1">Weight loss:</label>
                        <input type="text" class="inline-input" placeholder="Describe Weight loss" name="Weight_loss">
                    </div>
                    <div>
                        <label for="" class="label1">Weight gain:</label>
                        <input type="text" class="inline-input" placeholder="Describe Weight gain" name="Weight_gain">
                    </div>
                    <div>
                        <label for="" class="label1">Loss of Appetite:</label>
                        <input type="text" class="inline-input" placeholder="Describe Loss of Appetite" name="Loss_of_Appetite">
                    </div>
                    <div>
                        <label for="" class="label1">Others:</label>
                        <input type="text" class="inline-input" placeholder="Describe Others" name="Others">
                    </div>
                    
                </div>
                <h5>Personal History</h5>
                <div class="mt-2" style="display: flex;flex-wrap:wrap;gap:5px;row-gap:20px;" data-title="Personal History">
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
                        <input type="text" class="inline-input" placeholder="Describe Others" name="Personal_History_Others">
                    </div>
                </div>
                <div>
                    <h5>Past Medical History</h5>
                    <table style="box-shadow: none;">
                        <tbody data-title="Past Medical History">   
                            <tr>
                                <td>
                                    <label for="">Hypertension:</label>
                                </td>
                                <td>
                                    <div class="checkbox-item">
                                        <label for="" class="label1">Since:</label>
                                        <input type="text" class="inline-input" name="Hypertension" placeholder="Since" style="width:45%;">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Thyroid:</label>
                                </td>
                                <td>
                                    <div class="checkbox-item">
                                        <input type="text" class="inline-input" name="Thyroid" placeholder="Since" style="width:45%;">
                                        <label for="" class="label1">years ago</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Diabetics:</label>
                                </td>
                                <td>
                                    <div class="checkbox-item">
                                        <label for="" class="label1">Since:</label>
                                        <input type="text" class="inline-input" name="Diabetics" placeholder="Since" style="width:45%;">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Tuberculosis:</label>
                                </td>
                                <td>
                                    <div class="checkbox-item">
                                        <input type="text" class="inline-input" name="Tuberculosis" placeholder="Since" style="width:45%;">
                                        <label for="" class="label1">years ago</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="" style="display:flex;gap:180px;">
                                        <label for="" class="label1" style="font-weight:bold;">Type Of Disorder</label>
                                        <label for="" class="label1" style="font-weight:bold;">Duration</label>
                                    </div>
                                </td>
                            </tr>
                            <tr data-title="Disorders">
                                <td>
                                    <label for="">Heart Disorder:</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;">
                                        <input type="text" name="Heart_Disorder">
                                        <label for="">Since:</label>
                                        <input type="text" name="Heart_Disorder(Since)">
                                    </div>
                                </td>
                            </tr>
                            <tr data-title="Disorders">
                                <td>
                                    <label for="">Liver Disease:</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;">
                                        <input type="text" name="Liver_Disease">
                                        <label for="">Since:</label>
                                        <input type="text" name="Liver_Disease(Since)">
                                    </div>
                                </td>
                            </tr>
                            <tr data-title="Disorders">
                                <td>
                                    <label for="">Renal Problem:</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;">
                                        <input type="text" name="Renal_Problem">
                                        <label for="">Since:</label>
                                        <input type="text" name="Renal_Problem(Since)">
                                    </div>
                                </td>
                            </tr>
                            <tr data-title="Disorders">
                                <td>
                                    <label for="">Gastro - Enterology:</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;">
                                        <input type="text" name="Gastro_-_Enterology">
                                        <label for="">Since:</label>
                                        <input type="text" name="Gastro_-_Enterology(Since)">
                                    </div>
                                </td>
                            </tr>
                            <tr data-title="Disorders">
                                <td>
                                    <label for="">Respiratory:</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;">
                                        <input type="text" name="Respiratory">
                                        <label for="">Since:</label>
                                        <input type="text" name="Respiratory(Since)">
                                    </div>
                                </td>
                            </tr>
                            <tr data-title="Disorders">
                                <td>
                                    <label for="">Neurology:</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;">
                                        <input type="text" name="Neurology">
                                        <label for="">Since:</label>
                                        <input type="text" name="Neurology(Since)">
                                    </div>
                                </td>
                            </tr>
                            <tr data-title="Disorders">
                                <td>
                                    <label for="">Previous Surgery:</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;">
                                        <input type="text" name="Previous_Surgery">
                                        <label for="">Since:</label>
                                        <input type="text" name="Previous_Surgery(Since)">
                                    </div>
                                </td>
                            </tr>
                            <tr data-title="Disorders">
                                <td>
                                    <label for="">Previous Surgery 1:</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;">
                                        <input type="text" name="Previous_Surgery_1">
                                        <label for="">Since:</label>
                                        <input type="text" name="Previous_Surgery_1(Since)">
                                    </div>
                                </td>
                            </tr>
                            <tr data-title="Disorders">
                                <td>
                                    <label for="">Others:</label>
                                </td>
                                <td>
                                    <div style="display: flex; align-items:center;gap:10px;">
                                        <input type="text" name="Other_Disorders">
                                        <label for="">Since:</label>
                                        <input type="text" name="Other_Disorders(Since)">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="showregion">
        <div class="row">
            <div class="col">
                <div style="display: flex;align-items: center;justify-content: center;gap: 10px;">
                    <label for="" style="font-weight: 700;font-size:20px;">Regional Examination - </label>
                    <input type="checkbox" onchange="toggleregion(this, 'should')" id="shouldcheck">
                    <label for="" style="font-weight: 700;font-size:20px;">Shoulder</label>
                    <input type="checkbox" onchange="toggleregion(this, 'elb')" id="elbcheck">
                    <label for="" style="font-weight: 700;font-size:20px;">Elbow</label>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="should" style="display:none;">
       <div class="row">
        <div class="col">
            <div data-title="Inspection-shoulder">

                <div id="Inspectionshould">
                    <h5>Inspection:</h5>
                    <div class="form-group">
                        <textarea name="Inspection" placeholder="Specify Inspection"></textarea>
                    </div>
                </div>
                <div>
                    <h6 style="margin-top: 10px;">Skin:</h6>
                    <div class="form-group">
                        <textarea name="Skin" placeholder="Specify Skin"></textarea>
                    </div>
                </div>
                <div>
                    <h6 style="margin-top: 10px;">Swelling:</h6>
                    <div class="checkbox-group" data-group="Swelling" data-exclusive="true">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Swelling" value="No">
                            <label for="">No</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Swelling" value="Yes">
                            <label for="">Yes</label>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 style="margin-top: 10px;">Asymmetry:</h6>
                    <div class="checkbox-group" data-group="Asymmetry" data-exclusive="true">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Asymmetry" value="No">
                            <label for="">No</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Asymmetry" value="Yes">
                            <label for="">Yes</label>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 style="margin-top: 10px;">Specific Finding:</h6>
                    <div class="form-group">
                        <textarea name="Specific_Finding" placeholder="Specify Specific Finding"></textarea>
                    </div>
                </div>
            </div>
            <h5>Palpation:</h5>
            <div style="display: flex;gap:10px; flex-wrap: wrap;" data-title="Palpation-shoulder">
                <div data-group="Anteriorly">
                    <div class="checkbox-item">
                        <input type="checkbox" name="anteriorly" value="checkbox" data-target="#input1">
                        <label for="">Anteriorly</label>
                    </div>
                    <textarea  placeholder="Describe Anteriorly" disabled id="input1" name="Anteriorly"></textarea>
                </div>
                <div data-group="Lateral_Aspect">
                    <div class="checkbox-item">
                        <input type="checkbox"  data-target="#input2" name="LateralAspect" value="checkbox">
                        <label for="">Lateral Aspect</label>
                    </div>
                    <textarea  placeholder="Describe Lateral Aspect" disabled id="input2" name="Lateral_Aspect"></textarea>
                </div>
                <div data-group="Posteriorly">
                    <div class="checkbox-item">
                        <input type="checkbox"  data-target="#input3" name="posteriorly" value="checkbox">
                        <label for="">Posteriorly</label>
                    </div>
                    <textarea  placeholder="Describe Bending" disabled id="input3" name="Posteriorly"></textarea>
                </div>
            </div>
            <h5>Movements:</h5>
            <table style="box-shadow:none;" data-title="Movements-shoulder">
                <thead>
                    <tr>
                        <th></th>
                        <th>Active</th>
                        <th>Passive</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Flexion:</td>
                        <td><input type="text" name="Flexion_active"></td>
                        <td><input type="text" name="Flexion_passive"></td>
                    </tr>
                    <tr>
                        <td>Extension:</td>
                        <td><input type="text" name="Extension_active"></td>
                        <td><input type="text" name="Extension_passive"></td>
                    </tr>
                    <tr>
                        <td>Internal Rotation(IR):</td>
                        <td><input type="text" name="Internal_Rotation(IR)_active"></td>
                        <td><input type="text" name="Internal_Rotation(IR)_passive"></td>
                    </tr>
                    <tr>
                        <td>External Rotation (ER):</td>
                        <td><input type="text" name="External_Rotation(ER)_active"></td>
                        <td><input type="text" name="External_Rotation(ER)_passive"></td>
                    </tr>
                    <tr>
                        <td>Adduction:</td>
                        <td><input type="text" name="Adduction_active"></td>
                        <td><input type="text" name="Adduction_passive"></td>
                    </tr>
                    <tr>
                        <td>Abduction:</td>  
                        <td><input type="text" name="Abduction_active"></td>
                        <td><input type="text" name="Abduction_passive"></td>
                    </tr>
                </tbody>
            </table>
            <h5>Other Findings:</h5>
            <div>
                <div class="form-group" data-title="Movements-shoulder">
                    <textarea name="Other_Findings" placeholder="Specify Other Findings"></textarea>
                </div>
            </div>
            
        </div>
        <div class="col">
            <h5>Special Test:</h5>
            <table style="width:85%;box-shadow:none;">
                <tbody>
                    <tr>
                        <td colspan="2" style="
                            text-align:center;
                            font-weight:bold;
                            background: linear-gradient(135deg, #126328 0%, rgb(103, 156, 37) 100%);
                            color: white;
                            font-weight: 500;">Rotator Cuff Pathology :</td>
                    </tr>
                    <tr data-title="Special Test Rotator Cuff Pathology-shoulder">
                        <td>Neer's Impingement Sign :</td>
                        <td><input type="text" name="Neer's_Impingement_Sign"></td>
                    </tr>
                    <tr data-title="Special Test Rotator Cuff Pathology-shoulder">
                        <td>Neer's Impingement Test :</td>
                        <td><input type="text" name="Neer's_Impingement_Test"></td>
                    </tr>
                    <tr data-title="Special Test Rotator Cuff Pathology-shoulder">
                        <td>Hawkins - Kennedy Test :</td>
                        <td><input type="text" name="Hawkins_-_Kennedy_Test"></td>
                    </tr>
                    <tr data-title="Special Test Rotator Cuff Pathology-shoulder">
                        <td>Drop Arm Test :</td>
                        <td><input type="text" name="Drop_Arm_Test"></td>
                    </tr>
                    <tr data-title="Special Test Rotator Cuff Pathology-shoulder">
                        <td>Herber's Test :</td>
                        <td><input type="text" name="Herber's_Test"></td>
                    </tr>
                    <tr data-title="Special Test Rotator Cuff Pathology-shoulder">
                        <td>Jobe's Test :</td>
                        <td><input type="text" name="Jobe's_Test"></td>
                    </tr>
                    <tr data-title="Special Test Rotator Cuff Pathology-shoulder">
                        <td>Test for Infraspinatus & Teres Minor :</td>
                        <td><input type="text" name="Test_for_Infraspinatus_&_Teres_Minor"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="
                            text-align:center;
                            font-weight:bold;
                            background: linear-gradient(135deg, #126328 0%, rgb(103, 156, 37) 100%);
                            color: white;
                            font-weight: 500;
                            border-radius: 10px 10px 0 0;">Test for Shoulder Instability :</td>
                    </tr>
                    <tr data-title="Special test for Shoulder Instability">
                        <td>Anterior Instability :</td>
                        <td><input type="text" name="Anterior_Instability"></td>
                    </tr>
                    <tr data-title="Special test for Shoulder Instability">
                        <td>Apprehension Test :</td>
                        <td><input type="text" name="Apprehension_Test"></td>
                    </tr>
                    <tr data-title="Special test for Shoulder Instability">
                        <td>Relocation Test (Jobe's) :</td>
                        <td><input type="text" name="Relocation_Test_(Jobe's)"></td>
                    </tr>
                    <tr data-title="Special test for Shoulder Instability">
                        <td>Sulcus Sign :</td>
                        <td><input type="text" name="Sulcus_Sign"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="
                            text-align:center;
                            font-weight:bold;
                            background: linear-gradient(135deg, #126328 0%, rgb(103, 156, 37) 100%);
                            color: white;
                            font-weight: 500;
                            border-radius: 10px 10px 0 0;">Other System Examination :</td>
                    </tr>
                    <tr data-title="Other System Examination-shoulder">
                        <td>Central Nervous System(CNS) :</td>
                        <td><input type="text" name="Central_Nervous_System(CNS)"></td>
                    </tr>
                    <tr data-title="Other System Examination-shoulder">
                        <td>Cardiovascular System(CVS) :</td>
                        <td><input type="text" name="Cardiovascular_System(CVS)"></td>
                    </tr>
                    <tr data-title="Other System Examination-shoulder">
                        <td>Respiratory System(RS) :</td>
                        <td><input type="text" name="Respiratory_System(RS)"></td>
                    </tr>
                    <tr data-title="Other System Examination-shoulder">
                        <td>Spine : Neurology :</td>
                        <td><input type="text" name="Spine-Neurology"></td>
                    </tr>
                </tbody>
            </table>
            <div data-title="Other System Examination-shoulder">
                <h5>Proposed Diagnosis :</h5>
                <textarea  placeholder="Describe Proposed Diagnosis" style="max-width: 65%;height:65px;" name="Proposed_Diagnosis"></textarea>
            </div>

        </div>
       </div>
       <div style="display: flex;justify-content:center;margin-top:20px;">
            <button type="submit" class="btn btn-success" style="font-size: 25px;width: 200px;">Save</button>
        </div>
    </div>
    <div class="section" id="elb" style="display:none;">
        <div class="row">
            <div class="col">
                <h5>Inspection :</h5>
                <table style="width: 80%;box-shadow:none;" id="Inspectionelb" data-title="Inspection Attitude-elbow">
                    <thead>
                        <tr>
                            <td colspan="2" style="
                            text-align:center;
                            font-weight:bold;
                            background: linear-gradient(135deg, #126328 0%, rgb(103, 156, 37) 100%);
                            color: white;
                            font-weight: 500;">Attitude :</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>From Front :</td>
                            <td><input type="text" name="From_Front"></td>
                        </tr>
                        <tr>
                            <td>From Lateral Aspect :</td>
                            <td><input type="text" name="From_Lateral_Aspect"></td>
                        </tr>
                        <tr>
                            <td>From Medical Aspect :</td>
                            <td><input type="text" name="From_Medical_Aspect"></td>
                        </tr>
                        <tr>
                            <td>Posterior Aspect :</td>
                            <td><input type="text" name="Posterior_Aspect"></td>
                        </tr>
                        <tr>
                            <td>Skin :</td>
                            <td><input type="text" name="skin"></td>
                        </tr>
                        <tr>
                            <td>Swelling :</td>
                            <td>
                                <div class="checkbox-group" data-group="swelling" data-exclusive="true">
                                    <div class="checkbox-item">
                                            <input type="checkbox" name="swelling" value="Yes">
                                            <label for="">Yes</label>
                                        </div>
                                    <div class="checkbox-item">
                                            <input type="checkbox" name="swelling" value="No">
                                        <label for="">No</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Asymmetry :</td>
                            <td><input type="text" name="asymmetry"></td>
                        </tr>
                    </tbody>
                </table>
                <h5>Palpation :</h5>
                <div class="form-group" data-title="Palpation-elbow">
                    <textarea placeholder="Symptoms Palpation" name="Palpation"></textarea>
                </div>
                <div data-title="Palpation-elbow">
                    <h6 style="margin-top: 10px;">Three Point Relation Ship:</h6>
                    <div class="checkbox-group" data-group="Three_Point_Relation_Ship" data-exclusive="true">
                       <div class="checkbox-item">
                            <input type="checkbox" name="Three_Point_Relation_Ship" value="Normal">
                            <label for="">Normal</label>
                        </div>
                       <div class="checkbox-item">
                            <input type="checkbox" name="Three_Point_Relation_Ship" value="Altered">
                            <label for="">Altered</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <h5>Movements :</h5>
                <table style="width:75%;box-shadow:none;" data-title="Movements-elbow">
                    <tbody>
                        <tr>
                            <td>Flexion :</td>
                            <td><input type="text" name="Flexion"></td>
                        </tr>
                        <tr>
                            <td>Extension :</td>
                            <td><input type="text" name="Extension"></td>
                        </tr>
                        <tr>
                            <td>Hyper Extension :</td>
                            <td><input type="text" name="Hyper Extension"></td>
                        </tr>
                        <tr>
                            <td>Supination :</td>
                            <td><input type="text" name="Supination"></td>
                        </tr>
                        <tr>
                            <td>Pronation :</td>
                            <td><input type="text" name="Pronation"></td>
                        </tr>
                    </tbody>
                </table>
                <h5>Special Test :</h5>
                <table style="box-shadow:none;width:75%;" data-title="Special Test-elbow">
                    <tbody>
                        <tr>
                            <td style="width:41%;">Varus Stress Test :</td>
                            <td><input type="text" name="Varus_Stress_Test"></td>
                        </tr>
                        <tr>
                            <td style="width:41%;">Valgus Stress Test :</td>
                            <td><input type="text" name="Valgus_Stress_Test"></td>
                        </tr>
                        <tr>
                            <td style="width:41%;">Pivot Shift Test :</td>
                            <td><input type="text" name="Pivot_Shift_Test"></td>
                        </tr>
                        <tr>
                            <td style="width:41%;">Test for Lateral Epicondylitis :</td>
                            <td><input type="text" name="Test_for_Lateral_Epicondylitis"></td>
                        </tr>
                    </tbody>
                </table>
                <div data-title="Other System Examination-elbow">
                    <h5>Other System Examination :</h5>
                    <textarea  placeholder="Describe Other System Examination" style="max-width: 65%;height:65px;" name="Other_System_Examination"></textarea>
                </div>
                <div data-title="Other System Examination-elbow">
                    <h5>Diagnosis :</h5>
                    <textarea  placeholder="Describe Diagnosis" style="max-width: 65%;height:65px;" name="Diagnosis"></textarea>
                </div>
            </div>
        </div>
        <div style="display: flex;justify-content:center;margin-top:20px;">
            <button type="submit" class="btn btn-success" style="font-size: 25px;width: 200px;">Save</button>
        </div>
    </div>
</form>
<script src="{{ asset('Sweetalerts/sweetalert2.all.min.js') }}"></script>
@php
$regnos= optional($patDetails)->REG_NO;
    $currentRecord = \App\Models\Opdpart::select('data','regno')
    ->where('type', 'shoulder_elbow')
    ->where('regno',$regnos)
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
    //polyfill for css escape (for Safari < 10.1)
    if (!CSS.escape) {
        CSS.escape = function(value) {
            return value.replace(/[^a-zA-Z0-9_-]/g, function(char) {
                return '\\' + char;
            });
        };
    }
    const allergyData = @json($allergy_data);
    let formDataFromDB = @json($currentRecord->data ?? []);
    
    function toggleregion(checkbox, regionId, suppressScroll = false) {
        let section = document.getElementById(regionId);

        if (checkbox.checked && regionId === 'should') {
            section.style.display = "block";
            document.getElementById('elb').style.display = "none";
            document.getElementById('elbcheck').checked = false;

            if (!suppressScroll) {
                document.getElementById('Inspectionshould').scrollIntoView({
                    behavior: "smooth",
                    block: "center"
                });
            }

        } else if (checkbox.checked && regionId === 'elb') {
            section.style.display = "block";
            document.getElementById('should').style.display = "none";
            document.getElementById('shouldcheck').checked = false;

            if (!suppressScroll) {
                document.getElementById('Inspectionelb').scrollIntoView({
                    behavior: "smooth",
                    block: "center"
                });
            }

        } else {
            section.style.display = "none";
        }
    }
    document.addEventListener('DOMContentLoaded', () => {
        populateForm(document.getElementById('shoulder_elbow'), formDataFromDB);
    });

    function populateForm(form, data) {
        Object.entries(data).forEach(function ([key, field]) {
            if (field && field.values) {
                // Fill checkboxes or multi-selects
                field.values.forEach(function (val) {
                    var checkbox = form.querySelector('[name="' + CSS.escape(key) + '"][value="' + CSS.escape(val) + '"]');
                    if (checkbox) {
                        checkbox.checked = true;
                        var temp = checkbox.dataset.target;
                        var targetemp = form.querySelector(temp);
                        if (targetemp) {
                            targetemp.disabled = false;
                        }
                    }
                });

                // If it's a single value and not a checkbox
                if (field.values.length === 1) {
                    var input = form.querySelector('[name="' + CSS.escape(key) + '"]');
                    if (input && input.type !== 'checkbox') {
                        var cleanValue = field.values[0]; // take the value as-is
                        input.value = cleanValue;          // display exactly as stored
                    }
                }
            } else {
                // Simple single-value fields
                var input = form.querySelector('[name="' + CSS.escape(key) + '"]');
                if (input && typeof field === 'string') {
                    input.value = field.replace(/^"(.*)"$/, '$1');
                }
            }
        });
    }

    document.querySelectorAll('[data-group]').forEach(function (group) {
        var checkboxes = group.querySelectorAll('input[type="checkbox"]');
        var isExclusive = group.dataset && group.dataset.exclusive === "true";

        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                var target = checkbox.dataset.target;
                var relatedInput = target ? document.querySelector(target) : null;

                // Exclusive group: uncheck others
                if (isExclusive && checkbox.checked) {
                    checkboxes.forEach(function (cb) {
                        if (cb !== checkbox) {
                            cb.checked = false;

                            // Disable related input if any
                            var cbTarget = cb.dataset.target;
                            if (cbTarget) {
                                var cbInput = document.querySelector(cbTarget);
                                if (cbInput) {
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

    document.querySelectorAll('input[type="text"], textarea').forEach(function (input) {
        input.addEventListener('change', function () {
            input.value = input.value.trim();
        });
    }); 
    document.getElementById('shoulder_elbow').addEventListener('submit', function (e) {
        e.preventDefault();
        var json = getFormDataAsJSON(this); // <-- works because 'this' is the form
        if (!json) return;

        $.ajax({
            url: '{{ route('save.shoulder.elbow.details') }}',
            type: 'POST',
            data: JSON.stringify(json),
            contentType: 'application/json',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    allowOutsideClick: false,
                    text: response.message || 'Form submitted successfully!',
                    confirmButtonText: 'OK'
                }).then(function () {
                    window.location.reload();
                });
            },
            error: function (xhr) {
                var message = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Something went wrong!';
                Swal.fire({
                    icon: 'error',
                    allowOutsideClick: false,
                    title: 'Oops...',
                    text: message
                });
            }
        });
    });

    function getFormDataAsJSON(formElement) {
        var formData = new FormData(formElement);
        var json = {};
        var hasValue = false;

        for (var pair of formData.entries()) {
            var key = pair[0];
            var value = pair[1];
            if (!value) continue;
            
            var inputEl = formElement.querySelector('[name="' + CSS.escape(key) + '"][value="' + CSS.escape(value) + '"]') 
                || formElement.querySelector('[name="' + CSS.escape(key) + '"]');

            if (inputEl && inputEl.type === "checkbox" && inputEl.dataset.target) {
                var relatedInput = document.querySelector(inputEl.dataset.target);
                if (relatedInput && !relatedInput.value.trim()) {
                    var errorname = relatedInput.getAttribute('name').replace(/_/g, " ");
                    Swal.fire({
                        icon: 'error',
                        allowOutsideClick: false,
                        title: 'Required Field Missing',
                        text: (errorname || 'This field') + ' is required.',
                    }).then(function () {

                        // Detect which section it belongs to and open it (without scroll)
                        if (relatedInput.closest('#should')) {
                            document.getElementById('shouldcheck').checked = true;
                            toggleregion(document.getElementById('shouldcheck'), 'should', true);
                        } else if (relatedInput.closest('#elb')) {
                            document.getElementById('elbcheck').checked = true;
                            toggleregion(document.getElementById('elbcheck'), 'elb', true);
                        }
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

            var title = null;
            var groupDiv = inputEl ? inputEl.closest('[data-title]') : null;
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
                allowOutsideClick: false,
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
        json.type = "shoulder_elbow";
        return json;
    }
</script>