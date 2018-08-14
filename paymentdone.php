
<?php
/* Displays all error messages */
session_start();
require 'templates/top.inc.php';
?>

<div class="container"  style="text-align:center;">
    <div class="form">
        <h1 style="color:#3C1363; font-size:200px;  padding-bottom:10px; padding-top:120px;">
            <i class="fas fa-check-circle"></i>
        </h1> 
        <p> 
            
                    <h2 style=" padding-bottom:250px; font-size:20px;">  
                        <span style="color:#3C1363;  "> </span> Your payment is received, kindly check your email for confirmation and contact at info@copedia.com for any queries. <br><br>
                        <span>
                           
                        </span>
                    <h2>';
               
        </p>  
    </div>
</div>
<?php
  require 'templates/bottom.inc.php';
?>
