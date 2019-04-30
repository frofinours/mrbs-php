
function setResults() {
    var room_name =  document.getElementById('roomname').value; 
    console.log("Room name: "+room_name);

    if(room_name == ""){
        document.getElementById('area').value = "";
        document.getElementById('description').value = "";
        document.getElementById('capacite').value = "";
        document.getElementById('email').value = data;
        document.getElementById('buttonCreer').disabled = true;
    }
    else
    {
        document.getElementById('buttonCreer').disabled = false;
        $.ajax({
            url : '../model/getType.php',
            data : 'name=' + room_name,
            type : 'POST',
            success : function(data){
                document.getElementById('area').value = data;
            }
            
        });
    
        $.ajax({
            url : '../model/getDescription.php',
            data : 'name='+ room_name,
            type: 'POST',
            success : function(data){
                document.getElementById('description').value = data;
            }
        });
    
        $.ajax({
            url : '../model/getCapacite.php',
            data : 'name='+ room_name,
            type: 'POST',
            success : function(data){
                document.getElementById('capacite').value = data;
            }
        });
    
        $.ajax({
            url : '../model/getEmail.php',
            data : 'name='+ room_name,
            type: 'POST',
            success : function(data){
                document.getElementById('email').value = data;
            }
        });
    }
    
    
}