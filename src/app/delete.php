<?php
    require "../conn.php";
    if (isset($_POST["delete"]))
    {
        $id = $_POST["delete"];
        $sql = "DELETE FROM list WHERE id = '$id'";

        if (mysqli_query($conn, $sql))
        {
            header("Location: ../index.php");
        }

        else
        {
            echo "ERROR: " . $sql . "<br>" . $conn->error;
        }
    }


    elseif (isset($_POST["delete_all"]))
    {
        $sql = "TRUNCATE TABLE list";

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