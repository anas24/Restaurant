<?php
    if(!isset($_GET['restaurant']))
	{
	 header("location:restaurant_signup.php");	
	}
	else 
	{
		#session starts
		session_start();
		$rest=$_GET['restaurant'];
		$_SESSION[$rest]=$rest;
	}
	
    include('config/generalcss.php');
	include('config/js.php');
	include('config/database.php');
    $result=mysql_query("SELECT * FROM `restaurantuser` where name='$rest'")
    or die(mysql_error());
    $page=mysql_fetch_assoc($result);
    $r1=mysql_query("SELECT `items`,`price` FROM `fooditems` where Rname='$rest' ");
    $r2=mysql_query("SELECT username,reviews FROM comments where rname='$rest'");
	$r3=mysql_query("SELECT image FROM restaurantdetails where name= '$rest'");
	$p3=mysql_fetch_assoc($r3);
    $p2=mysql_fetch_assoc($r2);
?>
<html>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<body class="" style="text-align:center">
		<div class="" style="background-image:url('<?php echo $p3['image'];?>')">
		<a href="logout.php" class="btn btn-info" role="button">Log Out</a>
		<h1> <?php echo $page['header'];?> </h1>
		<p> <?php echo $page['restaurant page'];?> </p>
	
	<div class="" style="text-align:left;padding-left:4px">
		<table>
			<th> ITEMS </th>
		</table>
		</div>
	
	
	
	

	
	
	  <div class="" style="background-image:url('<?php $p3['image'];?>')"></div>	
	  <?php 
	  while($p1=mysql_fetch_assoc($r1))
	{?>
	  
		<div class="" style="text-align:left;padding-left:4px">
		
			<table class="" style="border:1px black dashed;padding-left:2px;padding:4px">
		<tr>
			<td> <?php echo $p1['items']  ;
			echo   - $p1['price'];?> </td>
		</tr>
			</table>
		</div>
<?php } ?>
<form   action="restaurantadmin.php?restaurant=<?php echo $rest;  ?>" method="POST">
	<div class="" style="padding-top:-40px;padding-left:480px;padding-bottom:50px">
		<div class="panel panel-default" style="padding-left:80px;;max-width:500">
			<div class="panel-body" style="max-height:150;align:center">
				<div class="form-group" style="text-align:center">
					<div class="col-md-10">
						<label for="usr">ADD A NEW DISH:</label>
						<input type="text" class="form-control" id="usr" name="newdish"><br>
						<input type="number" class="form-control" id="usr" name="price"><br>
						<button type="submit" class="btn btn-info">SUBMIT</button>
						
						<?php
		    
		 if(isset($_POST['newdish']) && isset($_POST['price']))
		 {
			 
             if(empty($_POST['newdish']) )
			 echo "please write a dish <br>";
		    
             if(empty($_POST['price']) )
			 echo "please write a price <br>";
			
			if( !empty($_POST['newdish']) && !empty($_POST['price']))
			{
				$dish=$_POST['newdish'];
				$price=$_POST['price'];
				$query="INSERT INTO `fooditems` (`Fid`, `Rname`, `items`, `price`, `availability`) VALUES (NULL, '$rest', '$dish', '$price', 'YES');";
				if($query_run=mysql_query($query))
				{
					echo 'item added succesfully';
				}
			}
				
         }	?>	 
						
					
		
					

					
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	</form>
	
<form   action="restaurantadmin.php?restaurant=<?php echo $rest;  ?>" method="POST">
	<div class="" style="padding-top:-40px;padding-left:480px;padding-bottom:50px">
		<div class="panel panel-default" style="padding-left:80px;;max-width:500">
			<div class="panel-body" style="max-height:150;align:center">
				<div class="form-group" style="text-align:center">
					<div class="col-md-10">
						<label for="usr">UPDATE PRICE OF DISH:</label>
						<input type="text" class="form-control" id="usr" name="newdish1"><br>
						<input type="number" class="form-control" id="usr" name="price1"><br>
						<button type="submit" class="btn btn-info">SUBMIT</button>
						
						<?php
		 if(isset($_POST['newdish1']) && isset($_POST['price1']))
		 {
			 
             if(empty($_POST['newdish1']) )
			 echo "please write a dish <br>";
		    
             if(empty($_POST['price1']) )
			 echo "please write a price <br>";
			
			if( !empty($_POST['newdish1']) && !empty($_POST['price1']))
			{
				$dish=$_POST['newdish1'];
				$price=$_POST['price1'];
				$query="UPDATE `fooditems` SET `price`='$price' WHERE `items`='$dish';";
				if($query_run=mysql_query($query))
				{
					echo 'rate updated succesfully';
				}
			}
				
         }	?>	 
				
	
	
	
	
				
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	</form>
	<form   action="restaurantadmin.php?restaurant=<?php echo $rest;  ?>" method="POST">
	<div class="" style="padding-top:-40px;padding-left:480px;padding-bottom:50px">
		<div class="panel panel-default" style="padding-left:80px;;max-width:500">
			<div class="panel-body" style="max-height:150;align:center">
				<div class="form-group" style="text-align:center"> 
					<div class="col-md-10">
						<label for="usr">REMOVE A DISH:</label>
						<input type="text" class="form-control" id="usr" name="dish"><br>
						<button type="submit" class="btn btn-info">SUBMIT</button>
						
						
									<?php
		   
		 if(isset($_POST['dish']) )
		 {
			 
             if(empty($_POST['dish']) )
			 echo "please write a dish <br>";
		    
             
			if( !empty($_POST['dish']) )
			{
				$dish1=$_POST['dish'];
				
				$query="DELETE FROM `fooditems` WHERE `items`='$dish1';";
				if($query_run=mysql_query($query))
				{
					
					echo 'item deleted succesfully';
				}
			}
				
         }	?>	 
						
						
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>
	
</form>
    <div class="container" style="padding-top:-40px;padding-left:480px;padding-bottom:50px">
        <div class="panel panel-default" style="padding-left:80px;;max-width:500">
			<div class="panel-body" style="max-height:400;align:center">
				<div class="form-group" style="text-align:center">
					<div class="col-md-10">
						<h3> RECENT ORDERS</h3>
						<label for="usr">first order:</label>
						<input type="text" class="form-control" id="usr"><br>
						<label for="usr">second order:</label>
						<input type="text" class="form-control" id="usr"><br>
					</div>
				</div>
			</div>
		</div>
    </div>
	<div class="footer">
		<div class="panel panel-default" style="padding-left:80px">
			<div class="panel-body" style="align:left">
				<div class="text-left">
				<h2> REVIEWS </h2>
				<h3> <?php echo $p2['username'];?></h3>
				<p> <?php echo$p2['reviews'];?></p>
				</div>
			</div>
		</div>
	</div>	
 </body>
</html>