<?php
        $connect=mysql_connect("localhost","root","code4good") or die("Unable to Connect");
        mysql_select_db("trail") or die("Could not open the db");
        $showtablequery="SHOW TABLES FROM trail";
        $query_result=mysql_query($showtablequery);
        while($showtablerow = mysql_fetch_array($query_result))
        {
        echo $showtablerow[0]." ";
        } 
        ?>