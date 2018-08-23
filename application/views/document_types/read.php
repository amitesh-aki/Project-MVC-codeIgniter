<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Document Type</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>
    <body>
        <?php
            $type = $document_types[0]->type;
        ?>
        <h1>View document types</h1><br>
        <p>Type: <?php echo $type;?><br>
    </body>
</html>