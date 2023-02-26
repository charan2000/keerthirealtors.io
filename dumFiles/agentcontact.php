<?php
include('config.php');

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $income = $_POST['income'];
    $qualification =  $_POST['qualification'];
    $proff =  $_POST['proff'];
    
    
    
    
    
    
    $insert = "INSERT INTO contact(name,phone,income,qualification,proff)
    VALUES ('$name','$phone','$income','$qualification','$proff')";
    
    if ($conn->query($insert) === TRUE) {
      echo "<script>alert('Thank You for Contact us We will call back you....!')</script>";
      echo "<script>window.open('../agent.html','_self')</script>";
      
        
    } else {
    
      echo "<script>alert('Something Went Wrong. please contact Admin....!')</script>";
        
    
    }
    
    $conn->close();
    
    }
    
?>