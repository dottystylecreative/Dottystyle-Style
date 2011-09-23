//custom jquery plugins
(function($){
    var model_methods = {
        load:function(data,label){
            var opts = "";
            if(label !== undefined) opts += "<option value=''>"+label+"</option>";
            $.each(data,function(i,o){
                opts += "<option value='"+i+"'>"+o+"</option>";
            });
            this.html(opts);
        }
    }

    var mm = model_methods;
    $.fn.model = function(args){
        if(this[0].nodeName.toUpperCase() === "SELECT"){
            mm.load.apply(this,arguments);
        }
    }

    var tooltip_methods = {
       load:function(msg,el,nohover){
           //tooltip can be activated manually
           if(nohover){
                if(!$('#tooltip').length){
                    $('body').append("<div id='tooltip'><div id='tooltip_left'></div><div id='tooltip_right'></div></div>");
                }
                var coords = $( el || this ).offset();

                $('#tooltip').css({'top':coords.top+20,'left':coords.left+120,'display':'block'});
                $('#tooltip_right').html(msg);
           }else{
               $(this).hover(function(){
                    if(!$('#tooltip').length){
                        //$('body').append("<div id='tooltip'>");
                        $('body').append("<div id='tooltip'><div id='tooltip_left'></div><div id='tooltip_right'></div></div>");
                    }
                    var coords = $( el || this ).offset();

                    $('#tooltip').css({'top':coords.top+20,'left':coords.left+120,'display':'block'});
                    $('#tooltip_right').html(msg);
               },
               function(){
                    $('#tooltip').remove();              
               });
           }
       } 
    }

    var tm = tooltip_methods;
    $.fn.tooltip = function(msg,el){
        tm.load.apply(this,arguments);
    }
})(jQuery);

// javascript query string parser: http://stackoverflow.com/questions/901115/get-query-string-values-in-javascript
function getParameterByName(name)
{
  name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
  var regexS = "[\\?&]" + name + "=([^&#]*)";
  var regex = new RegExp(regexS);
  var results = regex.exec(window.location.href);
  if(results == null)
    return "";
  else
    return decodeURIComponent(results[1].replace(/\+/g, " "));
}

