<?php

session_start();

//Setting session's data:
if(isset($_POST)) {
    $_SESSION['user'] = [
        'info' => [
            'name' => $_POST['name'],
            'lastname' => $_POST['lastname'],
        ],
        'settings' => [
            'lang' => $_POST['lang'],
        ]    
    ];
}

//Retrieving session's data: 
$id = session_id();
$name  = $_SESSION['user']['info']['name'];
$lastname  = $_SESSION['user']['info']['lastname'];
$lang  = $_SESSION['user']['settings']['lang'];

?>

<h1>Hello <?php echo $name . ' ' . $lastname ?></h1>
<h2>Session Id: <?php echo $id?></h2>
<p>Language: <?php echo $lang?></p>

<a href="/sessions-study">Back</a>