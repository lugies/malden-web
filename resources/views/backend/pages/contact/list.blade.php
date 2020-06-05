@extends('backend.layouts.app')
@section('header-title')
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">İLETİŞİM</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <div class="form-group float-sm-right">
        boş
      </div>
    </div><!-- /.col -->
  </div><!-- /.row -->
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary card-outline card-outline-tabs">
      <div class="card-header p-0 border-bottom-0">
        <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
          @foreach($languages as $key => $language)
            <li class="nav-item">
              <a class="nav-link {{$key == 0 ? 'active' :  ''}}" id="lang-{{$language->code}}-tab" data-toggle="tab" href="#lang-{{$language->code}}" role="tab" aria-controls="home" aria-selected="true">
                {{$language->name}}
              </a>
            </li>
          @endforeach
        </ul>
      </div>
      <div class="card-body">
        <div class="tab-content" id="custom-tabs-three-tabContent">
          @foreach($languages as $key => $language)
            <div class="tab-pane fade {{$key == 0 ? 'show active' :  ''}}" id="lang-{{$language->code}}" aria-labelledby="lang-{{$language->code}}-tab" role="tabpanel">
              @foreach($contacts as $contact)
                @if ($language->code == $contact->lang_code)
                  <form action="{{action('ContactController@update',[$contact->id])}}" method="post"  enctype="multipart/form-data" class="needs-validation" novalidate>@csrf
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="mail">Email</label>
                        <input type="email" class="form-control" id="mail" name="mail" value="{{ isset($contact->mail) ? $contact->mail : '' }}" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="phone">Telefon</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="{{ isset($contact->phone) ? $contact->phone : '' }}" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="phone_2">Telefon</label>
                        <input type="number" class="form-control" id="phone_2" name="phone_2" value="{{ isset($contact->phone_2) ? $contact->phone_2 : '' }}" required>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="adress">Adres</label>
                        <input type="text" class="form-control" id="adress" name="adress" value="{{ isset($contact->adress) ? $contact->adress : '' }}" required>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="adress_2">Şube</label>
                        <input type="text" class="form-control" id="adress_2" name="adress2" value="{{ isset($contact->adress2) ? $contact->adress2 : '' }}" required>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="info">Hakkımızda İçeriği</label>
                        <textarea name="info" class="form-control" id="info" rows="3" required>{{ isset($contact->info) ? $contact->info : '' }}</textarea>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="map">Hakkımızda Harita (Google bağlantı linkini ekleyiniz)</label>
                        <input type="text" class="form-control" id="map" name="map" value="{{ isset($contact->map) ? $contact->map : '' }}">
                      </div>
                      <div class="form-group col-md-12">
                        <input type="hidden" name="lang_code" value="{{$language->code}}">
                      </div>
                      <div class="form-group float-sm-right">
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i></button>
                      </div>
                    </div>                  
                  </form>
                @endif
              @endforeach
            </div>
          @endforeach
        </div>
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
@endsection()
@section('js')
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.prevent();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
@endsection

