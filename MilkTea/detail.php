<?php
	require 'database.php';

	if (isset($_GET["detail"])) {
    $id = (integer) $_GET['detail'];

    $sql = "SELECT * FROM milkteas WHERE id =" .$id. ";";
    $db->query($sql);
    $result =$db->query($sql)->fetch_all();
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>
	<style type="text/css">
		.flex2{
			display: flex;
		}
	</style>
</head>
<body>
	<form action="" method="get">
		<h1 class="title">DETAIL PRODUCT</h1>
        <?php

		for($i = 0; $i < count($result); $i++){
		?>
	        <div class="flex2">
	            <img class="img" src="../image/<?php echo $result[$i][4];  ?>" width="350px" ; height="340px" ;>
	            <div class="content">
	                <p class="name"><?php echo $result[$i][1];?></p>
	                <p class="type"><?php echo $result[$i][3];?></p>
	                <p class="price"><?php echo $result[$i][2];?></p>
	                <button class="btn btn-warning">Add to cart</button>
	            </div>
	        </div>

	    <?php
			}
		?>
	</form>
</body>
</html>
