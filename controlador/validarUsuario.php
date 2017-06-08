<?php
include '../librerias.php';


$oUsu=new Usuario($_REQUEST["nomusuario"],$_REQUEST["clave"]);

if($oUsu->VerificaLocal())
    echo "todo bien charchazo";
else
    echo "todo mal po charchazo ql";

