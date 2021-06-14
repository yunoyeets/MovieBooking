<?php
session_start();

?>
<html>
<body text="green">
<?php
    echo "CREATOR OF THIS REGISTRATION PAGE IS:--".$_SESSION["user"];
?>
</body>
</html>