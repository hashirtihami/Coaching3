 <?php
	require 'templates/top.inc.php';
?>
<link href="layout/styles/database.css" rel="stylesheet" type="text/css" >
<meta name="viewport" content="width=device-width, initial-scale=1">



<div class="container">
  <h2>My Customers</h2>
<hr>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by your area " title="Type in a name">

  <table id="myTable">
    <tr class="header">
      <th style="width:40%;">Name</th>
      <th style="width:40%;">Country</th>
      <th style="width:20%;">Admission Form </th>
    </tr>
    
    <tr>
      <td>North Nazimabad</td>
      <td>Adamjee Coaching Center</td>
      <td><a  style="font-size:30px; text-align:center;" href="#"><i class="fas fa-clipboard-list"></i></a></td>
    </tr>
    <tr>
      <td>Gulshan-e-iqbal</td>
      <td>Adamjee Coaching Center</td>
      <td><a  style="font-size:30px; text-align:center;" href="#"><i class="fas fa-clipboard-list"></i></a></td>
    </tr>
    <tr>
      <td>Gulistan-e-Johar</td>
      <td>Adamjee Coaching Center</td>
      <td><a  style="font-size:30px; text-align:center;" href="#"><i class="fas fa-clipboard-list"></i></a></td>
    </tr>
    <tr>
      <td>Bahadarabad</td>
      <td>Adamjee Coaching Center</td>
      <td><a  style="font-size:30px; text-align:center;" href="#"><i class="fas fa-clipboard-list"></i></a></td>
    </tr>
    <tr>
      <td>Sadar</td>
      <td>Adamjee Coaching Center</td>
      <td><a  style="font-size:30px; text-align:center;" href="#"><i class="fas fa-clipboard-list"></i></a></td>
    </tr>
    
  </table>
</div>
<script type="text/javascript" src="layout/js/database.js"></script>

<?php
  require 'templates/bottom.inc.php';
?>