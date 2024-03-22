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
    header('Content-Length: 1837');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
