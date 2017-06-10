
<form class="login-form" role="form" method="POST"  action="{{ route('register') }}">
        {{ csrf_field() }}       
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>

            <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" id="name" name="name" class="form-control" placeholder="Utilisateur" value="{{ old('name') }}" required autofocus>

          @if ($errors->has('name'))
          <span class="help-block">
          <strong>{{ $errors->first('name') }}</strong>
          </span>
          @endif
             </div>

            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="icon_mail"></i></span>
              <input type="email" id="email" name="email" class="form-control" placeholder="Adresse mail-electronique" value="{{ old('email') }}" required autofocus >
              

              @if ($errors->has('email'))
              <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif

            </div>

            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
              
              <span class="input-group-addon"><i class="icon_key_alt"></i></span>
              <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>

                @if ($errors->has('password'))
                  <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
            </div>
            <div class="input-group">
                <span class="input-group-addon"></i><i class="fa fa-repeat"></i></span>
                <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Confirmer votre Mot de passe">
            </div>
            
            
            <button class="btn btn-info btn-lg btn-block" type="submit">Inscrire</button>
        </div>
      </form>