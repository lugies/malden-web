@extends('./auth.layouts.app')

@section('content')
<div class="login-box">
    <div class="login-logo">
      <b>NAKO PLAY</b>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Giriş yapabilmek için kullanıcı adınızı ve şifrenizi giriniz.</p>
  
        <form action="{{ route('login') }}" method="post">
            @csrf
          <div class="input-group mb-3">
            <input name="email" type="email" class="form-control" placeholder="E-Mail">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input name="password" type="password" class="form-control" placeholder="Şifre">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Beni Hatırla
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

  
        <p class="mb-1">
          <a href="#">Şifremi Unuttum</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
@endsection
