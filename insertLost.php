<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require 'connect.php';




if (isset($_POST["name"])) 
{extract($_POST);
	//mysql_select_db("Lost_kid");
	$sql="INSERT INTO test_lost values('','$name','$optradio','$age','$date','$description',	'$parent_name','$parent_contact')";
	$res=@mysql_query($sql)or die(mysql_error());;
		//
	if($res)
	{
        echo "Success";
	}
	else
	{
		echo "Failed";
	}
}
else{
	//header("location:index.php");
	echo "No data sent";
}
?>