<?php

// TO DO - Melhorar a aplicação de redirecionamento
function redirect($path): void {
    header('Location: ' . BASEPATH . $path);
}

?>