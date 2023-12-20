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

    header('Content-Type: text/css');
    header('Content-Length: 1434');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('Ym9keXstLWY6MTstLXN3OjBweDttaW4td2lkdGg6MTIwMHB4fS5tZW51LWNvbnRlbnR7Y3Vyc29yOnBvaW50ZXI7cG9zaXRpb246cmVsYXRpdmV9bGl7LXdlYmtpdC10YXAtaGlnaGxpZ2h0LWNvbG9yOnJnYmEoMCwwLDAsMCl9Ci52MXtkaXNwbGF5OmlubGluZS1ibG9jazt2ZXJ0aWNhbC1hbGlnbjp0b3A7b3ZlcmZsb3c6aGlkZGVuO291dGxpbmU6MH0ucHMxe3Bvc2l0aW9uOnJlbGF0aXZlO21hcmdpbi1sZWZ0OjQzOHB4O21hcmdpbi10b3A6ODNweH0uczF7bWluLXdpZHRoOjI5NHB4O21pbi1oZWlnaHQ6NTBweDtib3gtc2l6aW5nOmJvcmRlci1ib3g7d2lkdGg6Mjk0cHg7aGVpZ2h0OjMzcHg7cGFkZGluZy1yaWdodDowfS5jMXtib3JkZXI6MDstd2Via2l0LWJvcmRlci1yYWRpdXM6MDstbW96LWJvcmRlci1yYWRpdXM6MDtib3JkZXItcmFkaXVzOjA7YmFja2dyb3VuZC1jb2xvcjp0cmFuc3BhcmVudDtjb2xvcjojMDAwO3RyYW5zaXRpb246Y29sb3IgMC4yMHMsIGJvcmRlci1jb2xvciAwLjIwcywgYmFja2dyb3VuZC1jb2xvciAwLjIwcywgYmFja2dyb3VuZC1pbWFnZSAwLjIwczt0cmFuc2l0aW9uLXRpbWluZy1mdW5jdGlvbjpsaW5lYXJ9Lnoxe3BvaW50ZXItZXZlbnRzOmF1dG99LmExe2Rpc3BsYXk6aW5saW5lLWJsb2NrO3dpZHRoOjEwMCU7aGVpZ2h0OjEwMCV9LmYxe2ZvbnQtZmFtaWx5OiJDaW56ZWwgMSI7Zm9udC1zaXplOjI1cHg7Zm9udC1zaXplOmNhbGMoMjVweCAqIHZhcigtLWYpKTtsaW5lLWhlaWdodDoxLjMyMTtmb250LXdlaWdodDo3MDA7Zm9udC1zdHlsZTpub3JtYWw7dGV4dC1kZWNvcmF0aW9uOm5vbmU7dGV4dC10cmFuc2Zvcm06bm9uZTtsZXR0ZXItc3BhY2luZzpub3JtYWw7dGV4dC1zaGFkb3c6bm9uZTt0ZXh0LWluZGVudDowO3RleHQtYWxpZ246Y2VudGVyO2N1cnNvcjpwb2ludGVyO3BhZGRpbmctdG9wOjlweDtwYWRkaW5nLWJvdHRvbTo4cHh9LmMxOmhvdmVye2JhY2tncm91bmQtY2xpcDpwYWRkaW5nLWJveDtib3JkZXItY29sb3I6IzAwMDtjb2xvcjojY2I0YjE2fS5jMTphY3RpdmV7dHJhbnNpdGlvbjppbml0aWFsO2NvbG9yOiNmZmZ9LnYye2Rpc3BsYXk6aW5saW5lLWJsb2NrO3ZlcnRpY2FsLWFsaWduOnRvcH0ucHMye3Bvc2l0aW9uOnJlbGF0aXZlO21hcmdpbi1sZWZ0Oi0yNzNweDttYXJnaW4tdG9wOjEzM3B4fS5zMnttaW4td2lkdGg6MjUwcHg7d2lkdGg6MjUwcHg7bWluLWhlaWdodDoxODhweDtoZWlnaHQ6MTg4cHh9Lmkxe3Bvc2l0aW9uOmFic29sdXRlO2xlZnQ6MjBweDt3aWR0aDoyMTFweDtoZWlnaHQ6MTg4cHg7dG9wOjA7Ym9yZGVyOjB9LnYze2Rpc3BsYXk6bm9uZTt2ZXJ0aWNhbC1hbGlnbjp0b3A7b3ZlcmZsb3c6aGlkZGVuO291dGxpbmU6MH0uYzR7ZGlzcGxheTppbmxpbmUtYmxvY2s7cG9zaXRpb246cmVsYXRpdmU7bWFyZ2luLWxlZnQ6MDttYXJnaW4tdG9wOjB9');
