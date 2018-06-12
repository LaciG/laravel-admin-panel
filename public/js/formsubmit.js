 $(document).ready(function() {

    var validateFields = function () {
        //console.log($("#gdpr-sending-company-name").val());
        //console.log($("#gdpr-sending-contact-name").val());
        //console.log($("#gdpr-sending-email").val());
        //console.log($("#gdpr-sending-tel").val());


        if($("#gdpr-sending-company-name").val() == "") {
            showError("Nem töltötte ki a Cégnév mezőt");
            return false;
        }
        
        if($("#gdpr-sending-contact-name").val() == "") {
            showError("Nem töltötte ki a Kapcsolattartó mezőt");
            return false;
        }
        
        if($("#gdpr-sending-email").val() == "") {
            showError("Nem töltötte ki az E-mail mezőt");
            return false;
        }
        
        if($("#gdpr-sending-tel").val() == "") {
            showError("Nem töltötte ki a Mobil mezőt");
            return false;
        }

        if(!$("#checkbox-adatvedelmi-nyilatkozat:checked").val()) {
            showError("Nem fogadtal el az adatvédelmi nyilatkozatot!");
            return false;
        }

        if(!$("#checkbox-aszf:checked").val()) {
            showError("Nem fogadtal el az általános szerződési feltételeket!");
            return false;
        }

        hideError();
        return true;
    }

    var showError = function (message) {
        $("#success").show();
        $("#success").html(message);
    };
    var hideError = function() {
        $("#success").hide();
    };

    $('#sending-submit-no-data').click(function() {
        if(validateFields()) {
            var mailString = "mail_send=send_mail" + 
                "&company_name=" + $("#gdpr-sending-company-name").val() +
                "&contact_name=" + $("#gdpr-sending-contact-name").val() +
                "&email=" + $("#gdpr-sending-email").val() +
                "&mobile=" + $("#gdpr-sending-tel").val();
                
                
            //console.log(mailString);

            $.ajax({
                type: 'post',
                url: 'mail_sender.php',
                cache: false,
                data: mailString,
                success: function(data) {
                    var obj = JSON.parse(data);

                    var result = obj["general"]["message"];

                    showError(result);
                }
            });

            $('#gdpr-sending-form')[0].reset();
            return false; 
        }
    })

    var validateCalculatorFormFields = function() {
        //console.log($("#gdpr-sending-company-name-calculator").val());
        //console.log($("#gdpr-sending-contact-name-calculator").val());
        //console.log($("#gdpr-sending-email-calculator").val());
        //console.log($("#gdpr-sending-tel-calculator").val());

        if($("#gdpr-sending-company-name-calculator").val() == "") {
            showErrorForm("Nem töltötte ki a Cégnév mezőt");
            return false;
        }
        
        if($("#gdpr-sending-contact-name-calculator").val() == "") {
            showErrorForm("Nem töltötte ki a Kapcsolattartó mezőt");
            return false;
        }
        
        if($("#gdpr-sending-email-calculator").val() == "") {
            showErrorForm("Nem töltötte ki az E-mail mezőt");
            return false;
        }
        
        if($("#gdpr-sending-tel-calculator").val() == "") {
            showErrorForm("Nem töltötte ki a Mobil mezőt");
            return false;
        }

        if(!$("#checkbox-adatvedelmi-nyilatkozat2:checked").val()) {
            showErrorForm("Nem fogadtal el az adatvédelmi nyilatkozatot!");
            console.log("Not checked");
            return false;
        }

        if(!$("#checkbox-aszf2:checked").val()) {
            showErrorForm("Nem fogadtal el az általános szerződési feltételeket!");
            console.log("Not checked");
            return false;
        }
    
        hideErrorForm();
        return true;
    }

    var showErrorForm = function (message) {
        $("#success-with-data").show();
        $("#success-with-data").html(message);
    };
    var hideErrorForm = function() {
        $("#success-with-data").hide();
    };

    $('#sending-submit-with-data').click(function() {
        if(validateCalculatorFormFields()) {
            var formString = "mail_send=send_mail_with_data" + 
            "&company_name=" + $("#gdpr-sending-company-name-calculator").val() +
            "&contact_name=" + $("#gdpr-sending-contact-name-calculator").val() +
            "&email=" + $("#gdpr-sending-email-calculator").val() +
            "&mobile=" + $("#gdpr-sending-tel-calculator").val() +
            "&workers_data=" + $("#workers_data").text() +
            "&clients_data=" + $("#clients_data").text() +
            "&industry_data=" + $("#industry_data").text() +
            "&process_data=" + $("#process_data").text() +
            "&law_data=" + $("#law_data").text() +
            "&hr_data=" + $("#hr_data").text() +
            "&payroll_data=" + $("#payroll_data").text() +
            "&it_data=" + $("#it_data").text() +
            "&incident_data=" + $("#incident_data").text() +
            "&pack_name=" + $("#pack_name").text() +
            "&pack_price=" + $("#pack_price").text() +
            "&fol_price=" + $("#fol_price").text();
                
            //console.log("Küldés után:   Név: " + $("#pack_name").text() + ", Ár: " + $("#pack_price").text() + ", Követés: " + $("#fol_price").text());

            //console.log(formString);

            $.ajax({
                type: 'post',
                url: 'mail_sender.php',
                cache: false,
                data: formString,
                success: function(data) {
                    var obj = JSON.parse(data);

                    var result = obj["general"]["message"];

                    showErrorForm(result);
                }
            });

            $('#gdpr-sending-form')[0].reset();
            return false; 
        }
    })
 })