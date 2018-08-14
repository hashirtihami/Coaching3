 <?php
	require 'templates/top.inc.php';
?>
<link href="layout/styles/database.css" rel="stylesheet" type="text/css" >
<meta name="viewport" content="width=device-width, initial-scale=1">



<div class="container">
  <h2 style="color:#3C1363;">Database</h2>
<hr>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by your area " >

  <table id="myTable"  style="text-align:center;">
    <tr class="header">
      <th style="background-color:#3C1363; width:30%;">Name</th>
      <th style="background-color:#3C1363; width:60%;">Country</th>
      <th style="background-color:#3C1363; width:10%; text-align:center;"> Form </th>
    </tr>
    
    <tr>
      <td>North Nazimabad</td>
      <td>Adamjee Coaching Center Campus I</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Gulshan-e-iqbal</td>
      <td>Practical Center </td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Gulistan-e-Johar</td>
      <td>MERIT N MERIT Campus I</td>
     <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Bahadarabad</td>
      <td>Adamjee Coaching Center Campus II</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Sadar</td>
      <td>BERLITZ</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>North Karachi</td>
      <td>Practical Center</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Gulshan-e-Hadeed</td>
      <td>MERIT N MERIT Campus II</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Gulshan-e-Myanmar</td>
      <td>EUREKA</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Laandhi</td>
      <td>MAK COLLIGATE CAMPUS I</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Korangi</td>
      <td>Adamjee Coaching Center</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Sadar</td>
       <td>MAK COLLIGATE CAMPUS II</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Gulshan-e-iqbal</td>
      <td>Adamjee Coaching Center</td>
     <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Gulistan-e-Johar</td>
      <td>Adamjee Coaching Center</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Bahadarabad</td>
      <td>Adamjee Coaching Center</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Sadar</td>
      <td>MERIT N MERIT CAMPUS III</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>North Karachi</td>
       <td>MAK COLLIGATE CAMPUS III</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Gulshan-e-Hadeed</td>
      <td>Arena Multimedia</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Gulshan-e-Myanmar</td>
      <td> Aptech multimedia</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Laandhi</td>
      <td>Falcon Coaching Center</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>
    <tr>
      <td>Korangi</td>
      <td>Dehli coaching center</td>
      <td style="text-align:center;"> <a  style="font-size:25px; color:#3C1363;" href="#"><i class="fas fa-file-download"></i></a></td>
    </tr>

    
  </table>
</div>
<script type="text/javascript" src="layout/js/database.js"></script>

<?php
  require 'templates/bottom.inc.php';
?>