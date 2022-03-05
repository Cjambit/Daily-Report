<?php

require 'config.php';
function db_connect() {

  try {
    $connectionString = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;   
		$user = DBUSER;    $pass = DBPASS; 

    $pdo = new PDO($connectionString, $user, $pass);   
	  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
	  return $pdo;  
  }
  catch (PDOException $e)
  {
    die($e->getMessage());
  }
}

// Handle form submission
function submit_report() 
{
  global $pdo;
  

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {

    if (isset($_POST['date']) && isset($_POST['firstName']) && isset($_POST['lastName'])&& isset($_POST['manager'])&& isset($_POST['contract'])&& isset($_POST['worksite'])&& isset($_POST['pli'])&& isset($_POST['sx'])&& isset($_POST['fdi'])&& isset($_POST['totalPlanted']))    
    {     
          global $string;
	        //PREPARED statement    
	        $sql = 'INSERT INTO reports (date, firstName, lastName, manager, contract, worksite, pli, sx, fdi, totalPlanted, safetyNotes) 	VALUES (:date, :firstName, :lastName, :manager, :contract, :worksite, :pli, :sx, :fdi, :totalPlanted, :safetyNotes)';      
          $statement = $pdo->prepare($sql);	
          // Prepare the submitted form data and insert it to the database
          $statement->bindValue(':date', $_POST['date']);		     
	        $statement->bindValue(':firstName', $_POST['firstName']);
          $statement->bindValue(':lastName', $_POST['lastName']);    
	        $statement->bindValue(':manager', $_POST['manager']); 
          $statement->bindValue(':contract', $_POST['contract']);
          $statement->bindValue(':worksite', $_POST['worksite']);
          $statement->bindValue(':pli', $_POST['pli']);
          $statement->bindValue(':sx', $_POST['sx']); 
          $statement->bindValue(':fdi', $_POST['fdi']); 
          $statement->bindValue(':totalPlanted', $_POST['totalPlanted']); 
          $statement->bindValue(':safetyNotes', $_POST['safetyNotes']);      
	        $statement->execute();  
            // Redirect back to report.php
          header('location: http://localhost/daily-report/index.php?page=report');  
    }
  
  }
}

// Get unique dates and store in $dates
function get_dates() {
  global $pdo;
  global $dates;

  $sql="SELECT DISTINCT date FROM reports
  ORDER BY ID DESC"; 
  $result =$pdo->query($sql);

  while ($row=$result->fetch()){
    $dates[]=$row;
	}
}

// Get all reports from database and store in $reports
function get_reports() {
  global $pdo;
  global $reports;
	
  $sql="SELECT*FROM reports
  ORDER BY DATE DESC"; 
  $result =$pdo->query($sql);

  //for (i=$row; $row=$result->fetch()){
  while ($row=$result->fetch()){
    $reports[]=$row;
	}
}

// Get unique lastName and store in $commenters
function get_commenters() {
  global $pdo;
  global $commenters;

  //TODO
  $sql="SELECT DISTINCT lastName, firstName FROM reports
  ORDER BY ID DESC"; 
  $result =$pdo->query($sql);

  while ($row=$result->fetch()){
    $commenters[]=$row;
	}
}

