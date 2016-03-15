function check() {

    if (document.getElementById("business_name").value == "") {
        alert("Insert business name.");
        document.getElementById("business_name").focus();
        return false;
    }

    if (document.getElementById("category").value == "") {
        alert("Select category.");
        document.getElementById("category").focus();
        return false;
    }

    if (document.getElementById("sub_cat").value == "") {
        alert("Select sub category.");
        document.getElementById("sub_cat").focus();
        return false;
    }

    if (document.getElementById("region").value == "") {
        alert("Select region.");
        document.getElementById("region").focus();
        return false;
    }

    //var numericExpression = /^[0-9]+$/;
    var re_tel_no = /^[0-9]+$/;

    if (document.getElementById("tel_no").value == "") {
        alert("Insert telephone number.");
        document.getElementById("tel_no").focus();
        return false;
    } else {

        if (!re_tel_no.test(document.getElementById("tel_no").value)) {
            alert("Not a valid telephone number.");
            document.getElementById("tel_no").focus();
            return false;
        }
    }

//Mobile phone number
    var re_mob_no = /^[0-9]+$/;

    if (document.getElementById("mob_no").value == "") {
        // return true;
    } else {

        if (!re_mob_no.test(document.getElementById("mob_no").value)) {
            alert("Not a valid mobile phone number.");
            document.getElementById("mob_no").focus();
            return false;
        }
    }

//Checking email
    var re_email = /^((([A-Z]|[a-z]|[0-9]|!|#|$|%|&|'|\*|\+|\-|\/|=|\?|\^|_|`|\{|\||\}|~)+(\.([A-Z]|[a-z]|[0-9]|!|#|$|%|&|'|\*|\+|\-|\/|=|\?|\^|_|`|\{|\||\}|~)+)*)@((((([A-Z]|[a-z]|[0-9])([A-Z]|[a-z]|[0-9]|\-){0,61}([A-Z]|[a-z]|[0-9])\.))*([A-Z]|[a-z]|[0-9])([A-Z]|[a-z]|[0-9]|\-){0,61}([A-Z]|[a-z]|[0-9])\.)[\w]{2,4}|(((([0-9]){1,3}\.){3}([0-9]){1,3}))|(\[((([0-9]){1,3}\.){3}([0-9]){1,3})\])))$/;

    if (document.getElementById("email").value == "") {
        // return true;
    } else {

        if (!re_email.test(document.getElementById("email").value)) {
            alert("Invalid e-mail address.");
            document.getElementById("email").focus();
            return false;
        }
    }

//Checking webiste
    var re_website = /^(([\w]+:)?\/\/)?(([\d\w]|%[a-fA-f\d]{2,2})+(:([\d\w]|%[a-fA-f\d]{2,2})+)?@)?([\d\w][-\d\w]{0,253}[\d\w]\.)+[\w]{2,4}(:[\d]+)?(\/([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)*(\?(&?([-+_~.\d\w]|%[a-fA-f\d]{2,2})=?)*)?(#([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)?$/;

    if (document.getElementById("website").value == "") {
        //return true;
    } else {

        if (!re_website.test(document.getElementById("website").value)) {
            alert('Invalid web address.');
            document.getElementById("website").focus();
            return false;
        }
    }

//Location
    if (document.getElementById("location").value == '') {
        alert('Insert business/company location.');
        document.getElementById("location").focus();
        return false;
    }

//About business
    if (document.getElementById("about").value == '') {
        alert('Briefly describe your business/company.');
        document.getElementById("about").focus();
        return false;
    }
}	