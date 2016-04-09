<?php
include('cssgeneral.php');
?>
<style>
html,body {
	height:100%;
	/*the html and body cannot have any padding or margins*/
	background-image: url(images/back1.jpg);
	backface-visibility: true;
}
/*wrapper for page content to push down the footer*/
#wrap{
	min-height:100%;
	height:auto;
	/*negative indent footer by its height*/
	margin: 0 auto -60px;
	/*pad bottom by footer height*/
	padding: 0 0 60px;
}
/* set the fixed height of footer here*/
#footer {
height= 60px;
background-color: #f5f5f5;
}

#abc {
	text-align: right;
}

.item {
	width: auto;
	height: 300px;
}

.absolute {
	position: absolute;
}

.nav {
	margin-right: 0;
}
</style>	