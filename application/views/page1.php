<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Input Product Link</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
</head>
<body>

<div class="container-md">
	<h1>Welcome to Fabelio Input Link</h1>

	<div class="row">
		<div>
			<form action="<?php echo base_url(). 'product/add_link'; ?>" method="post">
				<div>
					<input type="text" class="form-control" name="nama" placeholder="Name of product" required>
				</div>
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="linkName" placeholder="Link of product" required>
				</div>
				<input type="submit" name="ok" value="Save">
			</form>
		</div>		
		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Link</th>
		      <th scope="col">Delete</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
				$no = 1;
				foreach($page_link as $u){ 
				?>
				<tr>
					<th scope="row"><?php echo $no++ ?></th>
					<td><?php echo $u->nama ?></td>
					<td><?php echo anchor('product/list/'.$u->idPageLink, $u->page_link) ?></td>
					<td>
					    <?php echo anchor('product/delete/'.$u->idPageLink,'Hapus',array('onclick' => "return confirm('Do you want delete this record')")); ?>
					</td>
				</tr>
			<?php }	?>
		  </tbody>
		</table>
	</div>

</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
</body>
</html>