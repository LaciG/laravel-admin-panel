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
            var formString = "function=calculate" + 
                "&workers=" + $("#workers").val() + 
                "&clients=" + $("#clients").val() +
                "&industry=" + $("#industry").val() +
                "&process=" + $("#process").val() +
                "&law=" + $("#checkbox-law").prop('checked') +
                "&hr=" + $("#checkbox-human").prop('checked') +
                "&payroll=" + $("#checkbox-payroll").prop("checked") +
                "&it=" + $("#checkbox-it").prop("checked") + 
                "&incident=" + $("#incident").val() +
                "&package=" + $("#package").val();

                //console.log(formString);

            $("#kalkulator").slideDown();
            $("#contact-form").hide();
            $.ajax({
                type: 'post',
                url: 'ajax.php',
                cache: false,
                data: formString,
                success: function(data){
                    var obj = JSON.parse(data);


                    //Calculator Datas
                    var workers = obj["packdata"]["workers"];
                    var clients = obj["packdata"]["clients"];
                    var industry = obj["packdata"]["industry"];
                    var process = obj["packdata"]["process"];
                    var law = obj["packdata"]["law"];
                    var hr = obj["packdata"]["hr"];
                    var payroll = obj["packdata"]["payroll"];
                    var it = obj["packdata"]["it"];
                    var incident = obj["packdata"]["incident"];
                    

                    var package_name = obj["nodatasecure"]["packname"];
                    var standard_price = obj["nodatasecure"]["standardpackage"];
                    var follow_price = obj["nodatasecure"]["followprice"];


                    $("#package-name").html(package_name);
                    $("#pack_name").html(package_name);

                    $("#standard-price").html(standard_price);
                    $("#pack_price").html(standard_price);

                    $("#follow_price").html(follow_price);
                    $("#fol_price").html(follow_price);

                    console.log("Követés: " + follow_price);
                    if(follow_price == undefined){
                        //console.log("Undefined");
                        $('.followprice-js').hide();
                        $("#fol_price").text('');
                    } else {
                        //console.log("Defined");
                        $('.followprice-js').show();
                    }

                    console.log("Név: " + package_name + ", Ár: " + standard_price + ", Követési: " + follow_price);


                    //Formba mennek
                    $("#workers_data").html(workers);
                    $("#clients_data").html(clients);
                    $("#industry_data").html(industry);
                    $("#process_data").html(process);
                    $("#law_data").html(law);
                    $("#hr_data").html(hr);
                    $("#payroll_data").html(payroll);
                    $("#it_data").html(it);
                    $("#incident_data").html(incident);
                }
            })
        }
    })
				
})