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

                    <iframe width="600" height="315"
src="http://119.242.59.190:8083/-wvhttp-01-/GetOneShot?image_size=640x480&frame_count=1000000000">
</iframe>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Caméra Surveillance 2</h4>
                    <p class="card-title-desc">Bloc 2</p>

                    <iframe width="600" height="315"
src="http://180.54.0.8:50000/cgi-bin/camera?resolution=640&amp;quality=1&amp;Language=0&amp;1655660686">
</iframe>
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
                    

                        <iframe width="600" height="315"
src="http://103.125.43.75:60001/cgi-bin/snapshot.cgi?chn=0&u=admin&p=&q=0&1655660869">
</iframe>
              
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Caméra Surveillance 4</h4>
                    <p class="card-title-desc">Bloc 4</p>

                    <iframe width="600" height="315"
src="http://111.64.36.153:50001/cgi-bin/camera?resolution=640&amp;quality=1&amp;Language=0&amp;1655660769">
</iframe>
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
