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
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Crée Bureaux</h5>
                    <p class="card-title-desc"></p>
                    <div>

                        <!-- Static Backdrop modal Button -->
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Ajouter Bureau
                        </button>



                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Bureau</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Ajouter Bureau</h4>

                    <form>
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Nom du Bureau</label>
                            <input type="email" class="form-control" id="formrow-firstname-input">
                        </div>

                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Email du Bureau</label>
                            <input type="email" class="form-control" id="formrow-firstname-input">
                        </div>

                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Téléphone de Bureau</label>
                            <input type="phone" class="form-control" id="formrow-firstname-input">
                        </div>


                        <div class="row">
                        <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-inputState" class="form-label">Responsable</label>
                                    <select id="formrow-inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-inputState" class="form-label">Immeubles</label>
                                    <select id="formrow-inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="formrow-inputState" class="form-label">Syndicats</label>
                                    <select id="formrow-inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
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
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Liste Des Bureaux</h4>
                    <p class="card-title-desc">
                    </p>

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Numéro</th>
                                <th>Nombre Immeubles</th>
                                <th>Responsable Bureau</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                                <th>Nombre Syndicats de Bureau</th>
                            </tr>
                        </thead>


                        <tbody>
                         
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
