function validation(form) {
	if (form.name.value == "") {
		alert("Please input name.");
		form.name.focus();
		return false;
	}

	if (form.company.value == "") {
		alert("Please input company.");
		form.company.focus();
		return false;
	}

	// email check
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!filter.test(form.email.value)) {
		alert("Please provide a valid email address");
		form.email.focus();
		return false;
	}

	var telephone = form.tel.value;
	if (isNaN(telephone) || telephone.indexOf(" ") != -1) {
		alert("Please provide a valid phone number");
		form.tel.focus();
		return false;
	}
	if (telephone.length < 9) {
		alert("Please provide at least 9 digits");
		form.tel.focus();
		return false;
	}

	if (form.text.value == "") {
		alert("Please input commend to text field.");
		form.text.focus();
		return false;
	}
	
	return true;
}