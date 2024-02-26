<?php

session_set_cookie_params(['httponly' => true]); //Cookies can only be accessed through http. Can't be done with JavaScript.

session_start(); //So you can access $_SESSION.

session_regenerate_id(true); //Regenerates a session id and deletes the old one.

?>

<form action="/sessions-study/public/user.php" method="POST">
    <div class="input-filed">
        <label for="name">Name</label>
        <input type="text" name='name' id="name">
    </div>
    <div class="input-filed">
        <label for="lastname">Lastname</label>
        <input type="text" name='lastname' id="lastname">
    </div>
    <div class="input-filed">
        <label for="lang">Language:</label>
        <select name="lang">
            <option value="en-us" selected>English</option>
            <option value="pt-br">Português</option>
            <option value="es-es">Español</option>
        </select>
    </div>
    <button type="submit">Go to user</button>
</form>