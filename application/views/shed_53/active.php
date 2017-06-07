<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CSS Heaven 1</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"> 
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="wrap">
  <div id="top">
    <h1 id="sitename">Chook <em> Data</h1>
    <div id="searchbar">
      <form action="#">
        <div id="searchfield">
          <input type="text" name="keyword" class="keyword" />
          <input class="searchbutton" type="image" src="assets/images/searchgo.gif"  alt="search" />
        </div>
      </form>
    </div>
  </div>
  <div id="menu">
    <ul>
      <li class="active"><a href="index.php/shed_52/index"><span>Shed_52</span></a></li>
      <li><a href="index.php/shed_52/index"><span>Shed_53</span></a></li>
      <li><a href="index.php/shed_52/index"><span>Shed_54</span></a></li>
     
    </ul>
  </div>
  <div id="contentwrap">
    <div id="header"> </div>
    <div id="mainpage">
      <div id="threecolumns">
        <div class="col1">
          <div class="ftbox">
            <div class="ftbox1"></div>
            <div class="ftcontent">
              <div class="post">
                <h2><a href="#">Antenna Report</a></h2>
                      

           
<?php
        //TODO:open index class from Shed_53 controller
echo form_open('Shed_53/index');
                    echo "<br />";   
          echo "<br />";   
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
          echo "<br />";   
          echo "<br />";   
    ?>
    
              </div>
            </div>
            <div class="ftbox2"></div>
          </div>
          
        </div>
          
        <div class="col2">
          <div class="ftbox">
            <div class="ftbox1"></div>
            <div class="ftcontent">
              <div class="post">
                   
                <h2><a href="#">Active animal Report</a></h2>
               
           
<?php
       // echo form_open('Shed_53/epc_get');
       // echo form_close();
if (isset($show_table)) {
echo "<div class='emp_table'>";
if ($show_table == 'Database is empty !') {
echo $show_table;
} else {
echo '<caption>epc table</caption>';
echo "<table width='500px'>";
echo '<tr><th class="e_id">epc</th><th>Leaves</th></th><th>Enters</th><tr/>';
foreach ($show_table as $value) {
echo '<tr>' . '<td class="e_id">' . $value->epc . '</td>' . '<td class="j_date">' . $value->leaves . '</td>'. '<td class="j_date">' . $value->enters . '</td>' .  '<tr/>';
}
echo '</table>';
}

}
   echo "<br />";   
          echo "<br />";   
?>
     
            </div>
            </div>
            <div class="ftbox2"></div>
          </div>
         
        </div>
        <div class="col3">
          <div class="ftbox">
            <div class="ftbox1"></div>
            <div class="ftcontent">
              <div class="post">
                   <h2><a href="#">Reader Report</a></h2>
            
           
<?php
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
echo form_submit('submit', 'Show Record');
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
        echo "<br />";   
          echo "<br />";   
    ?>
                  
                  
              
               </div>
            </div>
            <div class="ftbox2"></div>
          </div>
          
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div id="bottom">
      <div id="shortinfo">
        <div id="authimg"> <img src="images/bug.jpg" alt="" width="128" height="128" /></div>
        <div id="authbio">
          <h2>About You!</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id arcu nulla. Donec eu risus nisl, id cursus justo. Proin non mauris enim, eu suscipit libero. Fusce eget nunc nibh. Integer elementum consectetur sagittis. Quisque adipiscing auctor risus, id vulputate eros auctor vel. Vivamus pellentesque arcu vel libero eleifend sed aliquam </p>
        </div>
      </div>
      <div id="linkmenu">
        <h2>Places of Interest</h2>
        <ul class="footerlinks">
          <li><a href="#">Free CSS Templates</a></li>
          <li><a href="#">Opensource </a></li>
          <li><a href="#">Free Stock Photos</a></li>
          <li><a href="#">Free Software</a></li>
          <li><a href="#">Lorem Ipsum</a></li>
          <li><a href="#">XHTML Templates</a></li>
          <li><a href="#">HTML Templates</a></li>
          <li><a href="#">CSS 3 &amp; HTL5</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      <div id="footer">
        <div id="fl_left">&copy; YourSitename.com | All Rights Reserved</div>
        <div id="fl_right"><a href="http://www.websitetemplateco.com/">Free CSS Templates</a> by <a href="http://cssheaven.org">CSS Heaven</a></div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div id="contentbtm"></div>
</div>
<!-- END PAGE SOURCE -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>








<html>
    <head>
        <title>Codeigniter</title>
        
    
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"> 
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/headers/header-v6.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/bootstrap.css">
        
        
    </head>
<body>
  
    
    
    
    <div class="container">
    <div id="show_form">
<nav class="navbar navbar-inverse">
    
    <div class="navbar-header">                 
        
        </div>
        <div id="navbar">
        <ul class="nav navbar-nav">
            
            //horizantal navgation page linking
            <li><a href="<?php echo base_url(); ?>index.php/shed_53/index">shed_53</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/shed_52/index">shed_52</a></li>
            </ul>
        </div>
    
</nav>
    
  
  
   

 
 
       
 </div>
</div>

</body>
</html>