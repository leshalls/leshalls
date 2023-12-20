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
    header('Content-Length: 4766');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
