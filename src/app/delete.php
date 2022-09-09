<?php
    require "../conn.php";
    if(isset($_POST["delete"]))
    {
        $id = $_POST["delete"];
        $sql = "DELETE FROM list WHERE id = '$id'";

        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        if (mysqli_query($conn, $sql))
        {
            header("Location: ../index.php");
        }

        else
        {
            echo "ERROR: " . $sql . "<br>" . $conn->error;
        }
    }

    else
    {   
        header("Location: ../index.php");
    }
?>