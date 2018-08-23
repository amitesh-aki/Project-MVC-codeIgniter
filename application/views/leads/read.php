<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Leads</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>
    <body>
        <?php
            $name = $leads[0]->name;
            $email = $leads[0]->email;
            $phone = $leads[0]->phone;
            $address = $leads[0]->address;
            $created_by = $leads[0]->CREATED_BY;
        ?>
        <h1>View lead data for <?php echo $name; ?></h1><br>
        <p>Name: <?php echo $name; ?><br>
        <p>Email: <?php echo $email; ?><br>
        <p>Phone: <?php echo $phone; ?><br>
        <p>Address: <?php echo $address; ?><br>
        <p>Added by: <?php echo $created_by; ?>
    </body>
</html>