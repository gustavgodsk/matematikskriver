
function CheckForEnterClick(e)
{
   e = e || window.event;
   if( e.keyCode == 13 || e.which == 13 )
        if (!e.shiftKey) $('#form1').submit(); 
}

var addEventHandler = function(element,eventType,functionRef)
{
    if( element == null || typeof(element) == 'undefined' ) { return; }
    if( element.addEventListener ) { element.addEventListener(eventType,functionRef,false); }
    else if( element.attachEvent ) { element.attachEvent("on"+eventType,functionRef); }
    else { element["on"+eventType] = functionRef; }
};

addEventHandler(window,"keydown",CheckForEnterClick);
