//onlick fuction_submit button
function myFunction() {
    
    let x = document.getElementById("id-fullName-input").value;
    
    if(x == "") {
        document.getElementById("id-fullName").style.color = "red";
        document.getElementById("id-fullName").innerHTML = "Full Name (please Enter the full name*)";  
        document.getElementById("id-sub-topic").innerHTML = "Submission fail! Please try again";
        document.getElementById("id-sub-topic").style.color = "red";
        document.getElementById("id-sub-topic").style.fontFamily = "Arial, Helvetica, sans-serif"
    }

    let y = document.getElementById("id-subject-input").value;

    if(y == "") {
        document.getElementById("id-subject").style.color = "red";
        document.getElementById("id-subject").innerHTML = "Subject (please Enter the subject name*)";
        document.getElementById("id-sub-topic").innerHTML = "Submission fail! Please try again";
        document.getElementById("id-sub-topic").style.color = "red";
        document.getElementById("id-sub-topic").style.fontFamily = "Arial, Helvetica, sans-serif"

    }

    let z = document.getElementById("id-registration-input").value;

    if (z == "") {
        document.getElementById("id-registration").style.color = "red";
        document.getElementById("id-registration").innerHTML = "Registration Number (required*)";
        document.getElementById("id-sub-topic").innerHTML = "Submission fail! Please try again";
        document.getElementById("id-sub-topic").style.color = "red";
        document.getElementById("id-sub-topic").style.fontFamily = "Arial, Helvetica, sans-serif"
    }

    let a = document.getElementById("id-phoneNumber-input").value;

    if(a == "") {
        document.getElementById("id-phoneNumber").style.color = "red";
        document.getElementById("id-phoneNumber").innerHTML = "Contact Number (required*)";
        document.getElementById("id-sub-topic").innerHTML = "Submission fail! Please try again";
        document.getElementById("id-sub-topic").style.color = "red";
        document.getElementById("id-sub-topic").style.fontFamily = "Arial, Helvetica, sans-serif"
    }

    let b = document.getElementById("id-email-input").value;

    if(b == "") {
        document.getElementById("id-email").style.color = "red";
        document.getElementById("id-email").innerHTML = "Contact Number (required*)";
        document.getElementById("id-sub-topic").innerHTML = "Submission fail! Please try again";
        document.getElementById("id-sub-topic").style.color = "red";
        document.getElementById("id-sub-topic").style.fontFamily = "Arial, Helvetica, sans-serif"
    }

    let c = document.getElementById("id-checkbox-input").checked;

    if(c == false) {
        document.getElementById("id-checkbox").style.color = "red";
        document.getElementById("id-checkbox").innerHTML = "please accept privacy policy and terms";
        document.getElementById("id-sub-topic").innerHTML = "Submission fail! Please try again";
        document.getElementById("id-sub-topic").style.color = "red";
        document.getElementById("id-sub-topic").style.fontFamily = "Arial, Helvetica, sans-serif"
    }

    let id1 = document.getElementById("id1-radio").checked;
    let id2 = document.getElementById("id2-radio").checked;
    let id3 = document.getElementById("id3-radio").checked;
    let id4 = document.getElementById("id4-radio").checked;
    let id5 = document.getElementById("id5-radio").checked;

    if (id1 == false && id2 == false && id3 == false && id4 == false && id5 == false ) {
        document.getElementById("id-radio").style.color = "red";
        document.getElementById("id-radio").innerHTML = "Please Select Your Faculty";
        document.getElementById("id-sub-topic").innerHTML = "Submission fail! Please try again";
        document.getElementById("id-sub-topic").style.color = "red";
        document.getElementById("id-sub-topic").style.fontFamily = "Arial, Helvetica, sans-serif"
    }

    //check box
    let selection = document.getElementById("id-select-box2").value;

    if(selection === "") {
        alert('a');
    }


    let bx = document.getElementById("id-textarea-input").value;

    if(bx == "") {
        document.getElementById("id-textarea").style.color = "red";
        document.getElementById("id-textarea").innerHTML = "describe your issue/message(required*)";
        document.getElementById("id-sub-topic").innerHTML = "Submission fail! Please try again";
        document.getElementById("id-sub-topic").style.color = "red";
        document.getElementById("id-sub-topic").style.fontFamily = "Arial, Helvetica, sans-serif"
    }

    //email validation
       // Email validation regex
       let emailRegex = /\S+@\S+\.\S+/;

       // Check if email is empty or doesn't match the regex
       if (b == "" || !emailRegex.test(b)) {
           document.getElementById("id-email").style.color = "red";
           document.getElementById("id-email").innerHTML = "Email (required*) and must be valid"; // Change error message
           document.getElementById("id-sub-topic").innerHTML = "Submission fail! Please try again";
           document.getElementById("id-sub-topic").style.color = "red";
           document.getElementById("id-sub-topic").style.fontFamily = "Arial, Helvetica, sans-serif";
           return; // Exit the function if email is invalid

       }

       //phone number validation
       let a1 = document.getElementById("id-phoneNumber-input").value;
       let b2 = document.getElementById("id-email-input").value;
   
       // Email validation regex
   
       // Phone number validation regex (accepts only numeric characters and optional hyphens or spaces)
       let phoneRegex = /^\d{10}$/; // Change this regex based on your phone number format requirements
   
       if (b2 == "" || !emailRegex.test(b2)) {
           document.getElementById("id-email").style.color = "red";
           document.getElementById("id-email").innerHTML = "Email (required*) and must be valid";
           document.getElementById("id-sub-topic").innerHTML = "Submission fail! Please try again";
           document.getElementById("id-sub-topic").style.color = "red";
           document.getElementById("id-sub-topic").style.fontFamily = "Arial, Helvetica, sans-serif";
           return;
       }
   
       if (a1 == "" || !phoneRegex.test(a1)) { // Check if phone number is empty or doesn't match the regex
           document.getElementById("id-phoneNumber").style.color = "red";
           document.getElementById("id-phoneNumber").innerHTML = "Contact Number (required*) and must be valid";
           document.getElementById("id-sub-topic").innerHTML = "Submission fail! Please try again";
           document.getElementById("id-sub-topic").style.color = "red";
           document.getElementById("id-sub-topic").style.fontFamily = "Arial, Helvetica, sans-serif";
           return;
       }

}

