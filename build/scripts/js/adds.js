"use strict";var setAdds=function(){$("aside.add").each(function(){if($(this).is(".empty")){var s=parseInt($(this).css("height").substr(0,$(this).css("height").length-2)),t=parseInt($(this).css("width").substr(0,$(this).css("width").length-2)),h="<h5><span>Місце для вашої реклами</span><br><small>("+t+" * "+s+" px)</small><br><small>+380 (95) 177 23 52</small></h5>";$(this).html(h)}})};$(document).ready(setAdds);