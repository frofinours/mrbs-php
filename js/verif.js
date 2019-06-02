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
    $.ajax({
        url: 'model/getEmail.php',
        data: 'id_res=' + id_res,
        type: 'POST',
        success: function(data){
            document.getElementById('emailRes').value = data;
        }
        
    });    
} 

function display(name, id){
    const result = document.getElementsByName(name)[0].value
    const div = document.getElementById(id);
    if(result === 'null') {
        div.style.visibility = 'hidden';
    } 
    else {
        console.log("value selected : ", result);
        div.style.visibility = 'visible';
        //ajax tables remplir champs
        const json = 
        {
            'id_assoc': result,
            'table': 'mrbs_league'
        };
        $.ajax({
            url: 'model/getAssosInfos.php',
            data: json,
            type: 'POST',
            success: function(data) {
                console.log("values : ", data);
                const obj = JSON.parse(data);
                //doc = document.getElementsById('association');
                //console.log("selected assoc : ", document.getElementsByName('association')[0]);
                document.getElementById('emailAssoc').value = obj[0];                
                document.getElementById('assocRes').value = obj[1];
                document.getElementById('emailRes').value = obj[2];
                document.getElementById('assocNom').value = obj[3];
            }
        })
    }
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
    
}
*/