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
    <div class="card">
                <div class="card-body">
                   
                    <div>

                        <!-- Static Backdrop modal Button -->
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Ajouter Dépense
                        </button>


                       
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Depense</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="card">
                <div class="card-body">
                

                    <form>
                    <div class="mb-3">
                                    <label for="formrow-inputState" class="form-label">Type Depense</label>
                                    <select id="formrow-inputState" class="form-select">
                                        <option selected>...</option>
                                        <option>Maintenance</option>
                                        <option>Minage</option>
                                        <option>Facteurs</option>
                                        <option>Jardinage</option>
                                    </select>
                                </div>

                           
                        </div>

                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Somme</label>
                            <input type="number" class="form-control" id="formrow-firstname-input">
                        </div>
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Lien Image De Facteur (Drive)</label>
                            <input type="url" class="form-control" id="formrow-firstname-input">
                        </div>


                    

                    
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Ajouter</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
   

     

    <div class="row">
        <div class="col-12">
        <div class="col-lg-12">
            
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Liste Des Habitants</h4>
                    <p class="card-title-desc">
                    </p>

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Type Depense</th>
                                <th>Somme</th>
                                <th>Date</th>
                                <th>Lien Facteur (Image)</th>
                               
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>Minage</td>
                                <td>1300 Dh</td>
                                <td>Jan 31 2022</td>
                                <td><a href="https://themesbrand.com/skote/layouts/charts-echart.html">Click</a></td>
                            </tr>
                            <tr>
                                <td>Maintenance</td>
                                <td>250 Dh</td>
                                <td>Jan 3 2022</td>
                                <td><a href="https://themesbrand.com/skote/layouts/charts-echart.html">Click</a></td>
                            </tr>
                            <tr>
                                <td>Facteurs</td>
                                <td>2500 Dh</td>
                                <td>Jan 15 2022</td>
                                <td><a href="https://themesbrand.com/skote/layouts/charts-echart.html">Click</a></td>
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
