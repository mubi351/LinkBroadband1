$(function(){
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<span class="title">#title#</span>',
        labels: {
            previous : 'Previous',
            next : 'Next Step',
            finish : 'Submit',
            current : ''
        },
        onStepChanging: function (event, currentIndex, newIndex) { 
            console.log("currentIndex",currentIndex);
            console.log("newIndex",newIndex);
        
        
            var fullname = $('#first_name').val() + ' ' + $('#last_name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var location = $('#location').val();
            var date = $('#date').val();
            var time = $('#time').val();

            $('#fullname-val').text(fullname);
            $('#phone-val').text(phone);
            $('#email-val').text(email);
            $('#location-val').text(location);
            $('#date-val').text(date);
            $('#time-val').text(time);
            
            /*if(newIndex==5){
             
               $("#form-total").validate();
                return $("#form-total").valid();
            }*/
        
            return true;
        }
    });
    $("#date").datepicker({
        dateFormat: "MM - DD - yy",
        showOn: "both",
        buttonText : '<i class="zmdi zmdi-chevron-down"></i>',
    });

});


	
/*var form = $("#form-total").show();
 
form.steps({
     headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<span class="title">#title#</span>',
    onStepChanging: function (event, currentIndex, newIndex)
    {
        // Allways allow previous action even if the current form is not valid!
        if (currentIndex > newIndex)
        {
            return true;
        }
       
        if (currentIndex < newIndex)
        {
            // To remove error styles
            form.find(".body:eq(" + newIndex + ") label.error").remove();
            form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
        }
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onStepChanged: function (event, currentIndex, priorIndex)
    {
       if(priorIndex==5){
           form.validate().settings.ignore = ":disabled";
         return form.valid();
       }
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        alert("Submitted!");
    }
}).validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        confirm: {
            equalTo: "#password-2"
        }
    }
});*/

