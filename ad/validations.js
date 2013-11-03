<script type="text/javascript">
	function validateForm() {
		var a = document.forms["register_form"]["fname"].value;
		var b = document.forms["register_form"]["lname"].value;
		var c = document.forms["register_form"]["mname"].value;
		var d = document.forms["register_form"]["address"].value;
		var e = document.forms["register_form"]["contact"].value;
		var f = document.forms["register_form"]["pic"].value;
		var g = document.forms["register_form"]["pic"].value;
		var h = document.forms["register_form"]["pic"].value;
		if ((a == null || a == "") && (b == null || b == "")
				&& (c == null || c == "") && (d == null || d == "")
				&& (e == null || e == "") && (f == null || f == "")) {
			alert("All Field must be filled out");
			return false;
		}
		if (a == null || a == "") {
			alert("First name must be filled out");
			return false;
		}
		if (b == null || b == "") {
			alert("Last name must be filled out");
			return false;
		}
		if (c == null || c == "") {
			alert("Gender name must be filled out");
			return false;
		}
		if (d == null || d == "") {
			alert("address must be filled out");
			return false;
		}
		if (e == null || e == "") {
			alert("contact must be filled out");
			return false;
		}
		if (f == null || f == "") {
			alert("picture must be filled out");
			return false;
		}
		if (g == null || g == "") {
			alert("username must be filled out");
			return false;
		}
		if (h == null || h == "") {
			alert("password must be filled out");
			return false;
		}
	}
</script>