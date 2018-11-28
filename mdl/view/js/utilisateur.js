function verifierNom(){
	var nom = $('#nomAAjouter').val();
    if (/^[a-zA-Z]{0}$/.test(nom))
			{        
				$('#infoNomAAjouter').html('Vous devez écrire au moins un caractère');	
				$('#nomAAjouter').css('border','1px solid red');
				$('#nomAAjouter').css('background','pink');
			}
			else
			{
				if (/[0-9-!@#$%^&*(),.?":{}|<>+#~²_^§€;%µ£¤¨°`|\s]/.test(nom))
				{
					$('#infoNomAAjouter').html('Chiffres et caractères spéciaux interdits');
					$('#nomAAjouter').css('border','1px solid red');
					$('#nomAAjouter').css('background','pink');						
				}
				else
				{
					$('#infoNomAAjouter').html('');
					$('#nomAAjouter').css('border','1px solid green');
					$('#nomAAjouter').css('background','white');
				}
				
			}
}

function verifierEmail()
{
	var email = $('#emailAAjouter').val();
	if (/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/.test(email))
	{
		$.post("verification-pseudo.php", { mrbs_users : email },
		function(emailExiste)
		{
			if (emailExiste == 1)
			{
				$('#infoEmailAAjouter').html('Cet email est déjà utilisé.');	
				$('#emailAAjouter').css('border','1px solid red');
				$('#emailAAjouter').css('background','pink');
			}
			else
			{
				$('#infoEmailAAjouter').html('');	
				$('#emailAAjouter').css('border','1px solid green');
				$('#emailAAjouter').css('background','white');
			}
		})
	}
	else
	{
		$('#infoEmailAAjouter').html('Veuillez entrer une adresse email valide SVP');	
		$('#emailAAjouter').css('border','1px solid red');
		$('#emailAAjouter').css('background','pink');
	}
}

function verifierMdpC(){
	var mdp = $('#mdpAAjouter').val();
	var mdp2 = $('#mdpCAAjouter').val();
	if (/^[a-zA-Z0-9-!@#$%^&*(),.?":{}|<>+#~²_^§€;%µ£¤¨°`|*]{3,30}$/.test(mdp))
	{
		if (mdp == mdp2)
		{
			$('#infoMdpCAAjouter').html('');	
			$('#mdpAAjouter').css('border','1px solid green');
			$('#mdpAAjouter').css('background','white');
			$('#mdpCAAjouter').css('border','1px solid green');
			$('#mdpCAAjouter').css('background','white');
		}
		else
		{
			$('#infoMdpCAAjouter').html('Les mots de passes doivent être semblables.');	
			$('#mdpAAjouter').css('border','1px solid red');
			$('#mdpAAjouter').css('background','pink');
			$('#mdpCAAjouter').css('border','1px solid red');
			$('#mdpCAAjouter').css('background','pink');
		}
	}
	else
	{
		$('#infoMdpCAAjouter').html('Le mot de passe doit contenir entre 3 et 30 caractères.');	
		$('#mdpAAjouter').css('border','1px solid red');
		$('#mdpAAjouter').css('background','pink');
		$('#mdpCAAjouter').css('border','1px solid red');
		$('#mdpCAAjouter').css('background','pink');
	}
}