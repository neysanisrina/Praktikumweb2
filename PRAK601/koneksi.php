<?php

$db = new mysqli("localhost","root","","buku");
	if($db->connect_errno > 0)
		echo "Ada masalah dengan database atau koneksi";
	?>