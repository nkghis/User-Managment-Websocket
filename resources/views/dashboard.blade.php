@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">

        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div id="app" class="card-body">
                <example-component></example-conponent>

               <!--  <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>

    {{--For Websocket Configuration. You must add it if you want to use websocket and Vue.js--}}
    <script src="{{ asset('js/app.js') }}"></script>
@endpush
