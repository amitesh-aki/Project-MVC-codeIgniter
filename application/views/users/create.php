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
        <form action='create_user' method='POST'>

        Name: <input type='text' name='name'><br>
        Email: <input type='text' name='email'><br>
        Phone: <input type='text' name='phone'><br>
        Address: <input type='text' name='address'><br>
        User type:
                <select name='user_type_id'>
                <option value=''></option>
        Added by:
                <select name='created_by'>
                <option value=''></option>
        Password: <input type='password' name='password'><br>
        Confirm password: <input type='password' name='password'>

        </form>

    </body>
</html>