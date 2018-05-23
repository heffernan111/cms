<?php

function insert_categories(){
	global $connection;

        if (isset($_POST['submit'])) {
        	$cat_title = $_POST['cat_title'];
        	if ($cat_title == "" || empty($cat_title) ) {
        		echo "Please Enter Category";
        	}else {
        		$query = "INSERT INTO categories(cat_title) VALUE('{$cat_title}') ";
        		$create_category = $connection->query($query);

        		if (!$create_category) {
        			die('query failed');
        		}
        	}
        }   
}


function update_category(){
	global $connection;

	 if (isset($_GET['edit'])) {
	$cat_id = $_GET['edit'];
	include 'includes/update_categories.php';
	}


}


function find_all_categories(){
		global $connection;


$query = "SELECT * FROM categories LIMIT 4";
	$select_categories = $connection->query($query);
     while ($row = mysqli_fetch_assoc($select_categories)) {
        $cat_id =  $row['cat_id']; 
        $cat_title =  $row['cat_title'];
        echo "<tr>";
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
        echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
        echo "<tr>";
 	}

}


function delete_category(){
	global $connection;

		if (isset($_GET['delete'])) {
		$cat_id_delete = $_GET['delete'];
		$query = "DELETE FROM categories WHERE cat_id = {$cat_id_delete} ";
		$delete_query = $connection->query($query);
		header("Location: categories.php");
	}



}



 ?>