<?php
echo "<h1 align='center'>";
echo "<br>";
echo "Today is ".date("d/m/y");
echo "<br>";
echo "WELCOME TO AMAZON";
?>
<!DOCTYPE html>
<head>
<title></title>
</head>
<body>

<form method="post" action="dick.php">

       	 <table align="center" border="3" bgcolor="SOLID GREEN">

	<tr>
	<th colspan="3"> CELL PHONE CHARTS</th>
	</tr>
	<tr>
	<td>BRAND NAME</td>
	<td>MODEL NUMBER</td>
	<td>PRICE/-</td>
	</tr>
	<tr>
	<td>SAMSUNG GLAXY</td>
	<td align="center"> S4 </td>
	<td>6440</td>
	</tr>
	<tr>
	<td>LENOVA</td>
	<td align="center"> L53</td>
	<td>7700</td>
	</tr>
	<tr>
	<td>OPPO</td>
	<td align="center">O15</td>
	<td>4499</td>
	</tr>
	<tr>
	<td>INTEX</td>
	<td align="center">I101</td>
	<td>3500</td>
	</tr>
	<tr>
	<td>NOKIA</td>
	<td>N16(out of stock)</td>
	<td align="center">X</td>
	</tr>
	
	<tr>
	<th colspan="3"> FILL UP THE FOLLOING INFORMATION</th>
	</tr>
	
	<tr>
	<td>Enter Brand Name</td>
	<td> <input type =" "text name="brand_name"/></td>
	</tr>
	<tr>
	<td>Enter Model No</td>
	<td> <input type ="text" name="model_no"/></td>
	</tr>
	<tr>
	<td>Enter Price</td>
	<td> <input type =" text" name="price" /></td>
	</tr>
	</tr>
	<th colspan="3">Write Your Personal Details</th>
	</tr>
	<tr>
	<td>Enter your first Name</td>
	<td> <input type =" text" name="name1"/></td>
	</tr>
	<tr>
	<td>Enter your last Name</td>
	<td> <input type =" text" name="name2"/></td>
	</tr>
	<tr>
	<td>Enter Email</td>
	<td> <input type ="text" name="email"/></td>
	</tr>
	<tr>
	<td>Enter Phon NO</td>
	<td> <input type ="number" name="ph"/></td>
	</tr>
	<tr>
	<td>Enter Address</td>
	<td> <textarea name="describe"></textarea></td>
	</tr>
	<tr>
	<td>Enter alternet No</td>
	<td> <input type ="text" name="alternet"/></td>
	</tr>
	<tr>
	<td>Nearest Location</td>
	<td> <input type ="text" name="location"/></td>
	</tr>
	<tr>
	<td>Post Office</td>
	<td> <input type ="text" name="po"/></td>
	</tr>
	<tr>
	<td>Pin Code</td>
	<td> <input type ="text" name="pin"/></td>
	</tr>
	<tr>
	<td>Check & send</td>
	<td> <input type ="submit"  value ="submit"/></td>
	</tr>
          </table>

      
      
</form>
</body>
</html>
