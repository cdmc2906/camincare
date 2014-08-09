<?php
session_start();
session_destroy();
$_SESSION = array();
unset($_SESSION['loggedIn']);
session_write_close();
?>
<script language="javascript">
location.href="descargas.php";
</script>