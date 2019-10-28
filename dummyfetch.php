<?php
include 'config.php';
$sql = 'SELECT * FROM contact_form_info';
$result = $link->query($sql);
   echo'<table border="5px">
   <tr>
   	<th>Name:</th>
   	<th>Email:</th>
   	<th>Message</th>
   </tr>';
   while($row =  $result->fetch_assoc()) {
      echo "<tr><td>{$row['name']}</td>".
         "<td>{$row['email']}</td>".
         "<td>{$row['message']}</td></tr>";
   }
   echo '</table>';
   
   echo "Fetched data successfully\n";
   
   $link->close();
?>