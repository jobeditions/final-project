<form class="login-form" role="form" method="POST" action="{{ route('login') }}"> 
{{ csrf_field() }}       
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="icon_mail"></i></span>
              <input type="email" id="email" name="email" class="form-control" placeholder="
Adresse mail-electronique" value="{{ old('email') }}" required autofocus>

                 
            </div>
            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>

                @if ($errors->has('password'))
                  <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
            </div>
            <label class="checkbox">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi 
                <span class="pull-right"> <a href="/password/reset"> Mot de passe oublié?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">
Identifier</button>
            <button class="btn btn-info btn-lg btn-block" type="submit"><a href="/register">Inscrire</a></button>
        </div>
      </form>