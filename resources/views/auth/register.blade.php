@extends('layouts.frontend')

@section('page-content')
<section class="togther">
    <div class="page-header min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                    <div class="card card-plain"><a href="https://abijan-website.netlify.app" target="_blank" rel="noreferrer"><img class="mb-4 text-center m-auto d-block d-lg-none" src="/static/media/logo.89ab20edece446e181e1.png" alt="" width="200"></a>
                        <div class="card-header pb-0 text-start mb-2">
                            <h4 class="fw-bold">Sign Up</h4>
                            <p class="mb-0">Enter your email and password to sign Up</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('post.register') }}" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                @includeIf('layouts.error_template')
                                <div class="mb-3">
                                    <div class="">
                                        <input name="username" type="text" class="form-control form-control-lg" placeholder="Username" value="">
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="">
                                        <input name="email" type="email" class="form-control form-control-lg" placeholder="Email address" value="">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="">
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-lg" name="password" placeholder="Passsword" value="">
                                            <span class="input-group-append toggle-password">
                                                <span class="visiblePassword input-group-text mdi mdi-eye-outline"></span>
                                            </span>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{$message}}
                                                    </span>
                                                @enderror
                                            </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="">
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Confirm Password" value="">
                                            <span class="input-group-append toggle-password">
                                                <span class="visiblePassword input-group-text mdi mdi-eye-outline"></span>
                                           </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="">
                                        <input name="referral" type="text" class="form-control form-control-lg" placeholder="Referral ID" value="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input name="accept" type="checkbox" required id="check" class="form-check-input" value="false"><label class="form-check-label mb-0" for="check">I have read and agree with the<span> <a href="/"> Terms &amp; Conditions</a> </span></label></div>

                                </div>
                                <div class="mb-3">
                                    {!! app('captcha')->display() !!}

                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong class="text-danger">{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="text-center"><button type="submit" class="btn btn-dark w-100 mt-2 mb-0 py-2">Sign up</button></div>
                            </form>
                        </div>
                        <div class="text-center pt-0 px-lg-2 px-1">
                            <p class="mb-4 text-sm mx-auto">Have an account already?<a class="text-primary text-gradient fw-bold" href="{{route('login')}}"> Sign in</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                    <div class="position-relative bg-gradient-primary h-100 m-3 px-5 border-radius-lg d-flex flex-column justify-content-center overflow-hidden">
                        <div class="container"><a href="/" rel="noopener noreferrer"><img src="{{URL::asset('assets/images/logoo.png')}}" alt="Logo" width="200"></a>
                            <h4 class="mt-5 text-white position-relative mb-5">The Most Trusted E-currency Exchange and Bills Payment Platform</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="SignUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="sign">
                    <form class="sign-div" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <a href="/">
                            <img src="{{URL::asset('assets/images/logo.png')}}" draggable="false" alt="">
                        </a>

                        @includeIf('layouts.error_template')

                        <div class="row">
                            <div class="col-lg-12">
                                <label>Email</label>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <input type="email" placeholder="Enter Your Email" name="email" class="input" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label>Password</label>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <input type="password" placeholder="Enter your Password" name="password" class="input" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                {{$message}}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label>Confirm Password</label>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <input placeholder="Enter Comfirm Password" type="password" class="input" name="password_confirmation" required >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        {!! app('captcha')->display() !!}

                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <p>
                                By clicking Sign up, you agree to our Terms & Conditions
                            </p>
                            <div class="col-md-12 mb-3">
                                <button type="submit">Sign up</button>
                            </div>
                        </div>
                        <p class="fine">You have an account? <a href="{{route('login')}}">Login</a> </p>
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section> -->
@endsection
