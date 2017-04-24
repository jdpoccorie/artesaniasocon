
$(document).on("ready",inicio);	
	
	var idioma = "";

function inicio()
{		
	$("#bu_send_contact").on("click", send_contact);
	$("#bu_send_contact_en").on("click", send_contact_en);
}

function send_contact_en()
{
	idioma = "ingles";
	enviar_contacto();
}

function send_contact()
{
	idioma = "espaniol";
	enviar_contacto();
}

function enviar_contacto()
{

	var fname = $("#ct_fname").attr("value");
	var email = $("#ct_email").attr("value");
	var country = $("#ct_nacion").attr("value");
	var city = $("#ct_ciudad").attr("value");	
	var phone = $("#ct_fono").attr("value");
	var message = $("#ct_mensaje").attr("value");	

	$("#ms_c_sending").css("color","#cf8209");

	if(fname == "")
	{
		$("#ct_fname").css("background-color","#fb9696");
		$("#ct_fname").focus();
	}
	else
	{
		if(email == "")
		{
			$("#ct_email").css("background-color","#fb9696");
			$("#ct_email").focus();
		}
		else
		{

			if(country == "")
			{
				$("#ct_nacion").css("background-color","#fb9696");
				$("#ct_nacion").focus();
			}
			else
			{

				if(city == "")
				{
					$("#ct_ciudad").css("background-color","#fb9696");
					$("#ct_ciudad").focus();
				}
				else
				{
					if(message == "")
					{
						$("#ct_mensaje").css("background-color","#fb9696");
						$("#ct_mensaje").focus();
					}
					else
					{											
						$("#ms_c_sending").css("display","block");				

						$("#ms_c_sending").load("send_contact.php", {var1: fname, var2: email, var3: country, var4: city, var5: phone, var6: message, var7: idioma }, function(){

										$("#ms_c_sending").css("color","#fff");

										$("#ct_fname").attr("value","");
										$("#ct_email").attr("value","");
										$("#ct_nacion").attr("value","");
										$("#ct_ciudad").attr("value","");
										$("#ct_fono").attr("value","");
										$("#ct_mensaje").attr("value","");
						
						});						
						
					}

				}

			}

		}
	}


}

