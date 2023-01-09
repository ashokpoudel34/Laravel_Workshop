<html>  
<head>

<style>
hr {  
  border: 1px solid green;  
  margin-bottom: 25px;  
}
</style>

<title> Registration Form </title>
<link rel="stylesheet" href="RegistrationForm.css">

</head>

<body style="font-family: sans-serif; background-color: lightpink;">  
<form action="insert.php" method="POST"> 
<div class="container">
<center>  <h1> Student Registeration Form</h1> </center>  
<hr>  
<label> Firstname </label>   <br>
<input type="text" name="firstname" placeholder= "Firstname" size="15" required />  <br>
<label> Middlename: </label>   <br>
<input type="text" name="middlename" placeholder="Middlename" size="15" />  <br> 
<label> Lastname: </label>    <br>
<input type="text" name="lastname" placeholder="Lastname" size="15" required />   <br>


<div>  
<label>   
Gender :
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
</div>

<label>
Address :
</label><br>
<textarea rows="3" name="address" placeholder="Current Address" value="address" required>
</textarea><br>

<label>   
Phone No:  
</label><br>
<input type="text" name="phone" placeholder="phone no." size="10" required><br>

<label for="email"><b>Email id</b></label>  <br>
<input type="text" placeholder="Enter Email" name="email" required>  <br>

<div>  
<label>   
Hobbies :
</label><br>  
<input type="checkbox" value="Music" name="hobbies" > Music
<input type="checkbox" value="Gaming" name="hobbies"> Gaming
<input type="checkbox" value="Movies" name="hobbies"> Movies
</div>

<label> City </label>   <br>
<input type="text" name="city" placeholder= "enter" size="15" required />   <br>
<label> State: </label>   <br>
<input type="text" name="state" placeholder="enter" size="15" required/>   <br>
<label> Country: </label>    <br>
<input type="text" name="country" placeholder="enter" size="15" required />   

<div>  
<label>   
College Name :
</label>
<select>
<option value="select">select</option>
<option value="piet">PIET</option>
<option value="pit">PIT</option>
</select>
</div>  


<button type="submit" class="registerbtn">Register</button>  
</div>
</form>  
<button name='redirect' onclick="window.location.href='database.php'">See Database</button>
</body>  
</html>
