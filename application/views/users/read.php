<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Users</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="http://localhost/ci/assets/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            $name = $users[0]->name;
            $email = $users[0]->email;
            $phone = $users[0]->phone;
            $address = $users[0]->address;
            $type = $users[0]->type;
            $created_by = $users[0]->CREATED_BY;       
        ?>

        <h1>View user data for <?php echo $name; ?></h1><br>
        <p>Name: <?php echo $name; ?><br>
        <p>Email: <?php echo $email; ?><br>
        <p>Phone: <?php echo $phone; ?><br>
        <p>Address: <?php echo $address; ?><br>
        <p>User Type:<?php echo $type; ?><br>
        <p>Added By: 
            <?php 

            echo ($created_by == NULL ? "NULL" : $created_by);

            ?>
    </body>
</html>