<html>
<head>
<link href="css/main.css" rel="stylesheet" />

<style>

</style>
</head>
<body>

<div class="main">
	<?php include 'header.php';?>

<center><div><h2>Ep Status Report</h2></div></center>



<div class="c_status1">
  <table>
  <tr>
   <th>Request Id</th>
   <th &nbsb><input type="text" name="">
    </th>
   
    <th>Ep No</th>
    <th><input type="text" name="t1">
    
      <th>Contractorcode</th>
      <th><input type="text" name="t2">
   
    <tr>
    <th>  division</th>
    <th><select id="Port" name="site">
        <option value="select">---Select---</option
          <option value="Mundra Port & SEZ">Mundra Port & SEZ</option>
          <option value="Tuna Port">Tuna Port</option>
          <option value="Dharma Port">Dharma Port</option>
        </select></th>
    
      <th>Work Area</th>
      <th><select id="Port" name="site">
        <option value="select">---Select---</option
          <option value="Mundra Port & SEZ">Mundra Port & SEZ</option>
          <option value="Tuna Port">Tuna Port</option>
          <option value="Dharma Port">Dharma Port</option>
        </select></th>
   
    <th>Work Location</th>  
      <th><select id="Port" name="site">
        
          <option value="Mundra Port & SEZ">Mundra Port & SEZ</option>
          <option value="Tuna Port">Tuna Port</option>
          <option value="Dharma Port">Dharma Port</option>
        </select></th>
     <tr>
    <th>Acess Level</th>
    <th><select id="Port" name="site">
        <option value="select">---Select---</option>
          <option value="Mundra Port & SEZ">Mundra Port & SEZ</option>
          <option value="Tuna Port">Tuna Port</option>
          <option value="Dharma Port">Dharma Port</option>
        </select></th>
      <th>Ep Status</th>
      <th><select id="Port" name="site">
        <option value="male">Male</option>
          <option value="female">female</option>
         
        </select></th>
     
 
  </table>
  <br><br>
  <center>
    <input type="button" name="" value="Fetch">
  <input type="button" name="" value="Export to excel">
  </center>

</div>


<div class="c_status2">
<table>
  
<tr>
   
   <th><input type="checkbox" name=""> </th>
    <th>Ep Validity</th>
   
  
   
   <th ><input type="checkbox" name="">  </th>
    <th>Religion</th>
  

   
   <th ><input type="checkbox" name="">
    </th>
    <th>Id Proof</th>
  
  
   <th ><input type="checkbox" name="">
    </th>
     <th>Id Proof No</th>
   
 
   <th ><input type="checkbox" name="">
    </th>
      <th>Divion</th>
    

   
  </tr>

  </table>
</div>
</div>


  
  
<?php include 'footer.php';?>

  





</div>




</body>
</html>
