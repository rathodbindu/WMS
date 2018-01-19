<html>
<head>
<link href="css/main.css" rel="stylesheet" />


</head>
<body>

<div class="main">
	
    <?php include 'header.php'; ?>


<div class="t1">

	<table style="padding: 20px;border:2px">
	<tr>
		<th></th>
	 <caption><B>Contractor Login</B></caption>

  <tr>
   <th>Select site</th>
   <th &nbsb><select id="Port" name="site" required="select site">
          <option value="Mundra Port & SEZ">Mundra Port & SEZ</option>
          <option value="Tuna Port">Tuna Port</option>
          <option value="Dharma Port">Dharma Port</option>
        </select>
    </th>
   <tr>
    <th>Contractor Code</th>
    <th><input type="text" name="t1" required="Required Contractor code">
    <tr>
      <th>Contractor Name</th>
      <th><input type="text" name="t2" required="Contractor name required">
      <tr>
    <th>UnitHolder Name</th>
    <th><input type="text" name="t3" required="UnitHolder name required">
    <tr>
      <th>Mobile no</th>
      <th><input type="text" name="t4" required>
      <tr>
    <th>email Id</th>
    <th><input type="text" name="t5" required="Must contain a valid email address (with @ and .)">
    <tr>
      <th>Name</th>
      <th><input type="text" name="t6" required="Must only contain letters and whitespace">
      <tr>
    <th>Enter OTP</th>
    <th><input type="text" name="t7" required="OTP number required">

    	<tr>
    <th></th>
    
    <th><center><input type="button" value="Login"></center>


  </tr>
 
  </table>
</div>

	
<div class="t2">
	<table>
	<tr>
		<th></th>
	 <caption><B>UnitHolder  Login</B></caption>

  
   <tr>
    <th>Employee No</th>
    <th><input type="text" name="t8" required="Employee No must be required">
    <tr>
      <th>Password</th>
      <th><input type="text" name="t9" required="Password must contain atlist one special charactor">
      <tr>
  
    	<tr>
    <th></th>
    
    <th><center><input type="button" value="Login"></center><br><br><br><br><br><br><br><br>
    	<a href="" target="_blank">New User Regisration/Forgot Paasword</a>


  </tr>
  </table>
</div>



</div>


<?php include 'footer.php'; ?>


</body>
</html>
