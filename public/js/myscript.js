    // Validation for sign up form on home.php
    function check() {
        if (document.getElementById('password').value ==
            document.getElementById('confirmpassword').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'matching';
            document.getElementById('submit').disabled =false;
        } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'not matching';
            document.getElementById('submit').disabled =true;            
        }// end else
    }// end check

function myfunction() {

  alert("Your Project will be submitted for approval.");

}

function approvefunc() {

  alert("Approved!");

}