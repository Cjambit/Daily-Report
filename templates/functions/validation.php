<?php
// Global result of form validation
$valid = true;

// Global array of validation messages. For valid fields, message is ""
$val_messages = Array("date"=>"", "firstName"=>"", "lastName"=>"", "manager"=>"","contract"=>"", "worksite"=>"", "pli"=>"", "sx"=>"","fdi"=>"", "totalPlanted"=>"", "safetyNotes"=>"");

// Output the results if all fields are valid.
function the_results()
{
  global $valid;

    
?>
  <div class="results">
    <p class="result-text">
</div>
<?php 
}  
 

function validate()
  {
      global $valid;
      global $val_messages;
      

      if($_SERVER['REQUEST_METHOD']== 'POST')
      {
        //validate to regualar expressions
        $date='#^\d{4}-\d{2}-\d{2}$#';
        if(!preg_match($date, $_POST['date'])){
          $valid=false;
          $val_messages['date']="Please enter a valid date in the format yyyy-mm-dd";
        }
        $firstName= '#^[a-zA-Z]+$#'; 
        if(!preg_match($firstName, $_POST['firstName'])){
          $valid=false;
          $val_messages['firstName']="Please enter a valid first name";
        }
        $lastName= '#^[a-zA-Z]+$#'; 
        if(!preg_match($lastName, $_POST['lastName'])){
          $valid=false;
          $val_messages['lastName']="Please enter a valid last name";
        }
        $manager= '#^[a-zA-Z]+$#'; 
        if(!preg_match($manager, $_POST['manager'])){
          $valid=false;
          $val_messages['manager']="Please enter a valid manager name";
        }
        $contract= '#^[a-zA-Z]+$#'; 
        if(!preg_match($contract, $_POST['contract'])){
          $valid=false;
          $val_messages['contract']="Please enter a valid contract title";
        }
        $worksite= '#^[a-zA-Z]+$#'; 
        if(!preg_match($worksite, $_POST['worksite'])){
          $valid=false;
          $val_messages['worksite']="Please enter a valid worksite title";
        }
        //validation by only ints
        $pli= '#^[0-9]+$#'; 
        if(!preg_match($pli, $_POST['pli'])){
          $valid=false;
          $val_messages['pli']="Please enter an integer value. If 0 enter 0!";
        }
        $sx= '#^[0-9]+$#'; 
        if(!preg_match($sx, $_POST['sx'])){
          $valid=false;
          $val_messages['sx']="Please enter an integer value. If 0 enter 0!";
        }
        $fdi= '#^[0-9]+$#'; 
        if(!preg_match($fdi, $_POST['fdi'])){
          $valid=false;
          $val_messages['fdi']="Please enter an integer value. If 0 enter 0!";
        }
        $totalPlanted= '#^[0-9]+$#'; 
        if(!preg_match($totalPlanted, $_POST['totalPlanted'])){
          $valid=false;
          $val_messages['totalPlanted']="Please enter an integer value. If 0 enter 0!";
        }
        //safetynotes are optional. no validation required.
      }
  }

// Display error message if field not valid. Displays nothing if the field is valid.
function the_validation_message($type) {

  global $val_messages;
  global $valid;
  if($_SERVER['REQUEST_METHOD']== 'POST')
  {
    if(!$valid){
        
        ?><span class="failure-message">
        <?php
        echo $val_messages[$type];
        ?>
        </span>
        <?php
      }
  }
}
?>

