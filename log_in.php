 <!-- creat an log in inputs -->
<form action="" method="post">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="password" placeholder="password">
    <input type="submit" name="login" value="Login">
    <!-- <button><a href="sign_up.php">Sign Up</a></button> -->
</form>

<?php

/**************step 11:include the connection page in current page**************/
//include the dp page in this page
include('db.php');


/**************step 12: this proccess only execution while log in **************/
if (isset($_POST['login'])) {
    //get the values using extract method

/**************step 13: get the log in input values using extract method or another method**************/
    extract($_POST);


/**************step 15: set password to database in encripted type**************/
    // encrypt the password
    $en_password = md5($password); //this method not abile to decriptable

/************** step 16:write the query to check the email and password was already exist in database or not**************/

    //check the exist values of email and password from the database 
    $sql = "SELECT  * FROM userlist WHERE email='$email' AND password='$en_password'";


/**************step 17:injuct the sql to database and keep it on in result variable**************/
    //set the $sql in database...and it has stored in result variable
    $result = $dadabase->query($sql);

/**************step 18: check the email and password existing  condition conditin has true then go to the main page  **************/

    //email and already exist in num of rows this statement has exicuted
    if ($result->num_rows == 1) {
        //   email and password already exist in db then profile.php page has ebile to open
        header("location:profile.php");
    }else{
        echo "Not Exist your Account sign up first"
    }
}

?>