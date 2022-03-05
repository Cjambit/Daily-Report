<!-- Christopher Merpaw 2030 Project -->
<!-- 100375435-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Daily Report</title>
    <link rel="stylesheet" href="/DAILY-REPORT/styles.css?v=<?php echo time(); ?>">
  </head>
  <body>
    
    <!-- //menu -->
    <div class="menu">
    <?php 
    $items=array("home", "report", "summary", "documentation");
    foreach ($items as $item)
    {
        if(isset($_GET['page']) && $_GET['page']==$item)
        {
            echo '<a href"?page=' . $item .'"><span class="highlight">' . $item . '</span></a></br>';
            $activePage =$item . ".php";
        }
        else
        {
            echo '<a href="?page=' . $item . '">' . $item . '</a></br>';
        }
    }
    ?></div><?php
    //home page
    if (isset($activePage))
    {
        include $activePage;
    }
    else
    {
        include "home.php";
    }
    
?>
    <footer class="footer">
    </footer
    <?php
      // the_comments();
      // the_commenters();
     ?> ?>
 </body>
</html>