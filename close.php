<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 26/07/2017
 * Time: 17:20
 */
session_start();
session_destroy();
header("Location:index.php");
