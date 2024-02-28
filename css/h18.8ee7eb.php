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
    header('Content-Length: 1430');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('Ym9keXstLWY6MTstLXN3OjBweDttaW4td2lkdGg6MTIwMHB4fS5tZW51LWNvbnRlbnR7Y3Vyc29yOnBvaW50ZXI7cG9zaXRpb246cmVsYXRpdmV9bGl7LXdlYmtpdC10YXAtaGlnaGxpZ2h0LWNvbG9yOnJnYmEoMCwwLDAsMCl9Ci52MXtkaXNwbGF5OmlubGluZS1ibG9jazt2ZXJ0aWNhbC1hbGlnbjp0b3A7b3ZlcmZsb3c6aGlkZGVuO291dGxpbmU6MH0ucHMxe3Bvc2l0aW9uOnJlbGF0aXZlO21hcmdpbi1sZWZ0OjQzOHB4O21hcmdpbi10b3A6ODNweH0uczF7bWluLXdpZHRoOjI5NHB4O21pbi1oZWlnaHQ6NTBweDtib3gtc2l6aW5nOmJvcmRlci1ib3g7d2lkdGg6Mjk0cHg7aGVpZ2h0OjMzcHg7cGFkZGluZy1yaWdodDowfS5jMXtib3JkZXI6MDstd2Via2l0LWJvcmRlci1yYWRpdXM6MDstbW96LWJvcmRlci1yYWRpdXM6MDtib3JkZXItcmFkaXVzOjA7YmFja2dyb3VuZC1jb2xvcjp0cmFuc3BhcmVudDtjb2xvcjojMDAwO3RyYW5zaXRpb246Y29sb3IgMC4ycywgYm9yZGVyLWNvbG9yIDAuMnMsIGJhY2tncm91bmQtY29sb3IgMC4ycywgYmFja2dyb3VuZC1pbWFnZSAwLjJzO3RyYW5zaXRpb24tdGltaW5nLWZ1bmN0aW9uOmxpbmVhcn0uejF7cG9pbnRlci1ldmVudHM6YXV0b30uYTF7ZGlzcGxheTppbmxpbmUtYmxvY2s7d2lkdGg6MTAwJTtoZWlnaHQ6MTAwJX0uZjF7Zm9udC1mYW1pbHk6IkNpbnplbCAxIjtmb250LXNpemU6MjVweDtmb250LXNpemU6Y2FsYygyNXB4ICogdmFyKC0tZikpO2xpbmUtaGVpZ2h0OjEuMzIxO2ZvbnQtd2VpZ2h0OjcwMDtmb250LXN0eWxlOm5vcm1hbDt0ZXh0LWRlY29yYXRpb246bm9uZTt0ZXh0LXRyYW5zZm9ybTpub25lO2xldHRlci1zcGFjaW5nOm5vcm1hbDt0ZXh0LXNoYWRvdzpub25lO3RleHQtaW5kZW50OjA7dGV4dC1hbGlnbjpjZW50ZXI7Y3Vyc29yOnBvaW50ZXI7cGFkZGluZy10b3A6OXB4O3BhZGRpbmctYm90dG9tOjhweH0uYzE6aG92ZXJ7YmFja2dyb3VuZC1jbGlwOnBhZGRpbmctYm94O2JvcmRlci1jb2xvcjojMDAwO2NvbG9yOiNjYjRiMTZ9LmMxOmFjdGl2ZXt0cmFuc2l0aW9uOmluaXRpYWw7Y29sb3I6I2ZmZn0udjJ7ZGlzcGxheTppbmxpbmUtYmxvY2s7dmVydGljYWwtYWxpZ246dG9wfS5wczJ7cG9zaXRpb246cmVsYXRpdmU7bWFyZ2luLWxlZnQ6LTI3M3B4O21hcmdpbi10b3A6MTMzcHh9LnMye21pbi13aWR0aDoyNTBweDt3aWR0aDoyNTBweDttaW4taGVpZ2h0OjE4OHB4O2hlaWdodDoxODhweH0uaTF7cG9zaXRpb246YWJzb2x1dGU7bGVmdDoyMHB4O3dpZHRoOjIxMXB4O2hlaWdodDoxODhweDt0b3A6MDtib3JkZXI6MH0udjN7ZGlzcGxheTpub25lO3ZlcnRpY2FsLWFsaWduOnRvcDtvdmVyZmxvdzpoaWRkZW47b3V0bGluZTowfS5jNHtkaXNwbGF5OmlubGluZS1ibG9jaztwb3NpdGlvbjpyZWxhdGl2ZTttYXJnaW4tbGVmdDowO21hcmdpbi10b3A6MH0=');
