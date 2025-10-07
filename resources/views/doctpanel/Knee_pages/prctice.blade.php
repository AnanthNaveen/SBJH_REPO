{{-- <style>
    .knee-old-record .record-title {
        font-weight: bold;
        margin-top: 0.5rem;
        color: #db3b0a;               /* Matches your allergy highlight */
        border-bottom: 1px solid #eee;
        padding-bottom: 2px;
    }

    .knee-old-record ul {
        padding-left: 1rem;           /* Reduce default UL padding */
        margin-bottom: 0.75rem;
        list-style-type: disc;
    }

    .knee-old-record li {
        margin-bottom: 0.25rem;
    }

    .wrap-text {
        word-break: break-word;
        overflow-wrap: break-word;
        white-space: normal; /* ensures text can wrap to the next line */
    }

    .knee-old-record li {
        word-break: break-word;
        overflow-wrap: break-word;
        white-space: normal;
    }
</style>
@if($records->isNotEmpty())
    @foreach($records as $record)
        @php 
            $data = $record->data ?? [];
            $grouped = [];

            // list of key-value pairs to skip
            $removeList = [
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
            ];

            foreach ($data as $key => $value) {
                $title = $value['title'] ?? '';
                $valStr = implode(', ', $value['values'] ?? []);

                // check if this key+value should be skipped
                if (isset($removeList[$key]) && $removeList[$key] === $valStr) {
                    continue; // skip this entry
                }
                $grouped[$title][$key] = $valStr;
            }
        @endphp 

        <div class="knee-old-record card shadow-sm border-0 mb-3">
            <div class="card-header bg-light"> 
                <p style="font-weight:500;">
                    OP Report <span style="font-weight:900;">{{ $record->type }}</span>
                    Date: {{ \Carbon\Carbon::parse($record->created_at)->format('d-m-Y') }}
                </p>
            </div>

            <div class="card-body">
                @if(!empty($grouped))
                    @foreach($grouped as $title => $fields)
                        <h6 class="record-title">{{ $title }}:</h6>

                        @if(!empty($fields))
                            <ul>
                                @foreach($fields as $key => $val) 
                                    <li class="wrap-text">
                                        <strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong> {{ $val }}
                                    </li>
                                @endforeach
                            </ul> 
                        @else
                            <p class="text-muted mb-2">No details available</p>
                        @endif
                    @endforeach 
                @else
                    <p class="text-muted mb-0">No details available</p> 
                @endif 
            </div> 
        </div>
    @endforeach
@else
    @if($patDetails->ptype !== 'New Patient') 
        <div class="alert alert-warning mb-0 text-center">
            No Old records found.
        </div>
    @endif
@endif

 --}}