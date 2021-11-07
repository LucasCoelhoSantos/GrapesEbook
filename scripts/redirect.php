<?php

// TO DO
function redirect($path): void {
    header('Location: ' . BASEPATH . $path);
}

?>