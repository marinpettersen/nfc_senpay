<?php
	

	if($_POST['source']='py'){

		include "../config/koneksi.php";
		
		$id_card = $_POST['card_id'];

		$query = "SELECT * FROM customer WHERE id_card='$id_card' AND status='1'";
		$sql = mysqli_query($connect, $query);


		if(mysqli_num_rows($sql)>0){
			$data = mysqli_fetch_array($sql, MYSQLI_ASSOC);
			echo $data['saldo'];
		}else{
			echo '0';
		}
	}

?>