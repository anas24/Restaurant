<?php 
    
	include('config/connection.php');
     if (isset($_GET['sca']) && !isset($_GET['logged']) ) 
	{
		header('Location: restaurants.php?name='.$_GET['sca']);
	}
	
	if(isset($_GET['sca'])&& isset($_SESSION['loggedin']))
	{
		echo 'you logged in successfully';
		
		//header('Location:reguser.php?rest='.$_GET['sca']);
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url(555.jpg)">
<div style="background-color:orange;pading-top:6px;width:270px;border:2px black solid">
<img src="food.jpg" width="250px" height="100px" style="align:left;position:relative;left:8px;top:4px">
<h2 style="text-align:center;padding:right:2px"> WELCOME TO FAMIAN</h2>
</div>
<div class="" style="border:2px black solid;padding-top:4px">

                <form action="index.php" method="POST" >
				
				<div class="row" style="display:inline">
				<a class="navbar-brand" href="registered_user_signup.php" style="color:purple;border:1px black solid">SIGN UP</a>
						<div class="form-group">
						<div class="col-md-2">
							<input type="text" class="form-control" placeholder="Username" name="user">
						</div>
						</div>
						<div class="form-group">
						<div class="col-md-2">
							<input type="password" class="form-control" placeholder="Password" name="pass">
						</div>
						</div>
						<button type="submit" class="btn btn-success">Login</button>
						<ul class="nav navbar-nav navbar-right">
				<li><a href="restaurant_signup.php"><span class="glyphicon glyphicon-user"></span> my restaurant</a></li>
				<li><a href="restaurant_signup.php"><span class="glyphicon glyphicon-user"></span> admin</a></li>
			   </ul>
			   </div>
			   	</form>
			   </div>
			   					

						<?php
						
						//echo 'jbsbsjbsjbs';
								if(isset($_POST['user']) && isset($_POST['pass']) )
										{
											
											$q="SELECT * FROM registereduser WHERE name='$_POST[user]' AND password='$_POST[pass]'" ;
											$r=mysqli_query($dbc, $q);
											$num=mysqli_num_rows($r);
											if($num==1)
											{
												session_start();
												$_SESSION['loggedin']=true;
											    $user=$_POST['user'];
											}
										
										}
									    
		                 ?>

<!--<div>
 <label for="usr" style="position:relative;left:580px;padding-top:4px">SEARCH HERE</label><br>
 <div class="col-sm-3"style="position:relative;left:470px">
  <input type="search" class="form-control" id="usr">
  </div>
  </div>
 
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">                         
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://biryanimaxx.com/images/banner04.jpg" width="1300" height="100">
      <div class="container">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://www.eveboo.com/wp-content/uploads/2013/04/chicken-skewers-hd-widescreen-wallpapers-.jpg">
      <div class="container">
        <div class="carousel-caption">
          
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://0.s3.envato.com/files/57402247/fap-09.jpg">
      <div class="container">
        <div class="carousel-caption">
          
        </div>
      </div>
    </div>
  </div>
  
            <div class="container">
			    <div class="row">
			        <div class="col-sm-6 col-sm-offset-3">
				        <form class="navbar-form navbar-left" role="search" action="index.php" method="GET">
					       <div class="jumbotron">
						       <div class="form-group" >
							     <input type="text"   class="form-control" placeholder="Search Restaurant" size="100" name="sca">
						        </div>
						         <input type="submit" name="submit" value="submit" class="btn btn-info btn-lg" />
					        </div>
				      </form>
				     </div>
			 </div>
			</div> 
<!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <i class="glyphicon glyphicon-chevron-left"></i>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <i class="glyphicon glyphicon-chevron-right"></i>
  </a>  
</div>
</div>
<!-- /.carousel -->
<hr>
<div class="container">

  <!-- FOOTER -->
  <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>@copyright:FAMIAN</p>
  </footer>

</div><!-- /.container -->
</body> 


</html>
