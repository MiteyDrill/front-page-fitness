<?php
//login_form.php

echo "
<div id='form_wrapper'>

    <!-- Profile image -->
    <img id='profile-icon-image' src='http://cdn.onlinewebfonts.com/svg/img_568657.png'/>
    
    
    <!--FORM-->
                <!--Use php to change action to login or register-->
    <form action='login.php' method='post'>
    
        <p class='form-text'>Username:</p>   <input class='input-text' type='text' name='username'><br>
        <p class='form-text'>Password:</p>   <input class='input-text' type='password' name='password'><br>
        
        <button class='button login-button' type='submit'>Login</button>
        <br>
        <button class='button register-button type='submit'>Register</button>
    </form>
    
    
    
    <!--FORM-->
    


</div>
"

?>