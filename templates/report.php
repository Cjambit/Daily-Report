<!-- Christopher Merpaw 2030 Project -->
<!-- 100375435-->

 <?php	
    // require_once('index.php');
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	require_once('functions/validation.php');

	validate();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Reports</title>
    <link rel="stylesheet" href="/DAILY-REPORT/styles.css?v=<?php echo time(); ?>">
    <script src="jquery-validation-1.19.3/lib/jquery.js"></script>
    <script src="jquery-validation-1.19.3/dist/jquery.validate.js"></script>
    <script src="../function.js"></script>
    
   
    <script>
	  $(function() {
      $("form").validate({
        //Define Client-Side Validation Rules
        rules: {
          date: {
            required: true,
            date: true
          },
          firstName: {
            required: true,
          },
          lastName: {
            required: true,
          },
          manager: {
            required: true,
          },
          contract: {
            required: true,
          },
          worksite: {
            required: true,
          },
          pli: {
            required: true,
          },
          sx: {
            required: true,
          },
          fdi: {
            required: true,
          },
          totalPlanted: {
            required: true,
          }, 
		},
    
        // Define client-side validation error messages  
        messages: {
          email: {
            required: "Please provide an email",
            email: "Please enter a valid email address"
			},
		    date: {
            required: "Please provide a date",
            dateISO: "Date must be in ISO format"
            },
            firstName: {
            required: "Please provide a first name",
            },
            lastName: {
            required: "Please provide a last name",
            },
            manager: {
            required: "Please provide the name of your manager",
            },
            contract: {
            required: "Please provide the name of the current contract",
            },
            worksite: {
            required: "Please provide the name of the worksite",
            },
            pli: {
            required: "Please provide the number of pine planted. If 0, input 0!",
            },
            sx: {
            required: "Please provide the number of spruce planted. If 0, input 0!",
            },
            fdi: {
            required: "Please provide the number of fir planted. If 0, input 0!",
            },
            totalPlanted: {
            required: "Please input the number of total planted trees. If 0, input 0!",
            }
        },
		
		 
		 //submit the form if there are no errors 
      submitHandler: function(form) {
          form.submit();
        }
	  });
    });
	</script>

  </head>
  <body>
    
    <h1>Reports</h1>

    <div class="write-comment">
        <h2>Complete Daily Worker Report</h2>

        <form action="http://localhost/daily-report/index.php" method="post">
            <!-- <form action="http://localhost/daily-report/templates/report.php" method="post"> -->
                <div class="content">
                    <label>Date:</label>
                        <input type="date" id="date" name="date" value="date">
                        <?php the_validation_message("date"); ?>
                    <label>Last Name: </label>
                        <input type="text" id="lastName" name="lastName" >
                        <?php the_validation_message("lastName"); ?>
                    <label>First Name:
                        <input type="text" id="firstName" name="firstName" >
                        <?php the_validation_message("firstName"); ?>
                    </label>
                    <label>Manager:
                        <input type="text" id="manager" name="manager" >
                        <?php the_validation_message("manager"); ?>
                    </label>
                    <label>Contract:
                        <input type="text" id="contract" name="contract" >
                        <?php the_validation_message("contract"); ?>
                    </label>
                    <label>Worksite:
                        <input type="text" id="worksite" name="worksite" >
                        <?php the_validation_message("worksite"); ?>
                    </label>
                    <label>Pine Planted:
                        <input type="number" id="pli" name="pli" >
                        <?php the_validation_message("pli"); ?>
                    </label>
                    <label>Spruce Planted:
                        <input type="number" id="sx" name="sx" >
                        <?php the_validation_message("sx"); ?>
                    </label>
                    <label>Fir Planted:
                        <input type="number" id="fdi" name="fdi" >
                        <?php the_validation_message("fdi"); ?>
                    </label>
                    <label>Total Planted:
                        <input type="number" id="totalPlanted" name="totalPlanted" >
                        <?php the_validation_message("totalPlanted"); ?>
                    </label>
                </div>
                <div class="notes">
                    <label for="safetyNotes">Safety Notes:</label>
                        <textarea id="safetyNotes" name="safetyNotes" rows="5" cols="50"></textarea>
                        <button type="submit" name="button">Submit Report</button>
                </div>
            </ul>
        </form>
    </div>
    <?php
     ?>
  </body>
</html>