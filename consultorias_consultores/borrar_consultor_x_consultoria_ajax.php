<?php

include_once '../config/dbconfig.php';
if ($crud_consultoria_consultores->deleteConsultorEnConsultoria($_GET['id'])) {
    echo "{\"borrado\":\"true\"}";
} else {
    echo "{\"borrado\":\"false\"}";
}
exit();

