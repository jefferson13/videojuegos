<?php
$auxiliar=$_POST['general'];
echo "<form action='juegos.php' name='as' method='POST'>
		<input name='auxiliar' type='hidden' value='$auxiliar'/>
		<script type='text/javascript'>
			document.as.submit();
		</script>
</form>";

?>