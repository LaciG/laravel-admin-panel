/* gdpr form company validation */
/*$(document).ready(function () {
	var gdpr_sending_company_name = document.getElementById('gdpr-sending-company-name');

	var gdpr_sending_company_name_error = document.getElementById('gdpr-sending-company-name-error');
	
	gdpr_sending_company_name.addEventListener('focus', gdpr_sending_company_name_func);
	gdpr_sending_company_name.addEventListener('keyup', gdpr_sending_company_name_func);

	function gdpr_sending_company_name_func() {
		if (gdpr_sending_company_name.value === '') {
			gdpr_sending_company_name_error.innerHTML = 'Kérlek add meg a neved!';
		} else {
			gdpr_sending_company_name_error.innerHTML = '';
		}

		if (gdpr_sending_company_name.value !== '') {
			var userInput = gdpr_sending_company_name.value;
			var pattern = /(^[A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{3,20})([ ]{0,1})([A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{0,20})/;
			var match = userInput.match(pattern);
			if (match) {
				return true;
			} else {
				gdpr_sending_company_name_error.innerHTML = 'Érvénytelen név. Minimum 3karakter, számot, speciális karaktert nem tartalmazhat!';
			}
		}
	}
});*/
	
/* gdpr form company validation end */
/* gdpr form contact validation */
/*$(document).ready(function () {
	var gdpr_sending_contact_name = document.getElementById('gdpr-sending-contact-name');

	var gdpr_sending_contact_name_error = document.getElementById('gdpr-sending-contact-name-error');
	
	gdpr_sending_contact_name.addEventListener('focus', gdpr_sending_contact_name_func);
	gdpr_sending_contact_name.addEventListener('keyup', gdpr_sending_contact_name_func);

	function gdpr_sending_contact_name_func() {
		if (gdpr_sending_contact_name.value === '') {
			gdpr_sending_contact_name_error.innerHTML = 'Kérlek add meg a kapcsolattartó nevét!';
		} else {
			gdpr_sending_contact_name_error.innerHTML = '';
		}

		if (gdpr_sending_contact_name.value !== '') {
			var userInput = gdpr_sending_contact_name.value;
			var pattern = '(^[A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{3,20})([ ]{0,1})([A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{0,20})';
			var match = userInput.match(pattern);
			if (match) {
				return true;
			} else {
				gdpr_sending_contact_name_error.innerHTML = 'Érvénytelen név. Minimum 3karakter, számot, speciális karaktert nem tartalmazhat!';
			}
		}
	}
});*/
	
/* gdpr form contact validation end */