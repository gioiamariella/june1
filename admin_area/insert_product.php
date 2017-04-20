<!DOCTYPE>
<?php
	include("includes/db.php");
?>
<html>
	<head>
		<title>Administrator Dashboard</title>
		<link rel ="stylesheet" type="text/css" href="styles/style.css" />
		<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
		<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
		<script>
			tinymce.init({selector:'textarea'});
		</script>
	</head>
	<body>
	<h1 class="title">Administrator Dashboard</h2>
		<p class="desc">The <b>Administrator Dashboard</b>, or Admin Dash, is accesed by the administrator to control which content goes in and out of the website.</p>
	<div id="container">
				<form action = "insert_product.php" method = "post" enctype = "multipart/form-data">
					<table width="700" bgcolor="orange">
						<tr>
							<td colspan="8"><h2>Insert Approved Products Here</h2></td>
						</tr>
						<tr>
							<td>Product Title:</td>
							<td><input type="text" name="product_title" size="60" /></td>
						</tr>

						<tr>
							<td>Product Category:</td>
							<td>
								<select name="product_cat">
									<option>Select a Category</option>
									<?php
										$get_cats = "select * from categories";
										$run_cats = mysqli_query($con, $get_cats);

										while ($row_cats = mysqli_fetch_array($run_cats)) {
											$cat_id = $row_cats['cat_id'];
											$cat_title = $row_cats['cat_title'];

											echo "<option>$cat_title</option>";
										}
									?>
								</select>
							</td>
						</tr>

						<tr>
							<td>Product Paper Kind:</td>
							<td>
								<select name="product_pk">
									<option>Select a Paper Kind</option>
									<?php
										$get_PaperKind = "select * from paper_kind";
										$run_PaperKind = mysqli_query($con, $get_PaperKind);

										while ($row_PaperKind = mysqli_fetch_array($run_PaperKind)) {
											$pk_id = $row_PaperKind['pk_id'];
											$pk_title = $row_PaperKind['pk_title'];

											echo "<option value=$pk_id>$pk_title</option>";
										}
									?>
								</select>
							</td>
						</tr>

						<tr>
							<td>Product Print Finish:</td>
							<td>
								<select name="product_pf">
									<option>Select Print Finish</option>
									<?php
										$get_PrintFinish = "select * from print_finish";
										$run_PrintFinish = mysqli_query($con, $get_PrintFinish);

										while ($row_PrintFinish = mysqli_fetch_array($run_PrintFinish)) {
											$pf_id = $row_PrintFinish['pf_id'];
											$pf_title = $row_PrintFinish['pf_title'];

											echo "<option value=$pf_id>$pf_title</option>";
										}
									?>
								</select>

							</td>
						</tr>

						<tr>
							<td>Product Price:</td>
							<td><input type="text" name="product_price" /></td>
						</tr>

						<tr>
							<td>Product Description:</td>
							<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
						</tr>

						<tr>
							<td>Product Image:</td>
							<td><input type="file" name="product_image" /></td>
						</tr>

						<tr>
							<td>Product Keywords:</td>
							<td><input type="text" name="product_keywords" size="60" /></td>
						</tr>

						<tr>
							<td colspan="7"><input type="submit" name="insert_post" value="Insert Product Now" /></td>
						</tr>
					</table>
				</form>

			<b>Designer Files</b>
			<p>What the Designer uploads, the admins must check. Admins have the ability to approve or disapprove of the designer files. These are filtered into: pre-made templates, customer creations, and customer files themselves.</p>
		</div>
	</body>
</html>

<?php
	if(isset($_POST['insert_post'])) {
		
		//getting the text data from the fields
		$product_title = $_POST['product_title'];
		$product_cat = $_POST['product_cat'];
		$product_pk = $_POST['product_pk'];
		$product_pf = $_POST['product_pf'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$product_keywords = $_POST['product_keywords'];

		//getting the image from the field
		$product_image=$_FILES['product_image']['name'];
		$product_image_tmp=$_FILES['product_image']['tmp_name'];

		move_uploaded_file($product_image_tmp, "product_images/$product_image");

		$insert_product="insert into products (	product_cat,
												product_title,
												product_paperkind,
												product_printfinish,
												product_img,
												product_price,
												product_desc,
												product_keywords) values (
												'$product_cat',
												'$product_title',
												'$product_pk',
												'$product_pf',
												'$product_image',
												'$product_price',
												'$product_desc',
												'$product_keywords')";
		$insert_pro = mysqli_query($con, $insert_product);

		if($insert_pro) {
			echo "<script>alert('Product has been inserted!')</script>";
			echo "<script>window.open('insert_product.php','_self')</script>";
		}
	}
?>