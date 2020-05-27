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
        <form action="{{ action('ServicesController@insert') }}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="inputName">Servis Adı</label>
                <input type="text" id="inputName" name="service_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputDescription">Servis Açıklaması</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="service_desc"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Servis İkon Seçiniz</label>
                <div class="input-group">
                <div class="custom-file">
                    <label class="custom-file-label" for="exampleInputFile">Görsel Seçiniz</label>
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Dil Seçiniz</label>
                <select class="form-control" name="lang_code">
                  <option value="DE">Almanca</option>
                  <option value="TR">Türkçe</option>
                </select>
              </div>
            <div class="form-group float-sm-right">
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i></button>
            </div>
        </form>
    </div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <!-- /.card-body -->
  </div>
@endsection()
@section('js')
<script type="text/javascript">
    $('#exampleInputFile').change(function() {
        var i = $(this).prev('label').clone();
        var file = $('#exampleInputFile')[0].files[0].name;
        $(this).prev('label').text(file);
    });
</script>
@endsection