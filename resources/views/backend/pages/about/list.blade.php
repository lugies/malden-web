@extends('backend.layouts.app')
@section('header-title')
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">HAKKIMIZDA</h1>
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
              @foreach($abouts as $about)
                @if ($language->code == $about->lang_code)
                  <form action="{{action('AboutController@update',[$about->id])}}" method="post"  enctype="multipart/form-data" class="needs-validation" novalidate>@csrf
                    <div class="form-group">
                      <label for="inputDescription">Kayıtlı Görsel</label>
                      <img src="/storage/{{$about->image_path}}" width="10%" alt="" vclass="img-rounded" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Hakkımızda Görsel Seçiniz</label>
                        {{ $errors->has('image') ? $errors->first('image') : '' }}
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
                          <label class="custom-file-label" for="validatedCustomFile">Görsel Seçiniz...</label>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Hakkımızda İçeriği</label>
                      <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3" required>{{ $about->desc ? $about->desc : 'Inactive' }}</textarea>
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="lang_code" value="{{$language->code}}">
                    </div>
                    <div class="form-group float-sm-right">
                      <button type="submit" class="btn btn-success"><i class="fas fa-save"></i></button>
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

