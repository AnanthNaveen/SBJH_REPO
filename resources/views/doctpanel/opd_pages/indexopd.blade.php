@extends('layout.app')
@section('custom-style')
@endsection
@section('content')

    <form action='{{ route('reception.reglist') }}' method="GET" class="row justify-content-center align-items-center g-2">
        @csrf
        <div class="col-auto">
            <label for="dateInput" class="col-form-label">DATE</label>
        </div>
        <div class="col-auto">
            <div class="input-group">
                <input type="text" class="form-control dateInput" id="dateInput1" name="rdate" placeholder="DD-MM-YYYY"
                    value="{{ $date ?? '' }}" required>
                <span class="input-group-text date-trigger" style="cursor: pointer;">
                    <i class="fa fa-calendar"></i>
                </span>
            </div>
        </div>
        <div class="col-auto">
            <button class="btn btn-sm btn-success" type="submit">CHECK</button>
        </div>
    </form>

    @if (isset($date))
        @if (!empty($records) && $records->isNotEmpty())
            <div class=" table-responsive">
                <table class="table table-bordered table-hover mt-5 mx-auto ">
                    <thead class='text-center'>
                        <tr>
                            <th>REG NO</th>
                            <th>PATIENT NAME</th>
                            <th>SELECT</th>
                        </tr>
                    </thead>
                    <tbody class='text-center'>
                        @foreach ($records as $record)
                            <tr class="{{ $record->ptype === 'New Patient' ? 'table-danger' : 'table-warning' }}">
                                <td>{{ $record->REG_NO }}</td>
                                <td>{{ $record->PATIENT_NAME }}</td>
                                <td>
                                    <div class="form-check custom-radio-green-gray">
                                        <input class="form-check-input redirect-regno" type="radio" name="regno"
                                            id="radio1_{{ $loop->index }}" value="{{ $record->REG_NO }}">
                                        <label class="form-check-label" for="radio1_{{ $loop->index }}"></label>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-danger p-1 mt-10px mx-auto w-50 justify-content-center align-items-center"><b>
                    <center>No records found for {{ $date ?? '' }}</center>
                </b></div>
        @endif
    @endif

@endsection

@section('scripts')
    <script>
        const baseUrl = "{{ url('/') }}";

        $(document).ready(function() {
            $('#dateInput1').datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
                todayHighlight: true
            });

            @if (!empty($date))
                // Use server-passed date
                $('#dateInput1').datepicker('setDate', '{{ $date }}');
            @else
                // Set today's date only if no date passed
                var today = new Date();
                var day = String(today.getDate()).padStart(2, '0');
                var month = String(today.getMonth() + 1).padStart(2, '0');
                var year = today.getFullYear();
                var formattedDate = day + '-' + month + '-' + year;
                $('#dateInput1').datepicker('setDate', formattedDate);
            @endif

            // Trigger input focus when icon is clicked
            $('.date-trigger').on('click', function() {
                $('#dateInput1').focus();
            });
        });

        $(document).ready(function() {
            $('.redirect-regno').on('click', function() {
                var regno = $(this).val();
                //window.location.href = "/doctpanel/opd_oldnew/" + regno;
                window.location.href = baseUrl + "/doctpanel/opd_oldnew/" + regno;

            });
        });

        $(document).ready(function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (!urlParams.has('rdate')) {
                $('form').submit();
            }
        });
    </script>
@endsection
