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

    header('Content-Type: image/jpeg');
    header('Content-Length: 3216');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
