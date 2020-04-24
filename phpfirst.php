<?php 
	if(!($connection = mysql.connect("localhost","root","")))
        {
           	die("could not connect...");
        }
	else {
        if(!(mysql_select_db("regisandlogin",$connection)))
        {
         	die("Error".mysql_errno().":".$connection);
        }
	else {
		$query = "insert into registered values("vittanala Pavan","vittanalapavan","pavan2002","18341A05G7","19-06-2001","student","9381449331","vittanala2002@gmail.com:)";	
		$result = mysql_query($query,$connection);
		echo $result;
	
	}
	}
	

	?>