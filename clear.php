<!-- Start session -->
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<body>

<!-- Remove all session variables and return to home -->
<?php
    session_destroy();
    session_unset();
    header("Location: index.php")
?>

</body>
</html>