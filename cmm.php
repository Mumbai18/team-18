
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Login </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>

  <body>

      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Jain Social Group Educon</a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                   <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="file:///C:/Users/Priyanka/Documents/GitHub/team-18/goecharts1.html">
                  <span data-feather="file"></span>
                Jain Social Group Educon Reports
                </a>
              </li>
              
            </ul>

           
            
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            &nbsp&nbsp&nbsp
           
          

          <h2>Committee Member XYZ</h2>

  <div class="col-lg-12">
   <form action="./ccmmainpage.php" method="POST">
<?php
    $servername = "13.229.106.42";
$username = "root";
$password = "team18";

// Create connection
$conn = new mysqli($servername, $username, $password, "educon");
if (!$conn->connect_error) {
    $result = mysqli_query($conn,"SELECT * FROM student_registered WHERE status=1");
 ?>
    <table id="myTable" class="table table-striped" > 
      
<thead>  
          <tr>
          <th>ID</th>  
            <th>Name</th>  
            <th>State</th>  
            <th>City</th>  
            <th>Contact No</th>  
           
        </thead> 
<?php
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['s_id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['contact_no'] . "</td>";

echo "</tr>";
}
?>
</table>

<?php
mysqli_close($conn);
} 
  ?>
  
  </div> 
  </body>
  <script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>
