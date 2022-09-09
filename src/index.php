<?php
    require "conn.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="scripts/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>shopping list</title>
</head>

<body>
    
    <div class="container">
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

    <button type="button" class="clear-list position-absolute bottom-0 end-0" data-bs-toggle="modal" data-bs-target="#my-modal">
        <i class="fa-solid fa-xmark"></i>
    </button>

    <div class="modal fade" id="my-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Are you sure you want to clear the list?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                
                <div class="modal-footer">
                    <form action="app/delete.php" method="POST"><button type="submit" class="btn btn-primary" name="delete_all">Yes</button></form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>