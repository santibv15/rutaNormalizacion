<li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
</li>
@if (Route::has('register'))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    </li>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('register')}}">
                    
                        @csrf


                        <div class="form-group row">
                            <label for="cedula_func" class="col-md-4 col-form-label text-md-right">{{ __('cedula') }}</label>

                            <div class="col-md-6">
                                <input id="cedula_func" type="text" class="form-control @error('cedula_func') is-invalid @enderror" name="cedula_func" value="{{ old('cedula_func') }}" required autocomplete="cedula_func" autofocus>

                                @error('cedula_func')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel_func" class="col-md-4 col-form-label text-md-right">{{ __('Tel') }}</label>

                            <div class="col-md-6">
                                <input id="cedula_func" type="text" class="form-control @error('tel_func') is-invalid @enderror" name="tel_func" value="{{ old('tel_func') }}" required autocomplete="tel_func" autofocus>

                                @error('tel_func')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="correo_insti_func" class="col-md-4 col-form-label text-md-right">{{ __('Email Institucional') }}</label>

                            <div class="col-md-6">
                                <input id="correo_insti_func" type="email" class="form-control @error('correo_insti_func') is-invalid @enderror" name="correo_insti_func" value="{{ old('correo_insti_func') }}" required autocomplete="correo_insti_func">

                                @error('correo_insti_func')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="rol" class="col-md-4 col-form-label text-md-right">{{ __('rol') }}</label>

                            <div class="col-md-6">
                                <input id="rol" type="text" class="form-control @error('rol') is-invalid @enderror" name="rol" value="{{ old('rol') }}" required autocomplete="rol">

                                @error('rol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="enviar" onclick = "this.form.submit = enviar();">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

function enviar() {

document.formEnviar.action = "{{ route('register') }}";
document.formEnviar.target = "_blank";
document.formEnviar.submit();

<<<<<<< HEAD
document.formEnviar.action = "{{ route('register') }}";
document.formEnviar.target = "_self";
=======
 document.formEnviar.action = "{{ route('register') }}";
 document.formEnviar.target = "_self";
>>>>>>> caa0e56835dc30fb8c98d9693b6832f3465a3f45
document.formEnviar.submit(); 

return true;

}

</script>

