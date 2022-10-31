function validateForm() {
    let citizenid = document.forms.form.citizenid.value;
    if (citizenid.length != 13) {
        alert("กรุณากรอกให้ครบ 13 หลัก");
        return false;
    }

    let pname = document.forms.form.pname.value;
    if (pname == "000") {
        alert("กรุณาเลือกคำนำหน้านาม");
        return false;
    }

    let fname = document.forms.form.fname.value;
    if (fname.length < 2 || fname.length > 20) {
        alert("กรุณากรอกชื่อ");
        return false;
    }

    let lname = document.forms.form.lname.value;
    if (lname.length < 2 || lname.length > 30) {
        alert("กรุณากรอกนามสกุล");
        return false;
    }

    let address = document.forms.form.address.value;
    if (address.length < 5) {
        alert("กรุณากรอกที่อยู่");
        return false;
    }

    let zone = document.forms.form.zone.value;
    if (zone.length < 2) {
        alert("กรุณากรอกตำบล/แขวง");
        return false;
    }

    let khed = document.forms.form.khed.value;
    if (khed.length < 2) {
        alert("กรุณากรอกอำเภอ/เขต");
        return false;
    }

    let province = document.forms.form.province.value;
    if (province == "000") {
        alert("กรุณาเลือกจังหวัด");
        return false;
    }

    let pcode = document.forms.form.pcode.value;
    if (pcode.length != 5) {
        alert("กรุณากรอกรหัสไปรษณีย์");
        return false;
    }
}