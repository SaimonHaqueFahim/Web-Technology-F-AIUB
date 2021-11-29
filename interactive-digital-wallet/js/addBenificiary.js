function isvalid() {
	//get error message from span
	var flag = true;
	var catnameErr = document.getElementById("catnameErr");
    var catpnErr = document.getElementById("catpnErr");

	//get value from input
	var name = document.forms["addcategoryForm"]["name"].value;
    var phone = document.forms["addcategoryForm"]["phone"].value;

	//clear error message
	catnameErr.innerHTML = "";

	//value is empty or not
	if (name === "") {
		catnameErr.innerHTML = "* Name required.";
		flag = false;
	}

    	//clear error message
	catpnErr.innerHTML = "";

	//value is empty or not
	if (phone === "") {
		catpnErr.innerHTML = "* Phone required.";
		flag = false;
	}

	return flag;
}
