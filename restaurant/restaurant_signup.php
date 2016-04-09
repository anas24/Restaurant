<?php include('config/database.php');?>
<!DOCTYPE>

<html>
	<head>
		<title>signup</title>
		
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
	     
	     <?php include('config/csssignup.php');?>
	     <?php include('config/js.php');?>
	</head>
	<body>
		
		<nav class="navbar navbar-default"
          <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">HOME PAGE</a>
               </div>
                   <form class="navbar-form navbar-left" role="search" action="restaurant_signup.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="User Name" name="username">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" name="password"">
        </div>
        <button type="submit" class="btn btn-danger">Login</button>
         
        <?php
		 if(isset($_POST['username']) && isset($_POST['password']))
		 {
			 $usern=$_POST['username'];
			 $passw=$_POST['password'];
			if(empty($usern)) 
			 echo 'Username Empty   ';
			 if(empty($passw))
			 echo 'Password Empty'; 	
             if(!empty($passw) && !empty($usern))
			 {
				$query = "SELECT `password` FROM `restaurantuser` WHERE `username` LIKE '$usern'";
				
				if($query_run=mysql_query($query))
				{
					
					if(mysql_num_rows($query_run)!=NULL)
					{
					while($query_row = mysql_fetch_assoc($query_run)){
					$ans=$query_row['password'];
					if($ans==$passw)
					{
						echo 'link';
						header("location:restaurantadmin.php?restaurant=$usern");
						
					}
					else
						echo 'password and username does not match';
						}
					}
					else
						echo 'username not found';
				}
				else
					echo 'query failed';
				
			 }				 
		 }
		 ?>
      </form>
            </div>
           </nav>
            
		 <form   action="restaurant_signup.php" method="POST">
		 <div class="col-xs-4">
             <label for="ex3">Restaurant Name</label>
               <input class="form-control" id="ex3" type="text" name="resname">
         </div>
         <br><br><br><br>
                <div class="col-xs-4">
            <label for="ex3">Username</label>
               <input class="form-control" id="ex3" type="text" name="user">
                  </div>
         <br><br><br><br>
                    <div class="col-xs-4">
                    <label for="ex3">email id</label>
                    <input class="form-control" id="ex3" type="email" name="emailid">
                    </div>
                       <br><br><br><br>
                <div class="col-xs-4">
                  <label for="ex3">password</label>
               <input class="form-control" id="ex3" type="password" name="pass">
                 </div>
               <br><br><br><br>
                  <div class="col-xs-4">
                     <label for="ex3">confirm password</label>
                       <input class="form-control" id="ex3" type="password" name="cpass">
                  </div>
                  <br><br><br><br>
                  <label for="Body">Body</label>
	     		  <textarea class="form-control" name="body" id="body" rows=4 placeholder="Enter about you restaurant"></textarea>
	     		    <div class="col-xs-4">
                       <label for="ex3">Paste background image url</label>
                       <input class="form-control" id="ex3" type="url" name="url">
                    </div> 
	     		    <br><br><br><br>
	     		    <div class="col-xs-4">
                       <label for="ex3">Restaurant Address</label>
                       <input class="form-control" id="ex3" type="text" name="address">
                    </div>        	 
                  <br><br><br><br>
                  
        <button type="submit" class="btn btn-success">DONE</button>   
         
         <?php
		    
		 if(isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['emailid'])  && isset($_POST['resname']) && isset($_POST['cpass']) && isset($_POST['body']) && isset($_POST['url']) && isset($_POST['address']))
		 {
			 
             if(empty($_POST['resname']))
			 echo "Restaurant Name Empty  <br>";			

			 if(empty($_POST['user'])) 
			 echo "Username Empty  <br>  ";
		 
			 if(empty($_POST['emailid']))
			 echo "Email ID Empty <br> " ;
             
			 
			 if(empty($_POST['pass']))
			 echo "Password Empty <br>" ;
             
			 if(empty($_POST['cpass']))
			 echo "Confirm Password Empty  <br>";
			 
			 if(empty($_POST['body']))
			 echo "Body of restaurant is empty <br>";
			 
			 if(empty($_POST['url']))
			 echo "image not given <br>";
			 
             if(empty($_POST['address']))
			 echo "address not given <br>";
			 
			 if($_POST['pass']!=$_POST['cpass'])
                echo "Password and Confirm Password Does Not Match <br>";	

             if(!empty($_POST['pass']) && !empty($_POST['user']) && !empty($_POST['resname']) && !empty($_POST['emailid']) && !empty($_POST['cpass']) && $_POST['pass']==$_POST['cpass'] && !empty($_POST['body']) && !empty($_POST['url']))
			 {
				 $user=$_POST['user'];
				 $pass=$_POST['pass'];
				 $email=$_POST['emailid'];
				 $resname=$_POST['resname'];
				 $body=$_POST['body'];
			     
				 echo $user;
				$query = "SELECT * FROM `restaurantuser` WHERE `name` LIKE '$user'";
				
				if($query_run=mysql_query($query))
				{
					
					if(mysql_num_rows($query_run)==NULL)
					{
				     
                     $query = "SELECT * FROM `restaurantuser` WHERE `email` LIKE '$email'";
				
				if($query_run=mysql_query($query))
				{
					
					if(mysql_num_rows($query_run)==NULL)
					{	
					 $query= " INSERT INTO `restaurantuser` ( `username`,`name`, `password`, `email`,`restaurant page`) VALUES ('$user','$resname','$pass','$email','$body') ";
					 if($query_run=mysql_query($query))
					 {
						 echo 'you successfully created a account. now you can log in';
					 }
					 else
						 echo 'Some problem in updating try again later';
					 
					 
					}
					else
						echo 'Email exists';
						
				}
				else
					echo '2nd query failed';					 
					
					}
					else
						echo 'Username exists';
						
				}
				else
					echo '1st query failed';
				
			 }			
		 }
		 ?>
		 
		</form>	
		<?php
		if(!empty($_POST['url']))
		{
			
		    $url=$_POST['url'];
			$address=$_POST['address'];
			$q="INSERT INTO `restaurantdetails` (`title`,`location`,`image`) VALUES ('$user','$url','$address')";
			$r=mysql_query($q);
			
		}
		?>	
      
	</body>
	
</html>