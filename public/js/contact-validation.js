/* hírlevél validation */
$(document).ready(function () {
	//var x = document.getElementById('name');
	//var y = document.getElementById('email');
	var x2 = document.getElementById('name2');
	var x2m = document.getElementById('name2m');
	var y2 = document.getElementById('email2');
	var y2m = document.getElementById('email2m');
	var z = document.getElementById('targy');
	var zm = document.getElementById('targym');
	var u = document.getElementById('uzenet');
	var um = document.getElementById('uzenetm');
	var tel = document.getElementById('tel');
	var telm = document.getElementById('telm');

	var myError = document.getElementsByClassName('error-message');
	var errorArray = [];
	/*if(x.value === ''){
		myError.innerHTML = 'Kérlek add meg az összes adatot';
	}else{
		myError.innerHTML = '';
	}*/
	if($('body').attr('id') === 'home'){
		//console.log('if');
	//x.addEventListener('focus', userinputCheck);
	//x.addEventListener('keyup', userinputCheck);
	//y.addEventListener('focus', emailCheck);
	//y.addEventListener('keyup', emailCheck);
	}
	
	x2.addEventListener('focus', userinput2Check);
	x2.addEventListener('keyup', userinput2Check);
	x2m.addEventListener('focus', userinput2mCheck);
	x2m.addEventListener('keyup', userinput2mCheck);
	y2.addEventListener('focus', email2Check);
	y2.addEventListener('keyup', email2Check);
	y2m.addEventListener('focus', email2mCheck);
	y2m.addEventListener('keyup', email2mCheck);
	z.addEventListener('focus', subjectCheck);
	z.addEventListener('keyup', subjectCheck);
	zm.addEventListener('focus', subjectmCheck);
	zm.addEventListener('keyup', subjectmCheck);
	u.addEventListener('focus', uzenetCheck);
	u.addEventListener('keyup', uzenetCheck);
	um.addEventListener('focus', uzenetmCheck);
	um.addEventListener('keyup', uzenetmCheck);
	tel.addEventListener('focus', telCheck);
	tel.addEventListener('keyup', telCheck);
	telm.addEventListener('focus', telmCheck);
	telm.addEventListener('keyup', telmCheck);

	function userinputCheck() {
		if (x.value === '') {
			errorArray[0] = 'Kérlek add meg a neved!';
			myError[0].innerHTML = errorArray[0];
		} else {
			errorArray[0] = '';
			myError[0].innerHTML = errorArray[0];
		}

		if (x.value !== '') {
			var userInput = x.value;
			var pattern = '(^[A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{3,20})([ ]{0,1})([A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{0,20})';
			var match = userInput.match(pattern);
			if (match) {
				return true;
			} else {
				errorArray[0] = 'Érvénytelen név. Minimum 3karakter, számot, speciális karaktert nem tartalmazhat!';
				myError[0].innerHTML = errorArray[0];
			}
		}
	}

	function userinput2Check() {
		if (x2.value === '') {
			errorArray[2] = 'Kérlek add meg a neved!';
			myError[0].innerHTML = errorArray[2];
		} else {
			errorArray[2] = '';
			myError[0].innerHTML = errorArray[2];
		}
		if (x2.value !== '') {
			var userInput = x2.value;
			var pattern = '(^[A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{3,20})([ ]{0,1})([A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{0,20})';
			var match = userInput.match(pattern);
			if (match) {
				return true;
			} else {
				errorArray[2] = 'Érvénytelen név. Minimum 3karakter, számot, speciális karaktert nem tartalmazhat!';
				myError[0].innerHTML = errorArray[2];
			}
		}
	}

	function userinput2mCheck() {
		if (x2m.value === '') {
			errorArray[2] = 'Kérlek add meg a neved!';
			myError[5].innerHTML = errorArray[2];
		} else {
			errorArray[2] = '';
			myError[5].innerHTML = errorArray[2];
		}
		if (x2m.value !== '') {
			var userInput = x2m.value;
			var pattern = '(^[A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{3,20})([ ]{0,1})([A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{0,20})';
			var match = userInput.match(pattern);
			if (match) {
				return true;
			} else {
				errorArray[2] = 'Érvénytelen név. Minimum 3karakter, számot, speciális karaktert nem tartalmazhat!';
				myError[5].innerHTML = errorArray[2];
			}
		}
	}

	/* function emailCheck() {
		if (y.value === '') {
			errorArray[1] = 'Kérlek adj meg egy érvényes email címet.';
			myError[0].innerHTML = errorArray[1];
		} else {
			errorArray[1] = '';
			myError[0].innerHTML = errorArray[1];
		}

		if (y.value !== '') {
			var userEmail = y.value;
			var pattern = '[^ @]+@[^ @]+\\.[^ @]+';
			var match = userEmail.match(pattern);
			if (match) {
				return true;
			} else {
				errorArray[1] = 'Érvénytelen email cím!<br>Kérjük egy érvényes email címet adj meg!';
				myError[0].innerHTML = errorArray[1];
			}
		}
	} */

	function email2Check() {
		if (y2.value === '') {
			errorArray[3] = 'Kérlek adj meg egy érvényes email címet.';
			myError[1].innerHTML = errorArray[3];
		} else {
			errorArray[3] = '';
			myError[1].innerHTML = errorArray[3];
		}
		if (y2.value !== '') {
			var userEmail = y2.value;
			var pattern = '[^ @]+@[^ @]+\\.[^ @]+';
			var match = userEmail.match(pattern);
			if (match) {
				return true;
			} else {
				errorArray[3] = 'Érvénytelen email cím!<br>Kérjük egy érvényes email címet adj meg!';
				myError[1].innerHTML = errorArray[3];
			}
		}
	}

	function email2mCheck() {
		if (y2m.value === '') {
			errorArray[3] = 'Kérlek adj meg egy érvényes email címet.';
			myError[6].innerHTML = errorArray[3];
		} else {
			errorArray[3] = '';
			myError[6].innerHTML = errorArray[3];
		}
		if (y2m.value !== '') {
			var userEmail = y2m.value;
			var pattern = '[^ @]+@[^ @]+\\.[^ @]+';
			var match = userEmail.match(pattern);
			if (match) {
				return true;
			} else {
				errorArray[3] = 'Érvénytelen email cím!<br>Kérjük egy érvényes email címet adj meg!';
				myError[6].innerHTML = errorArray[3];
			}
		}
	}

	function subjectCheck() {
		if (z.value === '') {
			errorArray[4] = 'Kérlek add meg a leveled tárgyát!';
			myError[3].innerHTML = errorArray[4];
		} else {
			errorArray[4] = '';
			myError[3].innerHTML = errorArray[4];
		}

		if (z.value !== '') {
			var userInput = z.value;
			var pattern = '(^[0-9A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{3,20})([ ]{0,1})([0-9A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{0,20})';
			var match = userInput.match(pattern);
			if (match) {
				return true;
			} else {
				errorArray[4] = 'A levél tárgya minimum 3 karakter hosszú és nem tartalmazhat speciális karaktert.!';
				myError[3].innerHTML = errorArray[4];
			}
		}
	}

	function subjectmCheck() {
		if (zm.value === '') {
			errorArray[4] = 'Kérlek add meg a leveled tárgyát!';
			myError[8].innerHTML = errorArray[4];
		} else {
			errorArray[4] = '';
			myError[8].innerHTML = errorArray[4];
		}

		if (zm.value !== '') {
			var userInput = zm.value;
			var pattern = '(^[0-9A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{3,20})([ ]{0,1})([0-9A-Za-záéiíoóöőuúüűÁÉIÍOÓÖŐUÚÜŰä&]{0,20})';
			var match = userInput.match(pattern);
			if (match) {
				return true;
			} else {
				errorArray[4] = 'A levél tárgya minimum 3 karakter hosszú és nem tartalmazhat speciális karaktert.!';
				myError[8].innerHTML = errorArray[4];
			}
		}
	}

	function uzenetCheck() {
		if (u.value === '') {
			errorArray[5] = 'Kérlek írd be az üzeneted!';
			myError[4].innerHTML = errorArray[5];
		} else {
			errorArray[5] = '';
			myError[4].innerHTML = errorArray[5];
		}
	}

	function uzenetmCheck() {
		if (um.value === '') {
			errorArray[5] = 'Kérlek írd be az üzeneted!';
			myError[9].innerHTML = errorArray[5];
		} else {
			errorArray[5] = '';
			myError[9].innerHTML = errorArray[5];
		}
	}

	function telCheck() {
		if (tel.value === '') {
			errorArray[6] = 'Kérlek add meg a telefonszámod!';
			myError[2].innerHTML = errorArray[6];
		} else {
			errorArray[6] = '';
			myError[2].innerHTML = errorArray[6];
		}
		if (tel.value !== '') {
			var userInput = tel.value;
			var pattern = '^[+0-9]{1,25}$';
			var match = userInput.match(pattern);
			if (match) {
				return true;
			} else {
				errorArray[6] = 'Nem megfelelő formátum!';
				myError[2].innerHTML = errorArray[6];
			}
		}
	}

	function telmCheck() {
		if (telm.value === '') {
			errorArray[6] = 'Kérlek add meg a telefonszámod!';
			myError[7].innerHTML = errorArray[6];
		} else {
			errorArray[6] = '';
			myError[7].innerHTML = errorArray[6];
		}
		if (telm.value !== '') {
			var userInput = telm.value;
			var pattern = '^[+0-9]{1,25}$';
			var match = userInput.match(pattern);
			if (match) {
				return true;
			} else {
				errorArray[6] = 'Nem megfelelő formátum!';
				myError[7].innerHTML = errorArray[6];
			}
		}
	}
});
/* hírlevél validation end */