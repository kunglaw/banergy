@extends("layouts.auth")

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-header row">
    </div>
    <div class="content-wrapper">
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    Banergy
                                </div>

                            </div>
                            <div class="card-content">

                                <div class="card-body">
                                    <form class="form-horizontal" action="{{ route('login') }}" method="post"
                                        novalidate>
                                        {{ csrf_field() }}
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control" id="email" name="email"
                                                value="{{ old('email') }}" autofocus placeholder="Your Username"
                                                required>
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>

                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" name="password" class="form-control"
                                                id="user-password" placeholder="Enter Password" required>
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>

                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                                                <fieldset>
                                                    <input type="checkbox" id="remember-me" class="chk-remember"
                                                        {{ old('remember') ? 'checked' : '' }}>
                                                    <label for="remember-me"> Remember Me</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a
                                                    href="recover-password.html" class="card-link">Forgot
                                                    Password?</a></div>
                                        </div>
                                        <button type="submit" class="btn btn-outline-info btn-block"><i
                                                class="ft-unlock"></i> Login</button>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection