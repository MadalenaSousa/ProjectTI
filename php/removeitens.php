<?php
session_start();

array_pop($_SESSION['articles']);

header('Location: ../carrinho.php');