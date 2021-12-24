<?php
require '../function.php';

$no = $_GET["nomor_booking"];

if(deletTicket($no) > 0 ){
	echo "
	<script>
		alert('Data berhasil dihapus');
		document.location.href = 'ticket.php';
	</script>
	";
}else{
	echo "
	<script>
		alert('Data gagal dihapus');
		document.location.href = 'ticket.php';
	</script>
	";
}
