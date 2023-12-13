<?php
function check_email() {
    if(isset($_POST['email'])) {
        $mail = $_POST['email'];
        if(str_contains($mail, '@') && str_contains($mail, '.')) {
            echo 'mail valida';
        } else {
            echo 'mail non valida';
        }
    }
}

?>