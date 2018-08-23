<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Documents</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>
    <body>
        <?php
            $title = $documents[0]->title;
            $stage = $documents[0]->stage;
            $type = $documents[0]->type;
            $lead = $documents[0]->LEAD;
            $created_by = $documents[0]->CREATED_BY;
            $assigned_to = $documents[0]->ASSIGNED_TO;
            $approved_by = $documents[0]->APPROVED_BY;
            $estimated_date = $documents[0]->estimated_date;
            $delivery_date = $documents[0]->delivery_date;
        ?>
        <h1>View document details for <?php echo $title; ?></h1><br>
        <p>Title: <?php echo $title; ?><br>
        <p>Stage: <?php echo $stage; ?><br>
        <p>Type: <?php echo $type; ?><br>
        <p>From lead: <?php echo $lead; ?><br>
        <p>Added by: <?php echo $created_by; ?><br>
        <p>Assigned to: <?php echo $assigned_to; ?><br>
        <p>Approved by: <?php echo $approved_by; ?><br>
        <p>Estimated date: <?php echo $estimated_date; ?><br>
        <p>Delivery date: <?php echo $delivery_date; ?>

    </body>
</html>