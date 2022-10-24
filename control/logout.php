<?php

//start session
session_start();

//destroy session
session_destroy();

//redirect to Register
header("Location: ../index.php");