<?php
include "session_dosen.php";
?>
<?php ob_start();
 include "conn.php";
 
 mysql_query("delete from downloadm where id='$_GET[id]'");
 header('location:index.php?p=lihattugasmhs');

?>