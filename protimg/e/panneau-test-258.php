<?php
    session_start();
    include '../../groups-7bea46.php';
    function checkAccess($groups) {
        if(isset($_SESSION['user_groups'])) {
            return count(array_intersect($groups, $_SESSION['user_groups'])) > 0;
        }
        return FALSE;
    }
    if(isset($_SESSION['user_logged']) && 1 > 0) {
        $now = new DateTime();
        $fmt = "Y-m-d\TH:i:sP"; // ATOM
        $end = DateTime::createFromFormat($fmt, $_SESSION['user_logged']->format($fmt));
        $end->add(new DateInterval("PT1H"));
        $diff = $now->diff($end);
        if($diff->invert) {
            unset($_SESSION['session_id']);
            unset($_SESSION['user_id']);
            unset($_SESSION['username']);
            unset($_SESSION['user_name']);
            unset($_SESSION['user_surname']);
            unset($_SESSION['user_email']);
            unset($_SESSION['user_info']);
            unset($_SESSION['user_groups']);
            unset($_SESSION['user_logged']);
            unset($_SESSION['user_redirect']);
            unset($_SESSION['user_redirect_attempt']);
            $redirect = 'page-11.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../../connexion-utilisateur.html');
            exit;
        }
    }
    $acg = array('0');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'DE6CCC07-34D2-42A4-8586-E87D562D4589' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'page-11.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../../connexion-utilisateur.html');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/png');
    header('Content-Length: 5823');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
