function validateContactForm() {
    let userName = document.forms["contactForm"]["username"].value
    if (!userName) {
        let errorElement = document.getElementById("userError")
        errorElement.classList.remove("hidden");
        return false
    }

    let email = document.forms["contactForm"]["email"].value
    if (!email) {
        let errorElement = document.getElementById("emailError")
        errorElement.classList.remove("hidden");
        return false;
    }

    let message = document.forms["contactForm"]["message"].value
    if (!message) {
        let errorElement = document.getElementById("messageError")
        errorElement.classList.remove("hidden");
        return false;
    }
}