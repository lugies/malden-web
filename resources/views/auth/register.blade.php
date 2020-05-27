@extends('./auth.layouts.app')

@section('content')
<div class="register-box">
    <div class="login-logo">
        <b>NAKO PLAY</b>
      </div>
  
    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Kayıt olmak için doldurunuz.</p>
  
        <form action="{{ route('register') }}" method="post">
            {{$errors}}
            @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" placeholder="Ad - Soyad">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Kayıt Ol</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->
@endsection
