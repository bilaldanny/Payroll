@extends('layouts.mainLayout')

@section('section')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">

                <h4 class="page-title">Create New Employee</h4>
            </div>
        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-xs-12">
            <div class="card-box">

                <a class="btn btn-primary" href="{{ url('employee') }}">Employee List</a>

                <hr>

                <div class="row">
                    <div class="col-xs-12">
                        <form action="{{ route('employee.store') }}" enctype="multipart/form-data" method="POST">

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

                                <!-- Companies -->

                                <div class="form-group row">
                                    <label for="company_name" class="col-sm-2">Select Company<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <select name="company_id" class="select2 form-control">
                                            <option selected DISABLED>Select Company</option>
                                            @foreach($companies as $company)
                                                <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Companies -->

                                <!-- Branches -->

                                <div class="form-group row">
                                    <label for="branch_name" class="col-sm-2">Select Branch<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <select name="branch_id" class="select2 form-control">
                                            <option selected DISABLED>Select Branch</option>
                                            @foreach($branches as $branch)
                                                <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Branches -->

                                <!-- Locations -->

                                <div class="form-group row">
                                    <label for="location_name" class="col-sm-2">Select Location<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <select name="location_id" class="select2 form-control">
                                            <option selected DISABLED>Select Location</option>
                                            @foreach($locations as $location)
                                                <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Locations -->

                                <!-- Department -->

                                <div class="form-group row">
                                    <label for="department_name" class="col-sm-2">Select Department<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <select name="department_id" class="select2 form-control">
                                            <option selected DISABLED>Select Department</option>
                                            @foreach($departments as $department)
                                                <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Department -->

                                <!-- First Name -->

                                <div class="form-group row">
                                    <label for="first_name" class="col-sm-2">First Name<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="first_name" parsley-trigger="change"
                                               placeholder="Enter First Name Here" value="{{ old('first_name') }}" autocomplete="off" class="form-control"/>

                                    </div>
                                </div>

                                <!-- First Name -->

                                <!-- Middle Name -->

                                <div class="form-group row">
                                    <label for="middle_name" class="col-sm-2">Middle Name<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="middle_name" parsley-trigger="change"
                                               placeholder="Enter Middle Name Here" value="{{ old('middle_name') }}" autocomplete="off" class="form-control"/>

                                    </div>
                                </div>

                                <!-- Middle Name -->

                                <!-- Last Name -->

                                <div class="form-group row">
                                    <label for="last_name" class="col-sm-2">Last Name<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="last_name" parsley-trigger="change"
                                               placeholder="Enter Last Name Here" value="{{ old('last_name') }}" autocomplete="off" class="form-control"/>

                                    </div>
                                </div>

                                <!-- Last Name -->

                                <!-- DOB -->

                                <div class="form-group row">
                                    <label for="dob" class="col-sm-2">DOB<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        
                                        <div id="datepicker" class="input-group date" data-date-format="yy-mm-dd">
                                            
                                                <input class="form-control input" required="" type="text" name="dob">
                                                <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>

                                        </div>

                                    </div>
                                </div>

                                <!-- DOB -->

                                <!-- Hiring Date -->

                                <div class="form-group row">
                                    <label for="hiring_date" class="col-sm-2">Hiring Date<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        
                                        <div id="hiring_date" class="input-group date" data-date-format="yy-mm-dd">
                                            
                                                <input class="form-control input" required="" type="text" name="hiring_date">
                                                <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>

                                        </div>

                                    </div>
                                </div>

                                <!-- Hiring Date -->

                                <!-- Leaving Date -->

                                <div class="form-group row">
                                    <label for="leaving_date" class="col-sm-2">Leaving Date<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        
                                        <div id="leaving_date" class="input-group date" data-date-format="yy-mm-dd">
                                            
                                                <input class="form-control input" required="" type="text" name="leaving_date">
                                                <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>

                                        </div>

                                    </div>
                                </div>

                                <!-- Leaving Date -->

                                <!-- Phone Number -->

                                <div class="form-group row">
                                    <label for="phone" class="col-sm-2">Phone Number<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="phone" parsley-trigger="change"
                                               placeholder="Enter Phone Number Here" value="{{ old('phone') }}" autocomplete="off" class="form-control"/>

                                    </div>
                                </div>

                                <!-- Phone Number -->

                                <!-- Address -->

                                <div class="form-group row">
                                    <label for="phone" class="col-sm-2">Address<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" name="address" value="{{ old('address') }}" id="textarea" rows="3" maxlength="200" placeholder="Enter Address Here"></textarea>

                                    </div>
                                </div>

                                <!-- Address -->

                                <!-- Status -->

                                <div class="form-group row">
                                    <label for="status" class="col-sm-2">Status<span class="text-danger">*</span></label>
                                    <div class="col-sm-12">
                                        <div>
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" id="inlineRadio123" name="status" value="1" checked>
                                                <label for="inlineRadio123"> Active </label>
                                            </div>
                                            <div class="radio radio-danger radio-inline">
                                                <input type="radio" id="inlineRadio223" name="status" value="0">
                                                <label for="inlineRadio223"> In Active </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Status -->

                                <!-- Created By -->

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="hidden" name="created_by" parsley-trigger="change" value="{{Auth::user()->id}}" autocomplete="off" class="form-control"/>

                                    </div>
                                </div>

                                <!-- Created By -->

                                <!-- Updated By -->

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="hidden" name="updated_by" parsley-trigger="change" value="{{Auth::user()->id}}" autocomplete="off" class="form-control"/>

                                    </div>
                                </div>

                                <!-- Updated By -->





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

    <!-- DatePicker -->

        <script>
            $today = new Date();
            $yesterday = new Date($today);
            $yesterday.setDate($today.getDate() - 1);

            $(function(){
                $("#datepicker").datepicker({
                    autoclose: true,
                    endDate: $yesterday,
                }).datepicker('update');
            });
        </script>

        <script>
            $today = new Date();
            $yesterday = new Date($today);
            $yesterday.setDate($today.getDate() - 1);

            $(function(){
                $("#hiring_date").datepicker({
                    autoclose: true,
                    endDate: $yesterday,
                }).datepicker('update');
            });
        </script>

        <script>
            $today = new Date();
            $yesterday = new Date($today);
            $yesterday.setDate($today.getDate() - 1);

            $(function(){
                $("#leaving_date").datepicker({
                    autoclose: true,
                    endDate: $yesterday,
                }).datepicker('update');
            });
        </script>

    <!-- DatePicker -->

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