<?php
include_once('template/header.php');

?>
<form method="post" action="Authorized.php" >
    <fieldset>
    <legend><h2> Login to Contact Manager</h2></legend>

     <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
     <p><input type="text" name="password" value="" placeholder="Password"></p>
    
          <h4> <input name="галочка" type="checkbox"> Remember me </h4>

        <p><input type="submit" value="Login">
    
      <input type="reset" name="Reset" value="Clear form"></p>
  
     <a class="btn" href="Registration%20page.php"> Registration </a>

    </fieldset>
</form>

