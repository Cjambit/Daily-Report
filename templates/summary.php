<!-- Christopher Merpaw 2030 Project -->
<!-- 100375435-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Reports</title>
    <link rel="stylesheet" href="/DAILY-REPORT/styles.css?v=<?php echo time(); ?>">
    
  </head>
  <body>
    <div class="page-container">
        <div class="header">
            <h1>Summary of Reports</h1>
            <h2>Select a date to expand reports</h2>
        </div>
        <div class="summary-card">
            <div class="column"><?php
                the_dates();
            ?>
            </div>
        </div>
    </div>
  </body>
</html>