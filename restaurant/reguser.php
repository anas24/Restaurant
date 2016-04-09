<?php
$rest=$_GET['rest'];
include('config/database.php');
$result=mysql_query("SELECT * FROM restaurantuser where name='$rest'")
or die(mysql_error());
$page=mysql_fetch_assoc($result);
$r1=mysql_query("SELECT Fid,items FROM fooditems where Rname='$rest'");
$r2=mysql_query("SELECT username,reviews FROM comments where rname='$rest'");
//$r3=mysql_query("SELECT image FROM restaurantdetails where name='MCDONALDS'") or die(mysql_error()); 
$r4=mysql_query("SELECT price FROM fooditems where Rname='$rest'") or die(mysql_error());
       
//$P3=mysql_fetch_assoc($r3);
$p2=mysql_fetch_assoc($r2);
?>
<html><link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<body>
<h1 class="text-center" style="border:2px red solid;padding:4px;color:#000099;font-size:30px"> <?php echo $page['header'];?> </h1>
<a href="logoutuser.php" class="btn btn-info" role="button">Log Out</a>
<div>
<p class="text-center" style="border:2px black dashed;padding-left:2px;font:20px;color:green"> <em> <?php echo $page['restaurant page'];?></em> </p>
<div class="text-left"style="padding-left:2px;padding-top:5px;position:relative;top:0px;margin:10px 0px 10px 0px">

 

	</form>
	
	
	       <tr>
		   <td align="right">ITEMS:</td>
              <form action="reguser.php?rest=<?php echo $rest;  ?>" method="POST">
             
              <td>
        <select name="item[]" multiple>
<?php 
while(($p1=mysql_fetch_assoc($r1))&&($p4=mysql_fetch_assoc($r4)))
{?>
<option value=<?php echo $p1['Fid']?>><?php echo $p1['items'] ;echo '-'; echo $p4['price']?>
<?php } ?>
</select>


 <form action="reguser.php?rest=<?php echo $rest;  ?>" method="POST">

        
		<input type="submit" value="ADD>>" />
        <select name="dro[]"  multiple>
     <?php  
	
	 
          if(isset($_POST['item'])){
			   $result=array();
	 foreach ($_POST['item'] as $selectedOption){
		 $r1=mysql_query("SELECT Fid,items FROM fooditems where Rname='$rest'");
	 while($p1=mysql_fetch_assoc($r1)){
	
		 if($p1['Fid']==$selectedOption){
			
		
			 
	 ?>
          <option value=<?php echo $selectedOption?>><?php echo $p1['items']  ?>
		 <?php
		 
	 }
	 }
		  }
		 
		
		  }
	 ?>
	 
	 
        </select></br>
		</form>
        &nbsp;
        </td>
        
</table>

 
      






</div>
</table>


  
<button type="button" class="btn btn-info btn-lg"data-toggle="modal" data-target="#myModal">CHECKOUT</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">TRANSACTION</h4>
      </div>
      <div class="modal-body">
	  
	<table>
  <caption>ITEMS COST </caption>
  <thead>
    <tr>
      <th>        Item  <?php echo "\n" ?>    </th>
      <th>      Quantity <?php echo "\n" ?>    </th>
      <th>       Price    <?php echo "\t" ?>   </th>
      <th>      Total     <?php echo "\t" ?>  </th>
    </tr>
  </thead>
  <tbody>
    <tr>
	
	<?php  
	
	   $sum=0;
	   
          
			 if(isset($_POST['item'])){ 
	 foreach ($_POST['item'] as $selectedOption){
		  $r1=mysql_query("SELECT Fid,items FROM fooditems where Rname='$rest'");
		 $r4=mysql_query("SELECT price FROM fooditems where Rname='$rest'");
		
	 while($p1=mysql_fetch_assoc($r1) && $p4=mysql_fetch_assoc($r4)){
	      //echo $selectedOption;
		  echo $p1['Fid'];
		 if($p1['Fid']==$selectedOption){
			 $sum=$sum+$p4['price'];
			 echo 'sd';
			
		?>
	
	
      <td> <?php echo $p1['items']  ?></td>
      <td> 1  </td>
      <td><?php echo $p4['price'] ?></td>
      <td><?php echo $p4['price'] ?></td>
	  
	   <?php
		 
		 
	 }	 }
		  }
			 }
		 
		
		
	 ?>
	 
    </tr>
    
  </tbody>
  <tfoot>
    <tr>
      <th colspan="3">Grand Total</th>
      <th><?php echo $sum?></th>
    </tr>
  </tfoot>
</table>
	  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">SUBMIT</button>
		
		<?php
		
		if(isset($_POST['comments']))
		{
			if(!empty($_POST['comments']))
			{
				$com=$_POST['comments'];
				$query="insert into comments (`Cid`, `username`, `rname`, `reviews`) values ('NULL','user','resname','$com');";
				if($query_run=mysql_query($query))
					echo 'comment added succesfully';
			}
		}
		
		?>
      </div>
    </div>

  </div>
  

</div>
</div>
</div>
</body>




















	  
 

 
	
	
	 
        
</body>





</div>
</table>
<footer>
<div class="panel panel-primary" style="padding:2px;width:1200px;height:220px;position:relative;top:30px;left:30px;border:4px black solid">
  <div class="panel-body"STYLE="color:red;font-size:30;diplay:underlined"> REVIEWS</div>
<button type="button" class="btn btn-info btn-lg"data-toggle="modal" data-target="#myModal">ADD COMMENT</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">COMMENT HERE</h4>
      </div>
      <div class="modal-body">
	  <form action="reguser.php?rest=<?php echo $rest;  ?>" method="POST">
	  <input type="textarea" name="comments" cols="500" rows="500">
	  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">SUBMIT</button>
		
		<?php
		
		if(isset($_POST['comments']))
		{
			if(!empty($_POST['comments']))
			{
				$com=$_POST['comments'];
				$query="insert into comments (`Cid`, `username`, `rname`, `reviews`) values ('NULL','user','resname','$com');";
				if($query_run=mysql_query($query))
					echo 'comment added succesfully';
			}
		}
		
		?>
      </div>
    </div>

  </div>
  

</div>
</div>
</div>
</body>

</html>