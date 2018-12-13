
function setResults() {
    var room_name =  document.getElementById('roomname').value; 
    $.ajax({
        url : '../model/ggg.php',
        data : 'name=' + room_name,
        type : 'POST',
        success : function(data){
            console.log(data);
            document.getElementById('area').value = data;
        }
        
    });

    // alert("lol");
    
}