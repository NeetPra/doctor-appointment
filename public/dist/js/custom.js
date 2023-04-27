
$(document).ready(function() {
  // alert();
  $('.select2').select2()
  getDoctorData();
//   showContentpage();

  $('#search-doctor').on('click', async function (e) {
      var page = 1;
      var name = $("#name").val()
      var day = $("#day").val()
      var startTime = $("#startTime").val()
      var endTime = $("#endTime").val()
      $("span#loader").show();
      await getDoctorData(page, name, day, startTime, endTime);
      $("span#loader").hide();
  });


});

// validation hidden...............
$('.form-control').on('keypress', function(e) {
  $(this).parents(".form-group").children('span').css( "display", "none" );
  $(this).parents(".form-group").find('input').removeClass( "form-control is-invalid" ).addClass( "form-control" );
});


async function getDoctorData(page = 1, name = null, day = null, startTime = null, endTime = null) {
   
  let result;
  try {
      result = await $.ajax({
          url: SITE_URL + "/doctor-get",
          type: "GET",
          data: { page: page, name: name, day : day, startTime : startTime, endTime: endTime},
          headers: {
              'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
          },
          dataType: "html",
          success: function(reportHtmlContent) {
              $("#show-doctor").html("");
              $("#show-doctor").html(reportHtmlContent);
          },
      });
      return result;
  } catch (error) {
      $("span#loader").hide();
      errorObj = $.parseJSON(error.responseText);
      console.log(errorObj);
  }
}


$(function() {

    $('#monday-start-timepicker').datetimepicker({
        format: 'LT'
    })
    $('#monday-end-timepicker').datetimepicker({
        format: 'LT'
    })
    $('#tuesday-start-timepicker').datetimepicker({
        format: 'LT'
    })
    $('#tuesday-end-timepicker').datetimepicker({
        format: 'LT'
    })
    $('#wednesday-start-timepicker').datetimepicker({
        format: 'LT'
    })
    $('#wednesday-end-timepicker').datetimepicker({
        format: 'LT'
    })
    $('#thursday-start-timepicker').datetimepicker({
        format: 'LT'
    })
    $('#thursday-end-timepicker').datetimepicker({
        format: 'LT'
    })
    $('#friday-start-timepicker').datetimepicker({
        format: 'LT'
    })
    $('#friday-end-timepicker').datetimepicker({
        format: 'LT'
    })
    $('#saturday-start-timepicker').datetimepicker({
        format: 'LT'
    })
    $('#saturday-end-timepicker').datetimepicker({
        format: 'LT'
    })
    $('#sunday-start-timepicker').datetimepicker({
        format: 'LT'
    })
    $('#sunday-end-timepicker').datetimepicker({
        format: 'LT'
    })
    $('#start-timepicker').datetimepicker({
        format: 'LT'
    })
    $('#end-timepicker').datetimepicker({
        format: 'LT'
    })

    async function showAvaibility(doctorId) {

        let result;
        try {
            result = await $.ajax({
                url: SITE_URL + "/get-avaibility",
                type: "GET",
                data: { doctorId: doctorId},
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: "html",
                success: function(reportHtmlContent) {
                    $("#show-avaibility").html("");
                    $("#show-avaibility").html(reportHtmlContent);
                    $('#show-time').modal({backdrop: 'static', keyboard: false})
                },
            });
            return result;
        } catch (error) {
            $("span#loader").hide();
            errorObj = $.parseJSON(error.responseText);
            console.log(errorObj);
        }

       
    };


  });
