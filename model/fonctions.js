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
            url: '../model/getAssosInfos.php',
            data: json,
            type: 'POST',
            success: function(data) {
                console.log("values : ", data)
            }
        })
    }
}

function setResEmail() {
    var id_res =  document.getElementById('responsable').value; 
    $.ajax({
        url: '../model/getEmail.php',
        data: 'id_res=' + id_res,
        type: 'POST',
        success: function(data){
            document.getElementById('emailRes').value = data;
        }
        
    });    
}

function sendValuesToBDD(){
    const nom = document.getElementById('assocNom').value;
    const adresse_mail_asso = document.getElementById('emailAssoc').value;
    const id_responsable =  document.getElementById('responsable').value;
    const json = 
    {
        'nom_assoc': nom, 
        'mail_assoc': adresse_mail_asso, 
        'id_res': id_responsable
    };
    $.ajax({
        url: '../model/sendValuesToBDD.php',
        data: json,
        type: 'POST',
        success : function(data){
            alert(data)}
    })
    

}