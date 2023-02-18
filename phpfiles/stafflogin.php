

<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <style>
  form
  
  {
          background: rgb(230, 236, 243,0.3);
    padding: 20px;

  }
  lable
  {
      color:white;
  }
  </style>
  
</head>

<body >


<div class="" style="background-image: url(images/bg.jpg);height: 100%;width: 100%;  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;">

 
 
      <div class="container">
          
          <div class="row" style="padding-top:20%">
              <div class="col-md-4 col-sm-6 col-xs-10">
                  &nbsp;
              </div>
              <div class="col-md-4">
                  
                  <div class="form" style="width:100%;background:rgb(236, 11, 11, 0.84);">
                                     <h2 style="color:white;text-align:center;padding:20px">Admin Login</h2>
                                    </div>
                  <form action="adminlogin.php" method="POST" role="form" >
  

    <div class="form-group" >
        <label for="un" style="color:white;font-weight:bold">Admin username</label>
        <input type="text" name="un" class="form-control" 
        id="un" placeholder="Enter Username" required>
    </div>

    <div class="form-group">
        <label for="pass" style="color:white;font-weight:bold">Password</label>
        <input type="password" class="form-control" 
        id="pass" name="pass" placeholder="Enter Password" required>
    </div>


    

    <button type="submit" name="submit"  class="btn btn-dark form-control"><b>Submit</b></button>
</form>

              </div>
              
              <div class="col-md-4">
                     &nbsp;
              </div>
              
          </div>
   

</div>



    

  </div>




    
</body>


</html>