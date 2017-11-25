<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backup - PHP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
<body>

    <form class="form-group" action="index.php" method="post">
        <input class="form-control" type="text" name="name" id="name" placeholder="Name">
        <input class="form-control" type="email" name="email" id="email" placeholder="E-mail">
        <input class="form-control" type="phone" name="phone" id="phone" placeholder="Phone">
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>

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

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
