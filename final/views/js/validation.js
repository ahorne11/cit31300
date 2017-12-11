
//validation methods for the user registration page
function validateRegistration() {

    validateFirstName();
    validateLastName();
    validateEmail();
    validatePassword();
    validateConfirmPassword();
    validatePasswordMatch()
    if(validateFirstName() && validateLastName() && validateEmail() && validatePassword()
        && validateConfirmPassword() && validatePasswordMatch()){
        return true;
    } else {
        return false;
    }

}

function validateFirstName() {
    var firstName = document.getElementById("inputFirstName").value;
    if (firstName == "") {
        document.getElementById("firstName").style.display = "block";
        return false;
    } else {
        document.getElementById("firstName").style.display = "none";
        return true;
    }
}

function validateLastName() {
    var lastName = document.getElementById("inputLastName").value;
    if (lastName == "") {
        document.getElementById("lastName").style.display = "block";
        return false;
    } else {
        document.getElementById("lastName").style.display = "none";
        return true;
    }
}

function validateEmail() {
    var email = document.getElementById("inputEmail").value;
    if (email == "") {
        document.getElementById("email").style.display = "block";
        return false;
    } else {
        document.getElementById("email").style.display = "none";
        return true;
    }
}

function validatePassword() {
    var password = document.getElementById("inputPassword").value;
    if (password == "") {
        document.getElementById("password").style.display = "block";
        return false;
    } else {
        document.getElementById("password").style.display = "none";
        return true;
    }
}

function validateConfirmPassword() {
    var confirmPassword = document.getElementById("inputConfirmPassword").value;
    if (confirmPassword == "") {
        document.getElementById("confirmPassword").style.display = "block";
        return false;
    } else {
        document.getElementById("confirmPassword").style.display = "none";
        return true;
    }
}

function validatePasswordMatch() {
    var password = document.getElementById("inputPassword").value;
    var confirmPassword = document.getElementById("inputConfirmPassword").value;
    if (password != confirmPassword) {
        document.getElementById("passwordMatch").style.display = "block";
        return false;
    } else {
        document.getElementById("passwordMatch").style.display = "none";
        return true;
    }
}

function validatePost() {

    validateTitle();
    validateDate();
    validateCategory();
    validateContent();
    if(validateTitle() && validateDate() && validateCategory() && validateContent()){
        return true;
    } else {
        return false;
    }

}

function validateTitle() {
    var title = document.getElementById("inputTitle").value;
    if (title == "") {
        document.getElementById("title").style.display = "block";
        return false;
    } else {
        document.getElementById("title").style.display = "none";
        return true;
    }
}

function validateDate() {
    var date = document.getElementById("inputDate").value;
    if (date == "") {
        document.getElementById("date").style.display = "block";
        return false;
    } else {
        document.getElementById("date").style.display = "none";
        return true;
    }
}

function validateCategory() {
    var category = document.getElementById("inputCategory").value;
    if (category == "") {
        document.getElementById("category").style.display = "block";
        return false;
    } else {
        document.getElementById("category").style.display = "none";
        return true;
    }
}

function validateContent() {
    var content = document.getElementById("inputContent").value;
    if (content == "") {
        document.getElementById("content").style.display = "block";
        return false;
    } else {
        document.getElementById("content").style.display = "none";
        return true;
    }
}


