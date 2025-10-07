@extends('layout.app')

@section('content')
    <style>
        p {
            font-size: 16px;
            font-weight: 500;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            background: #f1f4f2;
            padding: 5px;
            margin-bottom: 25px;
            border-radius: 8px;
        }

        .no-data-svg {
            margin-left: auto;
            margin-right: auto;
            width: 640px;
            /* change this to make it bigger/smaller */
            height: auto;
            color: #6c757d;
            /* controls stroke & text color via currentColor */
            display: block;
            /* good for centering with margin auto */
        }

        /* .no-data-svg.large { width: 640px; } */
    </style>


    @if ($reports && $reports->isNotEmpty())
        <div class="topbar">
            <a href="{{ url('doctpanel/opd_oldnew/' . $reports[0]->regno) }}" class="btn btn-outline-success me-3">
                <i class="bi bi-box-arrow-in-left"></i>Back
            </a>
            <h2 class="page-title m-0"><i class="bi bi-bar-chart"></i> Patients Reports</h2>
            <div></div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover m-auto text-center rounded">
                <thead>
                    <tr style="background: #1e7d42; color:white;">
                        <th>S.No</th>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reports as $index => $report)
                        <tr>
                            <td>
                                <p>{{ $index + 1 }}</p>
                            </td>
                            <td>
                                <p>{{ \Carbon\Carbon::parse($report->created_at)->format('d M Y') }}</p>
                            </td>
                            <td>
                                <p>{{ \Illuminate\Support\Str::title(str_replace('_', ' ', $report->type))}}</p>
                            </td>
                            <td>
                                <p>
                                    <a href="{{ url('opd/' . $report->id . '/report') }}" class="outline-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </p>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        {{-- <img class="d-block mx-auto" style="width: 665px" src="{{ asset('Image/emptyimage.png') }}" alt=""> --}}
        <!-- inline SVG: size it with CSS (width / height) or Bootstrap utilities -->
        <svg class="no-data-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 220 140" role="img"
            aria-labelledby="nodataTitle">
            <title id="nodataTitle">No data available</title>

            <!-- uses currentColor for easy recoloring -->
            <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                <!-- background rounded rect (subtle) -->
                <rect x="6" y="6" width="208" height="128" rx="10" fill="none" stroke="currentColor"
                    opacity="0.06" />

                <!-- document icon -->
                <path d="M44 26h54v14a4 4 0 0 0 4 4h14v24H44z" fill="currentColor" opacity="0.12" />

                <!-- magnifier (circle + handle) -->
                <g transform="translate(120,38)">
                    <circle cx="18" cy="18" r="14" stroke="currentColor" stroke-width="3" opacity="0.28"
                        fill="none" />
                    <path d="M28 28 L36 36" stroke="currentColor" stroke-width="3" stroke-linecap="round" opacity="0.28" />
                </g>

                <!-- simple lines (document text) -->
                <g transform="translate(48,30)" stroke="currentColor" stroke-linecap="round" opacity="0.35">
                    <line x1="0" y1="8" x2="40" y2="8" stroke-width="2" />
                    <line x1="0" y1="18" x2="60" y2="18" stroke-width="2" />
                    <line x1="0" y1="28" x2="35" y2="28" stroke-width="2" />
                </g>

                <!-- headline text -->
                <text x="110" y="102" text-anchor="middle"
                    font-family="system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial" font-size="14"
                    fill="currentColor" opacity="0.9" style="font-weight:600">
                    No data available
                </text>

            </g>
        </svg>
    @endif

@endsection
