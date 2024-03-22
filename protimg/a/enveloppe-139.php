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
    header('Content-Length: 2994');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
