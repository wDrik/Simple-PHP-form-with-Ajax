<?php 
    if(isset($_POST)) {
        $name   = $_POST['name'];
        $email  = $_POST['email'];
        $phone  = $_POST['phone'];

        echo('Name: '.$name.'<br>');
        echo('E-mail: '.$email.'<br>');
        echo('Phone: '.$phone.'<br>');
    }
?>