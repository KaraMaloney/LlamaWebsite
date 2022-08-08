<?php

function OpenDB(){
  //connects to Mysq
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";

  $conn = new mysqli($dbhost, $dbuser, $dbpass) or die("Connection failed: %s\n". $conn -> error);

  return $conn;
}

function createDB($conn){

    //creates database
  $dbname = "CREATE DATABASE assignment8";

  if($conn->query($dbname) == TRUE) {
    
  }else{
    echo "error creasting database: " . $conn->error;
  }

}

function deleteDB($conn){

  //Deletes Database if it exsists
  $query = "Drop database if exists assignment8";
    if($conn->query($query)) {
    }else{
      echo $conn->error;
    }

}

function createtable($conn){

  $sql = "CREATE TABLE assignment8.Items (
  ItemNumber INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Name VARCHAR(40),
  Type VARCHAR(40),
  Make VARCHAR(40),
  Model VARCHAR(40),
  Brand VARCHAR(40),
  Description VARCHAR(60))";

  if($conn->query($sql) === TRUE) {
  }else{
    echo $conn->error;
  }

}

function importdata($conn){

  $file = "input.csv";
  $handle = fopen($file,'r');
  $row = 1;

  while (($data = fgetcsv($handle, 10000, ",")) !== FALSE){

      IF($row == 1){$row++;continue;}

       $num = count($data);
       for ($c=0; $c < $num; $c++){
           $col[$c] = $data[$c];
       }

       $col2 = $data[1];
       $col3 = $data[2];
       $col4 = $data[3];
       $col5 = $data[4];
       $col6 = $data[5];
       $col7 = $data[6];


       // SQL Query to insert data into DataBase
       $query = "INSERT INTO assignment8.Items(Name,Type,Make,Model,Brand,Description) VALUES('".$col2."','".$col3."','".$col4."','".$col5."','".$col6."','".$col7."')";
       $conn->query($query);
  }
  fclose($handle);
}

function display($conn){
  $dont_show = false;
  $input = $_GET['search'] ?? "";

  if(!empty($input)){
  $sql = "SELECT * FROM assignment8.Items WHERE Model LIKE '%".$input."%'";

  if($result = mysqli_query($conn, $sql)){
      if(mysqli_num_rows($result) > 0){
          echo "<table id=list>";
              echo "<tr>";
                  echo "<th>ItemNumber</th>";
                  echo "<th>Name</th>";
                  echo "<th>Type</th>";
                  echo "<th>Make</th>";
                  echo "<th>Model</th>";
                  echo "<th>Brand</th>";
                  echo "<th>Description</th>";
              echo "</tr>";
          while($row = mysqli_fetch_array($result)){
              echo "<tr>";
                  echo "<td>" . $row['ItemNumber'] . "</td>";
                  echo "<td>" . $row['Name'] . "</td>";
                  echo "<td>" . $row['Type'] . "</td>";
                  echo "<td>" . $row['Make'] . "</td>";
                  echo "<td>" . $row['Model'] . "</td>";
                  echo "<td>" . $row['Brand'] . "</td>";
                  echo "<td>" . $row['Description'] . "</td>";
              echo "</tr>";
          }
          echo "</table>";
          // Free result set
          mysqli_free_result($result);
      } else{
          echo "No records matching your query were found.";
      }
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }

} else {

}


}

function CloseBD($conn){

  $conn -> close();
}

 ?>
