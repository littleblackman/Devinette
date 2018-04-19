<?php

session_destroy();
header('Location:index.php?action=home');
exit;