<?php
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $email = stripcslashes($email);
    $password = stripcslashes($password);
    $email = mysql_real_escape_string($email);
    $password = mysql_real_escape_string($password);

    mysql_connect("localhost", "root", "");
    mysql_select_db("jilbabafrasda");

    $result = mysql_query("Select * from datacustomer where email = '$email' and password = '$password'")
        or die ("Failed to query database ".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['Email'] == $email && $row['Password'] == $password)
    {
        echo "Login success!! Welcome ",$row['NamaDepan'];
    }
    else 
    {
        echo "Failed to login!";
    }
?>