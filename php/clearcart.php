<?php
session_start();
unset($_SESSION['articles']);
header('Location: ../loja.php');