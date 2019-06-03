function verifMail() {
    const email = $('#emailAssocCreer').val();
    
    if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email)) {
        $('#emailAssocCreer').css('border', '2px solid green');
    }
    else {
        $('#emailAssocCreer').css('border', '2px solid red');
    }
}
function setResEmail(page) {
    var id_res = '';
    if(page == 1){
        id_res =  document.getElementById('responsableCreer').value;
    }
    else {
        id_res = document.getElementById('assocResModif').value;
    }
    $.ajax({
        url: 'model/getEmail.php',
        data: 'id_res=' + id_res,
        type: 'POST',
        success: function(data){
            if(page == 1){
                document.getElementById('emailResCreer').value = data;
            }
            else {
                document.getElementById('emailResModif').value = data;
            }
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
            
                document.getElementById('emailAssocModif').value = obj[0];                
                document.getElementById('assocResModif').value = obj[4];
                document.getElementById('emailResModif').value = obj[2];
                document.getElementById('assocNomModif').value = obj[3];
                
            }
        })
    }
}

