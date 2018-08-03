<?php

	if($_POST['source']=='py'){
		date_default_timezone_set("Asia/Jakarta");
		include "../config/koneksi.php";

		$id_card = $_POST['card_id'];
		$seller_code = $_POST['seller_code'];
		$trans_type = $_POST['trans_type'];
		$cost = $_POST['cost'];
		$tanggal = date('Y-m-d H:i:s');

		$query = "SELECT * FROM customer WHERE id_card='$id_card' AND status='1' LIMIT 1";
		$sql = mysqli_query($connect,$query);

		if(mysqli_num_rows($sql)>0){

			$data_customer = mysqli_fetch_array($sql, MYSQLI_ASSOC);

			$remaining = $data_customer['saldo']-$cost;

			if($remaining>=0){
				$query = "INSERT INTO transaksi (trans_from, trans_to, trans_type, nominal, waktu) VALUES('$id_card', '$seller_code', '$trans_type', '$cost', '$tanggal')";
				$sql = mysqli_query($connect, $query);

				if($sql){

					$query = "UPDATE customer SET saldo=saldo-".$cost." WHERE id_card='$id_card'";
					$sql = mysqli_query($connect, $query);

					$query = "UPDATE seller SET saldo=saldo+".$cost." WHERE kode_seller='$seller_code'";
					$sql = mysqli_query($connect, $query);

					echo "3,".$remaining;
					return true;

				}else{
					echo '0,0';
					return true;
				}
			}/*else if($remaining<$cost||$remaining<=0){
				
			}*/
			else{
				echo '1,'.$remaining;
				return true;
			}
			
		}else{
			echo '0,0';
			return true;
		}


	}
?>