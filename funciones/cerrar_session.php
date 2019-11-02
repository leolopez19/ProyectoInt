<?php
session_start();
session_destroy ();
header("Location:../general/inicio.php");