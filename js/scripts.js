//funcion que le pasamos una valoracion y un identificador de hotel
//a partir de una llamada ajax, accede al servidor y almacena ese valor en la base de datos de forma dinamica.
function valorar(n,id) {
	var xmlhttp;
	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
			window.alert(xmlhttp.responseText);
		}
	}
	xmlhttp.open("POST","php/includes/valorar.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send("valor="+n+"&idAlojamiento="+id);//enviamos el valor y el id del alojamiento.
}



function toggle( div_id ) {

	var el = document.getElementById(div_id);

	if ( el.style.display == 'none' )
		el.style.display = 'block';
	else
		el.style.display = 'none';
}

function TEST_size( TESTpopUpVar ,width,height) {
	if ( typeof window.innerWidth != 'undefined' )
		viewportheight = window.innerHeight;
	else
		viewportheight = document.documentElement.clientHeight;

	if (( viewportheight > document.body.parentNode.scrollHeight ) && ( viewportheight > document.body.parentNode.clientHeight ))
		TEST_height = viewportheight;
	else
		if ( document.body.parentNode.clientHeight > document.body.parentNode.scrollHeight )
			TEST_height = document.body.parentNode.clientHeight;
		else
			TEST_height = document.body.parentNode.scrollHeight;

	var TEST = document.getElementById( 'TEST' );
	TEST.style.height = TEST_height + 'px';
	var TESTpopUp = document.getElementById( TESTpopUpVar );
	TESTpopUp_height=TEST_height/2-(height/2)-100;
	TESTpopUp.style.top = TESTpopUp_height + 'px';

	TESTpopUp.style.width=width + 'px';
	TESTpopUp.style.height=height + 'px';
}
function window_pos(TESTpopUpVar,width,height) {
	if ( typeof window.innerWidth != 'undefined' )
		viewportwidth = window.innerHeight;
	else
		viewportwidth = document.documentElement.clientHeight;

	if (( viewportwidth > document.body.parentNode.scrollWidth) && (viewportwidth > document.body.parentNode.clientWidth ))
		window_width = viewportwidth;
	else
		if ( document.body.parentNode.clientWidth > document.body.parentNode.scrollWidth )
			window_width = document.body.parentNode.clientWidth;
		else
			window_width = document.body.parentNode.scrollWidth;

	var TESTpopUp = document.getElementById(TESTpopUpVar);
	window_width=window_width/2-(width/2);
	TESTpopUp.style.left = window_width + 'px';
}
function popup( windowname,width,height ) {
	TEST_size( windowname,width,height );
	window_pos( windowname,width,height );
	//toggle( 'TEST' );
	var el = document.getElementById(windowname);
	el.style.zIndex = 9002;
	var el2 = document.getElementById('TEST');
	el2.style.display = 'block';
	//toggle( windowname );
}
function closepopup(windowsname){
	var el = document.getElementById(windowsname);
		el.style.zIndex = -1000;
		var el2 = document.getElementById('TEST');
		el2.style.display = 'none';
}



function pausecomp(millis){
  var date = new Date();
  var curDate = null;
  do { curDate = new Date(); }
  while(curDate-date < millis);

}
function rotar(){
	var timer = setInterval(sliderScroll, 10);
	//230px ancho ventana
	//Desplaza el contenedor derecha
    var slider =document.getElementById("slider");
	    // crea el temporizador
	var timer = setInterval(sliderScroll, 10);
	//Asigna el ancho total de los slides al contenedor
	//La anchura total se obtiene multiplicando la medida de un slide por el nÃºmero de slides)
	document.getElementById("slidesContainer").style.width="1150px";//230*4=920
	var incremento=0;
	var totalWidth =920;//4*230-230=690//Calcula la anchura total menos el ultimo slide.
	var position=0;
	function sliderScroll(){
		incremento=position+1;
	    position =document.getElementById("slider").scrollLeft; //Calcula la posicion actual del contenedor
		//si estamos al inicio de una imagne que se pare durante 1seg
		if(position%230==0){
			pausecomp(1000);
		}
		//movemos scroll

		if(incremento>=totalWidth){//si es el final del scroll -> volvmeos a empezar
			slider.scrollLeft=0;
		}
		else{
	    	slider.scrollLeft=incremento;
		}
    }
}
