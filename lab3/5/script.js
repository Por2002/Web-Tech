function check() {
    var name = document.forms.form.name.value;
    var phone = document.forms.form.num.value;
    var email = document.forms.form.mail.value;
    var comp = document.forms.form.com.value;
    if ((name.length <= 0) || (phone.length <= 0) || (email.length <= 0) || (comp.length <= 0)) {
        alert("Please fill out completely.");
        return false;
    }

    else {
        document.getElementById('outname').innerHTML = name;
        document.getElementById('outphone').innerHTML = phone;
        document.getElementById('outmail').innerHTML = email;
        document.getElementById('outcomp').innerHTML = comp;
    }
}