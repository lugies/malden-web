@extends('backend.layouts.app')
@section('header-title')
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">Bağlantılar</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      boş
    </div><!-- /.col -->
  </div><!-- /.row -->
@endsection

@section('content')
<div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Yeni Bağlantı Ekle</h3>
    </div>
    <div class="card-body">
        <form action="" method="post"  enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
              <label for="inputName">Bağlantı Adresi</label>
              <input type="text" id="inputName" name="link_url" class="form-control" value="{{$links->url}}" required>
          </div>
            <div class="form-group">
              <label for="inputDescription">Kayıtlı Görsel</label>
              <img src="/storage/{{$links->image_path}}" width="10%" alt="" vclass="img-rounded">
            </div>
            <div class="form-group">
              <label>Bağlantı Görseli Seçiniz</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="validatedCustomFile" name="image"  {{ $links->image_path ? '' : 'required' }} >
                <label class="custom-file-label" for="validatedCustomFile">Görsel Seçiniz...</label>
              </div>
          </div>
            <div class="form-group">
                <label for="exampleInputFile">Dil Seçiniz</label>
                <select name="lang_code" class="form-control" required>
                  @foreach($languages as $language)
                    @if($links->lang_code == $language->code)
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