
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
        <th>Phone</th>
        <th>Income</th>
        <th>Qualification</th>
        <th>Proffesion</th>
        
      </tr>
    </thead>

    <?php
include('config.php');	


        $get_contact = "select * from contact";
    
$run_contact = mysqli_query($conn,$get_contact);

while($row_contact = mysqli_fetch_array($run_contact)){

    $id = $row_contact['id']; 

    $d=date("Y-m-d");
    
    $name = $row_contact['name'];
    
    $phone = $row_contact['phone'];

    $income = $row_contact['income'];
    
    $qualification = $row_contact['qualification'];
    
    $proff = $row_contact['proff'];

    
    
    
    echo "
    
    
    <tbody>
      <tr>
        <td>$id</td>
        <td>$d</td>
        <td>$name</td>
        <td>$phone</td>
        <td>$income</td>
        <td>$qualification</td>
        <td>$proff</td>
    
        
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




