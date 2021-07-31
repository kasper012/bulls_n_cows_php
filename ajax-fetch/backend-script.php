<?php


include("database.php");
$db=$conn;
// fetch query
function fetch_data(){
 global $db;
  $query="SELECT * from usertable ORDER BY id ASC";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
$fetchData= fetch_data();
show_data($fetchData);

function show_data($fetchData){
  // $count = 15;
  // $values = range(0,9);
  // shuffle($values);
  // array_slice($values, 0,4);
  
  
 echo '<table border="2">
        <tr>
            <th>№</th>
            <th>Full Name</th>
            <th>Result</th>
        </tr>';

 if(count($fetchData)>0){
      $sn=1;
      foreach($fetchData as $data){ 

  echo "<tr>
          <td>".$sn."</td>
          <td>".$data['fullName']."</td>
   </tr>";
       
  $sn++; 
     }
}else{
     
  echo "<tr>
        <td colspan='2'>No Data Found</td>
       </tr>"; 
}
  echo "</table>";
}

?>