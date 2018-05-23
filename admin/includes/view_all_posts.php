 <table class="table table-hover">
        <thead>
	<tr>
		<th>Id</th>
		<th>Author</th>
		<th>Title</th>
		<th>Category</th>
		<th>Status</th>
		<th>Image</th>
		<th>Tags</th>
		<th>Comments</th>
		<th>Date</th>
	</tr>
        </thead>
     
<tbody>

<?php 

$query = "SELECT * FROM posts";
$select_posts = $connection->query($query);
	while ($row = mysqli_fetch_assoc($select_posts)) {
	$post_id =  $row['post_id']; 
	$posts_author =  $row['post_author'];
	$posts_title =  $row['post_author'];
	$posts_category =  $row['post_category_id'];
	$posts_status =  $row['post_status'];
	$posts_image =  $row['post_image'];
	$posts_tags =  $row['post_tags'];
	$posts_comments =  $row['post_comments_count'];
	$posts_date =  $row['post_date'];


	echo "<tr>";

	echo "<td>{$post_id}</td>";
	echo "<td>{$posts_author}</td>";
	echo "<td>{$posts_title}</td>";
	echo "<td>{$posts_category}</td>";
	echo "<td>{$posts_status}</td>";
	echo "<td><img width='100' height='50' src='../images/{$posts_image}'></td>";
	echo "<td>{$posts_tags}</td>";
	echo "<td>{$posts_comments}</td>";
	echo "<td>{$posts_date}</td>";

	echo "</tr>";


}




?>
				
						
<!-- 
		<td>10</td>
		<td>Heff</td>
		<td>Test Post</td>
		<td>Testing</td>
		<td>Status</td>
		<td>Image</td>
		<td>Tags</td>
		<td>Comments</td>
		<td>Date</td> -->

        </tbody>


</table>