<?php
    session_start();
    include 'groups-7bea46.php';
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
            header('Location: connexion-utilisateur.html');
            exit;
        }
    }
    $acg = isset($access_control_groups['96670ACF-2913-48AD-B701-0CEBD969460B']) ? $access_control_groups['96670ACF-2913-48AD-B701-0CEBD969460B'] : NULL;
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'DE6CCC07-34D2-42A4-8586-E87D562D4589' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'page-11.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: connexion-utilisateur.html');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

if(!defined('PHP_VERSION_ID')||PHP_VERSION_ID<50600){print "Sparkle requires at least PHP 5.6, you have ".phpversion().". Contact your web host to fix this.<br>";exit();}if(! strstr(ini_get('disable_functions'), 'ini_set')) {ini_set('default_charset','UTF-8');}header('Content-Type: text/html; charset=UTF-8');header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');header('Cache-Control: post-check=0, pre-check=0', false);header('Pragma: no-cache'); ?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Page 11</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="http://locationhallsduroeulx.hol.es/page-11.php">
<meta name="robots" content="max-image-preview:large">
<meta name="viewport" content="width=1200">
<style>html,body{-webkit-text-zoom:reset !important}@font-face{font-display:block;font-family:"Cinzel 1";src:url('css/Cinzel-Bold.woff2') format('woff2'),url('css/Cinzel-Bold.woff') format('woff');font-weight:700}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;line-break:normal;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}[data-marker]::before{content:attr(data-marker) ' ';-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right;shape-outside:content-box}.btf{display:none}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0;--z:1;zoom:var(--z)}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=date],input[type=email],input[type=number],input[type=password],input[type=text],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial !important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}.menu-content{cursor:pointer;position:relative}li{-webkit-tap-highlight-color:rgba(0,0,0,0)}
.slick-slider{position:relative;display:block;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-ms-touch-action:none;-webkit-tap-highlight-color:transparent;pointer-events:none}
.slick-list{position:relative;display:block;margin:0;padding:0}
.slick-list:focus{outline:none}
.slick-loading .slick-list{background:white url("css/ajax-loader.gif") center center no-repeat}
.slick-list .dragging{cursor:pointer}
.slick-slider .slick-list,.slick-track,.slick-slide{-webkit-transform:translate(0,0);-moz-transform:translate(0,0);-ms-transform:translate(0,0);-o-transform:translate(0,0);transform:translate(0,0)}
.slick-track{position:relative;height:100%;left:0;top:0;display:inline-block;zoom:1}
.slick-track:before,.slick-track:after{content:"";display:table}
.slick-track:after{clear:both}
.slick-loading .slick-track{display:none}
.slick-slide{position:static;float:left;height:100%;min-height:1px;display:none}
.slick-active picture{pointer-events:auto}
.slick-slide img{display:block}
.slick-slide .slick-loading img{display:none}
.slick-initialized .slick-slide{display:block}
.slick-loading .slick-slide{display:none}
.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}
@font-face{font-family:"slick";src:url("css/slick.eot");src:url("css/slick.eot?#iefix") format("embedded-opentype"),url("css/slick.woff") format("woff"),url("css/slick.ttf") format("truetype"),url("css/slick.svg#slick") format("svg");font-weight:normal;font-style:normal}
.slick-prev:before{content:"\2190"}
.slick-next:before{content:"\2192"}
.slick-prev,.slick-next{position:absolute;display:block;line-height:0;font-size:0;cursor:pointer;background:transparent;color:transparent;top:50%;padding:0;border:none;outline:none}
.slick-prev:hover,.slick-prev:focus,.slick-next:hover,.slick-next:focus{outline:none;background:transparent;color:transparent}
.slick-prev:hover:before,.slick-prev:focus:before,.slick-next:hover:before,.slick-next:focus:before{opacity:1}
.slick-prev .slick-disabled:before,.slick-next .slick-disabled:before{opacity:0.25}
.slick-prev:before,.slick-next:before{font-family:"slick";line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
.slick-dots{position:absolute;list-style:none;display:block;text-align:center;padding:0;width:100%}
.slick-dots li{position:relative;display:inline-block;padding:0;cursor:pointer}
.slick-dots li button:hover,.slick-dots li button:focus{outline:none}
.slick-dots li button:hover:before,.slick-dots li button:focus:before{opacity:1}
.slick-dots li button{border:0;background:transparent;display:block;outline:none;line-height:0;font-size:0;color:transparent;padding:5px;cursor:pointer}
.slick-dots li button:before{position:absolute;top:0;left:0;content:"\2022";font-family:"slick";text-align:center;color:black;opacity:0.25;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
[dir="rtl"] .slick-slide{float:right}
[dir="rtl"] .slick-next:before{content:"\2190"}
[dir="rtl"] .slick-prev:before{content:"\2192"}
.slidex {display:none}
.slider-nav .slick-list {overflow:hidden}
.slider-nav button {pointer-events:auto}
#b{background-color:#fff}.ps2{position:relative;margin-top:59px}.v2{display:block;vertical-align:top}.s2{width:1200px;margin-left:auto;margin-right:auto;min-height:1702px}.z2{pointer-events:none}.v3{display:inline-block;vertical-align:top}.ps3{position:relative;margin-left:395px;margin-top:0}.s3{min-width:392px;width:392px;min-height:161px}.ps4{position:relative;margin-left:0;margin-top:0}.s4{min-width:392px;width:392px;min-height:161px;line-height:0}.ps5{position:relative;margin-left:77px;margin-top:0}.s5{min-width:258px;width:258px;min-height:105px;height:105px}.z3{z-index:1;pointer-events:auto}.a2{display:block}.i2{position:absolute;left:0;width:258px;height:94px;top:5px;border:0}.ps6{position:relative;margin-left:77px;margin-top:-105px}.z4{z-index:4;pointer-events:auto}.v4{display:inline-block;vertical-align:top;overflow:visible}.ps7{position:relative;margin-left:0;margin-top:-16px}.s6{min-width:392px;width:392px;height:72px}.z5{z-index:3;pointer-events:auto}.s7{min-width:392px;width:392px;min-height:72px;height:72px}.m1{padding:0px 0px 0px 0px}.ml1{outline:0}.mcv1{display:inline-block}.s8{min-width:392px;width:392px;min-height:72px}.c4{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:transparent}.ps8{position:relative;margin-left:0;margin-top:12px}.s9{min-width:392px;width:392px;min-height:47px}.z6{pointer-events:auto}.p1{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f1{font-family:"Cinzel 1";font-size:28px;font-size:calc(28px * var(--f));line-height:1.465;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.ps9{position:relative;margin-left:16px;margin-top:39px}.s10{min-width:1172px;width:1172px;min-height:1321px}.s11{min-width:1172px;width:1172px;min-height:1321px;line-height:0}.s12{min-width:1172px;width:1172px;min-height:1111px}.z7{z-index:2;pointer-events:auto}.s13{display:block;height:723px;width:100%;overflow:hidden}.s15{display:block;width:100%;overflow:hidden}.un1 .slider-for{height:723px}.un1 .slider-nav{height:357px}.un1 .slider-nav picture{width:347px;height:347px}.un1 .slick-prev,.un1 .slick-next{height:20px;width:20px;margin-top:-10px;pointer-events:auto}
.un1 .slick-prev:before,.un1 .slick-next:before{font-size:20px;color:#404040;opacity:0.75}
.un1 .slick-prev{left:-19px}
.un1 .slick-next{right:-19px}
.un1 .slider-for{margin-bottom:7px}
.un1 .slider-nav{margin-bottom:0px}
.un1 .slider-nav picture{border:solid 5px transparent}
.un1 .slider-nav .slick-center picture{border-color:#9eafb9}
.un1 .slick-dots{bottom:-24px}
.un1 .slick-dots li{height:20px;width:20px;margin:0 5px}
.un1 .slick-dots li button{height:20px;width:20px}
.un1 .slick-dots li button:before{width:20px;height:20px;font-size:6px;line-height:20px}
.un1 .slick-dots .slick-active button:before{color:#404040;opacity:0.75}
[dir="rtl"] .un1 .slick-next{right:auto;left:-19px}
[dir="rtl"] .un1 .slick-prev{right:-19px;left:auto}
.v5{display:none;vertical-align:top}.ps11{position:relative;margin-left:428px;margin-top:71px}.s17{min-width:317px;width:317px;min-height:139px;height:139px}.z9{z-index:5;pointer-events:auto}.i3{position:absolute;left:89px;width:139px;height:139px;top:0;border:0}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/4/apple-touch-icon-40259a.png">
<meta name="msapplication-TileImage" content="images/h/mstile-144x144-1f4a0a.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/page-11.cc8e1c.php" media="print">
<noscript><link rel="stylesheet" href="css/page-11.cc8e1c.php" type="text/css"></noscript>
</head>
<body id="b">
<script>var p=document.createElement("P");p.innerHTML="&nbsp;",p.style.cssText="position:fixed;visible:hidden;font-size:100px;zoom:1",document.body.appendChild(p);var rsz=function(e){return function(){var r=Math.trunc(1e3/parseFloat(window.getComputedStyle(e).getPropertyValue("font-size")))/10,t=document.body;r!=t.style.getPropertyValue("--f")&&t.style.setProperty("--f",r)}}(p);if("ResizeObserver"in window){var ro=new ResizeObserver(rsz);ro.observe(p)}else if("requestAnimationFrame"in window){var raf=function(){rsz(),requestAnimationFrame(raf)};requestAnimationFrame(raf)}else setInterval(rsz,100);</script>

<div class="ps2 v2 s2 z2">
<div class="v3 ps3 s3">
<div class="v3 ps4 s4">
<div class="v3 ps5 s5 c3 z3">
<a href="#" class="a2"><picture><source srcset="protimg/e/panneau-test-258.php 1x, protimg/l/panneau-test-516.php 2x, protimg/e/panneau-test-774.php 3x"><img src="protimg/l/panneau-test-516.php" class="i2"></picture></a>
</div>
<div class="v3 ps6 s5 c3 z4">
<a href="#" class="a2"><picture><source srcset="protimg/e/panneau-test-258.php 1x, protimg/l/panneau-test-516.php 2x, protimg/e/panneau-test-774.php 3x"><img src="protimg/l/panneau-test-516.php" class="i2"></picture></a>
</div>
<div class="v4 ps7 s6 z5">
<ul class="menu-dropdown-1 v3 ps4 s7 m1" id="m1">
<li class="v2 ps4 s6">
<a href="#" class="ml1"><div class="menu-content mcv1"><div class="v3 ps4 s8 c4 z2"><div class="v3 ps8 s9 c3 z6"><p class="p1 f1">Retour &agrave; l'accueil</p></div></div></div></a>
</li>
</ul>
</div>
</div>
</div>
<div class="v3 ps9 s10">
<div class="v3 ps4 s11">
<div class="un1 v3 ps4 s12 c3 z7 ga1">
<div class="slider slider-for" style="z-index:1">
<div><picture class="s13"><source srcset="protimg/4/13600360_246139562436059_8362181060954386341_n-1172.php 1x"><img src="protimg/4/13600360_246139562436059_8362181060954386341_n-1172.php" class="s14"></picture></div>
<div class="slidex"><picture class="s13"><source data-srcset="protimg/t/13612122_246139312436084_2621503771886208580_n-1172.php 1x"><img data-src="protimg/t/13612122_246139312436084_2621503771886208580_n-1172.php" class="s14"></picture></div>
<div class="slidex"><picture class="s13"><source data-srcset="protimg/a/13620072_246139365769412_5095765779822726102_n-1172.php 1x"><img data-src="protimg/a/13620072_246139365769412_5095765779822726102_n-1172.php" class="s14"></picture></div>
<div class="slidex"><picture class="s13"><source data-srcset="protimg/l/13626430_246139219102760_4707338522734708699_n-1172.php 1x"><img data-src="protimg/l/13626430_246139219102760_4707338522734708699_n-1172.php" class="s14"></picture></div>
<div class="slidex"><picture class="s13"><source data-srcset="protimg/t/13439053_246139529102729_4469109987299840201_n-1172.php 1x"><img data-src="protimg/t/13439053_246139529102729_4469109987299840201_n-1172.php" class="s14"></picture></div>
<div class="slidex"><picture class="s13"><source data-srcset="protimg/p/13592738_246139272436088_1780229008104652575_n-1172.php 1x"><img data-src="protimg/p/13592738_246139272436088_1780229008104652575_n-1172.php" class="s14"></picture></div>
<div class="slidex"><picture class="s13"><source data-srcset="protimg/8/13615391_246139315769417_8297429507336115324_n-1172.php 1x"><img data-src="protimg/8/13615391_246139315769417_8297429507336115324_n-1172.php" class="s14"></picture></div>
<div class="slidex"><picture class="s13"><source data-srcset="protimg/v/13620386_246139655769383_7483594295478707321_n-1172.php 1x"><img data-src="protimg/v/13620386_246139655769383_7483594295478707321_n-1172.php" class="s14"></picture></div>
<div class="slidex"><picture class="s13"><source data-srcset="protimg/a/13557793_246139412436074_5046311174167792904_n-1172.php 1x"><img data-src="protimg/a/13557793_246139412436074_5046311174167792904_n-1172.php" class="s14"></picture></div>
<div class="slidex"><picture class="s13"><source data-srcset="protimg/c/13592595_246139509102731_8147423203655109797_n-1172.php 1x"><img data-src="protimg/c/13592595_246139509102731_8147423203655109797_n-1172.php" class="s14"></picture></div>
<div class="slidex"><picture class="s13"><source data-srcset="protimg/e/13626372_246139229102759_3522314068678426151_n-1172.php 1x"><img data-src="protimg/e/13626372_246139229102759_3522314068678426151_n-1172.php" class="s14"></picture></div>
<div class="slidex"><picture class="s13"><source data-srcset="protimg/a/13631543_246139215769427_989502819282554804_n-1172.php 1x"><img data-src="protimg/a/13631543_246139215769427_989502819282554804_n-1172.php" class="s14"></picture></div>
<div class="slidex"><picture class="s13"><source data-srcset="protimg/l/img_6290-1172.php 1x, protimg/p/img_6290-2344.php 2x, protimg/0/img_6290-3516.php 3x"><img data-src="protimg/l/img_6290-1172.php" class="s14"></picture></div>
</div>
<div class="slider slider-nav" style="z-index:0">
<div><picture class="s15"><source srcset="protimg/2/thumb-13600360_246139562436059_8362181060954386341_n-352.php 1x, protimg/8/thumb-13600360_246139562436059_8362181060954386341_n-704.php 2x"><img src="protimg/2/thumb-13600360_246139562436059_8362181060954386341_n-352.php" class="s14"></picture></div>
<div class="slidex"><picture class="s15"><source data-srcset="protimg/2/thumb-13612122_246139312436084_2621503771886208580_n-352.php 1x, protimg/n/thumb-13612122_246139312436084_2621503771886208580_n-704.php 2x"><img data-src="protimg/2/thumb-13612122_246139312436084_2621503771886208580_n-352.php" class="s14"></picture></div>
<div class="slidex"><picture class="s15"><source data-srcset="protimg/a/thumb-13620072_246139365769412_5095765779822726102_n-352.php 1x, protimg/e/thumb-13620072_246139365769412_5095765779822726102_n-704.php 2x"><img data-src="protimg/a/thumb-13620072_246139365769412_5095765779822726102_n-352.php" class="s14"></picture></div>
<div class="slidex"><picture class="s15"><source data-srcset="protimg/6/thumb-13626430_246139219102760_4707338522734708699_n-352.php 1x, protimg/j/thumb-13626430_246139219102760_4707338522734708699_n-704.php 2x"><img data-src="protimg/6/thumb-13626430_246139219102760_4707338522734708699_n-352.php" class="s14"></picture></div>
<div class="slidex"><picture class="s15"><source data-srcset="protimg/p/thumb-13439053_246139529102729_4469109987299840201_n-352.php 1x, protimg/t/thumb-13439053_246139529102729_4469109987299840201_n-704.php 2x"><img data-src="protimg/p/thumb-13439053_246139529102729_4469109987299840201_n-352.php" class="s14"></picture></div>
<div class="slidex"><picture class="s15"><source data-srcset="protimg/0/thumb-13592738_246139272436088_1780229008104652575_n-352.php 1x, protimg/2/thumb-13592738_246139272436088_1780229008104652575_n-704.php 2x"><img data-src="protimg/0/thumb-13592738_246139272436088_1780229008104652575_n-352.php" class="s14"></picture></div>
<div class="slidex"><picture class="s15"><source data-srcset="protimg/0/thumb-13615391_246139315769417_8297429507336115324_n-352.php 1x, protimg/a/thumb-13615391_246139315769417_8297429507336115324_n-704.php 2x"><img data-src="protimg/0/thumb-13615391_246139315769417_8297429507336115324_n-352.php" class="s14"></picture></div>
<div class="slidex"><picture class="s15"><source data-srcset="protimg/p/thumb-13620386_246139655769383_7483594295478707321_n-352.php 1x, protimg/8/thumb-13620386_246139655769383_7483594295478707321_n-704.php 2x"><img data-src="protimg/p/thumb-13620386_246139655769383_7483594295478707321_n-352.php" class="s14"></picture></div>
<div class="slidex"><picture class="s15"><source data-srcset="protimg/n/thumb-13557793_246139412436074_5046311174167792904_n-352.php 1x, protimg/c/thumb-13557793_246139412436074_5046311174167792904_n-704.php 2x"><img data-src="protimg/n/thumb-13557793_246139412436074_5046311174167792904_n-352.php" class="s14"></picture></div>
<div class="slidex"><picture class="s15"><source data-srcset="protimg/4/thumb-13592595_246139509102731_8147423203655109797_n-352.php 1x, protimg/p/thumb-13592595_246139509102731_8147423203655109797_n-704.php 2x"><img data-src="protimg/4/thumb-13592595_246139509102731_8147423203655109797_n-352.php" class="s14"></picture></div>
<div class="slidex"><picture class="s15"><source data-srcset="protimg/4/thumb-13626372_246139229102759_3522314068678426151_n-352.php 1x, protimg/j/thumb-13626372_246139229102759_3522314068678426151_n-704.php 2x"><img data-src="protimg/4/thumb-13626372_246139229102759_3522314068678426151_n-352.php" class="s14"></picture></div>
<div class="slidex"><picture class="s15"><source data-srcset="protimg/a/thumb-13631543_246139215769427_989502819282554804_n-352.php 1x, protimg/j/thumb-13631543_246139215769427_989502819282554804_n-704.php 2x"><img data-src="protimg/a/thumb-13631543_246139215769427_989502819282554804_n-352.php" class="s14"></picture></div>
<div class="slidex"><picture class="s15"><source data-srcset="protimg/v/thumb-img_6290-352.php 1x, protimg/0/thumb-img_6290-704.php 2x, protimg/h/thumb-img_6290-1056.php 3x"><img data-src="protimg/v/thumb-img_6290-352.php" class="s14"></picture></div>
</div>
</div>
<div class="v5 ps10 s16 c5 z8">
<a href="javascript:em1();" class="a3"></a>
</div>
<div class="v3 ps11 s17 c3 z9">
<a href="javascript:em1();" class="a2"><picture><source srcset="protimg/a/enveloppe-139.php 1x, protimg/c/enveloppe-278.php 2x, protimg/4/enveloppe-417.php 3x"><img src="protimg/c/enveloppe-278.php" loading="lazy" class="i3"></picture></a>
</div>
</div>
</div>
<div class="v1 ps1 s1 c1 z1">
<a href="tel:+32475929691" class="a1"><picture><source srcset="protimg/p/tel-155.php 1x, protimg/t/tel-310.php 2x, protimg/e/tel-465.php 3x"><img src="protimg/t/tel-310.php" loading="lazy" class="i1"></picture></a>
</div>
</div>
<div class="btf c2">
</div>
<script>function em1(){var c="dpnnfsdjbmAmftibmmtevspfvmy/cf@tvckfdu>'cpez>";var addr="mailto:";for(var i=0;i<c.length;i++)addr+=String.fromCharCode(c.charCodeAt(i)-1);window.location.href=addr;}!function(){if("Promise"in window&&void 0!==window.performance){var e,t,r=document,n=function(){return r.createElement("link")},o=new Set,a=n(),i=a.relList&&a.relList.supports&&a.relList.supports("prefetch"),s=location.href.replace(/#[^#]+$/,"");o.add(s);var c=function(e){var t=location,r="http:",n="https:";if(e&&e.href&&e.origin==t.origin&&[r,n].includes(e.protocol)&&(e.protocol!=r||t.protocol!=n)){var o=e.pathname;if(!(e.hash&&o+e.search==t.pathname+t.search||"?preload=no"==e.search.substr(-11)||".html"!=o.substr(-5)&&".html"!=o.substr(-5)&&"/"!=o.substr(-1)))return!0}},u=function(e){var t=e.replace(/#[^#]+$/,"");if(!o.has(t)){if(i){var a=n();a.rel="prefetch",a.href=t,r.head.appendChild(a)}else{var s=new XMLHttpRequest;s.open("GET",t,s.withCredentials=!0),s.send()}o.add(t)}},p=function(e){return e.target.closest("a")},f=function(t){var r=t.relatedTarget;r&&p(t)==r.closest("a")||e&&(clearTimeout(e),e=void 0)},d={capture:!0,passive:!0};r.addEventListener("touchstart",function(e){t=performance.now();var r=p(e);c(r)&&u(r.href)},d),r.addEventListener("mouseover",function(r){if(!(performance.now()-t<1200)){var n=p(r);c(n)&&(n.addEventListener("mouseout",f,{passive:!0}),e=setTimeout(function(){u(n.href),e=void 0},80))}},d)}}();dpth="/";!function(){var e={},t={},n={};window.ld=function(a,r,o){var c=function(){"interactive"==document.readyState?(r&&r(),document.addEventListener("readystatechange",function(){"complete"==document.readyState&&o&&o()})):"complete"==document.readyState?(r&&r(),o&&o()):document.addEventListener("readystatechange",function(){"interactive"==document.readyState&&r&&r(),"complete"==document.readyState&&o&&o()})},d=(1<<a.length)-1,u=0,i=function(r){var o=a[r],i=function(){for(var t=0;t<a.length;t++){var r=(1<<t)-1;if((u&r)==r&&n[a[t]]){if(!e[a[t]]){var o=document.createElement("script");o.textContent=n[a[t]],document.body.appendChild(o),e[a[t]]=!0}if((u|=1<<t)==d)return c(),0}}return 1};if(null==t[o]){t[o]=[];var f=new XMLHttpRequest;f.open("GET",o,!0),f.onload=function(){n[o]=f.responseText,[].forEach.call(t[o],function(e){e()})},t[o].push(i),f.send()}else{if(e[o])return i();t[o].push(i)}return 1};if(a.length)for(var f=0;f<a.length&&i(f);f++);else c()}}();ld([],function(){!function(){var e=document.querySelectorAll('a[href^="#"]');[].forEach.call(e,function(e){var t=navigator.userAgent,a=/chrome/i.test(t),o=/firefox/i.test(t),n=/iPad|iPhone|iPod/.test(t)&&!window.MSStream||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1;e.addEventListener("click",function(t){var r=!1,i=document.body.parentNode;n&&"none"!=getComputedStyle(i).getPropertyValue("scroll-snap-type")&&(i.setAttribute("data-snap",i.style.scrollSnapType),i.style.scrollSnapType="none",r=!0);var s=0;if(e.hash.length>1){var u=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));!o&&u||(u=1);var l=e.hash.slice(1),c=document.getElementById(l);if(null===c&&null===(c=document.querySelector('[name="'+l+'"]')))return;s=a?c.getBoundingClientRect().top*u+pageYOffset:(c.getBoundingClientRect().top+pageYOffset)*u}else if(r)for(var m=document.querySelectorAll("[data-block-group]"),p=0;p<m.length;p++)if("none"!=getComputedStyle(m[p]).getPropertyValue("scroll-snap-align")){c=m[p];break}if(r)window.smoothScroll(t,c,1);else if("scrollBehavior"in document.documentElement.style)scroll({top:s,left:0,behavior:"smooth"});else if("requestAnimationFrame"in window){var d=pageYOffset,f=null;requestAnimationFrame(function e(t){f||(f=t);var a=(t-f)/400;scrollTo(0,d<s?(s-d)*a+d:d-(d-s)*a),a<1?requestAnimationFrame(e):scrollTo(0,s)})}else scrollTo(0,s);t.preventDefault()},!1)})}(),window.smoothScroll=function(e,t,a,o){e.stopImmediatePropagation();var n,r=pageYOffset;t?(("string"==typeof t||t instanceof String)&&(t=document.querySelector(t)),n=t.getBoundingClientRect().top):n=-r;var i=navigator.userAgent,s=/chrome/i.test(i),u=/firefox/i.test(i),l=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));!u&&l||(l=1);var c=n*l+(s?0:r*(l-1)),m=null;function p(){d(window.performance.now?window.performance.now():Date.now())}function d(e){null===m&&(m=e);var n=(e-m)/1e3,i=function(e,t,a){switch(o){case"linear":break;case"easeInQuad":e*=e;break;case"easeOutQuad":e=1-(1-e)*(1-e);break;case"easeInCubic":e*=e*e;break;case"easeOutCubic":e=1-Math.pow(1-e,3);break;case"easeInOutCubic":e=e<.5?4*e*e*e:1-Math.pow(-2*e+2,3)/2;break;case"easeInQuart":e*=e*e*e;break;case"easeOutQuart":e=1-Math.pow(1-e,4);break;case"easeInOutQuart":e=e<.5?8*e*e*e*e:1-Math.pow(-2*e+2,4)/2;break;case"easeInQuint":e*=e*e*e*e;break;case"easeOutQuint":e=1-Math.pow(1-e,5);break;case"easeInOutQuint":e=e<.5?16*e*e*e*e*e:1-Math.pow(-2*e+2,5)/2;break;case"easeInCirc":e=1-Math.sqrt(1-Math.pow(e,2));break;case"easeOutCirc":e=Math.sqrt(1-Math.pow(0,2));break;case"easeInOutCirc":e=e<.5?(1-Math.sqrt(1-Math.pow(2*e,2)))/2:(Math.sqrt(1-Math.pow(-2*e+2,2))+1)/2;break;case"easeInOutQuad":default:e=e<.5?2*e*e:1-Math.pow(-2*e+2,2)/2}e>1&&(e=1);return t+a*e}(n/a,r,c);window.scrollTo(0,i),n<a?"requestAnimationFrame"in window?requestAnimationFrame(d):setTimeout(p,1e3/120):(/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1)&&(t&&t.scrollIntoView(),setTimeout(function(){var e=document.body.parentNode;e.style.scrollSnapType=e.getAttribute("data-snap"),e.removeAttribute("data-snap")},100))}return"requestAnimationFrame"in window?requestAnimationFrame(d):setTimeout(p,1e3/120),!1};!function(){var e=null;if(location.hash){var t=location.hash.replace("#",""),n=function(){var o=document.getElementById(t);null===o&&(o=document.querySelector('[name="'+t+'"]')),o&&o.scrollIntoView(!0),"0px"===window.getComputedStyle(document.body).getPropertyValue("min-width")?setTimeout(n,100):null!=e&&setTimeout(e,100)};n()}else null!=e&&e()}();});ld(["js/jquery.e40c7f.js","js/jqueryui.e40c7f.js","js/menu.e40c7f.js","js/menu-dropdown-animations.e40c7f.js","js/menu-dropdown-1.cc8e1c.js"],function(){initMenu($('#m1')[0]);});ld(["js/jquery.e40c7f.js","js/slick.e40c7f.js"],function(){$('.un1 .slider-for').slick({lazyLoad:'ondemand',slidesToShow:1,slidesToScroll:1,arrows:false,fade:true,infinite:true,asNavFor:'.un1 .slider-nav',speed:300,overflow:'hidden'});$('.un1 .slider-nav').slick({slidesToShow:3,slidesToScroll:1,asNavFor:'.un1 .slider-for',centerMode:true,focusOnSelect:true,speed:300,dots:true,arrows:false,infinite:true});});</script>
</body>
</html>