@extends('layouts.app', ['activePage' => 'register', 'title' => 'Thai-Tanic'])

@section('content')
    <div class="full-page register-page section-image" data-color="black"  data-image="{{ asset('light-bootstrap/img/full-screen-restaurant.jpg') }}">
        <div class="content pt-5">
            <div class="container mt-5">
                <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                            <div class="container mt-5">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="card card-login card-hidden">  
                                        <div class="card-header ">
                                            <h3 class="header text-center">{{ __('Register') }}</h3>
                                        </div>
                                        <div class="card-body">
                                            <label for="name" class="col-md-6 col-form-label">{{ __('Name') }}</label>
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="{{ __('Enter a Name') }}" value="{{ old('name') }}" required autofocus>
                                            </div>

                                            <label for="email" class="col-md-6 col-form-label">{{ __('E-Mail Address') }}</label>
                                            <div class="form-group">   {{-- is-invalid make border red --}}
                                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter email" class="form-control" required>
                                            </div>

                                            <label for="password" class="col-md-6 col-form-label">{{ __('Password') }}</label>
                                            <div class="form-group">
                                                <input type="password" name="password" placeholder="Enter a Password" class="form-control" required >
                                            </div>

                                            <label for="password" class="col-md-6 col-form-label">{{ __('Confirm Password') }}</label>
                                            <div class="form-group">
                                                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control" required autofocus>
                                            </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <div class="container text-center" >
                                        <button type="submit" class="btn btn-warning btn-wd">{{ __('Create An Account') }}</button>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-link" style="color:#23CCEF" href="{{ route('login') }}">
                                            {{ __('Already have an account?') }}
                                        </a>
                                    </div>
                                    
                                </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col">
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-warning alert-dismissible fade show" >
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close"> &times;</a>
                                        {{ $error }}
                                    </div>
                                @endforeach
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