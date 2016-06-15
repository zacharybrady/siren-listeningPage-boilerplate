/**
* This file contains Javascript functionalities for the Homepage
* @module Home
*/

/**
@class password_handling
@static
*/



$(document).ready(function(){

    /**
    Checks the password
    @method TheLogin()
    */


	var theLogin = function() {
        var passwordTest = 'musicIsCool';
    
        if (this.document.login.pass.value == passwordTest) {
          top.location.href="listen";
        }
        else {
    		location.href="nope";
        }
    };
    
 	/**
 	On the press of the enter key or click of submit
	@method password_submitted
	*/

    $('.password_input').keypress(function(e) {
        if (e.keyCode == 13) {
            theLogin($('.password_input').attr('value'));
            return false;
        }
    });

    $('.password_submit').click(function(e) {
        theLogin($('.password_input').attr('value'));
        return false;
    });

});