<?php
session_start();

session_unset();
session_destroy();

header('Location: /hey/index.php');