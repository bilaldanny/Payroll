@extends('layouts.mainLayout')

@section('section')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">

                <h4 class="page-title">Edit Employee</h4>
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
                        {!! Form::model($employee, ['method' => 'PATCH','url' => ['employee', $employee->id], 'files'=>true]) !!}

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

                            <!-- Start Select For Company -->
                            <div class="form-group row">
                                <label for="company_name" class="col-sm-2">Select Company<span class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    {!! Form::select('company_id',$companies,null,['class' => 'form-control select2']) !!}

                                </div>
                            </div>
                            <!-- End Select For Company -->

                            <!-- Start Select For Branch -->
                            <div class="form-group row">
                                <label for="company_name" class="col-sm-2">Select Branch<span class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    {!! Form::select('branch_id',$branches,null,['class' => 'form-control select2']) !!}

                                </div>
                            </div>
                            <!-- End Select For Branch -->

                            <!-- Start Select For Location -->
                            <div class="form-group row">
                                <label for="company_name" class="col-sm-2">Select Location<span class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    {!! Form::select('location_id',$locations,null,['class' => 'form-control select2']) !!}

                                </div>
                            </div>
                            <!-- End Select For Location -->

                            <!-- Start Select For Department -->
                            <div class="form-group row">
                                <label for="company_name" class="col-sm-2">Select Department<span class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    {!! Form::select('department_id',$departments,null,['class' => 'form-control select2']) !!}

                                </div>
                            </div>
                            <!-- End Select For Department -->

                            <!-- Employee First Name -->

                            <div class="form-group row">
                                <label for="first_name" class="col-sm-2">First Name<span class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    {!! Form::text('first_name' , null ,['class' => 'form-control','parsley-trigger' => 'change','placeholder' => 'Enter First Name Here']) !!}

                                </div>
                            </div>

                            <!-- Employee First Name -->

                            <!-- Employee Middle Name -->

                            <div class="form-group row">
                                <label for="middle_name" class="col-sm-2">Middle Name<span class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    {!! Form::text('middle_name' , null ,['class' => 'form-control','parsley-trigger' => 'change','placeholder' => 'Enter First Name Here']) !!}

                                </div>
                            </div>

                            <!-- Employee Middle Name -->

                            <!-- Employee Last Name -->

                            <div class="form-group row">
                                <label for="last_name" class="col-sm-2">Last Name<span class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    {!! Form::text('last_name' , null ,['class' => 'form-control','parsley-trigger' => 'change','placeholder' => 'Enter First Name Here']) !!}

                                </div>
                            </div>

                            <!-- Employee Last Name -->

                            <!-- Employee DOB -->

                            <div class="form-group row">
                                <label for="dob" class="col-sm-2">DOB<span class="text-danger">*</span></label>
                                <div class="col-sm-12">

                                    <div id="datepicker" class="input-group date" data-date-format="yy-mm-dd">
                                        
                                        {!! Form::text('dob' , null ,['class' => 'form-control input','parsley-trigger' => 'change','placeholder' => 'Enter First Name Here']) !!}
                                        <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>

                                    </div>
                                    

                                </div>
                            </div>

                            <!-- Employee DOB -->

                            <!-- Employee Hiring Date -->

                            <div class="form-group row">
                                <label for="hiring_date" class="col-sm-2">Hiring Date<span class="text-danger">*</span></label>
                                <div class="col-sm-12">

                                    <div id="hiring_date" class="input-group date" data-date-format="yy-mm-dd">
                                        
                                        {!! Form::text('hiring_date' , null ,['class' => 'form-control input','parsley-trigger' => 'change']) !!}
                                        <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>

                                    </div>
                                    

                                </div>
                            </div>

                            <!-- Employee Hiring Date -->

                            <!-- Employee Leaving Date -->

                            <div class="form-group row">
                                <label for="leaving_date" class="col-sm-2">Leaving Date<span class="text-danger">*</span></label>
                                <div class="col-sm-12">

                                    <div id="leaving_date" class="input-group date" data-date-format="yy-mm-dd">
                                        
                                        {!! Form::text('leaving_date' , null ,['class' => 'form-control input','parsley-trigger' => 'change']) !!}
                                        <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>

                                    </div>
                                    

                                </div>
                            </div>

                            <!-- Employee Leaving Date -->

                            <!-- Employee Phone Number -->

                            <div class="form-group row">
                                <label for="phone" class="col-sm-2">Phone Number<span class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    {!! Form::text('phone' , null ,['class' => 'form-control','parsley-trigger' => 'change','placeholder' => 'Enter First Name Here']) !!}

                                </div>
                            </div>

                            <!-- Employee Phone Number -->

                            <!-- Employee Address -->

                            <div class="form-group row">
                                <label for="address" class="col-sm-2">Address<span class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    {!! Form::textarea('address' , null ,['class' => 'form-control','parsley-trigger' => 'change','placeholder' => 'Enter Address Here', 'id' => 'textarea', 'row' => '3', 'maxlength' => '200']) !!}

                                </div>
                            </div>

                            <!-- Employee Address -->

                            <!-- Employee Status -->

                            <div class="form-group row">
                                <label for="status" class="col-sm-2">Status<span class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <div>
                                        @if($employee->status == 1)
                                        <p class="btn-switch">                  
                                            <input type="radio" value="1" id="yes" name="status" checked class="btn-switch__radio btn-switch__radio_yes" />

                                            <input type="radio" value="0" id="no" name="status" class="btn-switch__radio btn-switch__radio_no" />

                                            <label for="yes" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt">Active</span></label>

                                            <label for="no" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt">Not Active</span></label>                            
                                        </p>
                                        @else
                                        <p class="btn-switch">                  
                                            <input type="radio" value="1" id="yes" name="status"  class="btn-switch__radio btn-switch__radio_yes" />

                                            <input type="radio" value="0" id="no" name="status" class="btn-switch__radio btn-switch__radio_no" checked/>

                                            <label for="yes" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt">Active</span></label>

                                            <label for="no" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt">Not Active</span></label>                            
                                        </p>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <!-- Employee Status -->

                            <!-- Created By -->

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    {!! Form::hidden('created_by' , null ,['class' => 'form-control','parsley-trigger' => 'change','placeholder' => 'Enter Status Here']) !!}

                                </div>
                            </div>

                            <!-- Created By -->

                            <!-- Updated By -->

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    {!! Form::hidden('updated_by' , Auth::user()->id ,['class' => 'form-control','parsley-trigger' => 'change','placeholder' => 'Enter Status Here', 'value' => '{{ Auth::user()->id }}']) !!}

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