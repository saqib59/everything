(function($){
/**************** TABLES ******************/

$(document).ready( function () {

    $('#example').DataTable();

} );

/**************** TABLES ******************/

/*************** ADD ACTIVE CLASS ON DEV ***************/
	
$(".reception_tab_btn").click(function() {
  $(".reception_tab_btn").removeClass('selected');
	$(this).addClass('selected');
});

/*************** ADD ACTIVE CLASS ON DEV ***************/

/********** preview image before upload ***********/

 $(".upload").change(function () {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        console.log(reader);
        reader.onload = function (e) {
            $('.img-class').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    }
});

/********** preview image before upload ***********/

/*************** UPDATE PROFILE ***************/
    $("#update-profile-form, #add_service_form").submit(function(event) {
    event.preventDefault();
    tinyMCE.triggerSave();
        $(this).find("button[type=submit]").append('<i class="fa fa-circle-o-notch fa-spin" style="font-size:20px"></i>');
        $(this).find("button[type=submit]").prop("disabled",true);
            var serialize_form = $(this).serialize();
            $.ajax({
                type:"POST",
                url: ajax_script.ajax_url,
                 data: new FormData(this),
                  cache: false,
                  contentType: false,
                  processData: false,
                  dataType: 'json',
              success: function (response) {
                    $(this).find("button[type=submit]").children().remove();
                    $(this).find("button[type=submit]").prop("disabled",false);
                    console.log(response);
                    var status = response.status;
                    if (status) { 
                        Swal.fire({
                            icon: 'success',
                            text: response.message,
                            });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            text: response.message,
                            });
                        $('html, body').animate({
                             scrollTop: $(".up").offset().top
                         }, 1500);
                    }
                },
                error: function (errorThrown) {
                        console.log(errorThrown);
                    },
            });
      
  });

/*************** UPDATE PROFILE ***************/

/*************** CHANGE PROFILE PASSWORD ***************/

$("#change_password").submit(function(event) {
event.preventDefault();
$(this).validate({
  rules: {
    current_pass: {required: true},
    new_pass: {required: true},
    confirm_new_pass: {equalTo:'#pass_update'}
  }
});
var valid = $(this).valid();
if (valid) {
    $("#update-pswd").append('<i class="fa fa-circle-o-notch fa-spin" style="font-size:20px"></i>');
    $("#update-pswd").prop("disabled",true);
        var serialize_form = $(this).serialize();
        $.ajax({
            type:"POST",
            url: ajax_script.ajax_url,
            data: serialize_form,
            dataType : 'json',
          success: function (response) {
                $("#update-pswd").children().remove();
                $("#update-pswd").prop("disabled",false);
                console.log(response);
                var status = response.status;
                if (status) { 
                    Swal.fire({
                        icon: 'success',
                        text: response.message,
                        });
                } else {
                    Swal.fire({
                        icon: 'error',
                        text: response.message,
                        });
                }
            },
            error: function (errorThrown) {
                    console.log(errorThrown);
                },
        });
}
  
});

/*************** CHANGE PROFILE PASSWORD ***************/

  function imagesPreview(input) {
            html = '';
            if (input.files) {
              var filesAmount = input.files.length;
              for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                  html += '<li><img class="thumb" src="'+event.target.result+'" /></li>';
                }
                reader.readAsDataURL(input.files[i]);
              }
            }
          };

          $('#gallery-images').on('change', function() {
            imagesPreview(this);
            setTimeout(function(){
            $(".uploadfileone").html(html);
            },1000);
          });


})(jQuery);
