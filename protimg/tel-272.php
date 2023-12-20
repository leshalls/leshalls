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
    header('Content-Length: 2859');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
