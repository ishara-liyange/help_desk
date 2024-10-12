function validateCommentForm() {
    let x = document.forms["commentForm"]["comment"]
    if (x.value == "") {
        let errorElement = document.getElementById("commentError")
        errorElement.classList.remove("hidden");
        return false;
    }
}

document.getElementById("ticket-view-form").addEventListener('change', (event) => {
    const key = event.target.name
    const value = event.target.value

    const hiddenNameKeyField = document.createElement("input");
    hiddenNameKeyField.type = "hidden";
    hiddenNameKeyField.name = "key";
    hiddenNameKeyField.value = key;

    const hiddenNameValueField = document.createElement("input");
    hiddenNameValueField.type = "hidden";
    hiddenNameValueField.name = "value";
    hiddenNameValueField.value = value;

    document.getElementById("ticket-view-form").appendChild(hiddenNameKeyField);
    document.getElementById("ticket-view-form").appendChild(hiddenNameValueField);
    document.getElementById("ticket-view-form").submit()
})