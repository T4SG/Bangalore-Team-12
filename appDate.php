<html>
   <head>
      <title>approaching due date</title>
   </head>
	
   <body>
      <?php
         date_default_timezone_set("Asia/Kolkata");
         $tod = date("d/m/Y");
         $due = date_create("26/7/2015");
         $diff=(int)date_diff($due,$tod);
         if($diff<2)
         echo "you there!!!!";
      ?>
   </body>
	
</html>
