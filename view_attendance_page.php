<?php session_start(); ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php

    $small_empid= $_SESSION['smallempid'];
    $name= $_SESSION['name'];


     $con = mysqli_connect("localhost", "root", "") or die(mysqli_error());
		
        mysqli_query($con,"use apsystem") or die(mysqli_error($con));
        $rs=mysqli_query($con, "select * from employees where id='$small_empid'");    

        while($row=mysqli_fetch_array($rs))
		{
            $empid=$row[1];
            
		}
   

?>

<style>
    body{
		background-color: #25274d;
	}
	.contact{
		padding: 4%;
		height: 400px;
	}
	.col-md-3{
		background: #ff9b00;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">
    <img src="https://media-exp1.licdn.com/dms/image/C510BAQFlsGyoHivxug/company-logo_200_200/0?e=2159024400&v=beta&t=FlV_yW4u4ggZENRKl8UxnhnYOXI2VugPrYQkmfIIYVY" width="30" height="30" class="d-inline-block align-top" alt="">
    Innerworks Solutions: Smart Work Better Life
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="view_attendance.php">Attendance <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="leave.php">Apply Leave</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="leave_status.php">Leave Status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Mark Attendance</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="post">

<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Innerworks Solutions</h2>
				<h4>Innovation distinguishes from a leader and a follower. ~Steve Jobs</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">Employee Name</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" readonly Value="<?php echo $name?>" name="fname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Employee ID</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" readonly Value="<?php echo $empid?>" name="lname">
				  </div>
				</div>
    

                <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Emp ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Time in</th>
                    <th scope="col">Time Out</th>
                    </tr>
                </thead>
                <!-- show my leaves -->
                <?php
  
  $small_empid= $_SESSION['smallempid'];
  $name= $_SESSION['name'];


                     $con = mysqli_connect("localhost", "root", "") or die(mysqli_error());
                    
                    mysqli_query($con,"use apsystem") or die(mysqli_error($con));
                    $rs=mysqli_query($con, "select * from attendance where employee_id='$small_empid'");    

                    while($row=mysqli_fetch_array($rs))
                    {
                        $date=$row[2];
                        $time_in= $row[3];
                        $status=$row[4];
                        $time_out=$row[5];
                        echo "<tbody>
                        <tr>

                            <td>".$date."</td>
                            <td>".$small_empid."</td>
                            <td>".$name."</td>
                            <td>".$time_in."</td>
                            <td>".$time_out."</td>
                        </tr>
                        </tbody>";


                        }



?>

                        </table>

				
			</div>
		</div>
	</div>
</div>
</form>