function validation(form) {
	if (form.customerName.value == "") {
		alert("Please input name.");
		form.customerName.focus();
		return false;
	}

	if (form.customerCompany.value == "") {
		alert("Please input company.");
		form.customerCompany.focus();
		return false;
	}

	// email check
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!filter.test(form.customerEmail.value)) {
		alert("Please provide a valid email address");
		form.customerEmail.focus();
		return false;
	}

	var telephone = form.customerPhoneNo.value;
	if (isNaN(telephone) || telephone.indexOf(" ") != -1) {
		alert("Please provide a valid phone number");
		form.customerPhoneNo.focus();
		return false;
	}
	if (telephone.length < 9) {
		alert("Please provide at least 9 digits");
		form.customerPhoneNo.focus();
		return false;
	}

	if (form.customerQuestions.value == "") {
		alert("Please input commend to text field.");
		form.customerQuestions.focus();
		return false;
	}
	
	return true;
}