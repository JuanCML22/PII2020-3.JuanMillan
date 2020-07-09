<?php

$hostname = "127.0.0.1";
$hostuser = "root";
$hostpass = "";
$database = "univa";

$connection = mysqli_connect($hostname,$hostuser,$hostpass,$database);

if($connection){
   // echo "Terrific, You are connected!";
   $sqlquery  = "SELECT * FROM users;";
   $result = mysqli_query($connection, $sqlquery);
   //var_dump($result);
   if(mysqli_num_rows($result) > 0){
       while($row = mysqli_fetch_assoc($result)){
            //echo "Id: ".$row['id']." - Name: ".$row['name']."</br>";
            
            $user_email = $_GET['user_name'];
            $user_password = $_GET['user_password'];

            if ($row['email'] == $user_email && $row['password'] ==$user_password) {
                echo "Email found";
            } else {
                # code...
            }
            
       }
            
   }else{
        echo "Empty table";
   }


}else{
    echo "Sorry dude, you are NOT connected";
}




/*
if($user_email == 'juan@git.com' && $user_password == '123456'){
    echo "Welcome " .$user_email;
}else{
    echo "User email or password incorrect";
}
*/

?>