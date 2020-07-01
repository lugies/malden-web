@extends('backend.layouts.app')
@section('header-title')
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">SERVİSLER</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <div class="form-group float-sm-right">
        <select class="form-control">
          <option>Almanca</option>
          <option>Türkçe</option>
        </select>
      </div>
    </div><!-- /.col -->
  </div><!-- /.row -->
@endsection

@section('content')
<div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Yeni Servis Ekle</h3>
    </div>
    <div class="card-body">
        <form action="" method="post"  enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label for="validationCustom01">Servis Adı</label>
                {{ $errors->has('service_name') ? $errors->first('service_name') : '' }}
                <input type="text" id="validationCustom01" name="service_name" class="form-control" value="{{$services->name}}" required>
            </div>
            <div class="form-group">
                <label for="validationCustom02">Servis Açıklaması</label>
                {{ $errors->has('service_desc') ? $errors->first('service_desc') : '' }}
                <textarea id="validationCustom02" class="form-control" rows="4" name="service_desc" required>{{$services->desc}}</textarea>
            </div>
            <div class="form-group">
              <label for="inputDescription">Kayıtlı Görsel</label>
              <img src="/storage/{{$services->image_path}}" width="10%" alt="" vclass="img-rounded">
          </div>
            <div class="form-group">
                <label>Servis İkon Seçiniz</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="validatedCustomFile" name="image"  {{ $services->image_path ? '' : 'required' }} >
                  <label class="custom-file-label" for="validatedCustomFile">Görsel Seçiniz...</label>
                </div>
            </div>
            <div class="form-group">
                <label for="validationCustom04">Dil Seçiniz</label>
                {{ $errors->has('lang_code') ? $errors->first('lang_code') : '' }}
                <select id="validationCustom04" name="lang_code" class="form-control" required>
                  @foreach($languages as $language)
                    @if($services->lang_code == $language->code)
                      <option value="{{$language->code}}" selected>{{$language->name}}</option>
                    @else
                    <option value="{{$language->code}}">{{$language->name}}</option>
                    @endif
                  @endforeach
              </select>
              </div>
            <div class="form-group float-sm-right">
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i></button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
  </div>
@endsection()
@section('js')
<script type="application/javascript">
  $('input[type="file"]').change(function(e){
      var fileName = e.target.files[0].name;
      $('.custom-file-label').html(fileName);
  });
</script>
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
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>
@endsection