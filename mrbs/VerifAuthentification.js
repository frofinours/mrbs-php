
////////// CHECK ///////////
var check = {};

check['mdp'] = function(id){ //on met juste id comme ça on peut réutiliser la fonction sur les autres textbox
	var mdp = document.getElementById(id),
        //numberTest = /\d/; //Pour tester la présence des nombres
	if (mdp.value == null)
	{
		mdp.className = 'incorrect';
		return false;
	}
	else
	{
		mdp.className='correct';
		return true;
	}
}; 


/* check['mail'] = function(id){
	var mail = document.getElementById('mail'),
	at = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	//NE PAS TOUCHER À CETTE LIGNE ^, c'est ce qui permet de check  le @ + le point
	if (at.test(mail.value) === true)
	{
		mail.className = 'correct';
		return true;
	}
	else
	{
		mail.className = 'incorrect';
		return false;
	}

}; */



//////////////EVENT///////////

(function() {
    var myForm = document.getElementById('myForm'),
        inputs = document.querySelectorAll('input[type=text]'); //tous les input texts sont contrôlés pendant que l'utilisateur tape

    for (var i = 0; i < inputs.length; i++) {
        inputs[i].addEventListener('keyup', function(e)
        { //permet l'action pendant que l'utilisateur rentre du texte
            check[e.target.id](e.target.id); // "e.target" représente l'input actuellement modifié
        });
    }


 myForm.addEventListener('submit', function(e) {
        var result = true;
       for (var i in check)
        {
           result = check[i](i) && result;
        }
        if (result!=true) //s'il manque quelque chose
        {
            e.preventDefault(); //On empêche l'utilisateur de passer à la suite
            alert('Vous avez oublié quelque chose!');
        }
   });
 })();
