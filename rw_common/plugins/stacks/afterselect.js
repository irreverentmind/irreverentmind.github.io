
(function($){var selectHandler=function(e){var el=$(this);if(el.data('selecttimer')){window.clearTimeout(el.data('selecttimer'));}
el.data('selecttimer',window.setTimeout(function(){el.trigger('afterselect');},500));};$.event.special.afterselect={add:function(handleObj){$(this).on('select',selectHandler);var old_handler=handleObj.handler;handleObj.handler=function(event){return old_handler.apply(this,arguments);};},remove:function(handleObj){$(this).off('select',selectHandler);}};$.fn.extend({afterselect:function(f){if($.isFunction(f)){$(this).on('afterselect',f);}else{$(this).trigger('afterselect');}
return this;}});})(jQuery);
