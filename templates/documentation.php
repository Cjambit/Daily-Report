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
    <div class="container">
      <h1>Documentation</h1>
      <h2>Directions for Use:</h2>
      <div class="user-guide">
      <p> The purpose of this web application is to provide contractors in the Canadian Forestry Industry a tool for employees to report their daily production cards. Arriving on the home page, employees can select the report tab to start filing their daily report. On this tab, they will find a form to provide the following information:</p>
      <ul>
        <li>-- The day's date --</li>
        <li>-- First Name --</li>
        <li>-- Last Name --</li>
        <li>-- Their Manager's Name --</li>
        <li>-- The Name of the Contract currently being completed --</li>
        <li>-- The Name of the specific Workstite --</li>
        <li>-- The total number of pine trees they planted --</li>
        <li>-- The total number of fir trees they planted --</li>
        <li>-- The total number of spruce trees they planted --</li>
        <li>-- The total number of all trees planted for that date --</li>
        <li>-- Any safety notes to be reported and passed to management --</li>
      </ul> 
      <br />
      <p>The reported data is stored in an SQL database and retrieved for review in the Summary tab. Here the viewere can scan for a work date and an employee name. When clicking on the employee name and date within this dynamically rendered list, a collapsing summary report appears for the associated entry. This is rendered with the use of a javascript DOM manipulation which is inserted by the php rednering. I was not sure how to do this from the course material so experimented and it workedout nicely.</p>
      <h4>Sources:</h4>
      <p>Google Fonts Api from "https://fonts.google.com/"</p>
      <p>Referenced Labs 7-8 from CPSC 2030 fall 2021</p>
      </div>
    </div>
  </body>
</html>