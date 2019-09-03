
<!DOCTYPE HTML>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="ordersStyle.css">
  <link href="https://fonts.googleapis.com/css?family=Cookie|Josefin+Slab&display=swap" rel="stylesheet">
</head>

  <style>
    table {
  width:100%;

}
body{
  padding: 10px 20px 20px 20px;
  margin: 10px;
}
table, th, td {
  border: 1px solid #D8D6D0;
  border-collapse: collapse;
  padding: 15px;
  width: 10%;
}
th, td {
  padding: 5px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: #85DCB;
  color: white;
}
</style>
<body>

    <!-- container -->
    <div class="container ">
  
       
     
        <!-- PHP code to read records will be here -->
        <?php
// include database connection
include 'admin/php-beginner-crud-level-1/configs/database.php';

include_once'insert.php';

 
// delete message prompt will be here

 
// select all data
$query = "SELECT id, client,address,starttime FROM storage ORDER BY id DESC";
$stmt = $con->prepare($query);
$stmt->execute();
 
// this is how to get number of rows returned
$num = $stmt->rowCount();
 
// link to create record form
 
//check if more than 0 record found
if($num>0){
 
    // data from database will be here
     echo "<table class='table table-hover table-responsive table-bordered'>";//start table
 
    //creating our table heading
    echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Client</th>";
        echo "<th>Address</th>";
        /*echo "<th>Status</th>";
        echo"<th>Extra Info</th>";*/
        echo"<th> Action</th>";

    echo "</tr>";
     
    // table body will be here
    // retrieve our table contents
// fetch() is faster than fetchAll()
// http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    // extract row
    // this will make $row['firstname'] to
    // just $firstname only
    extract($row);
     
    // creating new table row per record
    echo "<tr>";
        echo "<td>{$id}</td>";
        echo "<td>{$client}</td>";
        echo "<td>{$address}</td>";
        echo "<td>";
            // read one record 
             
            // we will use this links on next part of this post
         echo "<button type='submit datetime-local' class='btn btn-primary m-r-1em button' name='starttime'>Send</button>";
 
               // we will use this links on next part of this post
          echo "</td>";
      echo "</tr>";
}
 
// end table
echo "</table>";
}
 
// if no records found
else{
    echo "<div class='alert alert-danger'>No records found.</div>";
}
?>
         
    </div> <!-- end .container -->
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->

 
<!-- confirm delete record will be here -->

</body>
</html>