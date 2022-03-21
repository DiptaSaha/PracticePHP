<?php include "db.php"?>
<?php include "header.php"?>
<?php include "functions.php"?>



        <?php
          //read to the all the information
            if (isset($_GET['update'])) {
               $user_id= $_GET['update'];
               $query="SELECT * FROM user WHERE user_id=$user_id";
               $select_user_id= mysqli_query($connection,$query);

                while($row=mysqli_fetch_assoc($select_user_id)){
                    $user_id  =$row['user_id'];
                    $username =$row['username'];
                    $email    =$row['email'];
                    $phone    =$row['phone'];
                    $password =$row['password'];
                    ?>
                    <section class="login-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 offset-md-4">
                                <div class="login-box shadow-lg p-4">
                                <h3>
                                    User Update Page
                                    </h3>
                                    <form action="" method="POST">
                                        <div class="form-group mb-3">
                                            <label class="form-label">User Name :</label>
                                            <input type="text" name="username" value="<?php echo $username?>" class="form-contorl">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Email :</label>
                                            <input type="email" name="email" value="<?php echo $email?>" class="form-contorl">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Phone :</label>
                                            <input type="text" name="phone" value="<?php echo $phone?>" class="form-contorl">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Password : </label>
                                            <input type="password" name="password" value="<?php echo $password?>" class="form-contorl">
                                        </div>
                                        <div class="form-group col-4 mx-auto mb-3">
                                            <input type="submit" value="Update" name="update" class="btn btn-outline-success form-contorl mx-auto ">
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php
                }
            }
            
        ?>


            <?php  updateUser(); ?>
  
<?php include "footer.php"?>