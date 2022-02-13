<?php
if (preg_match('/[^a-z_\-0-9]/i', $_POST["username"])) {
    die("NOD");
}

if (preg_match('/[^a-z_\-0-9]/i', $_POST["password"])) {
    die("NOD");
}
