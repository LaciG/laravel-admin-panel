$(document).ready(function (){
		//Chart.defaults.global.showTooltips = false;
	
    $("#kalkulator").hide();

    var validateFields = function() {
        if($("#workers").val() == null) {
            showError("Alkalmazottak száma nincs kitöltve!");
            return false;
        } 

        if($("#clients").val() == null) {
            showError("Ügyfelek száma nincs kitöltve!");
            return false;
        }

        if($("#industry").val() == null) {
            showError("Iparági tevékenység nincs kitöltve!");
            return false;
        }

        if($("#process").val() == null) {
            showError("Belső folyamatok nincs kitöltve!");
            return false;
        }
        if($("#incident").val() == null) {
            showError("Incidenskezelési terv nincs kitöltve!");
            return false;
        }

        if($("#package").val() == null) {
            showError("Nem választott csomagot!");
            return false;
        }
        //TODO Every input except checkboxes
        hideError();
        return true;
    }

    var showError = function (message) {
        $("#error-message").html(message);
    };
    var hideError = function() {
        $("#error-message").hide();
    };


    $("#sending").click(function (){
         $('.spanhide').show().css('display','inline-block');
        if(validateFields()) {
            var calculatorData = {
                workers: $("#workers").val(),
                clients: $("#clients").val(),
                industry: $("#industry").val(),
                process: $("#process").val(),
                law: $("#checkbox-law").prop('checked'),
                hr: $("#checkbox-human").prop('checked'),
                payroll: $("#checkbox-payroll").prop("checked"),
                it: $("#checkbox-it").prop("checked"),
                incident: $("#incident").val(),
                package: $("#package").val()
            }

                console.log(JSON.stringify(calculatorData));

            $("#kalkulator").slideDown();
            $("#contact-form").hide();
                $.ajax({
                    type: 'POST',
                url: '/calculate',
                contentType: 'application/json',
                dataType: 'json',
                data: JSON.stringify(calculatorData),

                success: function (response) {
                    console.log(response);


                },
                error: function (response) {
                    console.log("error");
                }
                }); 
        }
    })
				
})