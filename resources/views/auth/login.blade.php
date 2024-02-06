@extends('layouts.app')

@section('content')

    <div class="auth-wrapper " >
        <div class="auth-content ">
           
            <div class="card rounded" >
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <img class="img-fluid logo-dark mb-2" src="assets/img/logo_CSS.png" alt="Logo" width="150" height="100">
                        </div>
                        <h3 class="mb-4" style="font-weight: bold; color: #002278">CONNEXION</h3>
                        <div class="input-group mb-3">
                            <label for="basic-url" class="form-label" style="font-size: 16px; font-weight: bold;color: #002278;">Identifiant</label>
                            <div class="input-group mb-2" style="border: 1px solid #000;">
                                <span class="input-group-text" id="basic-addon1" style="border-radius: 0;"><i class="fa fa-user" style="color: #002278;"></i></span>
                                <input type="text" style="border-radius: 0;" class="form-control input-font" name="login" id="login" placeholder="Identifiant" aria-label="login" aria-describedby="basic-addon1" required>
                                @if ($errors->has('email') || $errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') ?: $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="input-group mb-3">
                            <label for="basic-url" class="form-label" style="font-size: 16px; font-weight: bold;color: #002278;">Mot de passe</label>

                            <div class="input-group mb-2" style="border: 1px solid #000;">
                                <!-- <label for="">Identifiant ou Email</label> -->
                                <span class="input-group-text" id="basic-addon1" style="border-radius: 0;"><i class="fa fa-lock" style="color: #002278;"></i></span>
                                <input type="password" name="password" id="password" style="border-radius: 0;" class="form-control input-font" placeholder="Mot de passe" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group text-left">
                            <div class="checkbox checkbox-fill d-inline">
                                <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                                <label for="checkbox-fill-a1" class="cr"> Se souvenir de moi</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-conn shadow-2 mb-4">Connexion</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <style>
        .input-font{
            font-size: 16px;
            font-weight: bold;
        }

        .btn-conn:hover{
            background-color: #002278;
        }
    </style>
    <script>

    </script>
@endsection
