@extends('layouts/app', ['activePage' => 'welcome', 'title' => 'Thai-Tanic'])

@section('content')
    <div class="full-page section-image" data-image="{{asset('light-bootstrap/img/colour-bg.png')}}">
        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <img src="{{asset('light-bootstrap/img/Logo-TT.png')}}" style="margin-left: 35%;">
                        <h1 class="text-center" style="color: rgb(233,107,105);">{{ __('Welcome to Thai-Tanic.') }}</h1>
                        <h3 class="text-center" style="color: rgb(233,107,105);">{{ __('Simply The Best!') }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();

            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
@endpush