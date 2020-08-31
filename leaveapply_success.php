<?php session_start(); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<div class="container">
	<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Successful Application</h2>
        <img style="width: 50rem " src="https://i.pinimg.com/originals/e8/06/52/e80652af2c77e3a73858e16b2ffe5f9a.gif">
        <h3>Dear</h3>
        <p style="font-size:20px;color:#5C5C5C;">Thank you for applying for the leave We will get back to you soon with the leave application status</p>
        <h2>Your leave Id is 
        <b style="color: green">
        <?php
                $leaveid=$_SESSION['lvid'];
                echo $leaveid;
                
            ?>
            </b>
        </h2>

        <h3>
            <?php
                date_default_timezone_set("Asia/Calcutta");
                echo "Date:  " . date("d/m/Y") . "<br>";
                echo "Time: " . date("h:i:sa");
            ?>

        </h3>
        <a href="leave_status.php" class="btn btn-success">     Check Status      </a>
    <br><br>
        </div>
        
	</div>
</div>