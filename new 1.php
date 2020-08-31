<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 80%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>  
<form>  
  <div class="container">  
  <center>  <h1> Leave Application Form</h1> </center>  
  <hr> 
<label> Employee ID: </label>   
<input type="id" name="eid" size="30" required /><br>   
  <label> Name: </label>   
<input type="text" name="name" placeholder= "name" size="30" required />  <br>  

<label>   
Date of Application :  
</label> 
<input type="date" name="date" placeholder= "date" required /><br><br>
<label>   
Start Date:  
</label> 
<input type="date" name="Startdate" placeholder= "Startdate" required /><br><br>
<label>   
End Date :
</label> 
<input type="date" name="Enddate" placeholder= "Enddate" required /><br><br>
<div>  
  
  
<div>  
<label>   
Leave type :  
</label><br>  
<input type="radio" value="Half" name="type"> Half Day   
<input type="radio" value="Full" name="type"> Full Day 
  
</div>  
<label>   

Purpose :  </label><br>
<textarea cols="80" rows="5" placeholder="Current Address" value="address" required>  
</textarea>  
    <button type="submit" class="registerbtn">Submit Application</button>    
</form>  
</body>  
</html>  