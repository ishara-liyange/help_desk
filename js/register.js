function validateRegisterForm() {
    let userName = document.forms["registerForm"]["username"].value
    if (!userName) {
        let errorElement = document.getElementById("userError")
        errorElement.classList.remove("hidden");
        return false
    }

    let email = document.forms["registerForm"]["email"].value
    if (!email) {
        let errorElement = document.getElementById("emailError")
        errorElement.classList.remove("hidden");
        return false;
    }

    let contact = document.forms["registerForm"]["contact"].value
    if (!contact) {
        let errorElement = document.getElementById("contactError")
        errorElement.classList.remove("hidden");
        return false;
    }

    let pwd = document.forms["registerForm"]["pwd"].value
    let cpwd = document.forms["registerForm"]["cpwd"].value
    if (pwd != cpwd) {
        let errorElement = document.getElementById("pwdError")
        errorElement.classList.remove("hidden");
        return false;
    }
}