<?php
	session_start();

	function seguranca() {
		if($_SESSION['user']['nome'] == null) {
			header("Location: ../PerfilEmpresa.php");
		}
	}
?>
