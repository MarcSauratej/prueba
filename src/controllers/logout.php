<?php

$update = update($db,$table,$usr,$lastlogin);

session_destroy();



header("Location: ?url=home");