<?php
$log = FALSE;
session_unset ();
session_destroy ();
// redirection
$redir = 'index.php?page=accueil&msg=out';
header ('location: ' . $redir);
?>
