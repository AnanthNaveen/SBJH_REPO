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
        margin-bottom: 15px;
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
        .checkbox-group {
            flex-direction: column;
            gap: 10px;
        }
    }
</style>


<form action="" id="myspine">
    <div>
        <div class="header">
            <h1>SPINE</h1>
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="col">
                <div class="" data-title="Chief Complaints">
                    <h5><span><img src="{{ asset('Image/paper.png') }}" alt=""
                                style="width: 35px;height:35px;"></span> Chief Complaints</h5>
                    <textarea id="chief_complaint" class="mt-1" name="Chief_Complaints" rows="2" cols="40"
                        style="width: 50%; max-width: none;"></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="row">
            <div class="col">
                <h5><span><img src="{{ asset('Image/history-book-2.png') }}" alt=""
                            style="width: 35px;height:35px;"></span> HISTORY</h5>
                <div class="checkbox-group" data-group="history" data-exclusive="true" data-title="History">
                    <div class="checkbox-item">
                        <input class="" type="checkbox" name="history" value="Acute">
                        <label class="" for="inlineCheckbox1">Acute</label>
                    </div>
                    <div class="checkbox-item">
                        <input class="" type="checkbox" name="history" value="Subacute">
                        <label class="" for="inlineCheckbox2">Subacute</label>
                    </div>
                    <div class="checkbox-item">
                        <input class="" type="checkbox" name="history" value="Chronic">
                        <label class="" for="inlineCheckbox3">Chronic</label>
                    </div>
                    <div class="checkbox-item">
                        <input class="" type="checkbox" name="history" value="Fall_At_Home">
                        <label class="" for="inlineCheckbox1">Fall At Home</label>
                    </div>
                    <div class="checkbox-item">
                        <input class="" type="checkbox" name="history" value="Accident">
                        <label class="" for="inlineCheckbox2">Accident</label>
                    </div>
                    <div class="checkbox-item">
                        <input class="" type="checkbox" name="history" value="RTA">
                        <label class="" for="inlineCheckbox3">RTA</label>
                    </div>
                </div>

                <div data-title="Pain">
                    <h5><span><img src="{{ asset('Image/muscle-pain-2.png') }}" alt=""
                                style="width: 35px;height:35px;"></span> PAIN</h5>
                    <div style="display: inline-flex;gap:20px">
                        <div>
                            <div class="percentagediv">
                                <label class="">Back:</label>
                                <div class="percentagediv">
                                    <input type="text" name="Back" class=""
                                        style="width: 80px;height: 36px; max-width:none;margin-left:12px;margin-bottom:6px;">
                                    <span>%</span>
                                </div>
                            </div> <br>
                            <div class="percentagediv">
                                <label class="">(R)Leg:</label>
                                <div class="percentagediv">
                                    <input type="text" name="R_Leg" class=""
                                        style="width: 80px;height: 36px; max-width:none;margin-bottom:6px;">
                                    <span>%</span>
                                </div>
                            </div> <br>
                            <div class="percentagediv">
                                <label class="">(L)Leg:</label>
                                <div class="percentagediv">
                                    <input type="text" name="L_Leg" class=""
                                        style="width: 80px;height: 36px; max-width:none;margin-left:2px;margin-bottom:6px;">
                                    <span>%</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="percentagediv">
                                <label class="">Neck:</label>
                                <div class="percentagediv">
                                    <input type="text" name="Neck" class=""
                                        style="width: 80px;height: 36px; max-width:none;margin-left:13px;margin-bottom:6px;">
                                    <span>%</span>
                                </div>
                            </div> <br>
                            <div class="percentagediv">
                                <label class="">(R)Arm:</label>
                                <div class="percentagediv">
                                    <input type="text" name="R_Arm" class=""
                                        style="width: 80px;height: 36px; max-width:none;margin-bottom:6px;">
                                    <span>%</span>
                                </div>
                            </div> <br>
                            <div class="percentagediv">
                                <label class="">(L)Arm:</label>
                                <div class="percentagediv">
                                    <input type="text" name="L_Arm" class=""
                                        style="width: 80px;height: 36px; max-width:none;margin-left:2px;margin-bottom:6px;">
                                    <span>%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3 subsection">
                        <h6>Intensity</h6>
                        <label for="" class="label1">Pain Rate(0 - 10):</label>
                        <input type="text" class="inline-input" name="Intensity_Pain_Rate"
                            placeholder="Describe Pain Rate">
                    </div>

                    <div class="form-group">
                        <label class="">Duration:</label>
                        <textarea name="Intensity_Duration" placeholder="Describe Duration"></textarea>
                    </div>

                    <div class="form-group" data-group="progression" data-exclusive="true">
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

                    <div>
                        <h5><span><img src="{{ asset('Image/expression-2.png') }}" alt=""
                                    style="width: 35px;height:35px;"></span> Aggravating Factors</h5>
                        <div class="checkbox-group" data-group="Aggravating_factors"
                            data-title="Aggravating Factors">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Sitting">
                                <label for="">Sitting</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Standing">
                                <label for="">Standing</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Walking">
                                <label for="">Walking</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Bending">
                                <label for="">Bending</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Twisting">
                                <label for="">Twisting</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Lifting">
                                <label for="">Lifting</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Lying_Down">
                                <label for="">Lying Down</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Changing_Positions">
                                <label for="">Changing Positions</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Mornings">
                                <label for="">Mornings</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Late_In_Day">
                                <label for="">Late In Day</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Coughing">
                                <label for="">Coughing</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Night_Pain">
                                <label for="">Night Pain</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Flex/Ex">
                                <label for="">Flex/Ex</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Reading">
                                <label for="">Reading</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="ROM">
                                <label for="">ROM</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Computer_Use">
                                <label for="">Computer Use</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="None"
                                    data-target="#input1">
                                <label for="">None</label>
                            </div>
                            <input type="text" placeholder="Specify None" id="input1"
                                name="Aggravating_factors_None" disabled>
                        </div>
                    </div>

                    <h5><span><img src="{{ asset('Image/exercises.png') }}" alt=""
                                style="width: 35px;height:35px;"></span> Alleviating Factors</h5>
                    <div class="checkbox-group" data-title="Alleviating Factors">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Alleviating_Factors" value="Resting">
                            <label for="">Resting</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Alleviating_Factors" value="Sitting">
                            <label for="">Sitting</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Alleviating_Factors" value="Standing">
                            <label for="">Standing</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Alleviating_Factors" value="Changing_Position">
                            <label for="">Changing Position</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Alleviating_Factors" value="Mornings">
                            <label for="">Mornings</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Alleviating_Factors" value="Later_In_Day">
                            <label for="">Later In Day</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Alleviating_Factors" value="Heat">
                            <label for="">Heat</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Alleviating_Factors" value="Ice">
                            <label for="">Ice</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Alleviating_Factors" value="Medications">
                            <label for="">Medications</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Alleviating_Factors" value="Fetal_Position">
                            <label for="">Fetal Position</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Alleviating_Factors" value="Shoulder_Abduction">
                            <label for="">Shoulder Abduction</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Alleviating_Factors" value="None">
                            <label for="">None</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <h5><span><img src="{{ asset('Image/weakness.png') }}" alt=""
                            style="width: 35px;height:35px;"></span> WEAKNESS</h5>
                <div class="checkbox-group" data-title="weakness">
                    <div class="checkbox-item">
                        <input type="checkbox" name="weakness" value="No_Symptoms">
                        <label for="">No Symptoms</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="weakness" value="Buckling">
                        <label for="">Buckling</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="weakness" value="Tripping">
                        <label for="">Tripping</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="weakness" value="Unsteady_Gait">
                        <label for="">Unsteady Gait</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="weakness" value="Handwriting_Change">
                        <label for="">Handwriting Change</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="weakness" value="Buttoning_Difficulty">
                        <label for="">Buttoning Difficulty</label>
                    </div>
                </div>

                <h5><span><img src="{{ asset('Image/sensory.png') }}" alt=""
                            style="width: 35px;height:35px;"></span> SENSORY</h5>
                <div class="checkbox-group" data-title="Sensory">
                    <div class="checkbox-item">
                        <input type="checkbox" name="sensory" value="No_Symptoms">
                        <label for="">No Symptoms</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="sensory" value="Numbness">
                        <label for="">Numbness</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="sensory" value="Paresthesia">
                        <label for="">Paresthesia</label>
                    </div>
                </div>

                <h5><span><img src="{{ asset('Image/urology.png') }}" alt=""
                            style="width: 35px;height:35px;"></span> BLADDER</h5>
                <div class="checkbox-group" data-group="bladder" data-title="Bladder">
                    <div class="checkbox-item">
                        <input type="checkbox" name="bladder" value="Normal">
                        <label for="">Normal</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="bladder" value="Frequency">
                        <label for="">Frequency</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="bladder" value="Urgency">
                        <label for="">Urgency</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="bladder" value="Nocturia">
                        <label for="">Nocturia</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="bladder" value="Poor_Stream">
                        <label for="">Poor Stream</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="bladder" value="Intermittent_Stream">
                        <label for="">Intermittent Stream</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="bladder" value="Straining">
                        <label for="">Straining</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="bladder" value="Incomplete_Evacuation">
                        <label for="">Incomplete Evacuation</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="bladder" value="Hesitancy">
                        <label for="">Hesitancy</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="bladder" value="Incontinence" data-target="#input2">
                        <label for="">Incontinence</label>
                    </div>
                    <input type="text" placeholder="Specify Incontinence" id="input2" name="Incontinence"
                        disabled>
                </div>

                <h5><span><img src="{{ asset('Image/intestines.png') }}" alt=""
                            style="width: 35px;height:35px;"></span> BOWEL</h5>
                <div class="checkbox-group" data-group="bowel" data-title="Bowel">
                    <div class="checkbox-item">
                        <input type="checkbox" name="bowel" value="Normal">
                        <label for="">Normal</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="bowel" value="Abnormal" data-target="#input3">
                        <label for="">Abnormal</label>
                    </div>
                    <input type="text" placeholder="Specify Abnormal" id="input3" name="Abnormal" disabled>
                </div>

                <div class="subsection" data-title="Treatment So Far">
                    <h6>TREATMENT SO FAR:</h6>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Treatment_So_Far" value="none">
                            <label for="">none</label>
                        </div>
                    </div>

                    <div class="form-group" data-group="meds" data-exclusive="true">
                        <label for="" class="label1">Meds:</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Meds" value="NSAIDs">
                                <label for="">NSAIDs</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Meds" value="Steroids">
                                <label for="">Steroids</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="label1">Physiotherapy:</label>
                        <textarea name="Physiotherapy" id="" placeholder="Describe Total Dislocations"></textarea>
                    </div>
                    <div class="form-group" data-group="Injections" data-exclusive="true">
                        <label for="" class="label1">Injections:</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Injections" value="SNRB">
                                <label for="">SNRB</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Injections" value="ESI">
                                <label for="">ESI</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Injections" value="Trigger" data-target="#input4">
                                <label for="">Trigger</label>
                            </div>
                            <input type="text" placeholder="Specify Trigger" name="Injections_Trigger"
                                id="input4" disabled>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section">
        <div class="row">
            <div class="col">
                <h5><span><img src="{{ asset('Image/past.png') }}" alt=""
                            style="width: 35px;height:35px;"></span> PAST MEDICAL HISTORY</h5>
                <div class="checkbox-group" data-group="Past_Medical_History" data-title="Past Medical History">
                    <div class="checkbox-item">
                        <input type="checkbox" name="Past_Medical_History" value="Hypertension">
                        <label for="">Hypertension</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Past_Medical_History" value="DM">
                        <label for="">DM</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Past_Medical_History" value="CAD">
                        <label for="">CAD</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Past_Medical_History" value="CVA">
                        <label for="">CVA</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Past_Medical_History" value="Chronic_Pulmonary_Disease">
                        <label for="">Chronic Pulmonary Disease</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Past_Medical_History" value="Kidney_Disease">
                        <label for="">Kidney Disease</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Past_Medical_History" value="Liver_Disease">
                        <label for="">Liver Disease</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Past_Medical_History" value="GI_Disease">
                        <label for="">GI Disease</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Past_Medical_History" value="Thyroid_Disease">
                        <label for="">Thyroid Disease</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Past_Medical_History" value="Cancer_History">
                        <label for="">Cancer History</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Past_Medical_History" value="Arthritis">
                        <label for="">Arthritis</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Past_Medical_History" value="Osteoporosis">
                        <label for="">Osteoporosis</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Past_Medical_History" value="Past_Fracture">
                        <label for="">Past Fracture</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Past_Medical_History" value="Malignancy">
                        <label for="">Malignancy</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Past_Medical_History" value="None" data-target="#input5">
                        <label for="">None</label>
                    </div>
                    <input type="text" placeholder="Specify None" name="Past_Medical_History_None" id="input5"
                        disabled>
                </div>

                <div data-title="Past Surgical History">
                    <h5>PAST SURGICAL HISTORY</h5>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Past_surgical_history" value="none">
                            <label for="">none</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Current Meds:</label>
                        <div class="checkbox-group" data-group="Current_meds">
                            <input type="text" placeholder="Specify Current Meds" name="Current_meds">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Current_meds_none" value="none">
                                <label for="">none</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Allergies:</label>
                        <div class="checkbox-group" data-group="Allergies">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Allergies" value="NKDA">
                                <label for="">NKDA</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Allergies" value="N/A" data-target="#input7">
                                <label for="">N/A</label>
                            </div>
                            <input type="text" placeholder="Specify N/A" id="input7" name="Allergies_N/A"
                                disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Social History:</label>
                        <div class="checkbox-group" data-group="Social_History">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Social_History" value="NKDA" data-target="#input8">
                                <label for="">NKDA</label>
                            </div>
                            <input type="text" placeholder="Specify NKDA" id="input8"
                                name="Social_History_NKDA" disabled>
                        </div>
                    </div>

                </div>

                <h5><span><img src="{{ asset('Image/briefcase.png') }}" alt=""
                            style="width: 35px;height:35px;"></span> OCCUPATION</h5>
                <div class="checkbox-group" data-group="Occupation" data-exclusive="true" data-title="Occupation">
                    <div class="checkbox-item">
                        <input type="checkbox" name="Occupation" value="Heavy">
                        <label for="">Heavy</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Occupation" value="Moderate">
                        <label for="">Moderate</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Occupation" value="Sedentary">
                        <label for="">Sedentary</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Occupation" value="Desk_Job">
                        <label for="">Desk Job</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Occupation" value="Field_Work">
                        <label for="">Field Work</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Occupation" value="Computers">
                        <label for="">Computers</label>
                    </div>
                </div>
            </div>
            <div class="col">
                <h5><span><img src="{{ asset('Image/working-time.png') }}" alt=""
                            style="width: 35px;height:35px;"></span> WORK STATUS</h5>
                <div class="checkbox-group" data-group="Work_status" data-exclusive="true" data-title="Work Status">
                    <div class="checkbox-item">
                        <input type="checkbox" name="Work_status" value="Employed_at_Usual_Job">
                        <label for="">Employed at Usual Job</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Work_status" value="Light_Duty_Restrictive_Work">
                        <label for="">Light Duty Restrictive Work</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Work_status" value="Paid_Sick_Leave">
                        <label for="">Paid Sick Leave</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Work_status" value="Unpaid_Leave">
                        <label for="">Unpaid Leave</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Work_status" value="Dismissed_From_Work">
                        <label for="">Dismissed From Work</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Work_status" value="Unemployed">
                        <label for="">Unemployed</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Work_status" value="Because_of_Health">
                        <label for="">Because of Health</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Work_status" value="Unemployed_Other_Reason">
                        <label for="">Unemployed - Other Reason</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Work_status" value="Retired">
                        <label for="">Retired</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Work_status" value="Housewife">
                        <label for="">Housewife</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Work_status" value="Other">
                        <label for="">Other</label>
                    </div>
                </div>

                <h5><span><img src="{{ asset('Image/examination.png') }}" alt=""
                            style="width: 35px;height:35px;"></span> PHYSICAL EXAMINATION</h5>
                <div data-title="Physical Examination">
                    <div class="form-group" data-group="General_Appearance" data-exclusive="true">
                        <label for="">General Appearance:</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="General_Appearance" value="Normal">
                                <label for="">Normal</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="General_Appearance" value="Distressed"
                                    data-target="#input9">
                                <label for="">Distressed</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="text" placeholder="Drinks/week" id="input9"
                                    name="General_Appearance_Distressed" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Gait:</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Gait" value="Normal_1">
                                <label for="">Normal 1</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Gait" value="Heel_walk">
                                <label for="">Heel walk</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Gait" value="Toe_walk">
                                <label for="">Toe walk</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Gait" value="Tandem_walk">
                                <label for="">Tandem walk</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Posture:</label>
                        <div class="checkbox-group" data-group="erect">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Posture" value="erect" data-target="#input10">
                                <label for="">erect</label>
                            </div>
                            <input type="text" placeholder="erect" id="input10" name="Posture_erect" disabled>
                        </div>
                    </div>
                    <div class="form-group" data-group="Romberg_Test" data-exclusive="true">
                        <label for="">Romberg Test:</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Romberg_Test" value="Negative">
                                <label for="">Negative</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Romberg_Test" value="Positive">
                                <label for="">positive</label>
                            </div>
                        </div>
                    </div>
                    <label for="">Tenderness:</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Tenderness" value="None">
                            <label for="">None</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Tenderness" value="spinal_1">
                            <label for="">spinal 1</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Tenderness" value="paraspinal">
                            <label for="">paraspinal</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Tenderness" value="trapezial_(R)_(L)">
                            <label for="">trapezial (R) (L)</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Tenderness" value="scapula_(R)_(L)">
                            <label for="">scapula (R) (L)</label>
                        </div>
                    </div>
                    <label for="">ROM:</label>
                    <div class="checkbox-group" data-group="ROM" data-exclusive="true">
                        <div class="checkbox-item">
                            <input type="checkbox" name="ROM" value="Normal_1">
                            <label for="">Normal 1</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="ROM" value="Restricted" data-target="#input11">
                            <label for="">Restricted</label>
                        </div>
                        <input type="text" placeholder="Restricted" id="input11" name="ROM_Restricted"
                            disabled>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section">
        <div class="row">
            <div class="col" data-title="Motor Strength">
                <h5><span><img src="{{ asset('Image/development.png') }}" alt=""
                            style="width: 35px;height:35px;"></span> MOTOR STRENGTH</h5>
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Right</th>
                            <th>Left</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Deltoid</td>
                            <td><input type="text" name="Deltoid_right"></td>
                            <td><input type="text" name="Deltoid_left"></td>
                        </tr>
                        <tr>
                            <td>Biceps</td>
                            <td><input type="text" name="Biceps_right"></td>
                            <td><input type="text" name="Biceps_left"></td>
                        </tr>
                        <tr>
                            <td>Triceps</td>
                            <td><input type="text" name="Triceps_right"></td>
                            <td><input type="text" name="Triceps_left"></td>
                        </tr>
                        <tr>
                            <td>Wrist Ext</td>
                            <td><input type="text" name="Wrist_Ext_right"></td>
                            <td><input type="text" name="Wrist_Ext_left"></td>
                        </tr>
                        <tr>
                            <td>Grip</td>
                            <td><input type="text" name="Grip_right"></td>
                            <td><input type="text" name="Grip_left"></td>
                        </tr>
                        <tr>
                            <td>Finger Abd</td>
                            <td><input type="text" name="Finger_Abd_right"></td>
                            <td><input type="text" name="Finger_Abd_left"></td>
                        </tr>
                        <tr>
                            <td>Psoas</td>
                            <td><input type="text" name="Psoas_right"></td>
                            <td><input type="text" name="Psoas_left"></td>
                        </tr>
                        <tr>
                            <td>Quads</td>
                            <td><input type="text" name="Quads_right"></td>
                            <td><input type="text" name="Quads_left"></td>
                        </tr>
                        <tr>
                            <td>Hamstrings</td>
                            <td><input type="text" name="Hamstrings_right"></td>
                            <td><input type="text" name="Hamstrings_left"></td>
                        </tr>
                        <tr>
                            <td>TA</td>
                            <td><input type="text" name="TA_right"></td>
                            <td><input type="text" name="TA_left"></td>
                        </tr>
                        <tr>
                            <td>G. Med</td>
                            <td><input type="text" name="G.Med_right"></td>
                            <td><input type="text" name="G.Med_left"></td>
                        </tr>
                        <tr>
                            <td>EHL</td>
                            <td><input type="text" name="EHL_right"></td>
                            <td><input type="text" name="EHL_left"></td>
                        </tr>
                        <tr>
                            <td>Gastroc</td>
                            <td><input type="text" name="Gastroc_right"></td>
                            <td><input type="text" name="Gastroc_left"></td>
                        </tr>
                    </tbody>
                </table>

                <label class="mt-3" for="">Sensation:</label>
                <div class="checkbox-group" data-group="sensation" data-exclusive="true">
                    <div class="checkbox-item">
                        <input type="checkbox" name="sensation" value="Intact">
                        <label for="">Intact</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="sensation" value="Decreased" data-target="#input12">
                        <label for="">Decreased</label>
                    </div>
                    <input type="text" placeholder="Decreased" id="input12" name="Sensation_Decreased"
                        disabled>
                </div>
                <div class="form-group">
                    <label for="">Reflexes:</label>
                    <input type="text" placeholder="Describe Reflexes" name="Reflexes">
                </div>

                <label for="">Babinski:</label>
                <div class="checkbox-group" data-group="Babinski" data-exclusive="true">
                    <div class="checkbox-item">
                        <input type="checkbox" name="Babinski" value="Flexor">
                        <label for="">Flexor</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Babinski" value="Extersor">
                        <label for="">Extersor</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Babinski" value="No_response">
                        <label for="">No response</label>
                    </div>
                </div>

            </div>
            <div class="col" data-title="PR">
                <h5><span><img src="{{ asset('Image/pulse-oximeter.png') }}" alt=""
                            style="width: 35px;height:35px;"></span> PR</h5>
                <label for="">Resting Tone:</label>
                <div class="checkbox-group" data-group="Resting_Tone" data-exclusive="true">
                    <div class="checkbox-item">
                        <input type="checkbox" name="Resting_Tone" value="Intact">
                        <label for="">Intact</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="Resting_Tone" value="Reduced">
                        <label for="">Reduced</label>
                    </div>
                </div>
                <label for="">VAC:</label>
                <div class="checkbox-group" data-group="VAC" data-exclusive="true">
                    <div class="checkbox-item">
                        <input type="checkbox" name="VAC" value="Intact">
                        <label for="">Intact</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="VAC" value="Reduced">
                        <label for="">Reduced</label>
                    </div>
                </div>
                <label for="">Sensation:</label>
                <div class="checkbox-group" data-group="Sensation" data-exclusive="true">
                    <div class="checkbox-item">
                        <input type="checkbox" name="sensations" value="Intact">
                        <label for="">Intact</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="sensations" value="Reduced">
                        <label for="">Reduced</label>
                    </div>
                </div>
                <label for="">BCR:</label>
                <div class="checkbox-group" data-group="BCR" data-exclusive="true">
                    <div class="checkbox-item">
                        <input type="checkbox" name="BCR" value="Intact">
                        <label for="">Intact</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="BCR" value="Reduced">
                        <label for="">Reduced</label>
                    </div>
                </div>

                <div data-title="Special Test">
                    <h5><span><img src="{{ asset('Image/testing.png') }}" alt=""
                                style="width: 35px;height:35px;"></span> SPECIAL TEST</h5>
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Right</th>
                                <th>Left</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Hoffman</td>
                                <td><input type="text" name="Hoffman_right"></td>
                                <td><input type="text" name="Hoffman_left"></td>
                            </tr>
                            <tr>
                                <td>Spurling</td>
                                <td><input type="text" name="Spurling_right"></td>
                                <td><input type="text" name="Spurling_left"></td>
                            </tr>
                            <tr>
                                <td>Phalen</td>
                                <td><input type="text" name="Phalen_right"></td>
                                <td><input type="text" name="Phalen_left"></td>
                            </tr>
                            <tr>
                                <td>Tinel's</td>
                                <td><input type="text" name="Tinel's_right"></td>
                                <td><input type="text" name="Tinel's_left"></td>
                            </tr>
                            <tr>
                                <td>SLR</td>
                                <td><input type="text" name="SLR_right"></td>
                                <td><input type="text" name="SLR_left"></td>
                            </tr>
                            <tr>
                                <td>FNST</td>
                                <td><input type="text" name="FNST_right"></td>
                                <td><input type="text" name="FNST_left"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="form-group">
                        <label for="" class="label1 mt-3">Pulse:</label>
                        <textarea name="Pulse" placeholder="Describe Pulse"></textarea>
                    </div>

                    <label for="">Shoulder ,Peripheral Nerve ,TOS:</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Shoulder_Peripheral_Nerve_TOS" value="Normal">
                            <label for="">Normal</label>
                        </div>
                        <div class="checkbox-item">
                            <label for="">If No</label>
                            <input type="text" name="Shoulder_Peripheral_Nerve_TOS_If_No">
                        </div>
                    </div>

                    <label for="">Hip SI Joint:</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Hip_SI_Joint" value="Normal">
                            <label for="">Normal</label>
                        </div>
                        <div class="checkbox-item">
                            <label for="">If No</label>
                            <input type="text" name="Hip_SI_Joint_If_No">
                        </div>
                    </div>
                </div>

                <h5>
                    <span>
                        <img src="{{ asset('Image/to-do-list.png') }}" alt=""
                            style="width: 35px;height:35px;">
                    </span> TO DO
                </h5>
                <div data-title="To Do">
                    <div class="form-group">
                        <label for="" class="label1">Provisional Diagnosis:</label>
                        <textarea name="Provisional_Diagnosis" placeholder="Decribe Provisional Diagnosis"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="label1">Plan of Care:</label>
                        <textarea name="Plan_of_Care" placeholder="Decribe Plan of Care"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div style="display: flex;justify-content:center;margin-top:20px;">
            <button type="submit" class="btn btn-success" style="font-size: 25px;width: 200px;">Save</button>
        </div>
    </div>

    <input type="hidden" value="{{ optional($patDetails)->PATIENT_NAME }}" id="patient_name">
    <input type="hidden" value="{{ optional($patDetails)->REG_NO }}" id="regno">
    <input type="hidden" value="{{ optional($patDetails)->age }}" id="age">
    <input type="hidden" value="{{ optional($patDetails)->SEX }}" id="sex">
</form>


<script src="{{ asset('Sweetalerts/sweetalert2.all.min.js') }}"></script>
@php
$regnos= optional($patDetails)->REG_NO;
    $currentRecord = \App\Models\Opdpart::select('data','regno')
        ->where('type', 'spine')
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

    document.addEventListener('DOMContentLoaded', () => {
        populateForm(document.getElementById('myspine'), formDataFromDB);
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
    document.querySelectorAll('input[type="text"], textarea').forEach(input => {
        input.addEventListener('change', () => {
            input.value = input.value.trim();
        });
    });

    document.getElementById('myspine').addEventListener('submit', function(e) {
        e.preventDefault();
        const json = getFormDataAsJSON(this); // <-- works because 'this' is the form
        if (!json) return;

        $.ajax({
            url: '{{ route('save.spine.details') }}',
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
        json.type = "spine";
        return json;
    }
</script>
