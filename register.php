<?php include "db.php"?>
<?php include "header.php"?>
<?php include "functions.php"?>

      
<?php createUser();?>

<section class="login-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
               <div class="login-box shadow-lg p-4">
               <h3> Register Page</h3>
                <form action="" method="POST">
                    <div class="form-group mb-3">
                        <label class="form-label">User Name :</label>
                        <input type="text" name="username" id="" class="form-contorl">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Email :</label>
                        <input type="email" name="email" id="" class="form-contorl">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Phone :</label>
                        <input type="text" name="phone" id="" class="form-contorl">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Password : </label>
                        <input type="password" name="password" id="" class="form-contorl">
                    </div>
                    <div class="form-group col-4 mx-auto mb-3">
                        <input type="submit" value="Register" name="register" class="btn btn-outline-success form-contorl mx-auto ">
                    </div>
                </form>
               </div>
            </div>
        </div>
    </div>
</section>
  
<?php include "footer.php"?>

