<?php
   include 'connect.php';
   header('Content-Type: application/json');
   $sql="SELECT * FROM test_lost";
   $results=mysql_query($sql);
   $json_array=array();
   
   while ($row = mysql_fetch_row($results)) 
   {
   	 $id = $row[0];
   	 $name = $row[1];
   	 $gender = $row[2];
   	 $age = $row[3];
       $date=$row[4];
       $description=$row[5];
       $parent_name=$row[6];
       $parent_contact=$row[7];
       $imgUrl=$row[8];
   	 $json_array[]=array("id"=>$id,"name"=>$name, "gender"=>$gender, "age"=>$age, 
         "date"=>$date, "description"=>$description, "parent_name"=>$parent_name, 
         "parent_contact"=>$parent_contact,"imgUrl"=>$imgUrl);
   }
  echo json_encode($json_array);
?>