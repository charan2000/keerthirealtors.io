
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
   <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Date</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Location</th>
        <th>Property Type</th>
        <th>Maximum Price</th>
        <th>Minimum Price</th>
        <th>Description</th>
        
        
      </tr>
    </thead>

    <?php
include('config.php');	


        $get_contact = "select * from customer";
    
$run_contact = mysqli_query($conn,$get_contact);

while($row_contact = mysqli_fetch_array($run_contact)){

    $id = $row_contact['id'];
    
    $d=date("Y-m-d");
    
    $name = $row_contact['name'];
    
    $mail = $row_contact['mail'];

    $phone = $row_contact['phone'];
    
    $location = $row_contact['location'];
    
    $propertytype = $row_contact['propertytype'];

    $minprice = $row_contact['minprice'];
    
    $maxprice = $row_contact['maxprice'];

    $dddd = $row_contact['description'];


    
    
    
    echo "
    
    
    <tbody>
      <tr>
        <td>$id</td>
        <td>$d</td>
        <td>$name</td>
        <td>$mail</td>
        <td>$phone</td>
        <td>$location</td>
        <td>$propertytype</td>
        <td>$minprice</td>
        <td>$maxprice</td>
        <td>$dddd</td>
    
    
        
      </tr>
    </tbody>
  

    ";


    }
    
?>
    
  </table>
  </div>
</div>

</body>
</html>




