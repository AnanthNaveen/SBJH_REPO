
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Include SweetAlert2 CSS -->
<link rel="stylesheet" href="{{ asset('Sweetalerts/sweetalert2.min.css') }}">




<style> 
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
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
        /* outline: none; */
        /* border-color: #418a68; */
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
    .label1{
        font-weight: 400;
        color: #4a5568;
        margin-bottom: 1px;
        display: block;
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        background: white;
        border-radius: 15px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        overflow: hidden;
    }
    .section {
        margin-bottom: 10px;
        /* background: #f8f9ff; */
        background: #f1fbef;
        border-radius: 12px;
        padding: 25px;
        /* border-left: 4px solid #667eea; */
        border-left: 4px solid #418a68;
    }
    .row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }
    .col {
        background: #fafdfe;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
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
        /* border-bottom: 2px solid #e2e8f0; */
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
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #e2e8f0;
    }

    th {
        background: linear-gradient(135deg, #126328 0%,rgb(103, 156, 37) 100%);
        color: white;
        font-weight: 500;
    }

    td input[type="text"] {
        width: 100%;
        max-width: none;
        margin: 0;
    }
    .flexdiv{
        display: flex;
        gap: 10px;
        align-items: center;
    }
    .flexdiv1{
        display:flex;
        gap: 10px;
        margin: 8px;  
        align-items: center;
    }
    .header {
        background: linear-gradient(135deg, #126328 0%,rgb(103, 156, 37) 100%);
        color: white;
        padding: 10px;
        text-align: center;
        border-radius: 22px;
        margin: 20px 0; 
        
    }

    .header h1 {
        font-size: 1.9em;
        /* margin-bottom: 10px; */
        font-weight: 400;
    }
    .inline_row{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    input:disabled,
    textarea:disabled{
        background-color: #f0f0f0;  /* light grey */
        color: #999;               /* optional: dull text color */
        cursor: not-allowed;       /* optional: pointer feedback */
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
            /* flex-direction: column; */
            /* gap: 10px; */
        }
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery UI -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<form action="" id="myForm">
    <div>
        <div class="header">
            <h1>Knee Case Sheet</h1>
        </div>
        <div class="section">
            <div class="row">
                <div class="col">
                    <h5>1.Chief Complaint</h5>
                    <div class="highlight">
                        Pain. 
                    </div>
                    
                    <div class="form-group" data-group="side" data-exclusive="true">
                        <label class="label1">Side:</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="side" value="Right">
                                <label>Right</label>
                            </div>

                            <div class="checkbox-item">
                                <input type="checkbox" name="side" value="Left">
                                <label>Left</label>
                            </div>

                            <div class="checkbox-item">
                                <input type="checkbox" name="side" value="Bilateral">
                                <label>Bilateral</label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="" class="label1">Duration:</label>
                        <input type="text" class="inline-input" placeholder="Describe Duration" name="duration">
                    </div>

                    <div class="form-group" data-group="nature" data-exclusive="true">
                        <label for="" class="label1">Nature:</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="nature" value="New">
                                <label for="">New</label> 
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="nature" value="Recurrent"> 
                                <label for="">Recurrent</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="nature" value="Chronic"> 
                                <label for="">Chronic</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="label1">Onset:</label>
                        <div class="checkbox-group" data-group="onset" data-exclusive="true">
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
                        <label for="" class="label1">First occures at:</label>
                        <div class="checkbox-group" data-group="first_occures_at" data-exclusive="true">
                            <div class="checkbox-item">
                                <input type="checkbox" name="first_occures_at" value="Home"> 
                                <label for="">Home</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="first_occures_at" value="Work"> 
                                <label for="">Work</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="first_occures_at" value="Gym"> 
                                <label for="">Gym</label> 
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="first_occures_at" value="School"> 
                                <label for="">School</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="first_occures_at" value="Other" class="toggle-input" data-target="#input1"> 
                                <label for="">Other</label>
                            </div>
                            <input type="text" placeholder="Specify other location" name="First_occures_at_other" class="inline-input" id="input1" disabled> 
                        </div>
                        <div class="form-group" style="margin-top: 15px;">
                            <label class="label1">Provocation/Cause:</label>
                            <textarea name="Provocation_Cause" id="" placeholder=" Describe Provocation/Cause"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h5>2. Symptom Evolution</h5>
                    <p style="margin-bottom: 15px; color: #666;">(Check all that apply)</p>
                    <div data-group="Symptom_Evolution">
                            <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" id="intermittent" name="symptom_evolution" value="Intermittent">
                                <label for="intermittent">Intermittent</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="constant" name="symptom_evolution" value="Constant">
                                <label for="constant">Constant</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="mildly" name="symptom_evolution" value="Mildly_Progressive">
                                <label for="mildly">Mildly Progressive</label>
                            </div>
                        </div>

                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" id="moderately" name="symptom_evolution" value="Moderately_Progressive">
                                <label for="moderately">Moderately Progressive</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="severely" name="symptom_evolution" value="Severely_Progressive">
                                <label for="severely">Severely Progressive</label>
                            </div>
                        </div>

                    </div>
                    

                    <div class="form-group">
                        <div style=" margin-top: 10px;">
                            <div class="checkbox-group">
                                <div class="checkbox-item">
                                    <input type="checkbox" id="improving" name="symptom_evolution" value="improving">
                                    <label for="improving">Improving (</label>
                                </div>
                                <div  class="checkbox-group" style="margin-bottom:0;" data-group="improving1" data-exclusive="true">
                                    <div class="checkbox-item">
                                    <input type="checkbox" id="gradually" name="improving1" value="Gradually" disabled>
                                    <label for="gradually">Gradually</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="quickly" name="improving1" value="Quickly" disabled>
                                        <label for="quickly">Quickly</label>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="resolved" name="improving1" value="Resolved" disabled>
                                        <label for="resolved">Resolved )</label>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h5>3.Presenting Symptoms</h5>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="presenting_symptoms" value="Pain_with_daily_activity"> 
                                <label for="">Pain with daily activity</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="presenting_symptoms" value="Night_Pain"> 
                                <label for="">Night Pain</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="presenting_symptoms" value="Instability"> 
                                <label for="">Instability</label>
                            </div>
                        </div>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="presenting_symptoms" value="Stiffness"> 
                                <label for="">Stiffness</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="presenting_symptoms" value="Weakness"> 
                                <label for="">Weakness</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="presenting_symptoms" value="Mechanical_symptoms"> 
                                <label for="">Mechanical symptoms</label>
                            </div>
                        </div>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="presenting_symptoms" value="Numbness"> 
                                <label for="">Numbness</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="presenting_symptoms" value="Hypersensitivity"> 
                                <label for="">Hypersensitivity</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="presenting_symptoms" value="Fatigue"> 
                                <label for="">Fatigue</label>
                            </div>
                        </div>

                        <div class="subsection">
                            <h6>Pain Type:</h6>
                            <div class="checkbox-group">
                                <div class="checkbox-item">
                                    <input type="checkbox" name="pain_type" value="Sharp"> 
                                    <label for="">Sharp</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="pain_type" value="Dull"> 
                                    <label for="">Dull</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="pain_type" value="Aching"> 
                                    <label for="">Aching</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="pain_type" value="Throbbing"> 
                                    <label for="">Throbbing</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="pain_type" value="Deep"> 
                                    <label for="">Deep</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="pain_type" value="Shock_like"> 
                                    <label for="">Shock-like</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="pain_type" value="Shooting"> 
                                    <label for="">Shooting</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="label1">Pain Score (1-10):</label>
                            <input type="text" class="inline-input" placeholder="Describe Pain Score" name="Pain_Score">
                        </div>
                        <div class="form-group">
                            <label for="" class="label1">Pain Nature:</label>
                            <div class="checkbox-group" data-group="pain_nature" data-exclusive="true">
                                <div class="checkbox-item">
                                    <input type="checkbox" name="Pain_Nature" value="Localized"> 
                                    <label for="">Localized</label> 
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="Pain_Nature" value="Diffuse">  
                                    <label for="">Diffuse</label>   
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="label1">Radiation:</label>
                            <div class="checkbox-group" data-group="radiation">
                                <div class="checkbox-item">
                                    <input type="checkbox" name="radiation" value="No"> 
                                    <label for="">No</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="radiation" value="Above_foot"> 
                                    <label for="">Above foot</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="radiation" value="Top_of_foot"> 
                                    <label for="">Top of foot</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="radiation" value="Below_foot"> 
                                    <label for="">Below foot</label>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <div class="section">
            <div class="row">
                <div class="col">
                    <h5>4.Past Knee History</h5>
                    <div class="checkbox-group" data-group="past_knee_history1" data-exclusive="true">
                        <div class="checkbox-item">
                            <input type="checkbox" name="past_knee_history1" value="None"> 
                            <label for="">None</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="past_knee_history1" value="Previous_injury/surgery" class="toggle-input" data-target="#input2">
                             <label for="">Previous injury/surgery:</label> 
                            </div>
                    </div>
                    <textarea name="Previous_injury_surgery_value" id="input2" placeholder="Describe previous injury/surgery" disabled></textarea>
                        <div class="form-group mt-3">
                            <div class="checkbox-group" data-group="past_knee_history2" data-exclusive="true">
                                <div class="checkbox-item">
                                    <input type="checkbox" name="past_knee_history2" value="Patellar_Dislocation"> 
                                    <label for="">Patellar Dislocation</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="past_knee_history2" value="Knee_Dislocation"> 
                                    <label for="">Knee Dislocation</label>
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="" class="label1">Total Dislocations:</label>
                        <textarea name="Total_Dislocations" id="" placeholder="Describe Total Dislocations"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="label1">First Dislocation Cause:</label>
                         <textarea name="First_Dislocation_Cause" id="" placeholder="Describe First Dislocation Cause"></textarea>
                    </div>
                    <div class="subsection">
                        <h6>Reduction:</h6>
                        <div class="checkbox-group" data-group="reduction" data-exclusive="true">
                            <div class="checkbox-item">
                                <input type="checkbox" name="reduction" value="Spontaneous">
                                <label for="">Spontaneous</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="reduction" value="Manual"> 
                                <label for="">Manual</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="reduction" value="ER">
                                <label for="">ER</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div data-group="Aggravating_Factors">
                        <h5>5.Aggravating Factors</h5>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Standing"> 
                                <label for="">Standing</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Walking"> 
                                <label for="">Walking</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Running"> 
                                <label for="">Running</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Stairs"> 
                                <label for="">Stairs</label>
                            </div>
                        </div>

                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Squatting"> 
                                <label for="">Squatting</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Cycling"> 
                                <label for="">Cycling</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Jumping"> 
                                <label for="">Jumping</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Work_Tasks"> 
                                <label for="">Work Tasks</label>
                            </div>
                        </div>

                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Exercise"> 
                                <label for="">Exercise</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Pivoting"> 
                                <label for="">Pivoting</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Nothing"> 
                                <label for="">Nothing</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Aggravating_factors" value="Others" class="toggle-input" data-target="#input3"> 
                                <label for="">Others:</label>
                            </div>
                            <input type="text" placeholder="Specify other aggravating factors" name="Aggravating_factors_others" id="input3" disabled>
                        </div>
                    </div>
                    <div class="subsection" data-group="Relieving_Factors">
                        <h6>Relieving Factors:</h6>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Relieving_factors" value="Rest"> 
                                <label for="">Rest</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Relieving_factors" value="NSAIDs"> 
                                <label for="">NSAIDs</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Relieving_factors" value="Ice"> 
                                <label for="">Ice</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Relieving_factors" value="Heat"> 
                                <label for="">Heat</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Relieving_factors" value="Therapy"> 
                                <label for="">Therapy</label>
                            </div>
                        </div>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Relieving_factors" value="Injection"> 
                                <label for="">Injection</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Relieving_factors" value="Massage"> 
                                <label for="">Massage</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Relieving_factors" value="Stretching"> 
                                <label for="">Stretching</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Relieving_factors" value="Other" class="toggle-input" data-target="#input4"> 
                                <label for="">Other:</label>
                            </div>
                            <input type="text" placeholder="Specify other relieving factors" name="Relieving_factors_others" id="input4" disabled> 
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="section">
            <div class="row">
                <div class="col">
                    <h5>6.Treatment History</h5>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Treatment_history" value="None"> 
                            <label for="">None</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Treatment_history" value="NSAIDs"> 
                            <label for="">NSAIDs</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Treatment_history" value="Narcotics"> 
                            <label for="">Narcotics</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Treatment_history" value="Injections"> 
                            <label for="">Injections</label>
                        </div>
                    </div>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Treatment_history" value="Physical_therapy"> 
                            <label for="">Physical therapy</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Treatment_history" value="Chiropractic"> 
                            <label for="">Chiropractic</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="Treatment_history" value="Surgery"> 
                            <label for="">Surgery</label>
                        </div>
                    </div>

                    <div class="subsection">
                        <h6>Rehab Response:</h6>
                        <div class="checkbox-group" data-group="rehab_response" data-exclusive="true">
                            <div class="checkbox-item">
                                <input type="checkbox" name="rehab_response" value="No_benefit"> 
                                <label for="">No benefit</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="rehab_response" value="Mild"> 
                                <label for="">Mild</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="rehab_response" value="Moderate"> 
                                <label for="">Moderate</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="rehab_response" value="Significant"> 
                                <label for="">Significant</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="rehab_response" value="Resolved"> 
                                <label for="">Resolved</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="subsection">
                        <h6>Injection Details:</h6>
                        <div class="form-group">
                            <label for="" class="label1">Type:</label>
                            <input type="text" class="inline-input" placeholder="Describe Type" name="Injection_Details_type">
                            <label for="" class="label1">Date:</label>
                            <input type="text" class="inline-input" id="Injection_Details_display" readonly>
                            <!-- Hidden actual value -->
                            <input type="hidden" id="Injection_Details" name="Injection_Details_date">                            <label for="" class="label1">Location:</label> 
                            <input type="text" placeholder="Describe Location" class="inline-input" name="Injection_Details_location">
                        </div>
                    </div>

                    <div class="subsection">
                        <h6>Imaging Done:</h6>
                        <div class="checkbox-group" data-group="imaging_done" data-exclusive="true">
                            <div class="checkbox-item">
                                <input type="checkbox" name="imaging_done" value="x-ray"> 
                                <label for="">X-ray</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="imaging_done" value="MRI"> 
                                <label for="">MRI</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="imaging_done" value="CT"> 
                                <label for="">CT</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="imaging_done" value="Bone_Scan"> 
                                <label for="">Bone Scan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="label1">Date:</label>
                            <input type="text" class="inline-input" id="imaging_done_display" readonly>
                            <!-- Hidden actual value -->
                            <input type="hidden" id="imaging_done" name="imaging_done_date">
                        </div>
                        <div class="form-group">
                            <label for="" class="label1">Reported Findings:</label>
                            <textarea name="Reported_Findings_value" id="" placeholder="Describe Reported Findings"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h5>7.Goal of Treatment</h5>
                    <div data-group="Goal_of_Treatment">
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="goal_of_treatment" value="Decrease_Pain">
                                <label for="">Decrease Pain</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="goal_of_treatment" value="Increase_ROM"> 
                                <label for="">Increase ROM</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="goal_of_treatment" value="Avoid_Surgery"> 
                                <label for="">Avoid Surgery</label>
                            </div>
                        </div>
                        
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="goal_of_treatment" value="Return_to_Activity">
                                <label for="">Return to Activity</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="goal_of_treatment" value="Other" class="toggle-input" data-target="#input5"> 
                                <label for="">Other:</label>
                                <textarea  id="input5"  name="goal_of_treatment_others_value" placeholder="Describe Others" disabled ></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h5>8.Review of Systems</h5>
                        <div class="">
                            <h6 style="color: #418a68;margin-bottom: 10px;font-size: 1em;">Musculoskeletal:</h6>
                            <div class="checkbox-group">
                                <div class="checkbox-item">
                                    <input type="checkbox" name="musculoskeletal" value="Joint_Pain"> 
                                    <label for="">Joint Pain</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="musculoskeletal" value="Back_Pain"> 
                                    <label for="">Back Pain</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="musculoskeletal" value="Swelling"> 
                                    <label for="">Swelling</label>
                                </div>
                            </div>
                        </div>
                        <div class="subsection">
                            <h6>Neurologic:</h6>
                            <div class="checkbox-group">
                                <div class="checkbox-item">
                                    <input type="checkbox" name="neurologic" value="Numbness"> 
                                    <label for="">Numbness</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="neurologic" value="Weakness"> 
                                    <label for="">Weakness</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" name="neurologic" value="Headache"> 
                                    <label for="">Headache</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="">Others:</label> 
                            <textarea name="neurologic_others_value" id="" placeholder="Describe Others"></textarea>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h5>9.Past Medical History</h5>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="past_medical_history" value="Diabetes"> 
                                <label for="">Diabetes</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="past_medical_history" value="Hypertension"> 
                                <label for="">Hypertension</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="past_medical_history" value="Arthritis"> 
                                <label for="">Arthritis</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="past_medical_history" value="None"> 
                                <label for="">None</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Others:</label>
                            <textarea name="past_medical_history_others_value" id="" placeholder="Decribe Others" ></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="row">
                <div class="col">
                    <h5>10.Past Surgical History</h5>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="past_surgical_history" value="Knee_Arthroscopy"> 
                            <label for="">Knee Arthroscopy</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="past_surgical_history" value="Knee_Replacement"> 
                            <label for="">Knee Replacement</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="past_surgical_history" value="None"> 
                            <label for="">None</label>
                        </div>
                    </div>
                    <div class="form-group">
                         <label for="">Others:</label>
                         <textarea name="past_surgical_history_others_value" id="" placeholder="Decribe Others"></textarea>
                    </div>
                    <div class="mt-5">
                        <h5>11.Family History</h5>
                        <div class="checkbox-group" data-group="family_history" data-exclusive="true">
                            <div class="checkbox-item">
                                <input type="checkbox" name="family_history" value="None_contributory"> 
                                <label for="">None-contributory</label>
                            </div>
                       
                            <div class="checkbox-item">
                                <input type="checkbox" name="family_history" value="Relevant_history" class="toggle-input" data-target="#input6"> 
                                <label for="">Relevant history:</label>
                            </div>
                            <textarea name="family_history_relevant_history_value" id="input6" placeholder="Describe Relevant History" disabled></textarea> 
                        </div>
                  </div>
                </div>
                <div class="col">
                    <h5>12.Social History</h5>
                    <div>
                        <h6 style="color: #418a68;margin-bottom: 10px;font-size: 1em;">Marital Status:</h6>
                        <div class="checkbox-group" data-group="marital_status" data-exclusive="true">
                            <div class="checkbox-item">
                                <input type="checkbox" name="marital_status" value="Single"> 
                                <label for="">Single</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="marital_status" value="Married"> 
                                <label for="">Married</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="marital_status" value="Divorced"> 
                                <label for="">Divorced</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="marital_status" value="Widowed"> 
                                <label for="">Widowed</label>
                            </div>
                        </div>  
                    </div>
                    <div class="form-group">
                         <label for="" class="label1">Occupation:</label>
                         <input type="text" placeholder="Describe Occupation:" name="Occupation">
                    </div>
                    <div class="subsection">
                        <h6>Alcohol:</h6>
                        <div class="checkbox-group" data-group="alcohol" data-exclusive="true">
                            <div class="checkbox-item">
                                <input type="checkbox" name="alcohol" value="None"> 
                                <label for="">None</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="alcohol" value="Yes" class="toggle-input" data-target="#input7"> 
                                <label for="">Yes</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="text" placeholder="Drinks/week" name="alcohol_value" id="input7" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="subsection">
                        <h6>Tobacco:</h6>
                        <div class="checkbox-group" data-group="tobacco" data-exclusive="true">
                            <div class="checkbox-item">
                                <input type="checkbox" name="tobacco" value="None"> 
                                <label for="">None</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="tobacco" value="Current">
                                <label for="">Current</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="tobacco" value="Former" class="toggle-input" data-target="#input8">
                                <label for="">Former:</label>
                            </div>
                            <input type="text" placeholder="Former quit Since" name="tobacco_value" id="input8" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
                <div class="row">
                    <div class="col text-center">
                    <h5>13.Allergies & Medications</h5>
                    <div style="display:flex;justify-content:center;gap:20px">
                        <div class="form-group">
                            <label for="">Allergies:</label>
                            <textarea name="Allergies" id="" placeholder="Describe Allergies"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Reaction:</label>
                            <textarea name="Reaction" id="" placeholder="Describe Reaction"></textarea>
                        </div>
                        
                    </div>

                    <div class="subsection">
                        <h6>Current Medications:</h6>
                        <div class="inline_row">
                             <label for="">1.</label> <textarea name="Current_Medications_1" id=""></textarea> 
                              <label for="">Dose:</label> <textarea name="Current_Medications_1_dose" id=""></textarea> 
                               <label for="">Freq:</label> <textarea name="Current_Medications_1_freq" id=""></textarea>
                        </div>
                        <div class="pt-2 inline_row">
                             <label for="">2.</label> <textarea name="Current_Medications_2" id=""></textarea> 
                              <label for="">Dose:</label> <textarea name="Current_Medications_2_dose" id=""></textarea>  
                              <label for="">Freq:</label> <textarea name="Current_Medications_2_freq" id=""></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div>
        <div class="header">
            <h1>Knee Examination</h1>
        </div>
        <div class="section">
            <div class="row">
                <div class="col">
                    <h5>1.Observation</h5>
                    <label for="" class="label1">General Appearance:</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="observation_WNL"> 
                            <label for="">WNL</label>
                        </div>
                    </div>

                    <label for="" class="label1">Development:</label>
                    <div class="checkbox-group" data-group="development" data-exclusive="true"> 
                        <div class="checkbox-item">
                            <input type="checkbox" name="development" value="Good">  
                            <label for="">Good</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="development" value="Fair">  
                            <label for="">Fair</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="development" value="Poor"> 
                            <label for="">Poor</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="label1">Posture:</label>
                        <input type="text" placeholder="Describe Posture" name="Posture">
                    </div>

                    <div class="form-group">
                    <label for="" class="label1">Skin (bruising, scars):</label>
                    <input type="text" placeholder="Describe Skin" name="Skin">
                    </div>

                    <label for="" class="label1">Swelling:</label>
                    <div class="checkbox-group" data-group="swelling" data-exclusive="true">
                        <div class="checkbox-item">
                            <input type="checkbox" name="swelling" value="Present"> 
                            <label for="">Present</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="swelling" value="Absent"> 
                            <label for="">Absent</label>
                        </div>
                    </div>

                    <label for="" class="label1">Asymmetry:</label>
                    <div class="checkbox-group" data-group="asymmetry" data-exclusive="true">
                        <div class="checkbox-item">
                            <input type="checkbox" name="asymmetry" value="Yes"> 
                            <label for="">Yes</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="asymmetry" value="No"> 
                            <label for="">No</label>
                        </div>
                    </div>

                    <div class="subsection">
                        <h6>Specific Findings:</h6>
                        <label for="" class="label1">Toe:</label> 
                        <div class="checkbox-group" data-group="toe" data-exclusive="true">
                            <div class="checkbox-item">
                                <input type="checkbox" name="toe" value="In"> 
                                <label for="">In</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="toe" value="Out"> 
                                <label for="">Out</label>
                            </div>
                        </div>

                        <label for="" class="label1">Arch:</label> 
                        <div class="checkbox-group" data-group="arch" data-exclusive="true">
                            <div class="checkbox-item">
                                <input type="checkbox" name="arch" value="Low"> 
                                <label for="">Low</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="arch" value="High"> 
                                <label for="">High</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="label1">Patella Position:</label>
                            <textarea name="Patella_Position" id="" placeholder="Describe Patella Position"></textarea>
                        </div>
                    
                        <label for="" class="label1">Genu:</label>
                        <div class="checkbox-group" data-group="genu" data-exclusive="true">
                            <div class="checkbox-item">
                                <input type="checkbox" name="genu" value="varum"> 
                                <label for="">varum</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="genu" value="valgum"> 
                                <label for="">valgum</label>
                            </div>
                        </div>

                        <label for="" class="label1">Femur Rotation:</label>
                        <div class="checkbox-group" data-group="femur_rotation" data-exclusive="true">
                            <div class="checkbox-item">
                                <input type="checkbox" name="femur_rotation" value="Internal"> 
                                <label for="">Internal</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="femur_rotation" value="External"> 
                                <label for="">External</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="label1">Iliac Crest Height:</label>
                            <textarea name="Iliac_Crest_Height" id="" placeholder="Describe Iliac Crest Height"></textarea>
                        </div>


                        <label for="" class="label1">Lumbar Lordosis:</label>
                        <div class="checkbox-group" data-group="lumbar_lordosis" data-exclusive="true">
                            <div class="checkbox-item">
                                <input type="checkbox" name="lumbar_lordosis" value="Hyper">  
                                <label for="">Hyper</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="lumbar_lordosis" value="Hypo">   
                                <label for="">Hypo</label>
                            </div>
                        </div>
                        <label for="" class="label1">Knee:</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Knee_Hyperextended">  
                                <label for="">Hyperextended</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="label1">Leg Length:</label>
                            <textarea name="Leg_Length" id="" placeholder="Describe Leg Length"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="" class="label1">Gait Analysis:</label>
                            <textarea name="Gait_Analysis" id="" placeholder="Describe Gait Analysis"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h5>2.ROM</h5>
                    <div class="checkbox-group" data-group="rom" data-exclusive="true">
                        <div class="checkbox-item">
                            <input type="checkbox" name="rom" value="WNL"> 
                            <label for="">WNL</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="rom" value="Pain_at_end_ROM"> 
                            <label for="">Pain at end ROM</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="rom" value="Abnormal_motion"> 
                            <label for="">Abnormal motion</label>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Movement</th>
                                <th>Active passive</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Flexion(0-150°)</td>
                                <td><input type="text" name="Flexion_0_150"></td>
                            </tr>
                            <tr>
                                <td>Extension(0°)</td>
                                <td><input type="text" name="Extension_0"></td>
                            </tr>
                            <tr>
                                <td>Internal Rotation</td>
                                <td><input type="text" name="Internal_Rotation"></td>
                            </tr>
                            <tr>
                                <td>External Rotation</td>
                                <td><input type="text" name="External_Rotation"></td>
                            </tr>
                        </tbody>

                    </table>

                    <div class="mt-5">
                        <h5>3.Palpation Findings</h5>
                        <div class="checkbox-group" >
                            <div class="checkbox-item">
                                <input type="checkbox" name="Palpation_Findings" value="WNL"> 
                                <label for="">WNL</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Palpation_Findings" value="Pain"> 
                                <label for="">Pain</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Palpation_Findings" value="Spasm"> 
                                <label for="">Spasm</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Palpation_Findings" value="Edema"> 
                                <label for="">Edema</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Palpation_Findings" value="Fibrotic"> 
                                <label for="">Fibrotic</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Palpation_Findings" value="MFTP"> 
                                <label for="">MFTP</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Palpation_Findings" value="Ache"> 
                                <label for="">Ache</label>
                            </div>
                            
                        </div>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Palpation_Findings" value="Tingling"> 
                                <label for="">Tingling</label>             
                            </div>
                        </div>

                        <div class="subsection">
                            <h6>Palpated Structures:</h6>
                            <div >
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Quadriceps">  
                                    <label for="">Quadriceps</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Patella_facts,bursa,ligament"> 
                                    <label for="">Patella (facets,bursa,ligament)</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Tibial_Tuberosity"> 
                                    <label for="">Tibial Tuberosity</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Retinaculum_Plica"> 
                                    <label for="">Retinaculum / Plica</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Adductor_Canal"> 
                                    <label for="">Adductor Canal</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Pes_Anserine"> 
                                    <label for="">Pes Anserine</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Medial_Joint_&_Meniscus"> 
                                    <label for="">Medial Joint & Meniscus</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Medial_Femoral_Condyle"> 
                                    <label for="">Medial Femoral Condyle</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="MCL_&_Capsule"> 
                                    <label for="">MCL & Capsule</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Medial_Hamstrings"> 
                                    <label for="">Medial Hamstrings</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Popliteal_Fossa"> 
                                    <label for="">Popliteal Fossa</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Gastrocnemius_Heads"> 
                                    <label for="">Gastrocnemius Heads</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Bakers_Cyst"> 
                                    <label for="">Baker's Cyst</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Lateral_Hamstrings"> 
                                    <label for="">Lateral Hamstrings</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="IT_Band"> 
                                    <label for="">IT Band </label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Popliteus"> 
                                    <label for="">Popliteus</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="LCL_&_Capsule"> 
                                    <label for="">LCL & Capsule</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Lateral_Joint_&_Meniscus">  
                                    <label for="">Lateral Joint & Meniscus</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Lateral_Femoral_Condyle"> 
                                    <label for="">Lateral Femoral Condyle</label>
                                </div>
                                <div class="flexdiv">
                                    <input type="checkbox" name="palpated_structure" value="Lateral_Tibial_Condyle">  
                                    <label for="">Lateral Tibial Condyle</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="section">
            <div class="row">
                <div class="col">
                    <h5>4.Vascular Exam</h5>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Vascular_Exam_WML"> 
                            <label for="">WNL</label>
                        </div>
                    </div>
                    <div class="subsection">
                        <h6>Pulses:</h6>
                        <div class="form-group">
                         <label for="" class="label1">Popliteal Pulse:</label>
                         <textarea name="Popliteal_Pulse" id="" placeholder="Decribe Popliteal Pulse"></textarea>
                        </div>
                        <div class="form-group">
                         <label for="" class="label1">Tibial Pulse:</label>
                         <textarea name="Tibial_Pulse" id="" placeholder="Decribe Tibial Pulse"></textarea>
                        </div>
                        <div class="form-group">
                         <label for="" class="label1">Dorsalis Pedis:</label>
                         <textarea name="Dorsalis_Pedis" id="" placeholder="Decribe Dorsalis Pedis"></textarea>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <h5>5.Orthopedic Tests</h5>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Orthopedic_Tests_WNL"> 
                            <label for="">WNL</label>
                        </div>
                    </div>
                    <div>
                        <div class="flexdiv1">
                            <input type="checkbox" name="Orthopedic_Tests" value="Varus_Stress_0_30"> 
                            <label for="">Varus Stress (0° / 30°)</label>
                        </div>

                        <div class="flexdiv1">
                            <input type="checkbox" name="Orthopedic_Tests" value="Valgus_Stress_0_30">
                            <label for="">Valgus Stress (0° / 30°)</label>
                        </div> 
             
                        <div class="flexdiv1">
                            <input type="checkbox" name="Orthopedic_Tests" value="External_rotation_recurvatum_test">
                            <label for="">External rotation recurvatum test</label>
                        </div> 

                        <div class="flexdiv1">
                            <input type="checkbox" name="Orthopedic_Tests" value="Dial_test"> 
                            <label for="">Dial test</label>
                        </div>
                        <div class="flexdiv1">
                            <input type="checkbox" name="Orthopedic_Tests" value="Anterior_drawer"> 
                            <label for="">Anterior drawer</label>
                        </div>
                        <div class="flexdiv1">
                            <input type="checkbox" name="Orthopedic_Tests" value="Lachhman_test"> 
                            <label for="">Lachhman test</label>
                        </div>
                        <div class="flexdiv1">
                            <input type="checkbox" name="Orthopedic_Tests" value="Posterior_drawer"> 
                            <label for="">Posterior drawer</label>
                        </div>
                        <div class="flexdiv1">
                            <input type="checkbox" name="Orthopedic_Tests" value="Godfrey_sag_test"> 
                            <label for="">Godfrey sag test</label>
                        </div>
                        <div class="flexdiv1">
                            <input type="checkbox" name="Orthopedic_Tests" value="Mcmurray_test"> 
                            <label for="">Mcmurray test</label>
                        </div>
                        <div class="flexdiv1">
                            <input type="checkbox" name="Orthopedic_Tests" value="Apleys_Compression"> 
                            <label for="">Apley's Compression</label>
                        </div>
                        <div class="flexdiv1">
                            <input type="checkbox" name="Orthopedic_Tests" value="Apleys_Distraction"> 
                            <label for="">Apley's Distraction</label>
                        </div>
                        <div class="flexdiv1">
                            <input type="checkbox" name="Orthopedic_Tests" value="Thessaly_test"> 
                            <label for="">Thessaly test</label>
                        </div>
                        <div class="flexdiv1">
                            <input type="checkbox" name="Orthopedic_Tests" value="Patella_apprehension_test">  
                            <label for="">Patella apprehension test</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="row">
                <div class="col">
                    <h5>6.Neurologic & Motor Exam</h5>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="Neurologic_&_Motor_Exam_WNL"> 
                            <label for="">WNL</label>
                        </div>
                    </div>
                    <label for="" class="label1">Sensation:</label>
                    <div class="checkbox-group" data-group="sensation" data-exclusive="true">
                        <div class="checkbox-item">
                            <input type="checkbox" name="sensation" value="Light_Touch"> 
                            <label for="">Light Touch</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" name="sensation" value="Sharp/Dull"> 
                            <label for="">Sharp/Dull</label>
                        </div>
                    </div>
                    <div class="subsection">
                            <h6>Reflexes (0-5):</h6>
                            
                            <div class="form-group">
                                <label for="" class="label1">Patellar (L4):</label>
                                <input type="text" placeholder="Describe Patellar (L4)" name="Patellar_L4" >
                            </div>
                            <div class="form-group">
                                <label for="" class="label1">Hamstring (L5):</label>
                                <input type="text" placeholder="Describe Hamstring (L5)" name="Hamstring_L5" >
                            </div>
                            <div class="form-group">
                                <label for="" class="label1">Achilles (S1):</label>
                                <input type="text" placeholder="Describe Achilles (S1)" name="Achilles_S1" >
                            </div>
                            <div class="form-group">
                                <label for="" class="label1">Babinski:</label>
                                <input type="text" placeholder="Describe Babinski" name="Babinski" >
                            </div>
                    </div>

                    <div class="subsection">
                        <h6>Motor Testing (0-5):</h6>
                        <div class="checkbox-group" >
                            <div class="checkbox-item">
                                <input type="checkbox" name="Motor_Testing_0_5" value="Hamstrings_L4_S1"> 
                                <label for="">Hamstrings (L4-S1)</label>
                            </div>
                        </div>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Motor_Testing_0_5" value="Quadriceps_L2_L4"> 
                                <label for="">Quadriceps (L2-L4)</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h5>7.Additional Exams</h5>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="additional_exams" value="Hip_Exam">  
                            <label for="">Hip Exam</label>
                        </div>
                    </div>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="additional_exams" value="Ankle_Exam">  
                            <label for="">Ankle Exam</label>
                        </div>
                    </div>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" name="additional_exams" value="Lumbosacral_Exam">  
                            <label for="">Lumbosacral Exam</label>
                        </div>
                    </div>
                    <div class="subsection">
                        <h6>Differential Diagnosis (DDx):</h6>
                        <div class="form-group" data-group="Differential_Diagnosis">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Clinical_Impression" class="toggle-input" data-target="#input9">
                                <label for="" class="label1">Clinical Impression:</label>
                            </div>
                            <textarea name="Clinical_Impression_value" id="input9" placeholder="Describe Clinical Impression" disabled></textarea>
                        </div>
                        <div class="form-group" data-group="plan">
                            <div class="checkbox-item">
                                <input type="checkbox" name="plan" class="toggle-input" data-target="#input10">  
                                <label for="" class="label1">Plan:</label> 
                            </div>
                            <textarea name="Plan_value" id="input10" placeholder="Describe Plan" disabled></textarea>
                        </div>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" name="Differential_Diagnosis" value="Imaging">
                                <label for="">Imaging</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Differential_Diagnosis" value="Physical_Therapy">
                                <label for="">Physical Therapy</label> 
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Differential_Diagnosis" value="Surgery">
                                <label for="">Surgery</label> 
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" name="Differential_Diagnosis" value="Other">
                                <label for="">Other</label> 
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div style="display: flex;justify-content:center;margin-top:20px;">
                <button type="submit" class="btn btn-success" style="font-size: 25px;width: 200px;">Save</button>
            </div>
        </div>
    </div>
    <div>
    </div>
    <input type="hidden" value="{{optional($patDetails)->PATIENT_NAME}}" id="patient_name">
    <input type="hidden" value="{{optional($patDetails)->REG_NO}}" id="regno">
    <input type="hidden" value="{{optional($patDetails)->age}}" id="age">
    <input type="hiddenas" value="{{optional($patDetails)->SEX}}" id="sex">
</form>

<!-- Include SweetAlert2 JS before </body> -->
<script src="{{ asset('Sweetalerts/sweetalert2.all.min.js') }}"></script>
<script>
    const allergyData = @json($allergy_data);
    $(function() {
        $("#Injection_Details_display").datepicker({
            dateFormat: "dd-mm-yy",          // format for display
            altField: "#Injection_Details",  // hidden field to store actual value
            altFormat: "yy-mm-dd"            // format for saving in json
        });

        $("#imaging_done_display").datepicker({
            dateFormat: "dd-mm-yy",
            altField: "#imaging_done",
            altFormat: "yy-mm-dd"
        });
    });

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
                                }
                            }
                        }
                    });
                }
                // For any checkbox (exclusive or not), handle its own related input
                if (relatedInput) {
                    if (checkbox.checked) {
                        relatedInput.disabled = false;
                    } else {
                        relatedInput.disabled = true;
                        relatedInput.value = '';
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
    $(document).ready(function () {
        $('#improving').on('change',function(){
            $('#gradually').prop('disabled', !this.checked);
            $('#quickly').prop('disabled', !this.checked);
            $('#resolved').prop('disabled', !this.checked);
            if(!this.checked){
                $('#gradually').prop('checked', false);
                $('#quickly').prop('checked', false);
                $('#oresolvede').prop('checked', false);
            }
        });
    });


    function getFormDataAsJSON(formElement) {
        const formData = new FormData(formElement);
        const json = {};
        for (const [key, value] of formData.entries()) {  //formData.entries() gives you [key, value] pairs, making the loop more intuitive.
            if (!value) continue; // skip empty values

            if (json[key] === undefined) {
                json[key] = value;
            } else {
                json[key] = [].concat(json[key], value);
            }   
        }
        json.name =document.getElementById('patient_name').value;
        json.regno =document.getElementById('regno').value;
        json.age =document.getElementById('age').value;
        json.sex =document.getElementById('sex').value;
        json.allergies = allergyData;
        json.consultant ="sivamurugan";
        json.type = "knee";
        return json;
    }


    document.getElementById("myForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const json = getFormDataAsJSON(this);

    fetch('/your-laravel-route', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify(json),
    })
    .then(res => {
        if (!res.ok) throw new Error("Network response was not ok");
        return res.json();
    })
    .then(response => {
        console.log("Success", response);

        // ✅ SweetAlert2 popup on success
        Swal.fire({
        icon: 'success',
        title: 'Success',
        text: response.message || 'Form submitted successfully!',
        confirmButtonText: 'OK'  // Optional: customize button text
    });


        // Optional: reset the form
        this.reset();
    })
    .catch(error => {
        console.error("Error:", error);

        // ❌ SweetAlert2 on error
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: error.message || 'Something went wrong!',
        });
    });



    $.ajax({
        url: '{{ route("save.entire.details") }}',
        type: 'POST',
        data: JSON.stringify(json),
        contentType: 'application/json', // 🟢 Needed when sending raw JSON
        dataType: 'json', // 🟢 Expecting JSON response
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // 🛡 CSRF protection
        },
        success: function (response) {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: response.message || 'Form submitted successfully!',
                confirmButtonText: 'OK'
            });
        },
        error: function(xhr, status, error) {
            let message = xhr.responseJSON?.message || 'Something went wrong!';
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: message
            });
        }
    });

});

</script>
 



