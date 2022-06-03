@extends('layouts.master')

@section('title') @lang('translation.Data_Tables') @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Tables @endslot
        @slot('title')  @endslot
    @endcomponent

   

     

    <div class="row">
        <div class="col-12">
       
          
            
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Cotisations</h4>
                    <p class="card-title-desc">
                    </p>

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nom Habitant</th>
                                <th>Jan</th>
                                <th>Fev</th>
                                <th>Mar</th>
                                <th>Apr</th>
                                <th>Mai</th>
                                <th>Jun</th>
                                <th>Jui</th>
                                <th>Aou</th>
                                <th>Sep</th>
                                <th>Oct</th>
                                <th>Nov</th>
                                <th>Dec</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>Mouad</td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                            </tr>
                            <tr>
                                <td>Ali Ouahli</td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                                <td> <input class="form-check-input" type="checkbox"></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection
