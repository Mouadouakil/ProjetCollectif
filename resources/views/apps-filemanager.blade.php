@extends('layouts.master')

@section('title') @lang('translation.File_Manager') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Apps @endslot
        @slot('title') Documents @endslot
    @endcomponent

    <?php
    $counter = 0;

    $im = DB::select('select * from document') ;?>
    <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ajouter Documents</h5>
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
                    <h4 class="card-title mb-4">Ajouter Documents</h4>

                    <form action="{{ url('insert-document') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Nom Document</label>
                            <input type="text" class="form-control" id="formrow-firstname-input" name="nom">
                        </div>

                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Lien Drive</label>
                            <input type="url" class="form-control" id="formrow-firstname-input" name="lien">
                        </div>




                        <div class="mb-3">


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
    <div class="d-xl-flex">
        <div class="w-100">
            <div class="d-md-flex">
                <div class="card filemanager-sidebar me-md-2">
                    <div class="card-body">



                    </div>
                </div>
                <!-- filemanager-leftsidebar -->

                <div class="w-100">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="row mb-3">
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="mt-2">
                                            <h5>My Files</h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-sm-6">
                                        <form class="mt-4 mt-sm-0 float-sm-end d-flex align-items-center">
                                            <div class="search-box mb-2 me-2">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control bg-light border-light rounded"
                                                        placeholder="Search...">
                                                    <i class="bx bx-search-alt search-icon"></i>
                                                </div>
                                            </div>

                                            <div class="dropdown mb-0">
                                                <a class="btn btn-link text-muted dropdown-toggle mt-n2" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="mdi mdi-dots-vertical font-size-20"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Share Files</a>
                                                    <a class="dropdown-item" href="#">Share with me</a>
                                                    <a class="dropdown-item" href="#">Other Actions</a>
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row">
                                    @foreach ($im as $item)
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card shadow-none border">
                                            <div class="card-body p-3">
                                                <div class="">
                                                    <div class="float-end ms-2">
                                                        <div class="dropdown mb-2">
                                                            <a class="font-size-16 text-muted dropdown-toggle" role="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Open</a>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Rename</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="avatar-xs me-3 mb-3">
                                                        <div class="avatar-title bg-transparent rounded">
                                                            <i class="bx bxs-folder font-size-24 text-warning"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="overflow-hidden me-auto">
                                                            <h5 class="font-size-14 text-truncate mb-1">
                                                                    <a href={{$item->lien}} class="text-body">{{$item->nom}}</a>
                                                            </h5>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- end row -->
                            </div>

                            <div class="mt-4">
                                <div class="d-flex flex-wrap">
                                    <h5 class="font-size-16 me-3">Recent Files</h5>

                                    <div class="ms-auto">
                                        <a href="javascript: void(0);" class="fw-medium text-reset">View All</a>
                                    </div>
                                </div>
                                <hr class="mt-2">

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Date modified</th>
                                                <th scope="col">Lien Drive</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($im as $item)
                                            <tr>
                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i
                                                            class="mdi mdi-file-document font-size-16 align-middle text-primary me-2"></i>
                                                        {{$item->nom}}</a></td>
                                                <td>{{$item->updated_at}}</td>
                                                <td><a href={{$item->lien}}>Click</a></td>

                                                <td>
                                                    <div class="dropdown">
                                                        <a class="font-size-16 text-muted dropdown-toggle" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Open</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Rename</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
{{--                                            <tr>--}}
{{--                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i--}}
{{--                                                            class="mdi mdi-folder-zip font-size-16 align-middle text-warning me-2"></i>--}}
{{--                                                        Project-A.zip</a></td>--}}
{{--                                                <td>11-10-2020, 17:05</td>--}}
{{--                                                <td>115 KB</td>--}}
{{--                                                <td>--}}
{{--                                                    <div class="dropdown">--}}
{{--                                                        <a class="font-size-16 text-muted dropdown-toggle" role="button"--}}
{{--                                                            data-bs-toggle="dropdown" aria-haspopup="true">--}}
{{--                                                            <i class="mdi mdi-dots-horizontal"></i>--}}
{{--                                                        </a>--}}

{{--                                                        <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                                            <a class="dropdown-item" href="#">Open</a>--}}
{{--                                                            <a class="dropdown-item" href="#">Edit</a>--}}
{{--                                                            <a class="dropdown-item" href="#">Rename</a>--}}
{{--                                                            <div class="dropdown-divider"></div>--}}
{{--                                                            <a class="dropdown-item" href="#">Remove</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}

{{--                                            <tr>--}}
{{--                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i--}}
{{--                                                            class="mdi mdi-image font-size-16 align-middle text-muted me-2"></i>--}}
{{--                                                        Img-1.jpeg</a></td>--}}
{{--                                                <td>11-10-2020, 13:26</td>--}}
{{--                                                <td>86 KB</td>--}}
{{--                                                <td>--}}
{{--                                                    <div class="dropdown">--}}
{{--                                                        <a class="font-size-16 text-muted dropdown-toggle" role="button"--}}
{{--                                                            data-bs-toggle="dropdown" aria-haspopup="true">--}}
{{--                                                            <i class="mdi mdi-dots-horizontal"></i>--}}
{{--                                                        </a>--}}

{{--                                                        <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                                            <a class="dropdown-item" href="#">Open</a>--}}
{{--                                                            <a class="dropdown-item" href="#">Edit</a>--}}
{{--                                                            <a class="dropdown-item" href="#">Rename</a>--}}
{{--                                                            <div class="dropdown-divider"></div>--}}
{{--                                                            <a class="dropdown-item" href="#">Remove</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i--}}
{{--                                                            class="mdi mdi-text-box font-size-16 align-middle text-muted me-2"></i>--}}
{{--                                                        update list.txt</a></td>--}}
{{--                                                <td>10-10-2020, 11:32</td>--}}
{{--                                                <td>08 KB</td>--}}
{{--                                                <td>--}}
{{--                                                    <div class="dropdown">--}}
{{--                                                        <a class="font-size-16 text-muted dropdown-toggle" role="button"--}}
{{--                                                            data-bs-toggle="dropdown" aria-haspopup="true">--}}
{{--                                                            <i class="mdi mdi-dots-horizontal"></i>--}}
{{--                                                        </a>--}}

{{--                                                        <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                                            <a class="dropdown-item" href="#">Open</a>--}}
{{--                                                            <a class="dropdown-item" href="#">Edit</a>--}}
{{--                                                            <a class="dropdown-item" href="#">Rename</a>--}}
{{--                                                            <div class="dropdown-divider"></div>--}}
{{--                                                            <a class="dropdown-item" href="#">Remove</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i--}}
{{--                                                            class="mdi mdi-folder font-size-16 align-middle text-warning me-2"></i>--}}
{{--                                                        Project B</a></td>--}}
{{--                                                <td>10-10-2020, 10:51</td>--}}
{{--                                                <td>72 KB</td>--}}
{{--                                                <td>--}}
{{--                                                    <div class="dropdown">--}}
{{--                                                        <a class="font-size-16 text-muted dropdown-toggle" role="button"--}}
{{--                                                            data-bs-toggle="dropdown" aria-haspopup="true">--}}
{{--                                                            <i class="mdi mdi-dots-horizontal"></i>--}}
{{--                                                        </a>--}}

{{--                                                        <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                                            <a class="dropdown-item" href="#">Open</a>--}}
{{--                                                            <a class="dropdown-item" href="#">Edit</a>--}}
{{--                                                            <a class="dropdown-item" href="#">Rename</a>--}}
{{--                                                            <div class="dropdown-divider"></div>--}}
{{--                                                            <a class="dropdown-item" href="#">Remove</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i--}}
{{--                                                            class="mdi mdi-text-box font-size-16 align-middle text-muted me-2"></i>--}}
{{--                                                        Changes list.txt</a></td>--}}
{{--                                                <td>09-10-2020, 17:05</td>--}}
{{--                                                <td>07 KB</td>--}}
{{--                                                <td>--}}
{{--                                                    <div class="dropdown">--}}
{{--                                                        <a class="font-size-16 text-muted dropdown-toggle" role="button"--}}
{{--                                                            data-bs-toggle="dropdown" aria-haspopup="true">--}}
{{--                                                            <i class="mdi mdi-dots-horizontal"></i>--}}
{{--                                                        </a>--}}

{{--                                                        <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                                            <a class="dropdown-item" href="#">Open</a>--}}
{{--                                                            <a class="dropdown-item" href="#">Edit</a>--}}
{{--                                                            <a class="dropdown-item" href="#">Rename</a>--}}
{{--                                                            <div class="dropdown-divider"></div>--}}
{{--                                                            <a class="dropdown-item" href="#">Remove</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i--}}
{{--                                                            class="mdi mdi-image font-size-16 align-middle text-success me-2"></i>--}}
{{--                                                        Img-2.png</a></td>--}}
{{--                                                <td>09-10-2020, 15:12</td>--}}
{{--                                                <td>31 KB</td>--}}
{{--                                                <td>--}}
{{--                                                    <div class="dropdown">--}}
{{--                                                        <a class="font-size-16 text-muted dropdown-toggle" role="button"--}}
{{--                                                            data-bs-toggle="dropdown" aria-haspopup="true">--}}
{{--                                                            <i class="mdi mdi-dots-horizontal"></i>--}}
{{--                                                        </a>--}}

{{--                                                        <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                                            <a class="dropdown-item" href="#">Open</a>--}}
{{--                                                            <a class="dropdown-item" href="#">Edit</a>--}}
{{--                                                            <a class="dropdown-item" href="#">Rename</a>--}}
{{--                                                            <div class="dropdown-divider"></div>--}}
{{--                                                            <a class="dropdown-item" href="#">Remove</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i--}}
{{--                                                            class="mdi mdi-folder font-size-16 align-middle text-warning me-2"></i>--}}
{{--                                                        Project C</a></td>--}}
{{--                                                <td>09-10-2020, 10:11</td>--}}
{{--                                                <td>20 KB</td>--}}
{{--                                                <td>--}}
{{--                                                    <div class="dropdown">--}}
{{--                                                        <a class="font-size-16 text-muted dropdown-toggle" role="button"--}}
{{--                                                            data-bs-toggle="dropdown" aria-haspopup="true">--}}
{{--                                                            <i class="mdi mdi-dots-horizontal"></i>--}}
{{--                                                        </a>--}}

{{--                                                        <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                                            <a class="dropdown-item" href="#">Open</a>--}}
{{--                                                            <a class="dropdown-item" href="#">Edit</a>--}}
{{--                                                            <a class="dropdown-item" href="#">Rename</a>--}}
{{--                                                            <div class="dropdown-divider"></div>--}}
{{--                                                            <a class="dropdown-item" href="#">Remove</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i--}}
{{--                                                            class="bx bxs-file font-size-16 align-middle text-primary me-2"></i>--}}
{{--                                                        starter-page</a></td>--}}
{{--                                                <td>08-10-2020, 03:22</td>--}}
{{--                                                <td>11 KB</td>--}}
{{--                                                <td>--}}
{{--                                                    <div class="dropdown">--}}
{{--                                                        <a class="font-size-16 text-muted dropdown-toggle" role="button"--}}
{{--                                                            data-bs-toggle="dropdown" aria-haspopup="true">--}}
{{--                                                            <i class="mdi mdi-dots-horizontal"></i>--}}
{{--                                                        </a>--}}

{{--                                                        <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                                            <a class="dropdown-item" href="#">Open</a>--}}
{{--                                                            <a class="dropdown-item" href="#">Edit</a>--}}
{{--                                                            <a class="dropdown-item" href="#">Rename</a>--}}
{{--                                                            <div class="dropdown-divider"></div>--}}
{{--                                                            <a class="dropdown-item" href="#">Remove</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end w-100 -->
            </div>
        </div>

        <div class="card filemanager-sidebar ms-lg-2">

        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/file-manager.init.js') }}"></script>
@endsection
