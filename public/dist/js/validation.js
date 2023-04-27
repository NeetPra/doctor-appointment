
jQuery.validator.addMethod("isCheckd", function(value, element, param) {
    let pv = $(param).is(":checked");
    if (value) {
        return true
    }
    return pv ? false :true
  }, "This field is required!");

jQuery.validator.addMethod("greaterThanEqual",
    function (value, element, param) {
        let start = $(param).val();
        var date = new Date();
        var startTime = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate()+" "+ start;
        var endTime = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate()+" "+ value;
        let start1 = Date.parse(startTime);
        let end1 = Date.parse(endTime);
        if (start1 > end1) {
           return false;
        }else{
            return true;
        }
}, "End time must be greater than start time!");

jQuery.validator.addMethod("startTime",
    function (value, element, param) {
        let start = $(param).val();
        if (start) {
           return true;
        }else{
            return value ? false : true;
        }
}, "Please select first start time!");


$('#add-form').validate({
    rules: {
        doctor_id: {
            required: true,
        },
        monday_start_time: {
            isCheckd: "#monday",
        },
        monday_end_time: {
            isCheckd: "#monday",
            greaterThanEqual: "#monday-start_time",
            startTime: "#monday-start_time"
        },
        tuesday_start_time: {
            isCheckd: "#tuesday",
        },
        tuesday_end_time: {
            isCheckd: "#tuesday",
            greaterThanEqual: "#tuesday-start_time",
            startTime: "#tuesday-start_time"
        },
        wednesday_start_time: {
            isCheckd: "#wednesday",
        },
        wednesday_end_time: {
            isCheckd: "#wednesday",
            greaterThanEqual: "#wednesday-start_time",
            startTime: "#wednesday-start_time"
        },
        thursday_start_time: {
            isCheckd: "#thursday",
        },
        thursday_end_time: {
            isCheckd: "#thursday",
            greaterThanEqual: "#thursday-start_time",
            startTime: "#thursday-start_time"
        },
        friday_start_time: {
            isCheckd: "#friday",
        },
        friday_end_time: {
            isCheckd: "#friday",
            greaterThanEqual: "#friday-start_time",
            startTime: "#friday-start_time"
        },
        saturday_start_time: {
            isCheckd: "#saturday",
        },
        saturday_end_time: {
            isCheckd: "#saturday",
            greaterThanEqual: "#saturday-start_time",
            startTime: "#saturday-start_time"
        },
        sunday_start_time: {
            isCheckd: "#sunday",
        },
        sunday_end_time: {
            isCheckd: "#sunday",
            greaterThanEqual: "#sunday-start_time",
            startTime: "#sunday-start_time"
        },
    },
    messages: {
        doctor_id: {
            required: "Please select doctor!",
        },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },

});

