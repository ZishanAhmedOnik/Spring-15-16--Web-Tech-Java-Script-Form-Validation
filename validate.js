function validate() {
	nameTextField = document.getElementById("name");
	emailTextField = document.getElementById("email");
	maleRadioButton = document.getElementById("male");
	femaleRadioButton = document.getElementById("female");
	
	userNameTextField = document.getElementById("username");
	passwordField = document.getElementById("password");
	
	addessTextFiledLen = document.getElementById("addr").value.length;
	addressFilled = false;
	if(addessTextFiledLen > 0) {
		addressFilled = true;
	}
	
	radioButtonChecked = false;
	checkBoxChecked = false;
	
	checkBoxesArr = document.getElementsByName("hobbies[]");
	for(i = 0; i < checkBoxesArr.length; i++) {
		if(checkBoxesArr[i].checked) {
			checkBoxChecked = true;
			break;
		}
	}
	
	if(maleRadioButton.checked || femaleRadioButton.checked) {
		radioButtonChecked = true;
	}
	
	validateUserNameVar = validateUserName(userNameTextField);
	validateEmailVar = validateEmail(emailTextField);
	
	if
	(
		nameTextField.value.length == 0 ||
		emailTextField.value.length == 0 ||
		radioButtonChecked == false ||
		checkBoxChecked == false ||
		validateUserNameVar == false ||
		addressFilled == false ||
		validateEmailVar == false
	)
	{
		return false;
	}
	else {
		return validatePassword(passwordField);
	}
	
	return false;
}

function validateUserName(userNameTF) {
	val = userNameTF.value;
	
	if(val.length > 0 && val.length <= 8) {
		return true;
	}
	
	return false;
}

function validatePassword(passwordField) {
	val = passwordField.value;
	numCount = 0;
	charCount = 0;
	
	if(val.length >= 6) {
		for(i = 0; i < val.length; i++) {
			if(val.charAt(i) >= '0' && val.charAt(i) <= '9') {
				numCount++;
			}
			else if((val.charAt(i) >= 'A' && val.charAt(i) <= 'Z') || (val.charAt(i) >= 'a' && val.charAt(i) <= 'z')) {
				charCount++;
			}
		}
		
		if(numCount >= 1 && charCount >= 1) {
			return true;
		}
	}
	
	return false;
}

function validateEmail(emailTextField) {
	val = emailTextField.value;
	
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(val)) {  
		return true;
	}
	
    return false; 
}