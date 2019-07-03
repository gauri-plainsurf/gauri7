<?php
include_once '../controller/dbtable.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <?php
        include_once '../includes/links.php';
        ?>


    </head>

    <body>
        <?php
        include_once '../includes/back.php';
        ?>
        <div class="container ab">


            <table class="table  table-bordered table-hover" id="mytable">

                <thead class="thead-dark">

                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>phone_no</th>
                        <th>Skills</th>
                        <th>Salary</th>
                        <th width="100px">Action</th>
                        <th width="100px">Action</th>

                    </tr>
                </thead>
                <?php include_once '../controller/dbtable2.php'; ?>

            </table>
        </div> <!-- container / end -->

        <?php include_once '../includes/backup.php'; ?>




    </body>

    <script type="text/javascript" src="../assets/js/delete.js"></script>
</html>