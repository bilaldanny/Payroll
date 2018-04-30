@extends('layouts.mainLayout')

@section('section')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">

                <h4 class="page-title">Create New Location</h4>
            </div>
        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-xs-12">
            <div class="card-box">

                <a class="btn btn-primary" href="{{ url('location') }}">Location List</a>

                <hr>

                <div class="row">
                    <div class="col-xs-12">
                        <form action="{{ route('location.store') }}" enctype="multipart/form-data" method="POST">

                            {{ csrf_field() }}

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="p-20" style="clear: both;">

                                <div class="form-group row">
                                    <label for="company_name" class="col-sm-2">Location Name<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="location_name" parsley-trigger="change"
                                               placeholder="Enter Location Name Here" value="{{ old('location_name') }}" autocomplete="off" class="form-control"/>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10">

                                    </div>

                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('plugins/multiselect/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>

    <script src="{{ asset('plugins/autocomplete/jquery.mockjax.js') }}"></script>
    <script src="{{ asset('plugins/autocomplete/jquery.autocomplete.min.js') }}"></script>
    <script src="{{ asset('plugins/autocomplete/countries.js') }}"></script>
    <script src="{{ asset('assets/pages/jquery.autocomplete.init.js') }}"></script>



    <script src="{{ asset('plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('plugins/timepicker/bootstrap-timepicker.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('plugins/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <script src="{{ asset('assets/pages/jquery.form-pickers.init.js') }}"></script>

    <script src="{{ asset('plugins/jquery.steps/js/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/pages/jquery.wizard-init.js') }}"></script>
    <script src="{{ asset('assets/pages/jquery.form-advanced.init.js') }}"></script>
@endsection