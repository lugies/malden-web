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
                  <form action="{{action('ContactController@update',[$contact->id])}}" method="post"  enctype="multipart/form-data">@csrf
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="mail">Email</label>
                        <input type="email" class="form-control" id="mail" name="mail" value="{{$contact->mail}}">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="phone">Telefon</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="{{$contact->phone}}">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="phone_2">Telefon</label>
                        <input type="number" class="form-control" id="phone_2" name="phone_2" value="{{$contact->phone_2}}">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="adress">Adres</label>
                        <input type="text" class="form-control" id="adress" name="adress" value="{{$contact->adress}}">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="adress_2">Şube</label>
                        <input type="text" class="form-control" id="adress_2" name="adress2" value="{{$contact->adress2}}">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="info">Hakkımızda İçeriği</label>
                        <textarea name="info" class="form-control" id="info" rows="3">{{$contact->info}}</textarea>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="map">Hakkımızda Harita (Google bağlantı linkini ekleyiniz)</label>
                        <input type="text" class="form-control" id="map" name="map" value="{{$contact->map}}">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        $('body').on('click', '.delete-btn', function () {
          
            var box = $(this).closest('#box');
            var id = $(this).data('id');
            var type = $(this).data('type');
            var href = $(this).attr('href');
            console.log(box);
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

