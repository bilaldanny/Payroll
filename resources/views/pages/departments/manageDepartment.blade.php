@extends('layouts.mainLayout')

@section('section')

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">

                <h4 class="page-title">Manage Department List</h4>
            </div>
        </div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-xs-12">
            <div class="card-box table-responsive">
                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session()->get('message') }}
                    </div>
                @endif


                <a class="btn btn-primary" href="{{ url('department/create') }}">Create Department</a>

                <hr>

                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive">
                    <thead>
                    <tr>
                        <th width="2%">Sr.No</th>

                        <th>Department name</th>


                        <th width="15%">Action</th>

                    </tr>
                    </thead>


                    <tbody>
                    @php $i=1;@endphp
                    @foreach($departments as $department)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $department->department_name }}</td>
                            <td>
                                <a href="{{ url('department/'.$department->id.'/edit') }}" class="btn btn-primary" style="float: left; margin-right: 5%;"><i class="fa fa-pencil"></i></a>

                                {!! Form::model($department, ['method' => 'delete','url' => ['department', $department->id], 'files'=>true, 'class' => 'delete_form']) !!}

                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>

                                    {{csrf_field()}}
                                
                                </form>
                            </td>
                        </tr>
                    @php $i++;@endphp
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <!-- Script For Alert Msg -->

    <script>
        $(document).ready(function(){

            $('.delete_form').on('submit', function(){

                if(confirm("Are You Sure You Want To Delete ?"))
                {
                  return true;
                }
                else
                {
                  return false;
                }

            });
        });
    </script>

    <!-- Script For Alert Msg -->

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
    <script src="{{ asset('pages/jquery.autocomplete.init.js') }}"></script>

    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap.js') }}"></script>



    <script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/responsive.bootstrap.min.js') }}"></script>


    <!-- init -->
    <script src="{{ asset('pages/jquery.datatables.init.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({keys: true});
            $('#datatable-responsive').DataTable();
            $('#datatable-colvid').DataTable({
                "dom": 'C<"clear">lfrtip',
                "colVis": {
                    "buttonText": "Change columns"
                }
            });
            $('#datatable-scroller').DataTable({
                ajax: "../plugins/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
            var table = $('#datatable-fixed-col').DataTable({
                scrollY: "300px",
                scrollX: true,
                scrollCollapse: true,
                paging: false,
                fixedColumns: {
                    leftColumns: 1,
                    rightColumns: 1
                }
            });
        });
        TableManageButtons.init();

    </script>
@endsection
