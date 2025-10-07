@extends('layout.app')
@section('custom-style')
    <style>
        .panel-link.active {
            color: #FCAC01 !important;
            font-weight: bold;
            background: white;
            /* border-top: 1px solid black;
            border-right: 1px solid black;
            border-left: 1px solid black; */
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }

        .dropdown-item.active {
            color: #0e610d !important;
            font-weight: bold;
            background-color: transparent !important;
        }

        .dropdown-item:active {
            background-color: transparent !important;
        }

        .panel-link:hover {
            color: #FCAC01 !important;
            background-color: white;
            text-decoration: none;

        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        /* Default green for dropdown items */
        .dropdown-menu .dropdown-item,
        .dropdown-item:hover {
            color: #0e610d;
        }

        /* Keep dropdown items from inheriting parent styles */
        .dropdown-menu {
            background-color: white;
            border-top: 4px solid green;
        }

        /* Orange when dropdown is clicked/open */
        .dropdown-toggle.active,
        .dropdown-toggle.show {

            /* background-color: transparent !important; */
        }

        .allergy-class {
            color: #db3b0a;
        }
        .subnavbar-style{
            background: linear-gradient(90deg, #E8F5E9, #F1F8E9);
            border-bottom: 1px solid #C8E6C9;
            font-weight:bolder;
        }
        @media (max-width: 576px) {
            .sub-navbar {
                overflow-x: auto;   /* allow horizontal scroll */
                white-space: nowrap; /* prevent items from wrapping */
            }
            .subnavbar-style{
                background: white;
            }

            .sub-navbar a,
            .sub-navbar .dropdown {
                display: inline-block; /* keep items side by side */
            }

            /* Optional: hide ugly scrollbar in iOS/Chrome */
            .sub-navbar::-webkit-scrollbar {
                display: none;
            }
            .sub-navbar {
                -ms-overflow-style: none;  /* IE/Edge */
                scrollbar-width: none;     /* Firefox */
            }
        }
    </style>
@endsection

@section('content')

    @if ($patDetails ?? '')
        <div class="row mx-auto py-2 mb-2 rounded" style="background: #E8F5E9;color: #1B5E20;">
            <div class="col-lg-12 text-center p-2">
                <strong>{{ optional($patDetails)->PATIENT_NAME }} / {{ optional($patDetails)->REG_NO }}</strong> <br>
                <strong>{{ optional($patDetails)->age }} / {{ optional($patDetails)->SEX }}</strong> <br>
                <strong class="allergy-class"> Allergy : @if ($allergy_data->isNotEmpty())
                        {{ $allergy_data->join(',') }}
                    @else
                        None
                    @endif
                </strong>
            </div>
        </div>
        {{-- @if (optional($patDetails)->ptype !== 'New Patient') --}}
        @include('doctpanel.opd_pages.timeline')

        {{-- @endif --}}

        <div class="row mx-auto py-1 sub-navbar subnavbar-style">
            <div class="col-lg-12 py-2 text-center">
                @php $view = request('view'); @endphp

                {{-- <a href="?view=trauma" class=" p-3 mb-2 link-primary text-decoration-none panel-link {{ $view == 'trauma' ? 'active' : '' }}">TRAUMA</a> --}}

                @php $spineActive = in_array($view, ['spine', 'spine-deformity']); @endphp
                @php $traumaActive = in_array($view, ['acute', 'acute-primary','late-presentation']); @endphp



                <div class="dropdown d-inline-block">
                    <a class="dropdown-toggle p-3 mb-2 link-success text-decoration-none panel-link {{ $traumaActive ? 'active' : '' }}"
                        data-bs-toggle="dropdown">
                        Trauma
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ $view == 'acute' ? 'active' : '' }}" href="?view=acute">Acute</a>
                        </li>
                        <li><a class="dropdown-item {{ $view == 'acute-primary' ? 'active' : '' }}"
                                href="?view=acute-primary">Acute with Primary treatment</a></li>
                        <li><a class="dropdown-item {{ $view == 'late-presentation' ? 'active' : '' }}"
                                href="?view=late-presentation">Late Presentation</a></li>
                    </ul>
                </div>

                <div class="dropdown d-inline-block">
                    <a class="dropdown-toggle p-3 mb-2 link-success text-decoration-none panel-link {{ $spineActive ? 'active' : '' }}"
                        data-bs-toggle="dropdown">
                        Spine
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ $view == 'spine' ? 'active' : '' }}" href="?view=spine">Spine</a>
                        </li>
                        <li><a class="dropdown-item {{ $view == 'spine-deformity' ? 'active' : '' }}"
                                href="?view=spine-deformity">Spinal-Deformity</a></li>
                    </ul>
                </div>  

                <a href="?view=knee"
                    class="p-3 mb-2 link-success text-decoration-none panel-link {{ request('view') == 'knee' ? 'active' : '' }}">Hip
                    / Knee</a>
                <a href="?view=foot_ankle"
                    class="p-3 mb-2 link-success text-decoration-none panel-link {{ request('view') == 'foot_ankle' ? 'active' : '' }}">Foot
                    / Ankle</a>
                <a href="?view=shouler_elbow"
                    class="p-3 mb-2 link-success text-decoration-none panel-link {{ request('view') == 'shouler_elbow' ? 'active' : '' }}">Shoulder
                    / Elbow</a>
                <a href="?view=hand_wrist"
                    class="p-3 mb-2 link-success text-decoration-none panel-link {{ request('view') == 'hand_wrist' ? 'active' : '' }}">Hand
                    / Wrist</a>
                <a href="?view=Paedatrics"
                    class="p-3 mb-2 link-success text-decoration-none panel-link {{ request('view') == 'Paedatrics' ? 'active' : '' }}">Paedatrics</a>
                {{-- <a href="/report/{{$patDetails->REG_NO}}" class="p-3 mb-2 link-primary text-decoration-none panel-link">Report</a> --}}
                <a href="{{ url('report/' . $patDetails->REG_NO) }}"
                    class="p-3 mb-2 link-primary text-decoration-none panel-link">Report</a>
            </div>
        </div>

        {{-- Include sub pages --}}
        @if ($view === 'acute')
            <h1>Acute</h1>
        @elseif($view === 'acute-primary')
            <h1>acute-primary</h1>
        @elseif($view === 'late-presentation')
            <h1>late-presentation</h1>
        @elseif($view === 'spine')
            @include('doctpanel.spine_pages.spine')
        @elseif($view === 'spine-deformity')
           @include('doctpanel.spine_pages.spine_deformity')
        @elseif($view === 'acl')
            <h1>ACL Page</h1>
        @elseif($view === 'knee')
            @include('doctpanel.Knee_pages.Knee')
        @elseif($view === 'foot_ankle')
            <h1>foot / ankle</h1>
        @elseif($view === 'shouler_elbow')
            @include('doctpanel.Shoulder_elbow_pages.Shoulder_elbow')
            @elseif($view === 'hand_wrist')
            @include('doctpanel.handwrist_pages.handwrist')
        @elseif($view === 'Paedatrics')
            <h1>Paedatrics</h1>
        @endif
    @endif
    {{-- @else
        <div class="alert alert-warning mt-3">No patient found.</div>
     --}}

@endsection
