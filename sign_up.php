
<!-- creat an signup form using HTML  -->
<form action="" method="post">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="text" name="phone" placeholder="Phone"><br>
    <input type="text" name="password" placeholder="Password"><br>
    <input type="submit" name="submit" value="Signup">
    <!-- <button><a href="log_in.php"></a>Log In</button> -->
</form>


<?php

/**************step 2:inclue the conection page in current page***********/
// iclude the db page inside of this page
include('db.php');

/*************  step 3: all the process while using submition time *************/

//if the event exicute on the submition 
if(isset($_POST['submit'])){

    // get input values from HTML old method
    // $name=$_POST['name']; this method get induvial values

/********** step 4: get input values using this method or another method ***********/

    // get input values from HTML new method
   extract($_POST);  //this method givs array collection
    
    
/************** step 5: write what we need in query then store this any variable like we using $sql **************/

//find if Email was already exist
$sql="SELECT *FROM userlist WHERE Email='$email'";


/**************step 6: injuct the query in database and store that result in result variable or another**************/

//injuct email exised status db and it was stored an result variable
$result=$database->query($sql);  //result is an object datatype
// print_r($result); 


/**************step 7: check exist (email)values there in db or not**************/

// if email is not exist any number of rows the condition has exicuted
    if($result->num_rows==0){

/**************step 8: store password in db using before it i'll never decrybtale**************/
        $en_password=md5($password); //this method using password can't decryptable
        
/**************step 9:write the injuction query and it will store in sql variable**************/

        // insert the row of input datas in database (injuction)
       $sql = "INSERT INTO `userlist` (`Name`, `Email`, `Phone`, `Password`) 
        VALUES ('$name', '$email', '$phone', '$en_password')";

/**************step 10: important! injuct the $sql in database and chechich the condition is not mantetry **************/
        //exicution status checking
        if($database->query($sql)===true){
            echo "New record created Successfully";

        }else{
            echo "$database->sql.'</br>'.$database->error";
        }

    } else{
        echo "Email already Exists";
    }

}

?>