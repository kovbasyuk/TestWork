<!DOCTYPE html>
<head>
    <title>Registration page</title>
    <link href="/style.css" type=text/css rel=stylesheet>
</head>

<body>
<form id='register' action='register.php' method='post'
      accept-charset='UTF-8'>
    <fieldset >
        <legend>Register</legend>
        <p><label for='name' >Your Full Name: </label>
        <input type='text' name='name' maxlength="50" /></p>
        <p><label for='email' >Email Address:</label>
        <input type='text' name='email' maxlength="50" /></p>

        <p><label for="username" >UserName:</label>
        <input type='text' name='username' id='username' maxlength="50" /></p>

        <p><label for='password' >Password:</label>
        <input type='password' name='password'  maxlength="50" /></p>
        <input type='submit' name='Submit' value='Submit' />
        <input type="reset" name="Reset" value="Очистить форму">

    </fieldset>
</form>
</body>
