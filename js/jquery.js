// JavaScript Document
$(document).ready(function(){
$('.btn-menu').click(function(){
	$('.contenedor-menu .menu').slideDown();
});

	
$(window).resize(function(){
if($(document).width()>850){
   $('.contenedor-menu .menu').css({'display':'block'});
   }
	
if($(document).width()<850){
   $('.contenedor-menu .menu').css({'display':'none'});
   $('.menu li ul').slideUp();
   $('.menu li').removeClass('activado');
$('.btn-sel').click(function(){
	$('.contenedor-menu .menu').slideUp();
});	
   } 	
	
});	
});