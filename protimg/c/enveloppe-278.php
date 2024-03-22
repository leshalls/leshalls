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
    header('Content-Length: 5387');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
