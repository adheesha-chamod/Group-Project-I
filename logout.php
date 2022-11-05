<?php

// any time you call session_destroy() this should be in there
session_start();

session_destroy();

header("Location: index.html");

exit;