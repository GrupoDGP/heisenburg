function toggle( div_id ) {
	
	var el = document.getElementById(div_id);
	
	if ( el.style.display == 'none' ) 
		el.style.display = 'block';
	else 
		el.style.display = 'none';
}
function TEST_size( TESTpopUpVar ) {
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
	TESTpopUp_height=TEST_height/2-200;
	TESTpopUp.style.top = TESTpopUp_height + 'px';
}
function window_pos(TESTpopUpVar) {
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
	window_width=window_width/2-200;
	TESTpopUp.style.left = window_width + 'px';
}
function popup( windowname ) {
	TEST_size( windowname );
	window_pos( windowname );
	toggle( 'TEST' );
	toggle( windowname );		
}