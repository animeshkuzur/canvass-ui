$(document).ready(function() {

  /* Toggle Registration, Sign In and Forgot password forms depending on session variable */
  var toggleSignUpAndRegistrationForms = function (redirectFormType) {

    if (redirectFormType !== undefined) {

      if (redirectFormType == 'login') {
        $('.goto_signin').click();

      } else if (redirectFormType == 'register') {
        $('.goto_register').click();

      } else if (redirectFormType == 'forgot_password') {
        $('.forgot_pass').click();
      }
    }
  }

});