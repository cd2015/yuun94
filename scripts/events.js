function check() {
    if (document.getElementById("title").value == "") {
        alert("Insert event title.");
        document.getElementById("title").focus();
        return false;
    }

    if (document.getElementById("about").value == "") {
        alert("Describe your event.");
        document.getElementById("about").focus();
        return false;
    }

    if (document.getElementById("location").value == "") {
        alert("Insert the event location.");
        document.getElementById("location").focus();
        return false;
    }

    if (document.getElementById("category").value == "") {
        alert("Select event category.");
        document.getElementById("category").focus();
        return false;
    }

    if (document.getElementById("day").value == "") {
        alert("Select event day.");
        document.getElementById("day").focus();
        return false;
    }

    if (document.getElementById("month").value == "") {
        alert("Select event month.");
        document.getElementById("month").focus();
        return false;
    }

    if (document.getElementById("year").value == "") {
        alert("Select event year.");
        document.getElementById("year").focus();
        return false;
    }

    if (document.getElementById("start_hr").value == "") {
        alert("Select the start hour of the event.");
        document.getElementById("start_hr").focus();
        return false;
    }

    if (document.getElementById("start_min").value == "") {
        alert("Select start time of the event.");
        document.getElementById("start_min").focus();
        return false;
    }

    if (document.getElementById("contact_name").value == "") {
        alert("Insert contact name.");
        document.getElementById("contact_name").focus();
        return false;
    }

//Checking email
    var re_email = /^((([A-Z]|[a-z]|[0-9]|!|#|$|%|&|'|\*|\+|\-|\/|=|\?|\^|_|`|\{|\||\}|~)+(\.([A-Z]|[a-z]|[0-9]|!|#|$|%|&|'|\*|\+|\-|\/|=|\?|\^|_|`|\{|\||\}|~)+)*)@((((([A-Z]|[a-z]|[0-9])([A-Z]|[a-z]|[0-9]|\-){0,61}([A-Z]|[a-z]|[0-9])\.))*([A-Z]|[a-z]|[0-9])([A-Z]|[a-z]|[0-9]|\-){0,61}([A-Z]|[a-z]|[0-9])\.)[\w]{2,4}|(((([0-9]){1,3}\.){3}([0-9]){1,3}))|(\[((([0-9]){1,3}\.){3}([0-9]){1,3})\])))$/;

    if (document.getElementById("contact_email").value == "") {
        // return true;
    } else {

        if (!re_email.test(document.getElementById("contact_email").value)) {
            alert("Invalid e-mail address.");
            document.getElementById("contact_email").focus();
            return false;
        }
    }

    if (document.getElementById("contact_phone").value == "") {
        alert("Insert contact phone number.");
        document.getElementById("contact_phone").focus();
        return false;
    }
}
