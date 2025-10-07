<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap_5.0.2.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap_5.0.2.js') }}"></script>
    <title>Patient Report</title>
    <style>
        body {
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        
        .report-header {
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 25px;
        }

        .patient-info p {
            margin: 2px 0;
            font-size: 15px;
        }

        h2 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 0;
        }

        h6 {
            margin-top: 25px;
            padding-bottom: 5px;
            border-bottom: 2px solid #dee2e6;
        }

        .dynamic-text {
            margin: 6px 0;
            line-height: 1.6;
        }

        .navigatebutton {
            position: absolute;
            margin-left: 5px;
        }

        @media print {

            /* Keep headings with the next block */
            /* h6 {
                page-break-after: avoid;
                break-after: avoid;
            } */

            /* h6+* {
                page-break-before: avoid;
                page-break-inside: avoid;
                break-inside: avoid;
            } */

            /* Avoid breaking inside sections */
            /* .dynamic-text,
            .table,
            .table-responsive {
                page-break-inside: avoid;
                break-inside: avoid;
            } */

            /* Optional: ensure each major section has some spacing */
            /* .section-block {
                page-break-inside: avoid;
                break-inside: avoid;
                margin-bottom: 12px;
            } */
            @page {
                margin-top: 100px;
            }
        }
        
    </style>
</head>

<body>
    <div class="navigatebutton">
        
       <a href="{{ route('report.show', ['regno' => $recordata->regno]) }}" 
        class="btn btn-outline-primary d-print-none">
        <i class="bi bi-box-arrow-in-left"></i> Back
        </a>
        <a href="{{ url('reception/reglist') }}" class="btn btn-outline-success me-3 d-print-none">
            <i class="bi bi-box-arrow-in-left"></i>Home
        </a>
    </div>
    <div class="container">
        <h3 style="font-weight: bold; text-align:center; margin-bottom:35px;">
            {{ \Illuminate\Support\Str::title(str_replace('_', ' ', $recordata->type)) }} Report
        </h3>

        <!-- Patient Info -->
        <table class="container" style="background: none;text-align:center">
            <tbody>
                <tr>
                    <td>
                        <p><strong>Patient Name:</strong> {{ $recordata->name }}</p>
                    </td>
                    <td>
                        <p><strong>Reg No:</strong> {{ $recordata->regno }}</p>
                    </td>
                    <td>
                        <p><strong>Age:</strong> {{ $recordata->age }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><strong>Sex:</strong> {{ $recordata->sex }}</p>
                    </td>
                    <td>
                        <p><strong>Consultant:</strong> {{ $recordata->consultant }}</p>
                    </td>
                    <td>
                        <p><strong>Date of Evaluation:</strong> {{ $recordata->created_at->format('d-m-Y h:i A') }}</p>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Dynamic Sections -->
        @foreach ($grouped as $title => $contents)
            <div class="section-block">
                <h6><b>{{ $title }}</b></h6>
                {{-- Motor Strength --}}
                @if($recordata->type === 'spine')
                    @if ( $title === 'Motor Strength')
                        @php
                            $muscles = ['Deltoid','Biceps','Triceps','Wrist_Ext','Grip','Finger_Abd','Psoas','Quads',
                                'Hamstrings','TA','G.Med','EHL','Gastroc'];
                            // Check if at least one muscle has data
                            $hasData = false;
                            foreach ($muscles as $muscle) {
                                if (!empty($contents[$muscle . '_right']) || !empty($contents[$muscle . '_left'])) {
                                    $hasData = true;
                                    break;
                                }
                            }
                        @endphp
                        @if ($hasData)
                            <div class="table-responsive mb-3">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead>
                                        <tr>
                                            <th>Muscle</th>
                                            <th>Right</th>
                                            <th>Left</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($muscles as $muscle)
                                            @php
                                                $right = $contents[$muscle . '_right'] ?? null;
                                                $left = $contents[$muscle . '_left'] ?? null;
                                            @endphp
                                            @if ($right || $left)
                                                <tr>
                                                    <td>{{ str_replace('_', ' ', $muscle) }}</td>
                                                    <td>{{ $right ?? '-' }}</td>
                                                    <td>{{ $left ?? '-' }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    @endif

                    {{-- Special Test --}}
                        @if ( $title === 'Special Test')
                        @php
                            $tests = ['Hoffman', 'Spurling', 'Phalen', "Tinel's", 'SLR', 'FNST'];
                            // Check if at least one test has data
                            $hasData = false;
                            foreach ($tests as $test) {
                                if (!empty($contents[$test . '_right']) || !empty($contents[$test . '_left'])) {
                                    $hasData = true;
                                    break;
                                }
                            }
                        @endphp
                        @if ($hasData)
                            <div class="table-responsive mb-3">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead>
                                        <tr>
                                            <th>Test</th>
                                            <th>Right</th>
                                            <th>Left</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tests as $test)
                                            @php
                                                $right = $contents[$test . '_right'] ?? null;
                                                $left = $contents[$test . '_left'] ?? null;
                                            @endphp
                                            @if ($right || $left)
                                                <tr>
                                                    <td>{{ $test }}</td>
                                                    <td>{{ $right ?? '-' }}</td>
                                                    <td>{{ $left ?? '-' }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    @endif
                    {{-- Dynamic Sentences --}}
                    @php
                        // $templates = [
                        //     'Chief_Complaints' => 'The patient presented with <b>:value</b>',
                        //     'history' => 'There is a history of <b>:value</b>',
                        //     'Back' => 'The patient reports <b>:value%</b> pain in the back',
                        //     'R_Leg' => 'The patient reports <b>:value%</b> pain in the right leg',
                        //     'L_Leg' => 'The patient reports <b>:value%</b> pain in the left leg',
                        //     'Neck' => 'The patient reports <b>:value%</b> pain in the neck',
                        //     'R_Arm' => 'The patient reports <b>:value%</b> pain in the right arm',
                        //     'L_Arm' => 'The patient reports <b>:value%</b> pain in the left arm',
                        //     'Intensity_Pain_Rate' => 'The intensity of pain reported is <b>:value</b>',
                        //     'Intensity_Duration' => 'The duration of pain is <b>:value</b>',
                        //     'Progression' => 'The progression of pain is noted as <b>:value</b>',
                        //     'Aggravating_factors' => 'The pain is aggravated by <b>:value</b>',
                        //     'Aggravating_factors_None' =>
                        //         'No significant aggravating factors were noted, except <b>:value</b>',
                        //     'Alleviating_Factors' => 'The pain is alleviated by <b>:value</b>',
                        //     'weakness' => 'The patient reports weakness symptoms including <b>:value</b>',
                        //     'sensory' => 'The patient reports sensory symptoms including <b>:value</b>',
                        //     'bladder' => 'The patient reports bladder symptoms including <b>:value</b>',
                        //     'Incontinence' => 'The patient reports bladder incontinence described as <b>:value</b>',
                        //     'bowel' => 'The patient reports bowel symptoms including <b>:value</b>',
                        //     'Abnormal' => 'The patient reports abnormal bowel symptoms described as <b>:value</b>',
                        //     'Treatment_So_Far' => 'Treatment taken so far includes <b>:value</b>',
                        //     'Meds' => 'The patient has been on medication: <b>:value</b>',
                        //     'Physiotherapy' => 'The patient has undergone physiotherapy: <b>:value</b>',
                        //     'Injections' => 'The patient has received injections: <b>:value</b>',
                        //     'Injections_Trigger' => 'The patient has received trigger point injections: <b>:value</b>',
                        //     'Past_Medical_History' => 'The patient\'s past medical history includes <b>:value</b>',
                        //     'Past_Medical_History_None' =>
                        //         'The patient has no significant past medical history, except <b>:value</b>',
                        //     'Past_surgical_history' => 'The patient\'s past surgical history includes <b>:value</b>',
                        //     'Current_meds' => 'The patient is currently taking <b>:value</b>',
                        //     'Current_meds_none' => 'The patient is not currently on any medications',
                        //     'Allergies' => 'The patient is allergic to <b>:value</b>',
                        //     'Allergies_N/A' => 'The patient has a reported allergy to <b>:value</b>',
                        //     'Social_History_NKDA' => 'Social history reveals <b>:value</b>',
                        //     'Occupation' => 'The patient\'s occupation involves <b>:value</b> physical activity',
                        //     'Work_status' => 'Work status: <b>:value</b>',
                        //     'General_Appearance' => 'On physical examination, the patient appears <b>:value</b>',
                        //     'General_Appearance_Distressed' =>
                        //         'On physical examination, the patient appears distressed with <b>:value</b>',
                        //     'Gait' => 'Gait assessment shows <b>:value</b>',
                        //     'Posture_erect' => 'On examination, the patient\'s posture is erect with <b>:value</b>',
                        //     'Romberg_Test' => 'The Romberg test was found to be <b>:value</b>',
                        //     'Tenderness' => 'Tenderness was observed in the following areas: <b>:value</b>',
                        //     'ROM' => 'Range of motion was found to be <b>:value</b>',
                        //     'ROM_Restricted' => 'Range of motion was found to be <b>restricted</b> (:value)',
                        //     'sensation' => 'The sensation is reported as <b>:value</b>',
                        //     'Sensation_Decreased' => 'The patient reports decreased sensation described as <b>:value</b>',
                        //     'Reflexes' => 'The patient\'s reflexes are noted as <b>:value</b>',
                        //     'Babinski' => 'The Babinski sign is <b>:value</b>',
                        //     'Resting_Tone' => 'The resting tone on per rectal examination is <b>:value</b>',
                        //     'VAC' => 'The voluntary anal contraction (VAC) is <b>:value</b>',
                        //     'sensations' => 'The perianal sensations are <b>:value</b>',
                        //     'BCR' => 'The bulbocavernosus reflex (BCR) is <b>:value</b>',
                        //     'Pulse' => 'The pulse is noted as <b>:value</b>',
                        //     'Shoulder_Peripheral_Nerve_TOS' => 'The Shoulder Peripheral Nerve (TOS) test is <b>:value</b>',
                        //     'Shoulder_Peripheral_Nerve_TOS_If_No' =>
                        //         'If the Shoulder Peripheral Nerve (TOS) test is not normal, the finding is <b>:value</b>',
                        //     'Hip_SI_Joint' => 'The Hip SI Joint test is reported as <b>:value</b>',
                        //     'Hip_SI_Joint_If_No' =>
                        //         'If the Hip SI Joint test is not normal, it is described as <b>:value</b>',
                        //     'Provisional_Diagnosis' => 'Provisional diagnosis is <b>:value</b>',
                        //     'Plan_of_Care' => 'Plan of care is <b>:value</b>',
                        // ];
                        $templates = [
                            'Chief_Complaints' => 'presented with <b>:value</b>',
                            'history' => 'has a history of <b>:value</b>',
                            'Back' => 'reports <b>:value%</b> pain in the back',
                            'R_Leg' => 'reports <b>:value%</b> pain in the right leg',
                            'L_Leg' => 'reports <b>:value%</b> pain in the left leg',
                            'Neck' => 'reports <b>:value%</b> pain in the neck',
                            'R_Arm' => 'reports <b>:value%</b> pain in the right arm',
                            'L_Arm' => 'reports <b>:value%</b> pain in the left arm',
                            'Intensity_Pain_Rate' => 'with an intensity of <b>:value</b>',
                            'Intensity_Duration' => 'lasting for <b>:value</b>',
                            'Progression' => 'progressing as <b>:value</b>',
                            'Aggravating_factors' => 'aggravated by <b>:value</b>',
                            'Aggravating_factors_None' => 'with no significant aggravating factors, except <b>:value</b>',
                            'Alleviating_Factors' => 'relieved by <b>:value</b>',
                            'weakness' => 'experiencing weakness symptoms including <b>:value</b>',
                            'sensory' => 'experiencing sensory symptoms including <b>:value</b>',
                            'bladder' => 'experiencing bladder symptoms including <b>:value</b>',
                            'Incontinence' => 'experiencing bladder incontinence described as <b>:value</b>',
                            'bowel' => 'experiencing bowel symptoms including <b>:value</b>',
                            'Abnormal' => 'with abnormal bowel symptoms described as <b>:value</b>',
                            'Treatment_So_Far' => 'treatment taken so far includes <b>:value</b>',
                            'Meds' => 'has been on medication: <b>:value</b>',
                            'Physiotherapy' => 'has undergone physiotherapy: <b>:value</b>',
                            'Injections' => 'has received injections: <b>:value</b>',
                            'Injections_Trigger' => 'has received trigger point injections: <b>:value</b>',
                            'Past_Medical_History' => 'past medical history includes <b>:value</b>',
                            'Past_Medical_History_None' => 'has no significant past medical history, except <b>:value</b>',
                            'Past_surgical_history' => 'past surgical history includes <b>:value</b>',
                            'Current_meds' => 'is currently taking <b>:value</b>',
                            'Current_meds_none' => 'is not currently on any medications',
                            'Allergies' => 'is allergic to <b>:value</b>',
                            'Allergies_N/A' => 'has a reported allergy to <b>:value</b>',
                            'Social_History_NKDA' => 'social history reveals <b>:value</b>',
                            'Occupation' => 'works in an occupation involving <b>:value</b> physical activity',
                            'Work_status' => 'work status is <b>:value</b>',
                            'General_Appearance' => 'on examination, appears <b>:value</b>',
                            'General_Appearance_Distressed' => 'on examination, appears distressed with <b>:value</b>',
                            'Gait' => 'gait assessment shows <b>:value</b>',
                            'Posture_erect' => 'posture is erect with <b>:value</b>',
                            'Romberg_Test' => 'Romberg test was <b>:value</b>',
                            'Tenderness' => 'tenderness was observed in <b>:value</b>',
                            'ROM' => 'range of motion was <b>:value</b>',
                            'ROM_Restricted' => 'range of motion was restricted (<b>:value</b>)',
                            'sensation' => 'sensation is <b>:value</b>',
                            'Sensation_Decreased' => 'sensation is decreased, described as <b>:value</b>',
                            'Reflexes' => 'reflexes are <b>:value</b>',
                            'Babinski' => 'Babinski sign is <b>:value</b>',
                            'Resting_Tone' => 'resting tone on per rectal examination is <b>:value</b>',
                            'VAC' => 'voluntary anal contraction (VAC) is <b>:value</b>',
                            'sensations' => 'perianal sensations are <b>:value</b>',
                            'BCR' => 'bulbocavernosus reflex (BCR) is <b>:value</b>',
                            'Pulse' => 'pulse is <b>:value</b>',
                            'Shoulder_Peripheral_Nerve_TOS' => 'shoulder peripheral nerve (TOS) test is <b>:value</b>',
                            'Shoulder_Peripheral_Nerve_TOS_If_No' => 'if TOS test is not normal, findings include <b>:value</b>',
                            'Hip_SI_Joint' => 'hip SI joint test is <b>:value</b>',
                            'Hip_SI_Joint_If_No' => 'if SI joint test is not normal, it is described as <b>:value</b>',
                            'Provisional_Diagnosis' => 'provisional diagnosis is <b>:value</b>',
                            'Plan_of_Care' => 'plan of care is <b>:value</b>',
                        ];                 
                        $sentences = [];

                        foreach ($contents as $field => $value) {
                            if (isset($templates[$field])) {
                                $sentence = ucfirst(str_replace(':value', str_replace('_', ' ', strtolower($value)), $templates[$field]));
                                $sentences[] = $sentence;
                            }
                        }
                        
                        $finalText = '';
                        if (count($sentences) > 1) {
                            // Join with commas, but put a full stop at the end
                            $finalText = implode(', ', array_slice($sentences, 0, -1)) . ', ' . end($sentences) . '.';
                        } elseif (count($sentences) === 1) {
                            $finalText = $sentences[0] . '.';
                        }
                    @endphp
                    @if($finalText)
                    <p class="dynamic-text">
                        {!! $finalText !!}
                    </p>
                    @endif

                @elseif($recordata->type === 'spinal_deformity')
                    @php
                        // $templates_spinal_deformity = [
                        //     'Chief_Complaints' => 'The patient presented with <b>:value</b>',
                        //     '1st_Noticed_at_Age' => 'The symptoms were first noticed at the age of <b>:value</b>',
                        //     'Pain' => 'The patient reports pain as <b>:value</b>',
                        //     'location' => 'The location of pain is <b>:value</b>',
                        //     'Intensity_Pain_Rate' => 'The intensity of pain reported is <b>:value</b>',
                        //     'Intensity_Duration' => 'The duration of pain is described as <b>:value</b>',
                        //     'Progression' => 'The progression of pain is noted as <b>:value</b>',
                        //     'Aggravating_factors' => 'The pain is aggravated by <b>:value</b>',
                        //     'Alleviating_factors' => 'The pain is alleviated by <b>:value</b>',
                        //     'Weakness' => 'The patient reports weakness of <b>:value</b>',
                        //     'Weakness_Unsteady_gait' => 'The patient reports weakness with unsteady gait described as <b>:value</b>',
                        //     'Sensory' => 'The patient reports sensory symptoms including <b>:value</b>',
                        //     'Sensory_paresthesia' => 'The patient reports sensory paresthesia described as <b>:value</b>',
                        //     'Bladder' => 'The bladder function is reported as <b>:value</b>',
                        //     'bladder_description' => 'Bladder symptoms are described as <b>:value</b>',
                        //     'Treatment_so_for' => 'Treatment taken so far includes <b>:value</b>',
                        //     'Bracing_Casting' => 'The patient has undergone <b>Bracing Casting</b>: :value',
                        //     'Physiotherapy' => 'The patient has undergone <b>Physiotherapy</b>: :value',
                        //     'Past_Medical_History' => 'The patient\'s past medical history is noted as <b>:value</b>',
                        //     'Past_Medical_History_Description' => 'Details regarding the patient\'s past medical history: <b>:value</b>',
                        //     'Past_Surgical_History' => 'The patient\'s past surgical history is noted as <b>:value</b>',
                        //     'Past_Surgical_History_Description' => 'Details regarding the patient\'s past surgical history: <b>:value</b>',
                        //     'Current_MEDs' => 'The patient is currently taking the following medications: <b>:value</b>',
                        //     'Current_MEDs_Description' => 'Details regarding the patient\'s current medications: <b>:value</b>',
                        //     'Allergies' => 'The patient\'s allergies are noted as <b>:value</b>',
                        //     'Allergies_Description' => 'Details regarding the patient\'s allergies: <b>:value</b>',
                        //     'Family_History' => 'The patient\'s family history is noted as <b>:value</b>',
                        //     'Parents' => 'The patient\'s parental history is noted as <b>:value</b>',
                        //     'Non-consanguity' => 'Details regarding non-consanguinity in the family history: <b>:value</b>',
                        //     'Siblings' => 'The patient\'s siblings are noted as <b>:value</b>',
                        //     'Siblings_Description' => 'Details regarding the patient\'s siblings: <b>:value</b>',
                        //     'Birth_History' => 'The patient\'s birth history is noted as <b>:value</b>',
                        //     'Birth_History_Description' => 'Details regarding the patient\'s birth history: <b>:value</b>',
                        //     'Development' => 'The patient\'s developmental history is noted as <b>:value</b>',
                        //     'Development_Delayed' => 'Details regarding delayed development: <b>:value</b>',
                        //     'Learning_Disability' => 'The patient is noted to have learning disability status as <b>:value</b>',
                        //     'Onset_of_Menses' => 'The patient\'s onset of menses is noted as <b>:value</b>',
                        //     'Social_History' => 'The patient\'s social history includes <b>:value</b>',
                        //     'Others' => 'Additional details regarding the patient\'s social history: <b>:value</b>',
                        //     'Height' => 'The patient\'s height is recorded as <b>:value</b>',
                        //     'Weight' => 'The patient\'s weight is recorded as <b>:value</b>',
                        //     'Arm_Span' => 'The patient\'s arm span is measured as <b>:value</b>',
                        //     'Gait' => 'The patient\'s gait is observed to be <b>:value</b>',
                        //     'Posture' => 'The patient\'s posture is observed as <b>:value</b>',
                        //     'Tenderness' => 'On examination, tenderness was noted at <b>:value</b>',
                        //     'paraspinal' => 'Additional details regarding paraspinal tenderness: <b>:value</b>',
                        //     'Trunk_Exam' => 'On trunk examination, the findings were <b>:value</b>',
                        //     'High_Thoracic_prominence' => 'Adams forward bend test revealed high thoracic prominence on the <b>:value</b> side',
                        //     'Thoracic_prominence' => 'Adams forward bend test revealed thoracic prominence on the <b>:value</b> side',
                        //     'TL_prominence' => 'Adams forward bend test revealed thoracolumbar prominence on the <b>:value</b> side',
                        //     'Lumbar_prominence' => 'Adams forward bend test revealed lumbar prominence on the <b>:value</b> side',
                        //     'ROM' => 'The range of motion (ROM) was found to be <b>:value</b>',
                        //     'Push_prone_test' => 'Additional details regarding the Push-prone test: <b>:value</b>',
                        //     'Suspension_(Traction)' => 'Flexibility test (Suspension/Traction) result: <b>:value</b>',
                        //     'Bending' => 'Flexibility test (Bending) result: <b>:value</b>',
                        //     'Prone_hyperextension_test' => 'Flexibility test (Prone Hyperextension) result: <b>:value</b>',
                        //     'Motor_Strength' => 'The patient\'s motor strength is noted as <b>:value</b>',
                        //     'Sensations_Intact' => 'Details regarding intact sensations: <b>:value</b>',
                        //     'Hoffman' => 'Hoffman\'s sign examination revealed: <b>:value</b>',
                        //     'Basinski' => 'Babinski\'s sign was observed as: <b>:value</b>',
                        //     'SLR-FST' => 'Straight Leg Raise (SLR) / Femoral Stretch Test (FST) result: <b>:value</b>',
                        //     'SLR/FST_Free' => 'Details regarding the SLR/FST test: <b>:value</b>',
                        //     'PULSE' => 'The patient\'s pulse was found to be <b>:value</b>',
                        //     'Pulse_Description' => 'Details regarding the patient\'s pulse: <b>:value</b>',
                        //     'HIP_ROM' => 'The patient\'s hip range of motion (ROM) was noted as <b>:value</b>',
                        //     'Thomas_Test' => 'Thomas test result: <b>:value</b>',
                        //     'KNEE_ROM' => 'The patient\'s knee range of motion (ROM) was noted as <b>:value</b>',
                        //     'Knee_ROM' => 'Details regarding the patient\'s knee range of motion (ROM): <b>:value</b>',
                        //     'High_Arched_palate' => 'On head-to-toe examination, a high-arched palate was noted as: <b>:value</b>',
                        //     'Facial_asymmetry' => 'On head-to-toe examination, facial asymmetry was noted as: <b>:value</b>',
                        //     'Cafe_Au_Lait_Spots' => 'On head-to-toe examination, café-au-lait spots were noted as: <b>:value</b>',
                        //     'Hair/Skin_pigmentation' => 'On head-to-toe examination, abnormal hair or skin pigmentation was noted as: <b>:value</b>',
                        //     'Skin_Hyperelasticity' => 'On head-to-toe examination, skin hyperelasticity was noted as: <b>:value</b>',
                        //     'Scars' => 'On head-to-toe examination, presence of scars was noted as: <b>:value</b>',
                        //     'Joint_Hyperelasticity' => 'On head-to-toe examination, joint hyperelasticity was noted as: <b>:value</b>',
                        //     'Arachnodacytly' => 'On head-to-toe examination, arachnodactyly was noted as: <b>:value</b>',
                        //     'Chest_asymmetry' => 'On head-to-toe examination, chest asymmetry was noted as: <b>:value</b>',
                        //     'Anterior_chest_deformity' => 'On head-to-toe examination, anterior chest deformity was noted as: <b>:value</b>',
                        //     'Breath_hold_count' => 'The patient\'s breath-hold count was recorded as <b>:value</b>',
                        //     'Tanner_stage' => 'The patient\'s Tanner stage was assessed as <b>:value</b>',
                        //     'Axillary_hair' => 'On head-to-toe examination, axillary hair was noted as: <b>:value</b>',
                        //     'Axillary_hair_Description' => 'Details regarding axillary hair: <b>:value</b>',
                        //     'Breasts_development' => 'On head-to-toe examination, breast development was noted as: <b>:value</b>',
                        //     'Breasts_development_Description' => 'Details regarding breast development: <b>:value</b>',
                        //     'Pubic_Hair' => 'On head-to-toe examination, pubic hair was noted as: <b>:value</b>',
                        //     'Pubic_Hair_Description' => 'Details regarding pubic hair: <b>:value</b>',
                        //     'Other_MSK_findings' => 'On head-to-toe examination, other musculoskeletal findings were noted as: <b>:value</b>',
                        //     'Other_MSK_findings_Description' => 'Details regarding other musculoskeletal findings: <b>:value</b>',
                        //     'Foot_abnormality' => 'On head-to-toe examination, foot abnormalities were noted as: <b>:value</b>',
                        //     'Foot_abnormality_Description' => 'Details regarding foot abnormalities: <b>:value</b>',
                        //     'Leg_Length_Difference' => 'On head-to-toe examination, leg length discrepancy was noted as: <b>:value</b>',
                        //     'Leg_Length_Difference_Description' => 'Details regarding leg length discrepancy: <b>:value</b>',
                        //     'PT_Cobb' => 'On imaging, the PT Cobb angle was measured as <b>:value</b>',
                        //     'Thoracic_K' => 'On imaging, the thoracic kyphosis (K) was measured as <b>:value</b>',
                        //     'Rissers' => 'On imaging, the Risser sign was noted as <b>:value</b>',
                        //     'MT_Cobb' => 'On imaging, the MT Cobb angle was measured as <b>:value</b>',
                        //     'TL_Kyphosis' => 'On imaging, the thoracolumbar kyphosis was measured as <b>:value</b>',
                        //     'Triradiate' => 'On imaging, the triradiate cartilage status was noted as <b>:value</b>',
                        //     'TL/L_Cobb' => 'On imaging, the TL/L Cobb angle was measured as <b>:value</b>',
                        //     'L_Lordosis' => 'On imaging, the lumbar lordosis was measured as <b>:value</b>',
                        //     'Sanders' => 'On imaging, the Sanders stage was noted as <b>:value</b>',
                        //     'MRI' => 'MRI findings are noted as: <b>:value</b>',
                        //     'Diagnosis' => 'The patient is diagnosed with: <b>:value</b>',
                        // ];
                        $templates_spinal_deformity = [
                            'Chief_Complaints' => 'presented with <b>:value</b>',
                            '1st_Noticed_at_Age' => 'first noticed at the age of <b>:value</b>',
                            'Pain' => 'reports pain as <b>:value</b>',
                            'location' => 'with pain located at <b>:value</b>',
                            'Intensity_Pain_Rate' => 'with an intensity of <b>:value</b>',
                            'Intensity_Duration' => 'lasting for <b>:value</b>',
                            'Progression' => 'progressing as <b>:value</b>',
                            'Aggravating_factors' => 'aggravated by <b>:value</b>',
                            'Alleviating_factors' => 'relieved by <b>:value</b>',
                            'Weakness' => 'with weakness of <b>:value</b>',
                            'Weakness_Unsteady_gait' => 'with weakness and unsteady gait described as <b>:value</b>',
                            'Sensory' => 'with sensory symptoms including <b>:value</b>',
                            'Sensory_paresthesia' => 'with sensory paresthesia described as <b>:value</b>',
                            'Bladder' => 'with bladder function reported as <b>:value</b>',
                            'bladder_description' => 'bladder symptoms described as <b>:value</b>',
                            'Treatment_so_for' => 'treatment so far includes <b>:value</b>',
                            'Bracing_Casting' => 'has undergone bracing/casting: <b>:value</b>',
                            'Physiotherapy' => 'has undergone physiotherapy: <b>:value</b>',
                            'Past_Medical_History' => 'past medical history includes <b>:value</b>',
                            'Past_Medical_History_Description' => 'details regarding past medical history: <b>:value</b>',
                            'Past_Surgical_History' => 'past surgical history includes <b>:value</b>',
                            'Past_Surgical_History_Description' => 'details regarding past surgical history: <b>:value</b>',
                            'Current_MEDs' => 'currently taking medications: <b>:value</b>',
                            'Current_MEDs_Description' => 'details regarding current medications: <b>:value</b>',
                            'Allergies' => 'allergies noted as <b>:value</b>',
                            'Allergies_Description' => 'details regarding allergies: <b>:value</b>',
                            'Family_History' => 'family history includes <b>:value</b>',
                            'Parents' => 'parental history includes <b>:value</b>',
                            'Non-consanguity' => 'non-consanguinity details: <b>:value</b>',
                            'Siblings' => 'siblings history includes <b>:value</b>',
                            'Siblings_Description' => 'details regarding siblings: <b>:value</b>',
                            'Birth_History' => 'birth history includes <b>:value</b>',
                            'Birth_History_Description' => 'details regarding birth history: <b>:value</b>',
                            'Development' => 'developmental history includes <b>:value</b>',
                            'Development_Delayed' => 'delayed development noted as <b>:value</b>',
                            'Learning_Disability' => 'learning disability status: <b>:value</b>',
                            'Onset_of_Menses' => 'onset of menses at <b>:value</b>',
                            'Social_History' => 'social history includes <b>:value</b>',
                            'Others' => 'additional social details: <b>:value</b>',
                            'Height' => 'height is <b>:value</b>',
                            'Weight' => 'weight is <b>:value</b>',
                            'Arm_Span' => 'arm span is <b>:value</b>',
                            'Gait' => 'gait observed as <b>:value</b>',
                            'Posture' => 'posture observed as <b>:value</b>',
                            'Tenderness' => 'tenderness noted at <b>:value</b>',
                            'paraspinal' => 'paraspinal tenderness described as <b>:value</b>',
                            'Trunk_Exam' => 'trunk examination shows <b>:value</b>',
                            'High_Thoracic_prominence' => 'forward bend test revealed high thoracic prominence on the <b>:value</b> side',
                            'Thoracic_prominence' => 'forward bend test revealed thoracic prominence on the <b>:value</b> side',
                            'TL_prominence' => 'forward bend test revealed thoracolumbar prominence on the <b>:value</b> side',
                            'Lumbar_prominence' => 'forward bend test revealed lumbar prominence on the <b>:value</b> side',
                            'ROM' => 'range of motion was <b>:value</b>',
                            'Push_prone_test' => 'push-prone test findings: <b>:value</b>',
                            'Suspension_(Traction)' => 'flexibility (suspension/traction) result: <b>:value</b>',
                            'Bending' => 'flexibility (bending) result: <b>:value</b>',
                            'Prone_hyperextension_test' => 'flexibility (prone hyperextension) result: <b>:value</b>',
                            'Motor_Strength' => 'motor strength is <b>:value</b>',
                            'Sensations_Intact' => 'sensations intact: <b>:value</b>',
                            'Hoffman' => 'Hoffman\'s sign: <b>:value</b>',
                            'Basinski' => 'Babinski\'s sign: <b>:value</b>',
                            'SLR-FST' => 'SLR/FST test result: <b>:value</b>',
                            'SLR/FST_Free' => 'SLR/FST details: <b>:value</b>',
                            'PULSE' => 'pulse is <b>:value</b>',
                            'Pulse_Description' => 'pulse details: <b>:value</b>',
                            'HIP_ROM' => 'hip ROM is <b>:value</b>',
                            'Thomas_Test' => 'Thomas test: <b>:value</b>',
                            'KNEE_ROM' => 'knee ROM is <b>:value</b>',
                            'Knee_ROM' => 'knee ROM details: <b>:value</b>',
                            'High_Arched_palate' => 'high-arched palate: <b>:value</b>',
                            'Facial_asymmetry' => 'facial asymmetry: <b>:value</b>',
                            'Cafe_Au_Lait_Spots' => 'café-au-lait spots: <b>:value</b>',
                            'Hair/Skin_pigmentation' => 'abnormal hair/skin pigmentation: <b>:value</b>',
                            'Skin_Hyperelasticity' => 'skin hyperelasticity: <b>:value</b>',
                            'Scars' => 'scars noted: <b>:value</b>',
                            'Joint_Hyperelasticity' => 'joint hyperelasticity: <b>:value</b>',
                            'Arachnodacytly' => 'arachnodactyly: <b>:value</b>',
                            'Chest_asymmetry' => 'chest asymmetry: <b>:value</b>',
                            'Anterior_chest_deformity' => 'anterior chest deformity: <b>:value</b>',
                            'Breath_hold_count' => 'breath-hold count: <b>:value</b>',
                            'Tanner_stage' => 'Tanner stage: <b>:value</b>',
                            'Axillary_hair' => 'axillary hair: <b>:value</b>',
                            'Axillary_hair_Description' => 'axillary hair details: <b>:value</b>',
                            'Breasts_development' => 'breast development: <b>:value</b>',
                            'Breasts_development_Description' => 'breast development details: <b>:value</b>',
                            'Pubic_Hair' => 'pubic hair: <b>:value</b>',
                            'Pubic_Hair_Description' => 'pubic hair details: <b>:value</b>',
                            'Other_MSK_findings' => 'other musculoskeletal findings: <b>:value</b>',
                            'Other_MSK_findings_Description' => 'musculoskeletal details: <b>:value</b>',
                            'Foot_abnormality' => 'foot abnormalities: <b>:value</b>',
                            'Foot_abnormality_Description' => 'foot abnormality details: <b>:value</b>',
                            'Leg_Length_Difference' => 'leg length difference: <b>:value</b>',
                            'Leg_Length_Difference_Description' => 'leg length discrepancy details: <b>:value</b>',
                            'PT_Cobb' => 'PT Cobb angle: <b>:value</b>',
                            'Thoracic_K' => 'thoracic kyphosis: <b>:value</b>',
                            'Rissers' => 'Risser sign: <b>:value</b>',
                            'MT_Cobb' => 'MT Cobb angle: <b>:value</b>',
                            'TL_Kyphosis' => 'thoracolumbar kyphosis: <b>:value</b>',
                            'Triradiate' => 'triradiate cartilage: <b>:value</b>',
                            'TL/L_Cobb' => 'TL/L Cobb angle: <b>:value</b>',
                            'L_Lordosis' => 'lumbar lordosis: <b>:value</b>',
                            'Sanders' => 'Sanders stage: <b>:value</b>',
                            'MRI' => 'MRI findings: <b>:value</b>',
                            'Diagnosis' => 'diagnosed with <b>:value</b>',
                        ];

                    $sentences = [];

                        foreach ($contents as $field => $value) {
                            if (isset($templates_spinal_deformity[$field])) {
                                $sentence = ucfirst(str_replace(':value', str_replace('_', ' ', strtolower($value)), $templates_spinal_deformity[$field]));
                                $sentences[] = $sentence;
                            }
                        }
                        
                        $finalText = '';
                        if (count($sentences) > 1) {
                            // Join with commas, but put a full stop at the end
                            $finalText = implode(', ', array_slice($sentences, 0, -1)) . ', ' . end($sentences) . '.';
                        } elseif (count($sentences) === 1) {
                            $finalText = $sentences[0] . '.';
                        }
                    @endphp

                    @if($finalText)
                        <p class="dynamic-text">
                            {!! $finalText !!}
                        </p>
                    @endif

                    @if ($recordata->type === 'spinal_deformity' && $title === 'Motor Strength')
                        @php
                            $muscles = ['Deltoid','Biceps','Triceps','Wrist_Ex','Grip','Fing_Abd'];
                            // Check if at least one muscle has data
                            $hasData = false;
                            
                            foreach ($muscles as $muscle) {
                                if (!empty($contents[$muscle . '_Right']) || !empty($contents[$muscle . '_Left'])) {
                                    $hasData = true;
                                    break;
                                }
                            }
                        @endphp
                        @if ($hasData)
                            <div class="table-responsive mb-3">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Right</th>
                                            <th>Left</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($muscles as $muscle)
                                            @php
                                                $right = $contents[$muscle . '_Right'] ?? null;
                                                $left = $contents[$muscle . '_Left'] ?? null;
                                            @endphp
                                            @if ($right || $left)
                                                <tr>
                                                    <td>{{ str_replace('_', ' ', $muscle) }}</td>
                                                    <td>{{ $right ?? '-' }}</td>
                                                    <td>{{ $left ?? '-' }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    @endif
                    @if ($recordata->type === 'spinal_deformity' && $title === 'Motor Strength')
                        @php
                            $muscles = ['Psoas','G_Med','Quads','TA','Gastroc','EHL'];
                            // Check if at least one muscle has data
                            $hasData = false;
                            
                            foreach ($muscles as $muscle) {
                                if (!empty($contents[$muscle . '_Right']) || !empty($contents[$muscle . '_Left'])) {
                                    $hasData = true;
                                    break;
                                }
                            }
                        @endphp
                        @if ($hasData)
                            <div class="table-responsive mb-3">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Right</th>
                                            <th>Left</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($muscles as $muscle)
                                            @php
                                                $right = $contents[$muscle . '_Right'] ?? null;
                                                $left = $contents[$muscle . '_Left'] ?? null;
                                            @endphp
                                            @if ($right || $left)
                                                <tr>
                                                    <td>{{ str_replace('_', ' ', $muscle) }}</td>
                                                    <td>{{ $right ?? '-' }}</td>
                                                    <td>{{ $left ?? '-' }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    @endif
                @endif
            </div>
        @endforeach
    </div>
</body>
</html>
