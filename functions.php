
    <?php
    function check_email()
    {
        if (isset($_POST['email'])) {
            $mail = $_POST['email'];
            if (str_contains($mail, '@') && str_contains($mail, '.')) { ?>
                <h3 class="alert-success p-1 my-2">Mail valida</h3>
            <?php } else { ?>
                <h3 class="alert-danger p-1 my-2">Mail non valida</h3>
    <?php  }
        }
    } ?>
