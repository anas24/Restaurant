<?php
	function query_search($search){
		global $dbc;
		$name = $search;
		$pages = array();
		$query= "SELECT * FROM restaurantuser WHERE name='$name'";
		$result=mysqli_query($dbc, $query);
		while ($row = mysqli_fetch_array($result)){
			$pages[] = $row;
		}
		return $pages;
	}	
?>