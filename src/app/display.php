<?php
    $sql = "SELECT * FROM list";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        // output data of each row
        echo "<form action='app/delete.php' method='POST'>";
        while($row = $result->fetch_assoc()) 
        {   
            echo
            "
            <li class='list-group-item d-flex justify-content-between align-items-center'>
                <span>". $row["item"] ."
                    <br>
                    <span class='date'>
                        ". $row["date"] ."
                    </span>
                </span>

                <button value=". $row["id"] ." name='delete'> 
                    <i class='far fa-trash-alt delete'></i>
                </button>
            </li> 
            ";
        }
        echo "</form>";

        
    }

    $conn->close();
?>