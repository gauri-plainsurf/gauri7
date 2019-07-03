<?php
                include_once '../database/dbconnection.php';
                $sql = "SELECT *FROM employee";
                $result = mysqli_query($conn, $sql);



                while ($row = mysqli_fetch_assoc($result)) {
                    $rows[] = $row;
                    ?>

                    <tr id="<?php echo $row['id'] ?>">
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['phone_no'] ?></td>
                        <td><?php echo $row['skills'] ?></td>
                        <td><?php echo $row['salary'] ?></td>
                        <td><button class="btn btn-danger btn-lg remove" id="remove">Delete</button></td>
                        <td><button class="btn btn-success btn-lg "><a href="updates.php?id=<?php echo $row['id']; ?>"> Update</a></button></td>
                    </tr>


                    <?php
                }
                ?>
