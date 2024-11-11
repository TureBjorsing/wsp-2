<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konto</title>
</head>
<body>
    <?php
    function cleanData($data) {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
    }

    mb_internal_encoding("UTF-8");

    if(isset($_POST['fname'])){
        $fname = $_POST['fname'];

        if(!mb_check_encoding($fname)) {
            header('Location: index.html');
        }

        cleanData($fname);

        echo $fname;
    }

    if(isset($_POST['lname'])){
        $lname = $_POST['lname'];

        if(!mb_check_encoding($lname)) {
            header('Location: index.html');
        }

        cleanData($lname);

        echo $lname;
    }

    if(isset($_POST['username'])){
        $username = $_POST['username'];

        if(!mb_check_encoding($username)) {
            header('Location: index.html');
        }

        cleanData($username);

        echo $username;
    }

    if(isset($_POST['passwrd'])){
        $passwrd = $_POST['passwrd'];

        if(!mb_check_encoding($passwrd)) {
            header('Location: index.html');
        }

        cleanData($passwrd);

        echo $passwrd;
    }
    ?>
</body>
</html>