@if (session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
@endif

<form class="login-form" role="form" method="POST" action="{{ route('password.request') }}"> 
         {{ csrf_field() }}  

         
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <input type="hidden" name="token" value="{{ $token }}">
     

            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="icon_mail"></i></span>
              <input type="email" class="form-control" id="email" name="email" value="{{ $email or old('email') }}" placeholder="Adresse mail-electronique" required autofocus>

              @if ($errors->has('email'))
                <span class="help-block">
               <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
            

            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" id="password" name="password" class="form-control" placeholder="nouveau mot de passe" required>

                 @if ($errors->has('password'))
                  <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                  </span>
                 @endif
            </div>
            <div class="input-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <span class="input-group-addon"></i><i class="fa fa-repeat"></i></span>
                <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Confirmer votre ot de passe" required>

                @if ($errors->has('password_confirmation'))
                   <span class="help-block">
                   <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
            
            
            <button class="btn btn-info btn-lg btn-block" type="submit">
             Réinitialiser</button>
        </div>
      </form>