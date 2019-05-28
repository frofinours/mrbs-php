function verifMail() {
    console.log("BITE");
    const email = $('#email').val();
    if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email)) {
        $('#email').css('border', '2px solid green');
    }
    else {
        $('#email').css('border', '2px solid red');
    }
}
function getIdResp() {
    return document.getElementById('responsable').value;
} 

function setResult() {
    var name =  document.getElementById('responsable').value; 
    var emailValue = null;
    $.ajax({
        url : '../model/hhh.php',
        data : 'name=' + name,
        type : 'POST',
        success : function(data){
            document.getElementById('emailRes').value = data;
        }
        
    });
    //var emailValue = "<?php getEmail('"+name+"')?>";
    // value = emailValue['responseText'];
    // console.log(value);
    
}