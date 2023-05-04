<?php
$con = mysqli_connect("localhost", "root", "", "/--database_name--/");
if (!$con)
    echo ("Failed to connect DB");
