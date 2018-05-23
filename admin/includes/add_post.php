<?php 

if (isset($_POST['create_post'])) {
	
	$post_title =  $_POST['title'];
	$post_category =  $_POST['category'];
	$post_author =  $_POST['author'];
	$post_status =  $_POST['status'];

	$post_image =  $_FILES['image']['name'];
	$post_image_temp =  $_FILES['image']['temp_name'];

	$post_tags =  $_POST['tags'];
	$post_content =  $_POST['content'];
	$post_date =  date('d-m-y');
	$post_comemnt_count =  4;


	move_uploaded_file($post_image_temp, "../images/$post_image" );

}

 ?>



<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="title">Post Title</label>
		<input type="text" class="form-control" name="title">
	</div>
	
	<div class="form-group">
		<label for="post_category">Post Category Id</label>
		<input type="text" class="form-control" name="category">
	</div>

	<div class="form-group">
		<label for="title">Post Author</label>
		<input type="text" class="form-control" name="author">
	</div>

	<div class="form-group">
		<label for="title">Post Status</label>
		<input type="text" class="form-control" name="status">
	</div>

	<div class="form-group">
		<label for="post_image">Post Image</label>
		<input type="file" class="form-control" name="image">
	</div>

	<div class="form-group">
		<label for="title">Post Tags</label>
		<input type="text" class="form-control" name="tags">
	</div>

	<div class="form-group">
		<label for="title">Post Content</label>
		<input type="text" class="form-control" name="content">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
	</div>
</form>