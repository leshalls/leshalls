<?php
    session_start();
    include 'groups-7bea46.php';
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
            header('Location: connexion-utilisateur.html');
            exit;
        }
    }
    $acg = isset($access_control_groups['E3A750EB-AEC6-4FB5-8D88-8672E058881F']) ? $access_control_groups['E3A750EB-AEC6-4FB5-8D88-8672E058881F'] : NULL;
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'DE6CCC07-34D2-42A4-8586-E87D562D4589' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'h18.php';
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
<title>H18</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="http://locationhallsduroeulx.hol.es/h18.php">
<meta name="robots" content="max-image-preview:large">
<meta name="viewport" content="width=1200">
<link rel="preload" href="css/Muli-Regular.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@font-face{font-display:block;font-family:"Cinzel 1";src:url('css/Cinzel-Bold.woff2') format('woff2'),url('css/Cinzel-Bold.woff') format('woff');font-weight:700}@font-face{font-display:block;font-family:"Nunito 1";src:url('css/Nunito-Regular.woff2') format('woff2'),url('css/Nunito-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Muli 1";src:url('css/Muli-Regular.woff2') format('woff2'),url('css/Muli-Regular.woff') format('woff');font-weight:400}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;line-break:normal;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}[data-marker]::before{content:attr(data-marker) ' ';-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right;shape-outside:content-box}.btf{display:none}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0;--z:1;zoom:var(--z)}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=date],input[type=email],input[type=number],input[type=password],input[type=text],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial !important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}.menu-content{cursor:pointer;position:relative}li{-webkit-tap-highlight-color:rgba(0,0,0,0)}
#b{background-color:#fff}.ps4{position:relative;margin-top:59px}.v4{display:block;vertical-align:top}.s4{width:1200px;margin-left:auto;margin-right:auto;min-height:1934px}.z3{pointer-events:none}.v5{display:inline-block;vertical-align:top}.ps5{position:relative;margin-left:395px;margin-top:0}.s5{min-width:392px;width:392px;min-height:161px}.ps6{position:relative;margin-left:0;margin-top:0}.s6{min-width:392px;width:392px;min-height:161px;line-height:0}.ps7{position:relative;margin-left:77px;margin-top:0}.s7{min-width:258px;width:258px;min-height:105px;height:105px}.z4{z-index:2;pointer-events:auto}.a3{display:block}.i2{position:absolute;left:0;width:258px;height:94px;top:5px;border:0}.ps8{position:relative;margin-left:77px;margin-top:-105px}.z5{z-index:7;pointer-events:auto}.v6{display:inline-block;vertical-align:top;overflow:visible}.ps9{position:relative;margin-left:0;margin-top:-16px}.s8{min-width:392px;width:392px;height:72px}.z6{z-index:4;pointer-events:auto}.s9{min-width:392px;width:392px;min-height:72px;height:72px}.m1{padding:0px 0px 0px 0px}.ml1{outline:0}.mcv1{display:inline-block}.s10{min-width:392px;width:392px;min-height:72px}.c6{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:transparent}.ps10{position:relative;margin-left:0;margin-top:12px}.s11{min-width:392px;width:392px;min-height:47px}.z7{pointer-events:auto}.p1{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f3{font-family:"Cinzel 1";font-size:28px;font-size:calc(28px * var(--f));line-height:1.465;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f3:hover{}.ps11{position:relative;margin-left:266px;margin-top:464px}.s12{min-width:638px;width:638px;min-height:100px}.f4{font-family:"Nunito 1";font-size:45px;font-size:calc(45px * var(--f));line-height:1.845;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f4:hover{}.ps12{position:relative;margin-left:94px;margin-top:57px}.s13{min-width:1013px;width:1013px;min-height:831px}.s14{min-width:1013px;width:1013px;min-height:831px;line-height:0}.s15{min-width:1013px;width:1013px;min-height:502px}.z8{z-index:3;pointer-events:auto}.p2{text-indent:0;padding-bottom:0;padding-right:0;text-align:justify}.f5{font-family:"Muli 1";font-size:20px;font-size:calc(20px * var(--f));line-height:1.801;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f5:hover{}.v7{display:none;vertical-align:top}.ps14{position:relative;margin-left:420px;margin-top:30px}.s17{min-width:142px;width:142px;min-height:128px;height:128px}.z10{z-index:8;pointer-events:auto}.i3{position:absolute;left:7px;width:128px;height:128px;top:0;border:0}.ps15{position:relative;margin-left:-167px;margin-top:193px}.s18{min-width:192px;width:192px;min-height:136px;height:136px}.z11{z-index:11;pointer-events:auto}.i4{position:absolute;left:28px;width:136px;height:136px;top:0;border:0}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-40259a.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-1f4a0a.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/h18.3c10fd.php" media="print">
</head>
<body id="b">
<script>var p=document.createElement("P");p.innerHTML="&nbsp;",p.style.cssText="position:fixed;visible:hidden;font-size:100px;zoom:1",document.body.appendChild(p);var rsz=function(e){return function(){var r=Math.trunc(1e3/parseFloat(window.getComputedStyle(e).getPropertyValue("font-size")))/10,t=document.body;r!=t.style.getPropertyValue("--f")&&t.style.setProperty("--f",r)}}(p);if("ResizeObserver"in window){var ro=new ResizeObserver(rsz);ro.observe(p)}else if("requestAnimationFrame"in window){var raf=function(){rsz(),requestAnimationFrame(raf)};requestAnimationFrame(raf)}else setInterval(rsz,100);</script>

<div class="ps4 v4 s4 z3">
<div class="v5 ps5 s5">
<div class="v5 ps6 s6">
<div class="v5 ps7 s7 c5 z4">
<a href="#" class="a3"><picture><source srcset="protimg/panneau-test-258.php 1x, protimg/panneau-test-516.php 2x, protimg/panneau-test-774.php 3x"><img src="protimg/panneau-test-516.php" class="i2"></picture></a>
</div>
<div class="v5 ps8 s7 c5 z5">
<a href="#" class="a3"><picture><source srcset="protimg/panneau-test-258.php 1x, protimg/panneau-test-516.php 2x, protimg/panneau-test-774.php 3x"><img src="protimg/panneau-test-516.php" class="i2"></picture></a>
</div>
<div class="v6 ps9 s8 z6">
<ul class="menu-dropdown-2 v5 ps6 s9 m1" id="m1">
<li class="v5 ps6 s8">
<a href="#" class="ml1"><div class="menu-content mcv1"><div class="v5 ps6 s10 c6 z3"><div class="v5 ps10 s11 c5 z7"><p class="p1 f3">Retour &agrave; l'accueil</p></div></div></div></a>
</li>
</ul>
</div>
</div>
</div>
<div class="v5 ps11 s12 c5 z7">
<p class="p1 f4">Hall 18</p>
</div>
<div class="v5 ps12 s13">
<div class="v5 ps6 s14">
<div class="v5 ps6 s15 c5 z8">
<p class="p2 f5">Le hall propos&eacute; est un espace id&eacute;al pour entreposer ou y exercer une activit&eacute; de production. Ce b&acirc;timent est muni d&rsquo;une porte sectionnelle pouvant accueillir facilement les camions. Nous disposons de prises 380V 32A en plus de celles &agrave; 220V.&nbsp;&nbsp;</p>
<p class="p2 f5"><br></p>
<p class="p2 f5">Ce hall est &eacute;quip&eacute; de 2WC , 1 douche, de 4 pi&egrave;ces chauff&eacute;es &eacute;lectriquement dont une ayant une petite cuisine. la ligne t&eacute;l&eacute;phonique pour internet est pr&eacute;sente.</p>
<p class="p2 f5"><br></p>
<p class="p2 f5">Notre site est sous surveillance cameras et dispose d&rsquo;une personne de permanence pour les &eacute;ventuelles soucis techniques.&nbsp;</p>
<p class="p2 f5"><br></p>
<p class="p2 f5">Nous mettons &eacute;galement en &eacute;vidence que nos lieux sont &agrave; proximit&eacute; des grands axes autoroutiers ( Paris/Lille/Tournai ) (Bruxelles ou Charleroi/ Li&egrave;ge ). Contactez - nous librement pour de plus amples informations ou pour une visite.</p>
</div>
<div class="v7 ps13 s16 c7 z9">
<a href="javascript:em1();" class="a4"></a>
</div>
<div class="v5 ps14 s17 c5 z10">
<a href="javascript:em1();" class="a3"><picture><source srcset="protimg/enveloppe-128.php 1x, protimg/enveloppe-256.php 2x, protimg/enveloppe-384.php 3x"><img src="protimg/enveloppe-256.php" loading="lazy" class="i3"></picture></a>
</div>
<div class="v5 ps15 s18 c5 z11">
<a href="tel:+32475929691" class="a3"><picture><source srcset="protimg/tel-136.php 1x, protimg/tel-272.php 2x, protimg/tel-408.php 3x"><img src="protimg/tel-272.php" loading="lazy" class="i4"></picture></a>
</div>
</div>
</div>
<div class="v1 ps1 s1 c1 z1">
<a href="http://pnr.ma/bIUyqO" target="_blank" rel="noopener" class="a1 f1">Panorama&nbsp;</a>
</div>
<div class="v2 ps2 s2 c2 z1">
<picture>
<source srcset="protimg/panorama-211.php 1x, protimg/panorama-422.php 2x">
<img src="protimg/panorama-422.php" loading="lazy" class="i1">
</picture>
</div>
<div class="v3 ps3 s3 c3 z2">
<a href="#" class="a2 f2">Nous contacter</a>
</div>
</div>
<div class="btf c4">
</div>
<script>function em1(){var c="dpnnfsdjbmAmftibmmtevspfvmy/cf@tvckfdu>'cpez>";var addr="mailto:";for(var i=0;i<c.length;i++)addr+=String.fromCharCode(c.charCodeAt(i)-1);window.location.href=addr;}!function(){if("Promise"in window&&void 0!==window.performance){var e,t,r=document,n=function(){return r.createElement("link")},o=new Set,a=n(),i=a.relList&&a.relList.supports&&a.relList.supports("prefetch"),s=location.href.replace(/#[^#]+$/,"");o.add(s);var c=function(e){var t=location,r="http:",n="https:";if(e&&e.href&&e.origin==t.origin&&[r,n].includes(e.protocol)&&(e.protocol!=r||t.protocol!=n)){var o=e.pathname;if(!(e.hash&&o+e.search==t.pathname+t.search||"?preload=no"==e.search.substr(-11)||".html"!=o.substr(-5)&&".html"!=o.substr(-5)&&"/"!=o.substr(-1)))return!0}},u=function(e){var t=e.replace(/#[^#]+$/,"");if(!o.has(t)){if(i){var a=n();a.rel="prefetch",a.href=t,r.head.appendChild(a)}else{var s=new XMLHttpRequest;s.open("GET",t,s.withCredentials=!0),s.send()}o.add(t)}},p=function(e){return e.target.closest("a")},f=function(t){var r=t.relatedTarget;r&&p(t)==r.closest("a")||e&&(clearTimeout(e),e=void 0)},d={capture:!0,passive:!0};r.addEventListener("touchstart",function(e){t=performance.now();var r=p(e);c(r)&&u(r.href)},d),r.addEventListener("mouseover",function(r){if(!(performance.now()-t<1200)){var n=p(r);c(n)&&(n.addEventListener("mouseout",f,{passive:!0}),e=setTimeout(function(){u(n.href),e=void 0},80))}},d)}}();dpth="/";!function(){var e={},t={},n={};window.ld=function(a,r,o){var c=function(){"interactive"==document.readyState?(r&&r(),document.addEventListener("readystatechange",function(){"complete"==document.readyState&&o&&o()})):"complete"==document.readyState?(r&&r(),o&&o()):document.addEventListener("readystatechange",function(){"interactive"==document.readyState&&r&&r(),"complete"==document.readyState&&o&&o()})},d=(1<<a.length)-1,u=0,i=function(r){var o=a[r],i=function(){for(var t=0;t<a.length;t++){var r=(1<<t)-1;if((u&r)==r&&n[a[t]]){if(!e[a[t]]){var o=document.createElement("script");o.textContent=n[a[t]],document.body.appendChild(o),e[a[t]]=!0}if((u|=1<<t)==d)return c(),0}}return 1};if(null==t[o]){t[o]=[];var f=new XMLHttpRequest;f.open("GET",o,!0),f.onload=function(){n[o]=f.responseText,[].forEach.call(t[o],function(e){e()})},t[o].push(i),f.send()}else{if(e[o])return i();t[o].push(i)}return 1};if(a.length)for(var f=0;f<a.length&&i(f);f++);else c()}}();ld([],function(){!function(){var e=document.querySelectorAll('a[href^="#"]');[].forEach.call(e,function(e){e.addEventListener("click",function(t){var a=!1,o=document.body.parentNode;(/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1)&&"none"!=getComputedStyle(o).getPropertyValue("scroll-snap-type")&&(o.setAttribute("data-snap",o.style.scrollSnapType),o.style.scrollSnapType="none",a=!0);var n=0;if(e.hash.length>1){var r=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));r||(r=1);var i=e.hash.slice(1),s=document.getElementById(i);if(null===s&&null===(s=document.querySelector('[name="'+i+'"]')))return;var u=/chrome/i.test(navigator.userAgent);n=u?s.getBoundingClientRect().top*r+pageYOffset:(s.getBoundingClientRect().top+pageYOffset)*r}else if(a)for(var l=document.querySelectorAll("[data-block-group]"),c=0;c<l.length;c++)if("none"!=getComputedStyle(l[c]).getPropertyValue("scroll-snap-align")){s=l[c];break}if(a)window.smoothScroll(t,s,1);else if("scrollBehavior"in document.documentElement.style)scroll({top:n,left:0,behavior:"smooth"});else if("requestAnimationFrame"in window){var d=pageYOffset,m=null;requestAnimationFrame(function e(t){m||(m=t);var a=(t-m)/400;scrollTo(0,d<n?(n-d)*a+d:d-(d-n)*a),a<1?requestAnimationFrame(e):scrollTo(0,n)})}else scrollTo(0,n);t.preventDefault()},!1)})}(),window.smoothScroll=function(e,t,a,o){e.stopImmediatePropagation();var n,r=pageYOffset;t?(("string"==typeof t||t instanceof String)&&(t=document.querySelector(t)),n=t.getBoundingClientRect().top):n=-r;var i=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));i||(i=1);var s=n*i+(/chrome/i.test(navigator.userAgent)?0:r*(i-1)),u=null;function l(){c(window.performance.now?window.performance.now():Date.now())}function c(e){null===u&&(u=e);var n=(e-u)/1e3,i=function(e,t,a){switch(o){case"linear":break;case"easeInQuad":e*=e;break;case"easeOutQuad":e=1-(1-e)*(1-e);break;case"easeInCubic":e*=e*e;break;case"easeOutCubic":e=1-Math.pow(1-e,3);break;case"easeInOutCubic":e=e<.5?4*e*e*e:1-Math.pow(-2*e+2,3)/2;break;case"easeInQuart":e*=e*e*e;break;case"easeOutQuart":e=1-Math.pow(1-e,4);break;case"easeInOutQuart":e=e<.5?8*e*e*e*e:1-Math.pow(-2*e+2,4)/2;break;case"easeInQuint":e*=e*e*e*e;break;case"easeOutQuint":e=1-Math.pow(1-e,5);break;case"easeInOutQuint":e=e<.5?16*e*e*e*e*e:1-Math.pow(-2*e+2,5)/2;break;case"easeInCirc":e=1-Math.sqrt(1-Math.pow(e,2));break;case"easeOutCirc":e=Math.sqrt(1-Math.pow(0,2));break;case"easeInOutCirc":e=e<.5?(1-Math.sqrt(1-Math.pow(2*e,2)))/2:(Math.sqrt(1-Math.pow(-2*e+2,2))+1)/2;break;case"easeInOutQuad":default:e=e<.5?2*e*e:1-Math.pow(-2*e+2,2)/2}e>1&&(e=1);return t+a*e}(n/a,r,s);if(window.scrollTo(0,i),n<a)"requestAnimationFrame"in window?requestAnimationFrame(c):setTimeout(l,1e3/120);else if(/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1){if(t)for(var d=t;d!=document.body;){if(d.getAttribute("data-block-group")){d.scrollIntoView();break}d=d.parentNode}setTimeout(function(){var e=document.body.parentNode;e.style.scrollSnapType=e.getAttribute("data-snap"),e.removeAttribute("data-snap")},100)}}return"requestAnimationFrame"in window?requestAnimationFrame(c):setTimeout(l,1e3/120),!1};!function(){var e=null;if(location.hash){var t=location.hash.replace("#",""),n=function(){var o=document.getElementById(t);null===o&&(o=document.querySelector('[name="'+t+'"]')),o&&o.scrollIntoView(!0),"0px"===window.getComputedStyle(document.body).getPropertyValue("min-width")?setTimeout(n,100):null!=e&&setTimeout(e,100)};n()}else null!=e&&e()}();});ld(["js/jquery.f932c4.js","js/jqueryui.f932c4.js","js/menu.f932c4.js","js/menu-dropdown-animations.f932c4.js","js/menu-dropdown-2.3c10fd.js"],function(){initMenu($('#m1')[0]);});</script>
</body>
</html>