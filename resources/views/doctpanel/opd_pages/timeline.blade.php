    @if ($records->isNotEmpty())
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <style>
            .section-title {
                font-size: 1.3rem;
                color: #2c3e50;
                margin-bottom: 20px;
                padding-bottom: 10px;
                /* border-bottom: 2px solid #4ecdc4; */
                border-bottom: 2px solid #418a68;
                /* display: inline-block; */
            }

            /* Horizontal Timeline Styles */
            .timeline-container {
                background: white;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                padding: 25px;
                margin-top: 20px;
                overflow-x: auto;
                position: relative;
                scrollbar-width: none;
                -ms-overflow-style: none;
            }

            .timeline-container::-webkit-scrollbar {
                display: none;
                /* Safari, Chrome */
            }

            .timeline {
                display: flex;
                position: relative;
                width: calc(300px * {{ count($records) }});
                /* each item width * number of items */
            }

            /* Horizontal line */
            .timeline::before {
                content: '';
                position: absolute;
                top: 50%;
                left: 0;
                right: 0;
                /* span fully across */
                height: 4px;
                /* background: #4ecdc4; */
                background: #418a68;
                transform: translateY(-50%);
                z-index: 1;
                width: 100%;
            }

            .timeline-item {
                flex: 0 0 300px;
                margin: 0 15px;
                position: relative;
                animation: fadeIn 0.6s forwards;
                opacity: 0;
                z-index: 2;
            }

            .timeline-content {
                background: #f8f9fa;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                /* border-top: 4px solid #4ecdc4; */
                border-top: 4px solid #418a68;
                transition: transform 0.3s, box-shadow 0.3s;
                height: 150px;
                display: flex;
                flex-direction: column;
                position: relative;
            }

            .timeline-content:hover {
                transform: translateY(-5px);
                box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
            }

            /* Connector line from timeline to content */
            .timeline-connector {
                position: absolute;
                width: 4px;
                /* background: #4ecdc4; */
                background: #418a68;
                z-index: 1;
            }

            /* Positioning for items above the line */
            .timeline-item.above .timeline-content {
                /* border-bottom: 4px solid #4ecdc4; */
                border-bottom: 4px solid #418a68;
                border-top: none;
                margin-bottom: 40px;
            }

            /* Positioning for items below the line */
            .timeline-item.below .timeline-content {
                margin-top: 40px;
            }

            .timeline-item.above .timeline-dot {
                bottom: -50px;
            }

            .timeline-item.below .timeline-dot {
                top: -50px;
            }

            .timeline-date {
                font-weight: bold;
                /* color: #4ecdc4; */
                color: #418a68;
                margin-bottom: 10px;
                display: flex;
                align-items: center;
            }

            .timeline-date i {
                margin-right: 8px;
            }

            .timeline-title {
                font-size: 1.2rem;
                margin-bottom: 10px;
                color: #2c3e50;
            }

            .timeline-desc {
                color: #666;
                font-size: 0.95rem;
                overflow: hidden;
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
            }

            .wrap-text {
                word-break: break-word;
                overflow-wrap: break-word;
                white-space: normal;
                /* ensures text can wrap to the next line */
            }

            .record-title {
                font-weight: bold;
                margin-top: 0.5rem;
                color: #db3b0a;
                /* Matches your allergy highlight */
                /* border-bottom: 1px solid #eee; */
                padding-bottom: 2px;
            }

            .record-fields {
                column-count: 2;
                /* split into 2 columns */
                column-gap: 30px;
                /* spacing between columns */
            }

            .record-block {
                break-inside: avoid;
                -webkit-column-break-inside: avoid;
                /* keep title + list together */
                /* margin-bottom: 15px;  */
                display: inline-block;
                /* helps prevent breaking in some browsers */
                width: 100%;
            }

            .record-title {
                font-weight: 600;
                margin-bottom: 6px;
            }

            .record-fields ul {
                padding-left: 18px;
                margin: 0 0 8px;
            }

            .record-fields li {
                margin-bottom: 6px;
                list-style: disc inside;
            }


            /* Animations */
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .timeline-container {
                    padding: 15px;
                }

                .timeline {
                    min-width: 600px;
                }

                .timeline-item {
                    flex: 0 0 250px;
                }

                .record-fields {
                    column-count: 1;
                    /* Collapse back to 1 column */
                }

            }
        </style>

        <!-- Main Content -->
        <div class="">
            <h2 class="section-title">Old Records Timeline</h2>
            <div class="timeline-container" style="margin-bottom: 20px;">
                <div class="timeline">
                    @if ($records->isNotEmpty())
                        @foreach ($records as $index => $record)
                            @php
                                $position = $index % 2 === 0 ? 'above' : 'below';
                                $date = \Carbon\Carbon::parse($record->created_at)->format('d-m-Y');
                            @endphp
                            <div class="timeline-item {{ $position }}"
                                style="animation-delay: {{ 0.1 + $index * 0.1 }}s;">
                                <div class="timeline-dot"></div>
                                <div class="timeline-connector"></div>
                                <div class="timeline-content" data-bs-toggle="modal"
                                    data-bs-target="#recordModal{{ $record->id }}">
                                    <div class="timeline-date">
                                        <i class="far fa-calendar-alt"></i>
                                        {{ $date }}
                                    </div>
                                    <h3 class="timeline-title">OP Report</h3>
                                    <h3 class="timeline-desc">
                                        Type: <strong>{{ str_replace('_', ' ',ucfirst($record->type)) }}</strong>
                                    </h3>
                                </div>
                            </div>
                        @endforeach
                    @else
                    @endif
                </div>
            </div>
        </div>
        @php
        
        @endphp
        @foreach ($records as $record)
            <div class="modal fade" id="recordModal{{ $record->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content" onmouseleave="modelclose({{ $record->id }})">
                        <div class="modal-header bg-success text-white">
                            <h5 class="modal-title">
                                {{ $record->name ?? 'Unknown' }} / {{ $record->type }} /
                                {{ \Carbon\Carbon::parse($record->created_at)->format('d-m-Y') }}
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            @php
                                $recordata = \App\Models\Opdpart::select('data', 'type')
                                    ->where('id', $record->id)
                                    ->first();
                                $datas = $recordata->data ?? [];
                                $grouped = [];

                                $removeLists = [
                                    'spine' => [
                                        'Aggravating_factors' => 'None',
                                        'bladder' => 'Incontinence',
                                        'bowel' => 'Abnormal',
                                        'Injections' => 'Trigger',
                                        'Allergies' => 'N/A',
                                        'Social_History' => 'NKDA',
                                        'General_Appearance' => 'Distressed',
                                        'Posture' => 'erect',
                                        'ROM' => 'Restricted',
                                        'sensation' => 'Decreased',
                                        'Past_Medical_History' => 'None',
                                        'Current_meds_none' => 'none',
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
                                    'knee' => [
                                        // 'side'           => 'Right',
                                        // 'ROM'                 => 'Restricted',
                                        // 'sensation'           => 'Decreased',
                                    ],
                                    'leg' => [
                                        // 'Posture'             => 'erect',
                                        // 'Social_History'      => 'NKDA',
                                        // 'Past_Medical_History'=> 'None',
                                    ],
                                    'hand_wrist' => [],                              
                                    // default (if no type matched)
                                ];
                                $not_table_spineDeformity = true;
                                $removeList = $removeLists[$recordata->type];
                                foreach ($datas as $key => $value) {
                                    $title = $value['title'] ?? '';
                                    $valStr = implode(', ', $value['values'] ?? []);

                                    if (isset($removeList[$key]) && $removeList[$key] === $valStr) {
                                        continue;
                                    }
                                    $grouped[$title][$key] = $valStr;
                                }
                            @endphp
                            <div class="record-fields">
                                @foreach ($grouped as $title => $fields)
                                    <div class="record-block">
                                        <h6 class="record-title">{{ $title }}:</h6>
                                        @if (!empty($fields))
                                            <ul>
                                                @php
                                                    $printedMotorStrength = false;
                                                @endphp

                                                @foreach ($fields as $key => $val)
                                                @if($key === 'Motor_Strength' && $val === 'Normal')
                                                <ul>
                                                    <li><strong>Motor Strength:</strong> Normal</li>
                                                </ul>
                                                @endif
                                                    {{-- Special case: Motor Strength --}}
                                                    @if ($key === 'Motor_Strength' && $record->type === 'spinal_deformity' && !$printedMotorStrength)
                                                        @php
                                                            $muscles = ['Deltoid', 'Biceps', 'Triceps', 'Wrist_Ex', 'Grip', 'Fing_Abd','Psoas','G_Med','Quads','TA','Gastroc','EHL'];
                                                            $printedMotorStrength = true; // Mark that we’ve printed it
                                                        @endphp
                                                        

                                                        {{-- <li class="wrap-text"> --}}
                                                            {{-- <strong>Motor Strength:</strong> --}}
                                                            <ul style="margin-top: 5px;">
                                                                @foreach ($muscles as $muscle)
                                                                    @if(isset($fields[$muscle.'_Right']))
                                                                        <li>
                                                                            <strong>{{ $muscle }} Right:</strong>
                                                                            {{ $fields[$muscle.'_Right'] ?? 'N/A' }} 
                                                                        </li>
                                                                    @endif
                                                                    @if(isset($fields[$muscle.'_Left']))
                                                                        <li>
                                                                            <strong>{{ $muscle }} Left:</strong>
                                                                            {{ $fields[$muscle.'_Left'] ?? 'N/A' }}
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        {{-- </li> --}}

                                                    @elseif ($printedMotorStrength && in_array($key, [
                                                        'Deltoid_Right', 'Deltoid_Left',
                                                        'Biceps_Right', 'Biceps_Left',
                                                        'Triceps_Right', 'Triceps_Left',
                                                        'Wrist_Ex_Right', 'Wrist_Ex_Left',
                                                        'Grip_Right', 'Grip_Left',
                                                        'Fing_Abd_Right', 'Fing_Abd_Left',
                                                        'Psoas_Right','Psoas_Left',
                                                        'G_Med_Right','G_Med_Left',
                                                        'Quads_Right','Quads_Left',
                                                        'TA_Right','TA_Left',
                                                        'Gastroc_Right','Gastroc_Left',
                                                        'EHL_Right','EHL_Left',
                                                    ]))
                                                        {{-- Skip individual muscle keys after Motor Strength --}}
                                                        @continue

                                                    @else
                                                        {{-- Normal keys --}}
                                                        <li class="wrap-text">
                                                            <strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong>
                                                            {{ str_replace('_', ' ', $val) }}
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="modal-footer" style="display: none;">
                            <button class="btn btn-secondary" data-bs-dismiss="modal"
                                id="recordclose{{ $record->id }}">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <script>
            document.querySelectorAll('.timeline-content').forEach(item => {
                let modalInstance;
                let hoverTimeout;

                item.addEventListener('mouseenter', () => {
                    hoverTimeout = setTimeout(() => {
                        let target = item.getAttribute('data-bs-target');
                        let modalEl = document.querySelector(target);
                        modalInstance = bootstrap.Modal.getOrCreateInstance(modalEl);
                        modalInstance.show();
                    }, 500); // 0.5 seconds delay
                });

                item.addEventListener('mouseleave', () => {
                    clearTimeout(hoverTimeout); // cancel if user leaves before 2s
                });
            });

            function modelclose(id) {
                document.getElementById(`recordclose${id}`).click();
            }
        </script>

    @endif
