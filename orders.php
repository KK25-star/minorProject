<h1>Orders</h1>
<table border:"10" style="width:100% ; float:center; font-family: 'Arial'; color:white; font-size:20px;">
 <tr>
   <th>Name</th>
   <th>MobNo</th>
   <th>Weight</th>
   <th>Destination</th>
   <th>Type</th>
 </tr>
 <?php

  $querys = "SELECT * FROM orders";
  $datas = mysqli_query($conn,$querys);
  $totalr = mysqli_num_rows($datas);
 if ($totalr!=0)
 {
   while (($resul = mysqli_fetch_assoc($datas)))
   {
     echo "
      <tr>
      <th>".$resul['Name']."</th>
      <th>".$resul['MobNo']."</th>
      <th>".$resul['Weight']."kg</th>
      <th>".$resul['Destination']."</th>
      <th>".$resul['Type']."</th>
      <th><a href='delete.php?name=$resul[Name]'>Delete</th>
      </tr>";
   }
 }
 ?>
</table>
