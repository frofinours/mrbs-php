function verifMail() {

    const email = $('#emailRoom').val();
    if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email)) {
        $('#emailRoom').css('border', '2px solid lightgreen');
    }
    else {
        $('#emailRoom').css('border', '2px solid pink');
    }
}


function setResults() {
    // var room_name =  document.getElementById('roomSelect').value;
    var room_id = document.getElementById('roomSelect').selectedIndex;
    console.log("Room id: "+room_id);

    if(room_id == 0){
        document.getElementById('area').value = "";
        document.getElementById('description').value = "";
        document.getElementById('capacite').value = "";
        document.getElementById('emailRoom').value = "";
        document.getElementById('buttonModif').disabled = true;
        document.getElementById('buttonCancel').disabled = true;
        document.getElementById('emailRoom').style.border= "none";
    }
    else
    {
        document.getElementById('buttonModif').disabled = false;
        document.getElementById('buttonCancel').disabled = false;
        document.getElementById('emailRoom').style.border= "none";
        $.ajax({
            url : './model/Salle/getType.php',
            data : 'id=' + room_id,
            type : 'GET',
            success : function(data){
                document.getElementById('area').selectedIndex = data;
            }
        });
    
        $.ajax({
            url : './model/Salle/getDescription.php',
            data : 'id='+ room_id,
            type: 'GET',
            success : function(data){
                document.getElementById('description').value = data;
            }
        });
    
        $.ajax({
            url : './model/Salle/getCapacite.php',
            data : 'id='+ room_id,
            type: 'GET',
            success : function(data){
                document.getElementById('capacite').value = data;
            }
        });
    
        $.ajax({
            url : './model/Salle/getEmail.php',
            data : 'id='+ room_id,
            type: 'GET',
            success : function(data){
                document.getElementById('emailRoom').value = data;
            }
        });
    }
}
