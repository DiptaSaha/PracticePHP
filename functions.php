<?php

function createUser(){
            
            if (isset($_POST['register'])) {
                global $connection;
               $username    = $_POST['username'];
               $email       = $_POST['email'];
               $phone       = $_POST['phone']; 
               $password    = $_POST['password'];
               $hassedPass=sha1($password);
               $query= "INSERT INTO user(username, email, phone, password) VALUES ('$username','$email','$phone','$hassedPass')";
               $create_new_user= mysqli_query($connection,$query);
               if (!$create_new_user) {
                   die("Query Failed".mysqli_errno($connection));
               }
               else{
                header("Location:index.php");
                 }
            }     
}
           
function deleteUser(){
    global $connection;
    if (isset($_GET['delete'])) {
        $user_id=$_GET['delete'];
        $query="DELETE FROM user WHERE user_id ='$user_id'";

        $delete_query= mysqli_query($connection,$query);
        header("Location:index.php");
    }
}
function updateUser(){
    global $connection;
    if (isset($_POST['update'])) {
               
        $username    = $_POST['username'];
        $email       = $_POST['email'];
        $phone       = $_POST['phone']; 
        $password    = $_POST['password'];
        $hassedPass=sha1($password);

        $query ="UPDATE user SET username='$username',email='$email',phone='$phone',password='$hassedPass' WHERE user_id='$user_id'";

        $update_query=mysqli_query($connection,$query);

        if (!$update_query) {
            die("Update Faild!".mysqli_error($connection));
        }
        else {
            header("location:index.php");
        }
    }
}
       

?>