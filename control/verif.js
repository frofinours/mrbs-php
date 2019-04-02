function verifMail() {
    const email = $('#email').val();
    if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email)) {
        $('#email').css('border', '2px solid green');
    }
    else {
        $('#email').css('border', '2px solid red');
    }
}





