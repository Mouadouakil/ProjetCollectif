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

    <?php 
    Use App\Http\Controllers\HomeController;
    use App\Models\Syndicat;
    $syndicat= Syndicat::all();
    $is = DB::select('select * from immeuble') ;
     $im = DB::select('select * from proprietaire') ;
  
 
    ?>

     

    <div class="row">
        <div class="col-12">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ajouter Propriétaire</h5>
                    <p class="card-title-desc"></p>
                    <div>

                        <!-- Static Backdrop modal Button -->
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Ajouter Habitant
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
                    <h4 class="card-title mb-4">Ajouter Habitant</h4>

                    <form  action="{{ url('insert-proprietaire') }}" method="post" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="formrow-firstname-input" name="name">
                        </div>

                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Email</label>
                            <input type="email" class="form-control" id="formrow-firstname-input" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Mobile</label>
                            <input type="phone" class="form-control" id="formrow-firstname-input" name="telephone">
                        </div>

                       

                        <div class="row">
                            <label for="formrow-inputState" class="form-label">Nom Immeuble</label>
                            <select id="formrow-inputState" class="form-select" name="nomimmeuble">
                                <option selected>Choose...</option>
                                @foreach ($is as $item)
                                <option selected value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                                <option>...</option>
                            </select>
                        <div class="mb-3">
                                    <label for="formrow-inputState" class="form-label">Numéro Appartement</label>
                                    <select id="formrow-inputState" class="form-select" name="numappartement">
                                        <option selected>Choose...</option>
                                      
                                        <option>...</option>
                                        <option>1</option>
                                        
                                    </select>
                                </div>

                           
                        </div>

                        <div class="mb-3">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Ajouter
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

                    <h4 class="card-title">Liste Des Habitants</h4>
                    <p class="card-title-desc">
                    </p>

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Numero Appartement</th>
                                <th>Nom Immeuble</th>
                                
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($im as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->telephone}}</td>
                                <td>{{$item->numeroAppartement}}</td>
                                <td>{{$item->nomImmeuble}}</td>
                            </tr>
                            @endforeach
                        
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
