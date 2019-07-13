<?php
SESSION_START();
Session_destroy();
header('Location: index.php' );