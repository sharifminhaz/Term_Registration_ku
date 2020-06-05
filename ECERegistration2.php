<!doctype html>
<html>
<head>
    <title> PHP Learning </title>
	<style>
	.phpcoding{width:900px; margin:0 auto;background:LightGoldenRodYellow ; padding:20px; }
.headeroption, .footeroption{background:#Cbdb2a; color#fff; text-align:center;padding:20px;}
.maincontent{min-height:400px; padding:20px 10px;}
.maincontent{background-image:url('khulna-university-logo-0ED60E0FEC-seeklogo.com.png'); background-repeat:no-repeat;background-position:center;}	
background-image{opacity:0.4;}
.upperpic{float:right;}
.year{float:left;}
.term{}
	</style>
</head>

<body>
<?php $a=array("ECE 1101","ECE 1102","CSE 1151","CSE 1152","Math 1161","Phy 1163","Phy 1164","Chem 1165","Chem 1166","Eng 1171");
   $b=array("Electrical Circuits","Electrical Circuits Sessional","Computer Programming","Computer Programming Sessional","Differential & Integral Calculus","Physics","Physics Sessional","Chemistry","Chemistry Sessional","English");
   $cn=$code=$c=$ccn=$crd=$ccd="" ;
   $T=array();
   function show($data)
		{	
			$a=array("ECE 1101","ECE 1102","CSE 1151","CSE 1152","Math 1161","Phy 1163","Phy 1164","Chem 1165","Chem 1166","Eng 1171","");
			$b=array("Electrical Circuits","Electrical Circuits Sessional","Computer Programming","Computer Programming Sessional","Differential & Integral Calculus","Physics","Physics Sessional","Chemistry","Chemistry Sessional","English","");
			$firstname=$data;
			$c=array_search($firstname,$a);
			$cn= $b[$c];
			return $cn; 
		}
   function showcredit($data)
		{	
			$a=array("ECE 1101","ECE 1102","CSE 1151","CSE 1152","Math 1161","Phy 1163","Phy 1164","Chem 1165","Chem 1166","Eng 1171","");
			$cr=array("3.00","1.50","3.00","1.50","3.00","3.00","0.75","3.00",".75","2.00","");
			$Ccredit=$data;
			$cdt=array_search($Ccredit,$a);
			$crd= $cr[$cdt];
			return $crd; 
		}
   ?>
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
   
   <section class="maincontent">
    <h3>NAME: <?php echo $_POST['fname'] ?> <?php echo $_POST['lname'] ?> </h3> 
	<h3> STUDENT ID: &nbsp; <?php echo $_POST['Student_id'] ?> </h3>
	<h3> YEAR: &nbsp; <?php echo $_POST['Year'] ?> &nbsp; TERM: <?php echo $_POST['Term'] ?> </h3>
	<h3> DATE: &nbsp; <?php echo $_POST['date'] ?>
	<h3> Mobile Number: &nbsp; <?php echo $_POST['mobile'] ?></h3>
	
	<table border="1px">
			<tr>
				<td> &nbsp;&nbsp;&nbsp; COURSE CODE</td>
				<td>&nbsp;&nbsp;&nbsp; COURSE NAME &nbsp;&nbsp;&nbsp;</td>
				<td>&nbsp; Credit &nbsp; </td>
				<td> REMARK</td>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;&nbsp; <?php echo $_POST['Course_code'] ?> </td>
				<?php
				$ccn= show($_POST['Course_code']);
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccn; ?>&nbsp;&nbsp;&nbsp;</td> 
				<?php
				$ccd= showcredit($_POST['Course_code']);
				$T[0]=$ccd;
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccd; ?>&nbsp;&nbsp;&nbsp;</td> 
				<td>
				&nbsp;&nbsp;&nbsp; <?php echo $_POST['Remark'] ?> 
				</td>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;&nbsp; <?php echo $_POST['Course_code1'] ?> </td>
				<?php
				$ccn1= show($_POST['Course_code1']);
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccn1; ?>&nbsp;&nbsp;&nbsp;</td> 
				<?php
				$ccd1= showcredit($_POST['Course_code1']);
				$T[1]=$ccd1;
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccd1; ?>&nbsp;&nbsp;&nbsp;</td> 
				<td>
				&nbsp;&nbsp;&nbsp; <?php echo $_POST['Remark1'] ?> 
				</td>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;&nbsp; <?php echo $_POST['Course_code2'] ?> </td>
				<?php
				$ccn2= show($_POST['Course_code2']);
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccn2; ?>&nbsp;&nbsp;&nbsp;</td> 
				<?php
				$ccd2= showcredit($_POST['Course_code2']);
				$T[2]=$ccd2;
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccd2; ?>&nbsp;&nbsp;&nbsp;</td> 
				<td>
				&nbsp;&nbsp;&nbsp; <?php echo $_POST['Remark2'] ?> 
				</td>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;&nbsp; <?php echo $_POST['Course_code3'] ?> </td>
				<?php
				$ccn3= show($_POST['Course_code3']);
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccn3; ?>&nbsp;&nbsp;&nbsp;</td> 
				<?php
				$ccd3= showcredit($_POST['Course_code3']);
				$T[3]=$ccd3;
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccd3; ?>&nbsp;&nbsp;&nbsp;</td> 
				<td>
				&nbsp;&nbsp;&nbsp; <?php echo $_POST['Remark3'] ?> 
				</td>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;&nbsp; <?php echo $_POST['Course_code4'] ?> </td>
				<?php
				$ccn4= show($_POST['Course_code4']);
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccn4; ?>&nbsp;&nbsp;&nbsp;</td> 
				<?php
				$ccd4= showcredit($_POST['Course_code4']);
				$T[4]=$ccd4;
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccd4; ?>&nbsp;&nbsp;&nbsp;</td> 
				<td>
				&nbsp;&nbsp;&nbsp; <?php echo $_POST['Remark4'] ?> 
				</td>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;&nbsp; <?php echo $_POST['Course_code5'] ?> </td>
				<?php
				$ccn5= show($_POST['Course_code5']);
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccn5; ?>&nbsp;&nbsp;&nbsp;</td> 
				<?php
				$ccd5= showcredit($_POST['Course_code5']);
				$T[5]=$ccd5;
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccd5; ?>&nbsp;&nbsp;&nbsp;</td> 
				<td>
				&nbsp;&nbsp;&nbsp; <?php echo $_POST['Remark5'] ?> 
				</td>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;&nbsp; <?php echo $_POST['Course_code6'] ?> </td>
				<?php
				$ccn6= show($_POST['Course_code6']);
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccn6; ?>&nbsp;&nbsp;&nbsp;</td> 
				<?php
				$ccd6= showcredit($_POST['Course_code6']);
				$T[6]=$ccd6;
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccd6; ?>&nbsp;&nbsp;&nbsp;</td> 
				<td>
				&nbsp;&nbsp;&nbsp; <?php echo $_POST['Remark6'] ?> 
				</td>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;&nbsp; <?php echo $_POST['Course_code7'] ?> </td>
				<?php
				$ccn7= show($_POST['Course_code7']);
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccn7; ?>&nbsp;&nbsp;&nbsp;</td> 
				<?php
				$ccd7= showcredit($_POST['Course_code7']);
				$T[7]=$ccd7;
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccd7; ?>&nbsp;&nbsp;&nbsp;</td> 
				<td>
				&nbsp;&nbsp;&nbsp; <?php echo $_POST['Remark7'] ?> 
				</td>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;&nbsp; <?php echo $_POST['Course_code8'] ?> </td>
				<?php
				$ccn8= show($_POST['Course_code8']);
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccn8; ?>&nbsp;&nbsp;&nbsp;</td> 
				<?php
				$ccd8= showcredit($_POST['Course_code8']);
				$T[8]=$ccd8;
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccd8; ?>&nbsp;&nbsp;&nbsp;</td> 
				<td>
				&nbsp;&nbsp;&nbsp; <?php echo $_POST['Remark8'] ?> 
				</td>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;&nbsp; <?php echo $_POST['Course_code9'] ?> </td>
				<?php
				$ccn9= show($_POST['Course_code9']);
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccn9; ?>&nbsp;&nbsp;&nbsp;</td> 
				<?php
				$ccd9= showcredit($_POST['Course_code9']);
				$T[9]=$ccd9;
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccd9; ?>&nbsp;&nbsp;&nbsp;</td> 
				<td>
				&nbsp;&nbsp;&nbsp; <?php echo $_POST['Remark9'] ?> 
				</td>
			</tr><tr>
				<td>&nbsp;&nbsp;&nbsp; <?php echo $_POST['Course_code10'] ?> </td>
				<?php
				$ccna= show($_POST['Course_code10']);
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccna; ?>&nbsp;&nbsp;&nbsp;</td> 
				<?php
				$ccda= showcredit($_POST['Course_code10']);
				$T[10]=$ccda;
				?>
				<td>&nbsp;&nbsp;&nbsp;<?php echo $ccda; ?>&nbsp;&nbsp;&nbsp;</td> 
				<td>
				&nbsp;&nbsp;&nbsp; <?php echo $_POST['Remark10'] ?> 
				</td>
			</tr>
			<tr>
			<td></td>
			<td>Total credit:</td> 
			<?php $t=$T[0]+$T[1]+$T[2]+$T[3]+$T[4]+$T[5]+$T[6]+$T[7]+$T[8]+$T[9];?> 
			<td><?php echo $t;?></td>
			</tr>
			
		</table>
	  
</section>
<section class="footeroption">
   
   <button type="submit">Submit</button>
   </section>
</div>
</body>
</html>





