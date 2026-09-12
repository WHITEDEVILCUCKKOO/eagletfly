<?php
// $mydb = mysqli_connect("host","user_name","password","database_name");

// $mydb = mysqli_connect("localhost", "daurp0duction_vicky1316", "vicky1316", "daurp0duction_vickytools_db_new");
$mydb = mysqli_connect("localhost", "daurp0duction_eagletfly", "eagletfly@@1327", "daurp0duction_db_eagletfly");
// $mydb = mysqli_connect("localhost", "vicky_tools_powertools", "Vicky__@@2002", "vickytools_db_new");
// $mydb = mysqli_connect("localhost", "root", "", "db_eagletfly");

if (!$mydb) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>