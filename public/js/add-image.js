$(document).ready(function() {

  $("#gambar").on('change', function(){
    updatePlacholder(this);
  });


  // file upload
  function updatePlacholder(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#gambar_image').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }


})
