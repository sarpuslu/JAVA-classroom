<?php
session_start();
session_destroy();
header("location:http://web.njit.edu/~hs293/index.php/site/index");
?>