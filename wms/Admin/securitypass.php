   <html>
<head>
<link href="../css/main.css" rel="stylesheet" />

<style>

</style>
</head>
<body>

<div class="main">
  <?php include 'header.php';?>

<p style="font-size:30px;text-align: center;">Security Pass Issue</p>


   <div class="pass">
       <form  action="" method="post">
       
        <div class="first">
      <label class="formlabel">Request Id</label>
      <input type="text" name="Request Id" style="float: left;">

      <label class="formlabel">Ep No</label>
      <input type="text" name="Ep No" style="float: left;">
      </div>
      <div class="first">
       <label class="formlabel">Id Proof</label>
       <select name="" style="float: left; width:170px; height:22px;" >
       		<option>---Select---</option>
       </select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   
      <label class="formlabel">Id Proof No</label>
      <input type="text" name="Id Proof No" style="float: left;">
       </div>

        <div class="first">
      <label class="formlabel">Ep Validity</label>
      <input type="text" name="Ep Validity" style="float: left;">

      <label class="formlabel">Access Card No</label>
      <input type="text" name="Access Card No" style="float: left;">
      </div>

       <div class="first">
      <label class="formlabel">Security Remarks</label>
      <input type="text" name="Security Remarks" style="float: left;">

      <label class="formlabel">Access Card No</label>
      <input type="text" name="Access Card No" style="float: left;">

      </div>

       <div class="first">
      <label class="formlabel">Mantra Remarks</label>
      <input type="text" name="Mantra Remarks" style="float: left;">
      <label class="formlabel">Access Level</label>
       <select name="" style="float: left; width:170px ; height:22px;">
          <option>---Select---</option>
       </select>
      </div>
    <center>
      <input name="" type="button"  value="Send For Biometric">

      <input name="" type="button"  value="Reject">
      </center>
   </form>
       
   
   </div>
   
 </div>   
      
  
   		
   </div>
   <?php include 'footer.php';?>
   </body>
   </html>

