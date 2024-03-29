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
    header('Content-Length: 4703');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
