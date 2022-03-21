<?php include "db.php"?>
<?php include "header.php"?>
<?php include "functions.php"?>





        <?php
            // if (isset($_POST['login'])) {
            //    $email    = $_POST['email'];
            //    $password = $_POST['password'];
            //     echo $email ."<br>". $password;
            // }


            $query= "SELECT * FROM user";
            $all_users_data = mysqli_query($connection,$query); 
            
        ?>

                <div class="container">
                    <div class="row">
                    <table class="table caption-top table-success table-striped table-hover">
                    <caption>List of users</caption>
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                      <tbody>

                        <?php 
                        while ($row = mysqli_fetch_assoc($all_users_data)) {
                            $user_id  =$row['user_id'];
                            $username =$row['username'];
                            $email    =$row['email'];
                            $phone    =$row['phone'];
                        
                        ?>

                        <tr>
                        <th scope="row"> <?php echo $user_id ?></th>
                        <td><?php echo $username ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $phone ?></td>
                        <td>
                            <div class="btn btn-group">
                                <a href="user-update.php?update=<?php echo $user_id ?>" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="index.php?delete=<?php echo $user_id ?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></a>
                            </div>
                        </td>

                    <?php } 
                       
                    ?>
                        </tr>
                       
                     </tbody>
            </table>

                    </div>
                </div>

               <?php deleteUser() ?>

<!-- <section class="login-section">

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">

               <div class="login-box shadow-lg p-4">
               <h3>
                    Admin Login Page
                </h3>
                <form action="" method="POST">
                    <div class="form-group mb-3">
                        <label class="form-label">Email :</label>
                        <input type="email" name="email" id="" class="form-contorl">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Password : </label>
                        <input type="password" name="password" id="" class="form-contorl">
                    </div>
                    <div class="form-group col-4 mx-auto mb-3">
                        <input type="submit" value="Login" name="login" class="btn btn-outline-success form-contorl mx-auto ">
                    </div>



                </form>
               </div>
            </div>
            
        </div>
    </div>
</section>
   -->


   <?php include "footer.php"  ?>


