function verifMail() {
    const email = $('#emailAssoc').val();
    if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email)) {
        $('#emailAssoc').css('border', '2px solid green');
    }
    else {
        $('#emailAssoc').css('border', '2px solid red');
    }
}

function setResEmail() {
    var id_res =  document.getElementById('responsable').value;
    console.log("ID RES : ", id_res);
    $.ajax({
        url: 'model/getEmail.php',
        data: 'id_res=' + id_res,
        type: 'POST',
        success: function(data){
            console.log("DATA : ", data); 
            document.getElementById('emailRes').value = data;
        }
        
    });    
} 

/*function setResult() {
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
    
} */