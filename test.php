<?php
$senhaHash = password_hash('senha123', PASSWORD_DEFAULT);
echo $senhaHash;
