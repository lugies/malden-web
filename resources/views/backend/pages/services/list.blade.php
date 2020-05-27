@extends('backend.layouts.app')
@section('header-title')
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">SERVİSLER</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <div class="form-group float-sm-right">
        <a class="btn btn-success" href="{{route('services.add')}}"><i class="fas fa-save"></i> Yeni Servis Ekle</i></a>
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
              @foreach($services as $service)
                @if ($language->code == $service->lang_code)
                <div class="col-12 col-sm-6 col-md-3 box" id="box">
                  <div class="card bg-light">
                    <div class="card-header border-bottom-0 text-center">
                      <img src="{{ url('/storage/'.$service->image_path) }}" alt="" class="img-circle img-fluid">
                    </div>
                    <div class="card-body pt-0">
                      <div class="row">
                        <div class="col-12">
                          <h2 class="lead text-center"><b>{{$service->name}}</b></h2>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="text-right">
                        <a class="btn btn-info" href="#"><i class="fas fa-pencil-alt"></i></a>
                        <a href="{{route('delete',['id'=>$service->id])}}"
                          class="btn btn-danger delete-btn"><i class="fas fa-trash"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>
        $('body').on('click', '.delete-btn', function () {

            var box = $("#box");
            var id = $(this).data('id');
            var type = $(this).data('type');
            var href = $(this).attr('href');

            Swal.fire({
                title: 'Sil',
                text: "Bu özelliği silmek istediğinize eminmisiniz ?!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#218838',
                cancelButtonColor: '#c82333',
                confirmButtonText: 'Evet, Sil!',
                cancelButtonText: 'Hayır'
            }).then((result) => {

                if (result.value) {

                    var target = href;

                    $.ajax({
                        url: target,
                        dataType: 'json',
                        success: function (data) {
                            console.log(data);
                            if (data.success) {
                                Swal.fire(
                                    'Bilgi!',
                                    data.message,
                                    'success'
                                );
                                box.remove();
                            } else {
                                Swal.fire(
                                    'Bilgi!',
                                    data.message,
                                    'info'
                                );
                            }
                        }
                    })
                }
            });
            return false;
        });
    </script>
@endsection

