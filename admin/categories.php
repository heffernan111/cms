
<?php include 'includes/admin_header.php'; ?>
	<div id="wrapper">
<!-- navigation -->
<?php include 'includes/admin_navigation.php'; ?>
<!-- content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Admin
                    <small>Author</small>
                </h1>
<!-- add category -->
				<div class="col-xs-6">  
<?php insert_categories();?>
<!-- add -->
<form action="" method="post">
	<div class="form-group">
		<label for="cat-title">Add Category</label>
		<input class="form-control" type="text" name="cat_title">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="submit" value="Add Category">
	</div>
</form>

<?php update_category();?>

</div>
<!-- category table -->
	<div class="col-xs-6">
		<table class="table table-hover">
			<thead>
				<th>Id</th>
				<th>Category Ttle</th>
			</thead>
		<tbody>
<?php find_all_categories();?>

<?php delete_category(); ?>
		</tbody>
		</table>

        </div>
    </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
        <!-- /#page-wrapper -->
<?php include 'includes/admin_footer.php'; ?>
