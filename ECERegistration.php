<!doctype html>
<html>
<head>
    <title> PHP Learning </title>
	<style>
	.phpcoding{width:900px; margin:0 auto;background:LightGoldenRodYellow ; padding:20px; }
.headeroption, .footeroption{background:#Cbdb2a; color#fff; text-align:center;padding:20px;}
.maincontent{min-height:400px; padding:20px 10px;}
.maincontent{background-image:url('images.png'); background-repeat:no-repeat;background-position:center;}	
background-image{opacity:0.6;}
.upperpic{float:right;}
.year{float:left;}
.term{}
.error {color: #FF0000;}

	</style>
</head>

<body>
<div class="phpcoding">
<img src="Khulna-University.jpg" width="700" height="100" />
<section class="upperpic"> 
<img src="images.png" width="100" height="100" />
</section>
   <section class="headeroption">
   <h1> ELECTRONICS and COMMUNICATION ENGINEERING </h1>
   <h1> SCIENCE, ENGINEERING and TECHNOLOGY SCHOOL</h1>
   <h2> Registration Card</h2>
   </section>
   <?php
   $a=array("ECE 1101","ECE 1102","CSE 1151","CSE 1152","Math 1161","Phy 1163","Phy 1164","Chem 1165","Chem 1166","Eng 1171");
   $b=array("Electrical Circuits","Electrical Circuits Sessional","Computer Programming","Computer Programming Sessional","Differential & Integral Calculus","Physics","Physics Sessional","Chemistry","Chemistry Sessional","English");
   $fnameErr = $lnameErr = "";
   $fname = $lname= $Cname="";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
		if (empty($_POST["fname"])) 
			{
				$fnameErr = "Name is required";
			} 
		else {
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$fname)) 
				{
					$fnameErr = "Only letters and white space allowed"; 
				}
			}
			
		if (empty($_POST["lname"])) 
			{
				$lnameErr = "Name is required";
			} 
		else {
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$lname)) 
				{
					$lnameErr = "Only letters and white space allowed"; 
				}
			}
	}
	
   ?>
  
   <section class="maincontent">
    <p><span class="error">* required field</span></p>
   <form method="post" action="ECERegistration2.php">
   
	First Name: <input type="text" name="fname"  value="<?php echo $fname;?>">
				<span class="error">* <?php echo $fnameErr;?></span>
	Last Name: <input type="text" name="lname"  value="<?php echo $lname;?>"> 
				<span class="error">* <?php echo $lnameErr;?></span>
	Student ID: <input type="number" name="Student_id">
	 <br/>
	 <br/>
	 <div class="year">
	 Year: <select name="Year">
				<option value="1st">1st</option>
				<option value="2nd">2nd</option>
				<option value="3rd">3rd</option>
				<option value="4th">4th</option>
				</select>
				</div>
				 
		<div class="term">	
&nbsp;&nbsp;&nbsp;				  
				Term:
				<input type="radio" name="Term" value="I">I
				<input type="radio" name="Term" value="II">II
				</div>
	<br/>
	<br/>			
	Date: <input type="date" name="date" >	 &nbsp;&nbsp;&nbsp;
	Mobile Number: <input type="text" name="mobile">
		<br/>
		<br/>
		<table border="1px">
			<tr>
				<td> &nbsp;&nbsp;&nbsp COURSE CODE</td>
				<td> REMARK</td>
			</tr>
			<tr>
				<td> <input type="text" name="Course_code"> </td> 
				<td>
					<select name="Remark">
						<option value="Fresh">Fresh</option>
						<option value="Retake">Retake</option>
					</select>
				</td>
			</tr>
			<tr>
				<td> <input type="text" name="Course_code1"> </td> 
				<td>
					<select name="Remark1">
						<option value="Fresh">Fresh</option>
						<option value="Retake">Retake</option>
					</select>
				</td>
			</tr>
			<tr>
				<td> <input type="text" name="Course_code2"> </td> 
				<td>
					<select name="Remark2">
						<option value="Fresh">Fresh</option>
						<option value="Retake">Retake</option>
					</select>
				</td>
			</tr>
			<tr>
				<td> <input type="text" name="Course_code3"> </td> 
				<td>
					<select name="Remark3">
						<option value="Fresh">Fresh</option>
						<option value="Retake">Retake</option>
					</select>
				</td>
			</tr>
			<tr>
				<td> <input type="text" name="Course_code4"> </td> 
				<td>
					<select name="Remark4">
						<option value="Fresh">Fresh</option>
						<option value="Retake">Retake</option>
					</select>
				</td>
			</tr>
			<tr>
				<td> <input type="text" name="Course_code5"> </td> 
				<td>
					<select name="Remark5">
						<option value="Fresh">Fresh</option>
						<option value="Retake">Retake</option>
					</select>
				</td>
			</tr>
			<tr>
				<td> <input type="text" name="Course_code6"> </td> 
				<td>
					<select name="Remark6">
						<option value="Fresh">Fresh</option>
						<option value="Retake">Retake</option>
					</select>
				</td>
			</tr>
			<tr>
				<td> <input type="text" name="Course_code7"> </td> 
				<td>
					<select name="Remark7">
						<option value="Fresh">Fresh</option>
						<option value="Retake">Retake</option>
					</select>
				</td>
			</tr>
			<tr>
				<td> <input type="text" name="Course_code8"> </td> 
				<td>
					<select name="Remark8">
						<option value="Fresh">Fresh</option>
						<option value="Retake">Retake</option>
					</select>
				</td>
			</tr>
			<tr>
				<td> <input type="text" name="Course_code9"> </td> 
				<td>
					<select name="Remark9">
						<option value="Fresh">Fresh</option>
						<option value="Retake">Retake</option>
					</select>
				</td>
			</tr>
			<tr>
				<td> <input type="text" name="Course_code10"> </td> 
				<td>
					<select name="Remark10">
						<option value="Fresh">Fresh</option>
						<option value="Retake">Retake</option>
					</select>
				</td>
			</tr>
			
		</table>

</section>
<section class="footeroption">
   <input type="submit" name="submit" value="Save"> 
   </section>
   </form>
  
</section>
</body>
</html>
