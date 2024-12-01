<?php
include('config.php');

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $location =  $_POST['location'];
    
    $sel3 = $_POST['sel3'];
    $sel4 =  $_POST['sel4'];
    $sel5 =  $_POST['sel5'];

    $sel6 =  $_POST['desc'];

    $d=date("Y-m-d");
    
    
    
    
    
    
    
    
    $insert = "INSERT INTO customer(name,mail,phone,location,propertytype,minprice,maxprice,description)
    VALUES ('$name','$mail','$phone','$location','$sel3','$sel4','$sel5','$sel6')";
    
    if ($conn->query($insert) === TRUE) {
      echo "<script>alert('Thank You for Contact us We will call back you....!')</script>";
      echo "<script>window.open('../customer.html','_self')</script>";
      
        
    } else {
    
      echo "<script>alert('Something Went Wrong. please contact Admin....!')</script>";
        
    
    }
    
    $conn->close();
    
    }
    
?>