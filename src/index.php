<?php
    require "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping list</title>
</head>
<body>

    <div class="row" >
        <div class="container">

            <!-- FORM -->
            <form class="add text-center my-4" action="app/add.php" method="POST">
                <label for="add" class="add text-light">Add to shopping list</label>
                <input type="text" class="form-control m-auto" name="add" id="add">
            </form>

            <ul class="list-group mx-auto text-light">
                <?php
                    include "app/display.php";
                ?>  
            </ul>
        </div>
    </div>
</body>
</html>