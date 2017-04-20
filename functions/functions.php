<?php
$con = mysqli_connect("localhost","root","","stampeddb");
//getting the categories

function getCats () {
	global $con;
	$get_cats = "select * from categories";
	$run_cats = mysqli_query($con, $get_cats);

	while ($row_cats = mysqli_fetch_array($run_cats)) {
		$cat_id = $row_cats['cat_id'];
		$cat_title = $row_cats['cat_title'];

	echo "<li><a href='products.php?cat=$cat_id'>$cat_title</a></li>";
	}
}

//getting the paper kind

function getPaperKind () {
	global $con;
	$get_PaperKind = "select * from paper_kind";
	$run_PaperKind = mysqli_query ($con, $get_PaperKind);

	while ($row_PaperKind = mysqli_fetch_array($run_PaperKind)) {
		$pk_id = $row_PaperKind['pk_id'];
		$pk_title = $row_PaperKind['pk_title'];

	echo "<li><a href='products.php?pk=$pk_id'>$pk_title</a></li>";
	}
}

function getPrintFinish () {
	global $con;
	$get_PrintFinish = "select * from print_finish";
	$run_PrintFinish = mysqli_query ($con, $get_PrintFinish);

	while ($row_PrintFinish = mysqli_fetch_array($run_PrintFinish)) {
		$pf_id = $row_PrintFinish['pf_id'];
		$pf_title = $row_PrintFinish['pf_title'];

	echo "<li><a href='#'>$pf_title</a></li>";
	}
}

function getPro() {

	if(!isset($_GET['cat'])) {
		if(!isset($_GET['paper_type'])) {
			global $con;
			$get_pro = "select * from products order by RAND() LIMIT 0,6";
			$run_pro = mysqli_query($con,$get_pro);
				while($row_pro=mysqli_fetch_array($run_pro)){
					$pro_id = $row_pro['product_id'];
					$pro_cat = $row_pro['product_cat'];
					$pro_pk = $row_pro['product_paperkind'];
					$pro_pf = $row_pro['product_printfinish'];
					$pro_title = $row_pro['product_title'];
					$pro_price = $row_pro['product_price'];
					$pro_img = $row_pro['product_img']; 
				
				echo "
					<div id='single_product'>
						 <center><h3><?=$pro_title?></h3>
						 <div class='effects'>
							<img src='admin_area/product_images/$pro_img'  class='columns'  width='320' height='150'/>
							<p><b>Php $pro_price</b></p>
							<a href='details.php?pro_id=$pro_id' style='float: left;'>Details</a>

							</a>
						 </div>

					</div>
				";
				
		}
	}
}
}


?>