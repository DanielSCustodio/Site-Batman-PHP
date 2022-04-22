$(function(){
	$('nav.mobile').click(function(){
		var listaMenu = $('nav.mobile ul');

		if(listaMenu.is(':hidden')==true){	
	     //fad fa-times
	    // fa fa-bars
	    var icone = $(`.botao-menu-mobile`).find(`i`);
	    icone.removeClass(`fa-bars`);
	    icone.addClass(`fa-times`);
		listaMenu.slideToggle(500);
		}else{	
		icone.removeClass(`fa-times`);
	    icone.addClass(`fa-bars`);
		listaMenu.slideToggle(500);
		}


	});
});