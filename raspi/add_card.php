<?php 
	
	if($_POST['source']=='py'){
		include "../config/koneksi.php";

		$card_number = $_POST['card_id'];

		$query = "SELECT * FROM customer WHERE id_card='$card_number'";
		$sql = mysqli_query($connect,$query);

		if(mysqli_num_rows($sql)>0){
			echo 'code_exist';
		}else{
			$query = "INSERT INTO customer (id_card) VALUES('$card_number')";
			$sql = mysqli_query($connect, $query);

			echo 'success';
		}

	}
	
	// json_encode(array('result'=>$sql));
	
?>