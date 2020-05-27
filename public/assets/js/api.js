$(document).ready(function(){
  data_al();
});
function data_al()
{
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  $.ajax({
    type: "POST",
    url: "https://orguaski.com/api/all", //web service ve methodumuz
    data: "{}",
    contentType: "application/json; charset=utf-8",
    dataType: "json",
    success: function(msg){
      $("#goster").html(msg.d);
    }
  });
}