<?php
// Output comments to HTML
function the_reports(){
  global $reports;
  $count=50;
  
?>
  <h2>reports</h2>
<?php
foreach($reports as $row){
  ?> 
    <li id="expand" onclick="expand_report<?php echo $count ?>()">
  <?php 
    echo $row['date'] .'<div id="' . $count .'"></div>';
    echo '<script>
    function expand_report' . $count . '() {
        var newReport = "'
      ?> 
      <div class="comment">
        <h3 class="ID">report ID: 
          <?php echo $row['lastName'];?>
        </h3>
        <div class="date"> 
          <?php echo $row['firstName'];?>
        </div>
          <h3> Contract: <?php echo $row['contract'];?></h3>
          <p> Worksite: <?php echo $row['worksite'];?></p>
          <p> Pine Planted: <?php echo $row['pli'];?></p>
          <p> Spruce Planted: <?php echo $row['sx'];?></p>
          <p> Fir Planted: <?php echo $row['fdi'];?></p>
          <p> Total Trees Planted: <?php echo $row['totalPlanted'];?></p>
        <div class="comment-text">  <?php echo $row['safetyNotes'];?></div>
      </div>
      <?php
       echo '";
        document.getElementById("' . $count . '").innerHTML = newReport;
      
    }
    </script>';
    $count=$count+1;
?> 
  </li>

  <?php 
  }
}

//Output unique dates 
function the_dates() {
  //global $dates;
  global $reports;
  $count=1;
?>
  <div class="inner-summary">
    <h2>Report Dates:</h2>
    <div>
      <ul>
  <?php
      foreach($reports as $row){
       
        ?><li id="expand" onclick="expand_summary<?php echo $count ?>()">
    
        <?php echo  '<h3>' .$row['date'] . '&nbsp;&nbsp;&nbsp;' . $row['lastName'] . '&nbsp;&nbsp;&nbsp;' . $row['firstName'] . '</h3>' .'<div id="' . $count .'"></div>';
        echo '<script>
          function expand_summary' . $count . '() {
              var newText = "'. '<h4>Pine Planted: ' . $row['pli'] . '</h4><h4>Spruce Planted: ' . $row['sx'] . '</h4><h4>Fir planted: ' . $row['fdi'] . '</h4><h4>Total Planted Trees: ' .
              $row['totalPlanted'] . '<p>Conrtract: ' . $row['contract'] . '</p><p> Worksite: ' . $row['worksite'] . '</p><p>Manager: ' . $row['manager'] . '</p>' .
              '<p> Safety Notes:'. $row['safetyNotes'] .'</p>' . '";
              //document.getElementById("expand").style.color = "red";
              document.getElementById("' . $count . '").innerHTML = newText;
            
          }
        </script></li>';
        $count=$count+1;


      }
  ?> 
    </ul>
  </div>
  <?php
  
}
?> 
    </div>
<?php

