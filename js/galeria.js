$(document).on("ready",inicio);


function inicio()
{	

	$(".foto a").on("mouseover", on_foto);
	$(".foto a").on("mouseout", off_foto);	

}


function on_foto()
{

	var nto_foto = $(this).attr("id");

	$("#ft"+nto_foto).animate({
                            width: 210,
                            height: 160                              							
    },200);

    $("#marco"+nto_foto).animate({
                            width: 230,
                            height: 176    							
    },200);

}

function off_foto()
{

	var nto_foto = $(this).attr("id");

	$("#ft"+nto_foto).animate({
                            width: 200,
                            height: 150 
    });

    $("#marco"+nto_foto).animate({
                            width: 220,
                            height: 166    							
    });
	
}
