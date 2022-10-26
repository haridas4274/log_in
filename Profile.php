<!-- this is final result page or main page, log in condition If success this age will open -->

<table border=1>
    <tr>
        <td>S.no</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
    </tr>
<?php
/**************step 19: include the database page in the current page **************/
include('db.php');

/**************step 20: write the query of select what we want in db**************/

//note: name should be same in batabase name
//select what only  we need from db
$sql = "SELECT ID,Name,Email,Phone FROM userlist";


/**************injuct the sql in database and keep it on the result variable**************/

// sql code inject to the database
$result=$database->query($sql);
// print_r($result);

/**************step 22:important! fetch the values from db and it has store an row variable**************/

//get the result values using while loop
while($row=$result->fetch_assoc()) {
    // datas fetch from db and it has stored to row variable

/**************print the tow in table tow **************/
    echo  "<tr>
            <td> ".$row['ID']."</td>
            <td> ".$row['Name']."</td>
            <td> ".$row['Email']."</td>
            <td> ".$row['Phone']."</td>
         </tr>";
}

?>
</table>

