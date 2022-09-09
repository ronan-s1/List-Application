<?php
    require "../conn.php";
    if(!empty($_POST["add"]))
    {
        date_default_timezone_set("Europe/Dublin");
        $item = $_POST["add"];
        $date = date("M j - g:i a");

        $sql = "INSERT INTO list (item, date) VALUES ('$item', '$date')";

        if (mysqli_query($conn, $sql))
        {
            header("Location: ../index.php");
        }

        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header("Location: ../index.php");
        }
    }

    else
    {
        header("Location: ../index.php");
    }
?>
