<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Leave Status</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<body>
<?php
		
		
	if(isset($_POST['sbbtn'])){
		
        $txid=$_POST['txid'];
  
		$con = mysqli_connect("localhost", "root", "") or die(mysqli_error());
		
		mysqli_query($con,"use apsystem") or die(mysqli_error($con));
        

        $rs=mysqli_query($con, "select * from employees where employee_id='$txid'");
        
        
		while($row=mysqli_fetch_array($rs))
		{
			$c=$row[1];
    }
    echo $c;
    $check = strcmp($c,$txid);

		if($check!=0)
            echo"<script>alert('invalid user...');</script>";
        
        else{
          $_SESSION['txid']=$txid;
          header("location:leave_page.php");
        }
        
    
    // $rs=mysqli_query($con, "select * from leavetb where leave_id='$leaveid' and employee_id='$txid'");
        
    //     while($row=mysqli_fetch_array($rs))
		// {
    //         $status= $row[2];
    //         echo $status;
            
    //     }

        
		// while($row=mysqli_fetch_array($rs))
		// {
        //     $c=$row[0];
        //     echo $c;
		// }
		// if($c==0)
        //     echo"<script>alert('invalid user...');</script>";
        
        // else{


        //     echo $row[1];
        //     // mysqli_query($con,"create table if not exists leave leave_status(employee_id varchar(200), leave_id varchar(200), status int)") or die(mysqli_error($con));

        //     // $rs=mysqli_query($con,"select all from RegTb where enrollno=$enroll");



        // }
        
		
	}

?>
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
        <a class="nav-link" href="#">Leave Status <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="leave.php">Apply Leave</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view_attendance.php">Check Attendance</a>
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

<div class="container justify-content-md-center">
<form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Employee ID</label>
    <input name="txid" type="text" class="form-control" id="employeeid" aria-describedby="Employee-Help" placeholder="Enter employee id">
    <small id="emailHelp" class="form-text text-muted">You can get only 3 leaves in a month</small>
  </div>

  
  <button type="submit" name="sbbtn" class="btn btn-primary">Check Status</button>
</form>

</div>
</body>
</html>