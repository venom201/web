<?php  
      
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "projetweb");  
      header('Content-Type: text/csv; charset=utf-8'); 
	 $filename ="Events" . date('Ymd') . ".csv";
      header('Content-Disposition: attachment; filename='.$filename);  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id', 'nom', 'date', 'fin', 'nbmax','description', 'image'));  
      $query = "SELECT * from event ORDER BY  id DESC";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>