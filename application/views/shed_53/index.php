<!DOCTYPE html>
<html lang="en">
<head>
  <title>COSC260 Week 4</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="COSC260 Week 4 Tutorial">
  <meta name="keywords" content="COSC260, week 4, tutorial 3, HTML, CSS, responsive design">
  <meta name="author" content="James Bishop">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/cosc260_tutorial3_p1_solution.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/reset.css">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->
</head>
<body>
  <!-- START WRAPPER -->
  <div id="wrapper">
    <!-- START NAV -->
    <nav id="nav" class="column">
      <img src="img/une_logo.png" width="180" height="180" alt="UNE logo" title="UNE" />
     <a href="index.php/shed_52/index"><span>Shed_52</span></a>
      <a href="index.php/shed_53/index"><span>Shed_53</span></a>
     <a href="index.php/shed_54/index"><span>Shed_54</span></a>
      
    </nav>
    <!-- END NAV -->
    <!-- START COL_MID -->
    <section id="col_mid" class="column">
      <header>
        <h1>COSC260 Web Programming</h1>
      </header>
      <!-- START UNIT INFO -->
      <article id="unit_info">
        <h2>Unit Information</h2>
        <!-- START TOPICS -->
      <div id="mainpage">
      <div id="threecolumns">
        <div class="col1">
          <div>
            <div class="ftbox1"></div>
            <div class="ftcontent">
              <div class="post">
                <h2><a href="#">Anttenna Report</a></h2>                
                <p>  
<?php
                    echo "<br />";
        //TODO:open index class from Shed_53 controller
echo form_open('Shed_53/index');
                   
        //TODO: create lable and name it for Date
echo form_label('Select By Date : ');
        //TODO:create array for lable type , name and placeholder for inside lable
$data = array(
'type' => 'date',
'name' => 'date',
'placeholder' => 'yyyy-mm-dd'
);
    //select date in lable
echo form_input($data);
        //
echo "<div class='error_msg'>";
if (isset($date_error_message)) {
echo $date_error_message;
}
echo "</div>";
        echo "<br />";
echo form_submit('submit', 'Show Record');
echo form_close();

if (isset($result_display)) {
echo "<p><u>Result</u></p>";
if ($result_display == 'No record found !') {
echo $result_display;
} else {
echo "<table class='result_table'>";
echo '<tr><th>antenna_name</th><th>Leave</th><th>Enter</th><tr/>';
    //$total_sum=0;
    
 
foreach ($result_display as $value) {
echo '<tr>' . '<td class="e_id">' . $value->antenna_name . '</td>' . '<td class="j_date">' . $value->leaves . '</td>'. '<td class="j_date">' . $value->enters . '</td>' .  '<tr/>';
}
echo '</table>';
}
} 
    ?>
    </p>
                 </div>
            </div>
            <div class="ftbox2"></div>
          </div>
         
        </div>
        <div class="col2">
          <div>
            <div class="ftbox1"></div>
            <div class="ftcontent">
              <div class="post">
                <h2><a href="#">Active Animal Report</a></h2>
                
                <p> <?php
                    echo "<br />";
                    echo "<br />";
       // echo form_open('Shed_53/epc_get');
       // echo form_close();
if (isset($show_table)) {
echo "<div class='emp_table'>";
if ($show_table == 'Database is empty !') {
echo $show_table;
} else {
//echo '<caption>epc table</caption>';
echo "<table width='500px'>";
echo '<tr><th class="e_id">epc</th><th>Leaves</th></th><th>Enters</th><tr/>';
foreach ($show_table as $value) {
echo '<tr>' . '<td class="e_id">' . $value->epc . '</td>' . '<td class="j_date">' . $value->leaves . '</td>'. '<td class="j_date">' . $value->enters . '</td>' .  '<tr/>';
}
echo '</table>';
}

}
  
?> </p>
                 </div>
            </div>
            <div class="ftbox2"></div>
          </div>
          
        </div>
          </div>
        <div class="col3">
          <div class="ftbox">
            <div></div>
            <div class="ftcontent">
              <div class="post">
                <h2><a href="#">Reader Report</a></h2>
               
                <p>          
<?php
                    echo "<br />";
echo form_open('Shed_53/reader_report');
echo form_label('Select By Date : ');
$data = array(
'type' => 'date',
'name' => 'date',
'placeholder' => 'yyyy-mm-dd'
);
echo form_input($data);
echo "<div class='error_msg'>";
if (isset($date_error_message2)) {
echo $date_error_message2;
}
echo "</div>";
        echo "<br />";
//echo form_submit('submit', 'Show Record');
                    echo "<button type='submit' name='Show Record' id='show'>Show Record</button>";
echo form_close();
    
        if (isset($result_display2)) {
echo "<p><u>Result</u></p>";
if ($result_display2 == 'No record found !') {
echo $result_display2;
} else {
echo "<table class='result_table'>";
echo '<tr><th>reader_name</th><th>Leaves</th><th>Enters</th><tr/>';
    
foreach ($result_display2 as $value) {
echo '<tr>' . '<td class="e_id">' . $value->reader_name . '</td>' . '<td class="j_date">' . $value->leaves . '</td>'. '<td class="j_date">' . $value->enters . '</td>' .  '<tr/>';
}
echo '</table>';
}
}
          
    ?> </p>
                 </div>
            </div>
            <div class="ftbox2"></div>
          </div>
          
        </div>
      
      </div>
        <!-- END TOPICS -->
        <!-- START TEXTBOOK_INFO -->
        <section id="textbook_info" class="content">
          <h3>Textbook Information</h3>
          <p>
          </p>
        </section>
        <!-- END TEXTBOOK_INFO -->
        <!-- START ASSESSMENT -->
        <section id="assessment" class="content">
          <h3>Assessment</h3>
          <h4>Programming Tasks</h4>
          <ol>
            <li>Assignment 1: 10%</li>
            <li>Assingment 2: 10%</li>
            <li>Project: 10%</li>
          </ol>
          <h4>Written Tasks</h4>
          <ol>
            <li>Online Quizzes: 10%</li>
            <li>Exam: 60%</li>
          </ol>
        </section>
        <!-- END ASSESSMENT -->
      </article>
        <footer>
      <p><b>COSC260 - Week 4 - Tutorial 3<br>Created by James Bishop on the <time datetime="2016-06-24">24th of June 2016</time></b></p>
    </footer>
      <!-- END UNIT INFO -->
    </section>
    <!-- END COL_MID -->
    <!-- START COL_RIGHT -->
   
    <!-- END COL_RIGHT -->
    <!-- START FOOTER -->
    
    <!-- END FOOTER -->
  </div>
  <!-- END WRAPPER -->
</body>
</html>