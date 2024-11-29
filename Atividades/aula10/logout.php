<?php
session_start();
session_destroy();
header("Location: exe02.html");
exit;
