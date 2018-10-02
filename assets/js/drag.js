// JavaScript Document

var _startX = 0;            // mouse starting positions
var _startY = 0;
var _offsetX = 0;           // current element offset
var _offsetY = 0;
var _dragElement;           // needs to be passed from OnMouseDown to OnMouseMove
var _oldZIndex = 0;         // we temporarily increase the z-index during drag

function InitDragDrop()
{
	document.onmousedown = OnMouseDown;
	document.onmouseup = OnMouseUp;
	
}
	

function OnMouseDown(e)
{
	
	_startX = e.clientX;
	_startY = e.clientY;
	_offsetX = $('.drag').offset().left;
	_offsetY = $('.drag').offset().top;
	
	
	document.onmousemove = OnMouseMove;
	document.body.focus();
	document.onselectstart = function () { return false; };
	
	return false;

}

function OnMouseMove(e)
{
    if (e == null) 
        var e = window.event; 
		
    $('.drag').css({ 'left': (_offsetX + e.clientX - _startX) + 'px', 'top': (_offsetY + e.clientY - _startY) + 'px'});
	
}

function OnMouseUp(e)
{
    document.onmousemove = null;
    document.onselectstart = null;
}

$(document).on( "touchstart", function ( e ) {
  	_startX = e.touches[0].pageX;
	_startY = e.touches[0].pageY;
	_offsetX = $('.drag').offset().left;
	_offsetY = $('.drag').offset().top;
	
	
	document.onmousemove = OnMouseMove;
	document.body.focus();
	document.onselectstart = function () { return false; };

});

$(document).on( "touchend", function (e) {
	document.onmousemove = null;
	document.onselectstart = null;
} );

$(document).on( "touchmove", function ( e ) {
	if (e == null) 
        var e = window.event; 		
    $('.drag').css({ 'left': (_offsetX + e.touches[0].pageX - _startX) + 'px', 'top': (_offsetY + e.touches[0].pageY - _startY) + 'px'});
	console.log(_offsetX);
});
