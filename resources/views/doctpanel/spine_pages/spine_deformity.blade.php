<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('Sweetalerts/sweetalert2.min.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

<style>

    .form-group {
        margin-bottom: 15px;
    }

    .checkbox-group {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
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

    input:disabled,
    textarea:disabled {
        background-color: #f0f0f0;
        color: #999;
        cursor: not-allowed;
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
<form action="" id="spinedeformifty">
    <div>
        <div class="header">
            <h1>SPINAL DEFORMITY</h1>
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="col">
                <div class="form-group" data-title="Chief Complaints">
                    <h5>Chief Complaints:</h5>
                    <textarea name="Chief_Complaints"></textarea>
                </div>
                <div class="form-group" data-title="History">
                    <h5>History:</h5>
                    <label for="" class="label1">1st Noticed at Age:</label>
                    <input type="text" placeholder="Describe 1st Noticed at" name="1st_Noticed_at_Age">
                </div>
                <h6 class="subsection">Pain:</h6>
                <div class="checkbox-group" data-title="Pain">
                    <div class="checkbox-item">
                        <input type="checkbox" name="Pain" value="None">
                        <label for="">None</label>
                    </div>
                    {{-- <input type="text" id="input1" placeholder="Specify None" disabled> --}}
                </div>
                <div data-title="Pain">
                    <div class="form-group">
                        <label class="">Location:</label>
                        <textarea placeholder="Describe Location" name="location"></textarea>
                    </div>
                    <div class="form-group">
                        <h6>Intensity:</h6>
                        <label for="" class="label1">Pain Rate(0 - 10):</label>
                        <input type="text" class="inline-input" placeholder="Describe Pain Rate" name="Intensity_Pain_Rate">
                    </div>
                    <div class="form-group">
                        <label class="">Duration:</label>
                        <textarea  placeholder="Describe Duration" name="Intensity_Duration"></textarea>
                    </div>
                </div>
                <div class="form-group" data-group="Progression" data-exclusive="true" data-title="Pain">
                    <label for="" class="label1">Progression:</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Progression" value="Improving">
                            <label for="">Improving</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Progression" value="No_Change">
                            <label for="">No Change</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Progression" value="Worsening">
                            <label for="">Worsening</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Progression" value="Intermittent">
                            <label for="">Intermittent</label>
                        </div>
                    </div>
                </div>
                <div class="form-group" data-title="Pain">
                    <label class="">Aggravating factors:</label>
                    <textarea placeholder="Describe Aggravating factors" name="Aggravating_factors"></textarea>
                </div>
                <div class="form-group" data-title="Pain">
                    <label class="">Alleviating factors:</label>
                    <textarea placeholder="Describe Alleviating factors" name="Alleviating_factors"></textarea>
                </div>
                <div class="form-group" data-group="Weakness" data-title="Pain" data-exclusive="true">
                    <label for="" class="label1">Weakness:</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Weakness" value="No_Symptoms">
                            <label for="">No Symptoms</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Weakness" value="Unsteady_gait" data-target="#input2">
                            <label for="">Unsteady gait</label>
                        </div>
                        <input type="text" placeholder="Specify Unsteady gait" id="input2" disabled name="Weakness_Unsteady_gait">
                    </div>
                </div>
                <div class="form-group" data-group="Sensory" data-title="Pain">
                    <label for="" class="label1">Sensory:</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Sensory" value="No_Symptoms">
                            <label for="">No Symptoms</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Sensory" value="numbness">
                            <label for="">numbness</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Sensory" value="paresthesia" data-target="#input3">
                            <label for="">paresthesia</label>
                        </div>
                        <input type="text" placeholder="Specify paresthesia" id="input3" name="Sensory_paresthesia" disabled>
                    </div>
                </div>
                <div class="form-group" data-group="Bladder" data-title="Pain">
                    <label for="" class="label1">Bladder:</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Bladder" value="Normal">
                            <label for="">Normal</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Bladdercheckbox" value="checkbox" data-target="#input4">
                            <input type="text" id="input4" name="bladder_description" disabled>
                        </div>
                    </div>
                </div>
                <h5>Treatment So For</h5>
               <div class="checkbox-item" data-title="Treatment So For">
                    <input type="checkbox" name="Treatment_so_for" value="None">
                    <label for="">None</label>
                </div>
                <div class="checkbox-item mt-3" data-title="Treatment So For">
                    <div data-group="Bracing/Casting">
                        <div class="checkbox-item">
                            <input type="checkbox" name="BracingCasting" value="Bracing_Casting" data-target="#input5">
                            <label for="">Bracing/Casting</label>
                        </div>
                        <textarea  placeholder="Describe Bracing/Casting" id="input5" disabled name="Bracing_Casting"></textarea>
                    </div>
                    <div>
                        <div class="checkbox-item" data-group="Physiotherapy">
                            <input type="checkbox" name="Physiotherapys" value="Physiotherapy" data-target="#input6">
                            <label for="">Physiotherapy</label>
                        </div>
                        <textarea  placeholder="Describe Physiotherapy" id="input6" disabled name="Physiotherapy"></textarea>
                    </div>
                </div>
            </div>


            <div class="col">
                <h5>Past Medical History</h5>
                <div data-title="Past Medical History">
                    <div class="checkbox-item">
                        <input type="checkbox" name="Past_Medical_History" value="None">
                        <label for="">None</label>
                    </div>
                    <textarea  placeholder="Describe Past Medical History" style="max-width: 65%;height:65px;" name="Past_Medical_History_Description"></textarea>
                </div>
                <div data-title="Past Surgical History">
                    <h6 class="subsection" >Past Surgical History</h6>
                    <div class="checkbox-item" >
                        <input type="checkbox" name="Past_Surgical_History" value="None">
                        <label for="">None</label>
                    </div>
                    <textarea  placeholder="Describe Past Surgical History" style="max-width: 65%;height:65px;" name="Past_Surgical_History_Description"></textarea>
                </div>
                <div data-title="Current MEDs">
                    <h6 class="subsection">Current MEDs</h6>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Current_MEDs" value="None">
                        <label for="">None</label>
                    </div>
                    <textarea  placeholder="Describe Current MEDs" style="max-width: 65%;height:65px;" name="Current_MEDs_Description"></textarea>
                </div>
                <div data-title="Allergies">
                    <h6 class="subsection">Allergies</h6>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Allergies" value="NKDA">
                        <label for="">NKDA</label>
                    </div>
                    <textarea  placeholder="Describe Current NKDA" style="max-width: 65%;height:65px;" name="Allergies_Description"></textarea>
                </div>
                <div data-title="Family History">
                    <h6 class="subsection">Family History</h6>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Family_History" value="No_f/h/o_deformity">
                            <label for="">No f/h/o deformity</label>
                        </div>
                    </div>
                    <div class="form-group" data-group="Parents">
                        <label for="" class="label1 mt-3">Parents:</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Parents" value="Non-consanguity">
                                <label for="">Non-consanguity</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Non-consanguity_checkbox" value="checkbox" data-target="#input7">
                                <input type="text" disabled id="input7" name="Non-consanguity">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" data-group="Siblings">
                        <label for="" class="label1">Siblings:</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Siblings" value="Normal">
                                <label for="">Normal</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Siblings_checkbox" value="checkbox" data-target="#input19">
                                <input type="text" disabled id="input19" name="Siblings_Description">
                            </div>
                        </div>
                    </div>
                </div>
                <h5>Birth History</h5>
                <div class="checkbox-group" data-group="Birth History" data-title="Birth History">
                    <div class="checkbox-item">
                        <input type="checkbox" name="Birth_History" value="uneventful">
                        <label for="">uneventful</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Birth_History_checkbox" value="checkbox" data-target="#input9">
                        <input type="text" disabled id="input9" name="Birth_History_Description">
                    </div>
                </div>
                <div data-title="Development">
                    <h5>Development</h5>
                    <div class="checkbox-group" data-group="Development" data-exclusive="true">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Development" value="Normal">
                            <label for="">Normal</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Development" value="Delayed" data-target="#input10">
                            <label for="">Delayed</label>
                        </div>
                        <input type="text" placeholder="Specify delayed" disabled id="input10" name="Development_Delayed">
                    </div>
                    <div class="form-group">
                        <label for="" class="label1">Learning disability:</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Learning_Disability" value="None">
                                <label for="">None</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="label1">Onset of Menses:</label>
                        <textarea placeholder="Describe Total Dislocations" name="Onset_of_Menses"></textarea>
                    </div>
                </div>
                
                
                <div data-title="Social History">
                    <h5>Social History</h5>
                    <div class="checkbox-group" data-group="Social History">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Social_History" value="School">
                            <label for="">School</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Social_History" value="Sports">
                            <label for="">Sports</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Social_History" value="Others" data-target="#input11">
                            <label for="">Others</label>
                        </div>
                        <input type="text" placeholder="Specify Others" disabled id="input11" name="Others">
                    </div>
                </div>    

            </div>
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="col">
                <div data-title="Physical Examination">
                    <h5>Physical Examination:</h5>
                    <div class="checkbox-item">
                        <div class="checkbox-item">
                            <label for="">Height:</label>
                            <input type="text" style="width: 65px;" name="Height">
                        </div>
                        <div class="checkbox-item">
                            <label for="">Weight:</label>
                            <input type="text" style="width: 65px;" name="Weight">
                        </div>
                        <div class="checkbox-item">
                            <label for="">Arm Span:</label>
                            <input type="text" style="width: 65px;" name="Arm_Span">
                        </div>
                    </div>
                    <h6 sty
                    le="margin-top: 10px;">Gait:</h6>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Gait" value="Normal">
                        <label for="">normal</label>
                    </div>
                    <h6 style="margin-top: 10px;">Posture:</h6>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Posture" value="Erect">
                            <label for="">Erect</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Posture" value="Stooped_forward">
                            <label for="">Stooped forward</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Posture" value="Coronal_imbalance">
                            <label for="">Coronal imbalance</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Posture" value="Trunk_imbalance">
                            <label for="">Trunk imbalance</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Posture" value="Shoulder_elevation">
                            <label for="">Shoulder elevation</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Posture" value="Flank_crease">
                            <label for="">Flank crease</label>
                        </div>
                    </div>
                    <div class="form-group" data-group="Tenderness">
                        <label for="" class="label1 mt-3">Tenderness:</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" value="spinal" name="Tenderness">
                                <label for="">spinal</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" value="numbness" name="Tenderness">
                                <label for="">numbness</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" value="paraspinal" name="Tenderness" data-target="#input12">
                                <label for="">paraspinal</label>
                            </div>
                            <input type="text" placeholder="Specify paraspinal" disabled id="input12" name="paraspinal">
                        </div>
                    </div>
                </div>
                <div data-title="Trunk Exam">
                    <h5>Trunk Exam</h5>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Trunk_Exam" value="Normal">
                            <label for="">Normal</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Trunk_Exam" value="Scoliosis">
                            <label for="">Scoliosis</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Trunk_Exam" value="Thoracic_hyperkyphosis">
                            <label for="">Thoracic hyperkyphosis</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Trunk_Exam" value="Thoracic_lordosis">
                            <label for="">Thoracic lordosis</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Trunk_Exam" value="Thoracolumbar_kyphosis">
                            <label for="">Thoracolumbar kyphosis</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Trunk_Exam" value="Lumbar_hyperlordosis">
                            <label for="">Lumbar hyperlordosis</label>
                        </div>
                    </div>
                </div>  
                <div data-title="Adams Forward Bend">
                    <h5>Adams Forward Bend</h5>
                    <table style="width: 50%;" class="modified_table">
                        <tbody>
                            <tr data-group="High_Thoracic_prominence" data-exclusive="true">
                                <td>High Thoracic prominence:</td>
                                <td>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="High_Thoracic_prominence" value="Right">
                                        <label for="">R</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="High_Thoracic_prominence" value="Left">
                                        <label for="">L</label>
                                    </div>
                                </td>
                            </tr>
                            <tr data-group="Thoracic_prominence" data-exclusive="true">
                                <td>Thoracic prominence:</td>
                                <td>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Thoracic_prominence" value="Right">
                                        <label for="">R</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Thoracic_prominence" value="Left">
                                        <label for="">L</label>
                                    </div>
                                </td>
                            </tr>
                            <tr data-group="TL_prominence" data-exclusive="true">
                                <td>TL prominence:</td>
                                <td>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="TL_prominence" value="Right">
                                        <label for="">R</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="TL_prominence" value="Left">
                                        <label for="">L</label>
                                    </div>
                                </td>
                            </tr>
                            <tr data-group="Lumbar_prominence" data-exclusive="true">
                                <td>Lumbar prominence:</td>
                                <td>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Lumbar_prominence" value="Right">
                                        <label for="">R</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Lumbar_prominence" value="Left">
                                        <label for="">L</label>
                                    </div>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
               
                <h5>ROM</h5>
                <div class="checkbox-group" data-title="ROM" data-group="ROM" data-exclusive="true">
                    <div class="checkbox-item">
                        <input type="checkbox" name="ROM" value="Normal">
                        <label for="">Normal</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="ROM" value="Restricted">
                        <label for="">Restricted</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="ROM" value="Painful">
                        <label for="">Painful</label>
                    </div>
                </div>
                <h5>Flexibility Tests</h5>
                <div style="display: flex;gap:10px; flex-wrap: wrap;" data-title="Flexibility Tests">
                    <div data-group="Push prone test">
                        <div class="checkbox-item">
                           <input type="checkbox" data-target="#input13" name="Pushprone_test" value="checkbox">
                           <label for="">Push prone test</label>
                       </div>
                       <textarea  placeholder="Describe Push prone test" disabled id="input13" name="Push_prone_test"></textarea>
                    </div>
                    <div data-group="Suspension">
                        <div class="checkbox-item">
                           <input type="checkbox"  data-target="#input14" name="Suspension(Traction)" value="checkbox">
                           <label for="">Suspension (Traction)</label>
                       </div>
                       <textarea  placeholder="Describe Suspension (Traction)" disabled id="input14" name="Suspension_(Traction)"></textarea>
                    </div>
                    <div data-group="Bending">
                        <div class="checkbox-item">
                           <input type="checkbox"  data-target="#input15" name="Bendings" value="checkbox">
                           <label for="">Bending</label>
                       </div>
                       <textarea  placeholder="Describe Bending" disabled id="input15" name="Bending"></textarea>
                    </div>
                    <div data-group="Prone hyperextension test">
                        <div class="checkbox-item">
                           <input type="checkbox" data-target="#input16" name="Pronehyperextension_test" value="checkbox">
                           <label for="">Prone hyperextension test</label>
                       </div>
                       <textarea  placeholder="Describe Prone hyperextension test" disabled id="input16" name="Prone_hyperextension_test"></textarea>
                    </div>
                </div>

            </div>
            <div class="col">
                <div data-title="Motor Strength">
                    <h5>Motor Strength</h5>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Motor_Strength" value="Normal">
                        <label for="">Normal</label>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Deltoid</th>
                                <th>Biceps</th>
                                <th>Triceps</th>
                                <th>Wrist Ex</th>
                                <th>Grip</th>
                                <th>Fing Abd</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>R</td>
                                <td><input type="text" name="Deltoid_Right"></td>
                                <td><input type="text" name="Biceps_Right"></td>
                                <td><input type="text" name="Triceps_Right"></td>
                                <td><input type="text" name="Wrist_Ex_Right"></td>
                                <td><input type="text" name="Grip_Right"></td>
                                <td><input type="text" name="Fing_Abd_Right"></td>
                            </tr>
                            <tr>
                                <td>L</td>
                                <td><input type="text" name="Deltoid_Left"></td>
                                <td><input type="text" name="Biceps_Left"></td>
                                <td><input type="text" name="Triceps_Left"></td>
                                <td><input type="text" name="Wrist_Ex_Left"></td>
                                <td><input type="text" name="Grip_Left"></td>
                                <td><input type="text" name="Fing_Abd_Left"></td>
                            </tr>
                        </tbody>
                    </table>
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Psoas</th>
                                <th>G Med</th>
                                <th>Quads</th>
                                <th>TA</th>
                                <th>Gastroc</th>
                                <th>EHL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>R</td>
                                <td><input type="text" name="Psoas_Right"></td>
                                <td><input type="text" name="G_Med_Right"></td>
                                <td><input type="text" name="Quads_Right"></td>
                                <td><input type="text" name="TA_Right"></td>
                                <td><input type="text" name="Gastroc_Right"></td>
                                <td><input type="text" name="EHL_Right"></td>
                            </tr>
                            <tr>
                                <td>L</td>
                                <td><input type="text" name="Psoas_Left"></td>
                                <td><input type="text" name="G_Med_Left"></td>
                                <td><input type="text" name="Quads_Left"></td>
                                <td><input type="text" name="TA_Left"></td>
                                <td><input type="text" name="Gastroc_Left"></td>
                                <td><input type="text" name="EHL_Left"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div data-title="Sensations">
                    <h5>Sensations</h5>
                    <div class="checkbox-item" data-group="Sensations">
                        <input type="checkbox" name="Sensations" value="Intact" data-target="#input17">
                        <label for="">Intact</label>
                    </div>
                    <textarea  placeholder="Describe Sensations Intact" id="input17" name="Sensations_Intact" disabled></textarea>
                </div>

                <table class="modified_table" data-title="Sensations">
                    <tbody>
                        <tr>
                            <td>Hoffman:</td>
                            <td><input type="text" class="inline-input" name="Hoffman" placeholder="Describe Hoffman" style="width:40%;"></td>
                        </tr>
                        <tr>
                            <td>Basinski:</td>
                            <td><input type="text" class="inline-input" name="Basinski" placeholder="Describe Basinski" style="width:40%;"></td>
                        </tr>
                        <tr>
                            <td>SLR/FST:</td>
                            <td>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="SLR-FST" value="free">
                                    <label for="">Free</label>
                                    <input type="text" placeholder="Specify SLR/FST" style="width:40%;" name="SLR/FST_Free">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>PULSE:</td>
                            <td>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="PULSE" value="Normal">
                                    <label for="">Normal</label>
                                    <input type="text" placeholder="Specify Pulse" style="width:40%;" name="Pulse_Description">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>HIP ROM:</td>
                            <td>
                                <div class="checkbox-item" data-group="HIP_ROM" data-exclusive="true">
                                    <input type="checkbox" name="HIP_ROM" value="Normal">
                                    <label for="">Normal</label>
                                    <input type="checkbox" name="HIP_ROM" value="Thomas_test" data-target="#input18">
                                    <label for="">Thomas test</label>
                                    <input type="text" id="input18" placeholder="Specify Thomas test" style="width:40%;" name="Thomas_Test">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>KNEE ROM:</td>
                            <td>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="KNEE_ROM" value="Normal">
                                    <label for="">Normal</label>
                                    <input type="text" placeholder="Specify KNEE ROM" style="width:40%;" name="Knee_ROM">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="col" data-title="Head To Toe Exam">
                <h5>HEAD TO TOE EXAM</h5>
                <table class="modified_table" style="width:75%">
                    <tbody>
                        <tr>
                            <td>
                                <label for="">High Arched palate:</label>
                            </td>
                            <td>
                                <div class="checkbox-group" data-group="High_Arched_palate" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="High_Arched_palate" value="Yes">
                                        <label for="">Y</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="High_Arched_palate" value="No">
                                        <label for="">N</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Facial asymmetry:</label>
                            </td>
                            <td>
                                <div class="checkbox-group" data-group="Facial_asymmetry" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Facial_asymmetry" value="Yes">
                                        <label for="">Y</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Facial_asymmetry" value="No">
                                        <label for="">N</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Cafe Au Lait Spots:</label>
                            </td>
                            <td>
                                <div class="checkbox-group" data-group="Cafe_Au_Lait_Spots" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Cafe_Au_Lait_Spots" value="Yes">
                                        <label for="">Y</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Cafe_Au_Lait_Spots" value="No">
                                        <label for="">N</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Hair/ Skin pigmentation:</label>
                            </td>
                            <td>
                                <div class="checkbox-group" data-group="Hair/Skin_pigmentation" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Hair/Skin_pigmentation" value="Yes">
                                        <label for="">Y</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Hair/Skin_pigmentation" value="No">
                                        <label for="">N</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Skin Hyperelasticity:</label>
                            </td>
                            <td>
                                <div class="checkbox-group" data-group="Skin_Hyperelasticity" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Skin_Hyperelasticity" value="Yes">
                                        <label for="">Y</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Skin_Hyperelasticity" value="No">
                                        <label for="">N</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Scars:</label>
                            </td>
                            <td>
                                <div class="checkbox-group" data-group="Scars" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Scars" value="Yes">
                                        <label for="">Y</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Scars" value="No">
                                        <label for="">N</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Joint Hyperelasticity:</label>
                            </td>
                            <td>
                                <div class="checkbox-group" data-group="Joint_Hyperelasticity" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Joint_Hyperelasticity" value="Yes">
                                        <label for="">Y</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Joint_Hyperelasticity" value="No">
                                        <label for="">N</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Arachnodacytly:</label>
                            </td>
                            <td>
                                <div class="checkbox-group" data-group="Arachnodacytly" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Arachnodacytly" value="Yes">
                                        <label for="">Y</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Arachnodacytly" value="No">
                                        <label for="">N</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Chest asymmetry:</label>
                            </td>
                            <td>
                                <div class="checkbox-group" data-group="Chest_asymmetry" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Chest_asymmetry" value="Yes">
                                        <label for="">Y</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Chest_asymmetry" value="No">
                                        <label for="">N</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Anterior chest deformity:</label>
                            </td>
                            <td>
                                <div class="checkbox-group" data-group="Anterior_chest_deformity" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Anterior_chest_deformity" value="No">
                                        <label for="">N</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Anterior_chest_deformity" value="Excavatum">
                                        <label for="">Excavatum</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Anterior_chest_deformity" value="Carinatum">
                                        <label for="">Carinatum</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Breath hold count:</label>
                            </td>
                            <td>
                                <div class="checkbox-item">
                                    <input type="text" style="width: 30%;" name="Breath_hold_count">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Tanner stage:</label>
                            </td>
                            <td>
                                <div class="checkbox-group" data-group="Tanner_stage" data-exclusive="true">
                                <div class="checkbox-item">
                                    <input type="checkbox" name="Tanner_stage" value="1">
                                    <label for="">1</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="Tanner_stage" value="2">
                                    <label for="">2</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="Tanner_stage" value="3">
                                    <label for="">3</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="Tanner_stage" value="4">
                                    <label for="">4</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="Tanner_stage" value="5">
                                    <label for="">5</label>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Axillary hair:</label>
                            </td>
                            <td>
                                 <div class="checkbox-group" data-group="Axillary_hair" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Axillary_hair" value="Yes">
                                        <label for="">Y</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Axillary_hair" value="No">
                                        <label for="">N</label>
                                    </div>
                                </div>
                                <input type="text" placeholder="" name="Axillary_hair_Description">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Breasts development:</label>
                            </td>
                            <td>
                                 <div class="checkbox-group" data-group="Breasts_development" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Breasts_development" value="Yes">
                                        <label for="">Y</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Breasts_development" value="No">
                                        <label for="">N</label>
                                    </div>
                                </div>
                                <input type="text" placeholder="" name="Breasts_development_Description">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Pubic Hair:</label>
                            </td>
                            <td>
                                 <div class="checkbox-group" data-group="Pubic_Hair" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Pubic_Hair" value="Yes">
                                        <label for="">Y</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Pubic_Hair" value="No">
                                        <label for="">N</label>
                                    </div>
                                </div>
                                <input type="text" placeholder="" name="Pubic_Hair_Description">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Other MSK findings:</label>
                            </td>
                            <td>
                                 <div class="checkbox-group" data-group="Other_MSK_findings" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Other_MSK_findings" value="Yes">
                                        <label for="">Y</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Other_MSK_findings" value="No">
                                        <label for="">N</label>
                                    </div>
                                </div>
                                <input type="text" placeholder="" name="Other_MSK_findings_Description">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Foot abnormality:</label>
                            </td>
                            <td>
                                 <div class="checkbox-group" data-group="Foot_abnormality" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Foot_abnormality" value="Yes">
                                        <label for="">Y</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Foot_abnormality" value="No">
                                        <label for="">N</label>
                                    </div>
                                </div>
                                <input type="text" placeholder="" name="Foot_abnormality_Description">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Leg length diﬀerence:</label>
                            </td>
                            <td>
                                 <div class="checkbox-group" data-group="Leg_Length_Difference" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Leg_Length_Difference" value="Yes">
                                        <label for="">Y</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Leg_Length_Difference" value="No">
                                        <label for="">N</label>
                                    </div>
                                </div>
                                <input type="text" placeholder="" name="Leg_Length_Difference_Description">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <h5>Imaging</h5>
                <table  class="modified_table" data-title="IMAGING">
                    <tbody>
                        <tr>
                            <td>
                                <label for="">PT Cobb:</label>
                            </td>
                            <td>
                                <input type="text" name="PT_Cobb" style="width:40%;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Thoracic K:</label>
                            </td>
                            <td>
                                <input type="text" name="Thoracic_K" style="width:40%;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Rissers:</label>
                            </td>
                            <td>
                                <input type="text" name="Rissers" style="width:40%;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">MT Cobb:</label>
                            </td>
                            <td>
                                <input type="text" name="MT_Cobb"  style="width:40%;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">TL Kyphosis:</label>
                            </td>
                            <td>
                                <input type="text" name="TL_Kyphosis"  style="width:40%;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Triradiate:</label>
                            </td>
                            <td>
                                <div class="checkbox-group" data-group="Triradiate" data-exclusive="true">
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Triradiate" value="Open">
                                        <label for="">Open</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" name="Triradiate" value="Closed">
                                        <label for="">Closed</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">TL/L Cobb:</label>
                            </td>
                            <td>
                                <input type="text" name="TL/L_Cobb"  style="width:40%;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">L Lordosis:</label>
                            </td>
                            <td>
                                <input type="text" name="L_Lordosis"  style="width:40%;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Sanders:</label>
                            </td>
                            <td>
                                <input type="text" name="Sanders"  style="width:40%;">
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <h6 class="subsection">MRI:</h6>
                <div class="form-group" data-title="MRI">
                    <textarea placeholder="Describe MRI" name="MRI" style="max-width:65%;height:65px;"></textarea>
                </div>
                <h6 class="subsection">Diagnosis:</h6>
                <div class="form-group" data-title="DIAGNOSIS">
                    <textarea placeholder="Describe Diagnosis" name="Diagnosis" style="max-width:65%;height:65px;"></textarea>
                </div>
            </div>
        </div>
        <div style="display: flex;justify-content:center;margin-top:20px;">
            <button type="submit" class="btn btn-success" style="font-size: 25px;width: 200px;" id="savebtn">Save</button>
        </div>

        <input type="hidden" value="{{ optional($patDetails)->PATIENT_NAME }}" id="patient_name">
        <input type="hidden" value="{{ optional($patDetails)->REG_NO }}" id="regno">
        <input type="hidden" value="{{ optional($patDetails)->age }}" id="age">
        <input type="hidden" value="{{ optional($patDetails)->SEX }}" id="sex">
    </div>
</form>

<script src="{{ asset('Sweetalerts/sweetalert2.all.min.js') }}"></script>
@php
$regnos= optional($patDetails)->REG_NO;
    $currentRecord = \App\Models\Opdpart::select('data','regno')
    ->where('type', 'spinal_deformity')
    ->where('regno',$regnos)
        ->whereDate('created_at', \Carbon\Carbon::today())
        ->latest()
        ->first();
@endphp
<script>
    // Polyfill for Object.entries (for Safari < 10.1)
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

    document.addEventListener('DOMContentLoaded', function () {
        populateForm(document.getElementById('spinedeformifty'), formDataFromDB);
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

    document.getElementById('spinedeformifty').addEventListener('submit', function (e) {
        e.preventDefault();
        var json = getFormDataAsJSON(this); // <-- works because 'this' is the form
        if (!json) return;

        $.ajax({
            url: '{{ route('save.spinedeformity.details') }}',
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
                    title: 'Oops...',
                    allowOutsideClick: false,
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
                title: 'No fields selected!',
                allowOutsideClick: false,
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
        json.type = "spinal_deformity";
        return json;
    }
</script>

