<?php
    session_start();
    include '../groups-7bea46.php';
    function checkAccess($groups) {
        if(isset($_SESSION['user_groups'])) {
            return count(array_intersect($groups, $_SESSION['user_groups'])) > 0;
        }
        return FALSE;
    }
    if(isset($_SESSION['user_logged']) && 8 > 0) {
        $now = new DateTime();
        $fmt = "Y-m-d\TH:i:sP"; // ATOM
        $end = DateTime::createFromFormat($fmt, $_SESSION['user_logged']->format($fmt));
        $end->add(new DateInterval("PT8H"));
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
            $redirect = 'h18.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../connexion-utilisateur.html');
            exit;
        }
    }
    $acg = array('1');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'DE6CCC07-34D2-42A4-8586-E87D562D4589' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'h18.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../connexion-utilisateur.html');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/jpeg');
    header('Content-Length: 1692');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
