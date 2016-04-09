<?php
include('config/cssgeneral.php');
include('config/js.php');
include('config/connection.php');
	$search = $_GET['name'];
	$pages = query_search($search);	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php
			foreach ($pages as $page){
			echo $page['name'];
			}
			?>
		</title>
	</head>
	<body>
				<nav class="navbar navbar-inverse">
		            <div class="container-fluid">
		               <div class="navbar-header">
		                    <p class="navbar-brand" href="#"><?php
		                                                         foreach( $pages as $page)
																 {
																 	echo $page['header'];
																 }
		                    	                                 ?></p>
		               </div>
		           </div>
		       </nav>
		<div class="row">
			<div class="col-md-4">
				<table>
								<th> ITEMS </th>
				</table>
				<?php 
				         $q="SELECT items,price FROM fooditems where Rname='$_GET[name]'";
						 $r1=mysqli_query($dbc, $q);
						 while($p1=mysqli_fetch_assoc($r1))
						{?>
						<div class="list-group">
								  <p class="list-group-item"><?php echo $p1['items'];?></p>
								  <p class="list-group-item"> PRICE RS <?php echo $p1['price'];?> per pc</p> 
						</div>
					<?php } ?>
								
			</div>
			<div class="col-md-8">
			   <?php
			foreach ($pages as $page) {
				echo $page['restaurant page'];
			}
		       ?>
		   </div>
		</div>	
	</body>
</html>