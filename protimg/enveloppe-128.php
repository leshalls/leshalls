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
    header('Content-Length: 2720');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
