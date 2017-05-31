          @if (session('status'))
             <div class="alert alert-success">
              {{ session('status') }}
              </div>
              @endif

<form class="login-form" role="form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="icon_mail"></i></span>
              <input type="email" class="form-control" placeholder="
Adresse mail-electronique" id="email" name="email" value="{{ old('email') }}" required >
            </div>

            @if ($errors->has('email'))
                <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
                </span>
             @endif
            
            <button class="btn btn-primary btn-lg btn-block" type="submit">
 Envoyer le lien de réinitialisation </button>
            
        </div>
      </form>