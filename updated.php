
<!DOCTYPE html>
<html lang="en">
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

<div class="container">

  <form action="insert.php" method="POST">


       <table class="t01">
      <?php   
      include 'admin/php-beginner-crud-level-1/configs/database.php';
  
        echo "<table class='table table-hover table-responsive table-bordered'>";//start table ?>

  <tr>
  <th>Clients</th>
  <th>WorkStatus</th>
  <th>Messages</th>
  <th>Submit</th>
  </tr>

  <tr>
    <div class="checkbox1">

 <!-- <td>  <label><input type="checkbox" name="client" value="Client 1">Client 1</label></td>-->
<td><input type="checkbox" name='client' value="Client3">Client1</td>
  <td>  <select name="workStatus" size ="2">
    <option name="workStatus">Accepted</option>
    <option name="workStatus">Rejected</option></select></td>

<td>  <textarea  name="messages"style="width:150px; height:50px;">
       </textarea></td>
 <td>  <button class="button" type="submit datetime-local" name="starttime">Send</button></td>

    </div>
  </tr>

  <tr>
    <div class="checkbox2">

  <td>  <label><input type="checkbox" name="client" value="Client 2">Client 2</label></td>
  <td>  <select name="workStatus" size ="2">
    <option name="workStatus">Accepted</option>
    <option name="workStatus">Rejected</option></select></td>

<td>  <textarea  name="messages"style="width:150px; height:50px;">
       </textarea></td>
 <td>  <button class="button" type="submit datetime-local" name="starttime">Send</button></td>

    </div>
  </tr>

  <tr>
    <div class="checkbox3">

  <td>  <label><input type="checkbox" name="client" value="Client 3">Client 3</label></td>
  <td>  <select name="workStatus" size ="2">
    <option name="workStatus">Accepted</option>
    <option name="workStatus">Rejected</option></select></td>

<td>  <textarea  name="messages"style="width:150px; height:50px;">
       </textarea></td>
 <td>  <button class="button" type="submit datetime-local" name="starttime">Send</button></td>

    </div>
  </tr>

    </table>

  </form>
</div>


</body>
</html>
