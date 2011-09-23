
(function($) {

    var validation = function() {
        
        var rules = {  // Private object
            
            email : {
               check: function(value) {
                   
                   if(value) {
                       return testPattern(value,".+@.+[.].+");
                   }
                   return true;
               },
               msg : "Enter a valid e-mail address."
            },
            required : {
                
               check: function(value) {

                   if(value) {
                       return true;
                   }
                   else {
                       return false;
                   }
               },
               msg : "This field is required."
            }
        }
        var testPattern = function(value, pattern) {   // Private Method

            var regExp = new RegExp("^"+pattern+"$","");
            return regExp.test(value);
        }
        return { // Public methods
            
            addRule : function(name, rule) {

                rules[name] = rule;
            },
            getRule : function(name) {

                return rules[name];
            }
        }
    }
    //A new instance of our object in the jQuery namespace.
    $.validation = new validation();
    console.log('validation'+$.validation);
})(jQuery); 
