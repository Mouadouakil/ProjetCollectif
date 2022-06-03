@extends('layouts.master')

@section('title') @lang('translation.Google_Maps') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Maps @endslot
        @slot('title') Google Maps @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Caméra Surveillance 1</h4>
                    <p class="card-title-dsec">Bloc A</p>

                    <div id="gmaps-markers" class="gmaps"></div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Caméra Surveillance 2</h4>
                    <p class="card-title-desc">Bloc 2</p>

                    <div id="gmaps-overlay" class="gmaps"></div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Caméra Surveillance 3</h4>
                    <p class="card-title-desc">Bloc C</p>

                    <div id="panorama" class="gmaps-panaroma"></div>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Caméra Surveillance 4</h4>
                    <p class="card-title-desc">Bloc 4</p>

                    <div id="gmaps-types" class="gmaps"></div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')
    <!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

    <!-- Gmaps file -->
    <script src="{{ URL::asset('/assets/libs/gmaps/gmaps.min.js') }}"></script>

    <!-- demo codes -->
    <script src="{{ URL::asset('/assets/js/pages/gmaps.init.js') }}"></script>
@endsection
