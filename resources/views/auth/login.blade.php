@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Connectez vous</div>

                <div class="panel-body col-md-offset-4">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <label for="email" class=" control-label">E-Mail</label>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-success">
                           

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <label for="password" class="control-label">Mot de passe</label>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-success">
                          

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-1">
                                <button type="submit" class="btn btn-lg btn-primary">
                                   connexion
                                </button>

                                
                            </div>
                        </div>
                    </form>
                     <a  href="{{ route('password.request') }}">
                        mot de passe oublier
                    </a>
                </div>
                   
            </div>
        </div>
    </div>
</div>
@endsection
