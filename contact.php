<?php

if ($_POST["message"]) {
    mail("Collinsoga2@gmail.com", "Subject line", $_POST["Your "]. "From: an@email.address");
}

?>