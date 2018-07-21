
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
  <?php
    $servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
if (!$conn->connect_error) {
    $result = mysqli_query($con,"SELECT * FROM student_registered;");

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
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            &nbsp&nbsp&nbsp
           
          </div>


          <h2>Section title</h2>

    echo "<table id="myTable" class="table table-striped" > 
<thead>  
          <tr>  
            <th>Name</th>  
            <th>State</th>  
            <th>City</th>  
            <th>Contact No</th>  
            <th>Assets Valuation</th> 
            <th>Details</th> 
            <th>Approve</th> 
          </tr>  
        </thead> ";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['contact_no'] . "</td>";
echo "<td>" . $row['assets_range'] . "</td>";
echo <td><a href="#">View Details</a></td>;
echo <td> <input type="checkbox"></td>;
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
} 
  ?>
    <!-- <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
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
                  Dashboard <span class="sr-only">(current)</span>
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
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            &nbsp&nbsp&nbsp
           
          </div>


          <h2>Section title</h2> -->
          <!-- <div class="table-responsive">
            <table id="myTable" class="table table-striped" >  
        <thead>  
          <tr>  
            <th>Name</th>  
            <th>State</th>  
            <th>City</th>  
            <th>Contact No</th>  
            <th>Assets Valuation</th> 
            <th>Details</th> 
            <th>Approve</th> 
          </tr>  
        </thead>  
        <tbody>  
          <tr>   
            <td>Anusha</td>  
            <td>Maharashtra</td>  
            <td>Mumbai</td> 
            <td>8346278290</td>  
            <td>10000</td>
            <td><a href="#">View Details</a></td>
            <td><input type="checkbox"</td>   
          </tr>  
          <tr>   
            <td>Anusha</td>  
            <td>Maharashtra</td>  
            <td>Mumbai</td> 
            <td>8346278290</td>  
            <td>10000</td>
            <td><a href="#">View Details</a></td>
            <td><input type="checkbox"</td>   
          </tr>   
          <tr>   
            <td>Anusha</td>  
            <td>Maharashtra</td>  
            <td>Mumbai</td> 
            <td>8346278290</td>  
            <td>10000</td>
            <td><a href="#">View Details</a></td>
            <td><input type="checkbox"</td>   
          </tr>  
       <tr>   
            <td>Anusha</td>  
            <td>Maharashtra</td>  
            <td>Mumbai</td> 
            <td>8346278290</td>  
            <td>10000</td>
            <td><a href="#">View Details</a></td>
            <td><input type="checkbox"</td>   
          </tr>    
          <tr>   
            <td>Anusha</td>  
            <td>Maharashtra</td>  
            <td>Mumbai</td> 
            <td>8346278290</td>  
            <td>10000</td>
            <td><a href="#">View Details</a></td>
            <td><input type="checkbox"</td>   
          </tr>  
          <tr>   
            <td>Anusha</td>  
            <td>Maharashtra</td>  
            <td>Mumbai</td> 
            <td>8346278290</td>  
            <td>10000</td>
            <td><a href="#">View Details</a></td>
            <td><input type="checkbox"</td>   
          </tr>  
      
       <tr>   
            <td>Anusha</td>  
            <td>Maharashtra</td>  
            <td>Mumbai</td> 
            <td>8346278290</td>  
            <td>10000</td>
            <td><a href="#">View Details</a></td>
            <td><input type="checkbox"</td>   
          </tr>   
          <tr>   
            <td>Anusha</td>  
            <td>Maharashtra</td>  
            <td>Mumbai</td> 
            <td>8346278290</td>  
            <td>10000</td>
            <td><a href="#">View Details</a></td>
            <td><input type="checkbox"</td>   
          </tr>   
          <tr>   
            <td>Anusha</td>  
            <td>Maharashtra</td>  
            <td>Mumbai</td> 
            <td>8346278290</td>  
            <td>10000</td>
            <td><a href="#">View Details</a></td>
            <td><input type="checkbox"</td>   
          </tr>  
      
        <tr>   
            <td>Anusha</td>  
            <td>Maharashtra</td>  
            <td>Mumbai</td> 
            <td>8346278290</td>  
            <td>10000</td>
            <td><a href="#">View Details</a></td>
            <td><input type="checkbox"</td>   
          </tr>  
          <tr>   
            <td>Anusha</td>  
            <td>Maharashtra</td>  
            <td>Mumbai</td> 
            <td>8346278290</td>  
            <td>10000</td>
            <td><a href="#">View Details</a></td>
            <td><input type="checkbox"</td>   
          </tr>  
         <tr>   
            <td>Anusha</td>  
            <td>Maharashtra</td>  
            <td>Mumbai</td> 
            <td>8346278290</td>  
            <td>10000</td>
            <td><a href="#">View Details</a></td>
            <td><input type="checkbox"</td>   
          </tr>  
        </tbody>  
      </table>  
    </div> -->
  </body>
  <script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>
