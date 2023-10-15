<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$host='localhost';
$user='root';
$db_lo='login';
$conn=mysqli_connect($host,$user,'', $db_lo);

if ($conn) {
$id=$_SESSION['USER_ID'];
$name=$_SESSION['USER_NAME'];
$email=$_SESSION['Email'];
$pass=$_SESSION['Pass'];

if(isset($_SESSION['IsMember']))
{
    if($_SESSION['IsMember']==1)
    {
        ?>

        <!doctype html>
        <!--[if IE 9]> <html class="ie9 no-js" lang="ar"> <![endif]-->
        <!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="ar"> <!--<![endif]-->
    <head>
        <!-- Added by AVADA SEO Suite -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
                rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
              rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <title>Bootstrap Example</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>



        <meta name="twitter:image" content="undefined">
        <style>
            .cardt{
                background-color: #ffffff;
                box-shadow: 0 5px 25px RGBA(1 1 1 /15%);
                border-radius: 10px;
                width: 50vh;
                padding: 10px;
                margin: 1%;
                transition: 0.7s ease;
            }
            .ca{
                display: grid;
                grid-template-columns: auto auto ;
            }
            .card:hover{
                transform: scale(1.1);
            }
            .t{
                margin-top: 40px;

            }
            .team:hover{
                height: 400px;
            }

            .team:hover .img{
                top: -20%;
                width: 100px;
                height: 100px;
            }

            .img{
                position: absolute;
                left: 50%;
                top: -20%;
                transform: translateX(-50%);
                background-color: #fff;
                width: 100px;
                height: 100px;
                border-radius: 50%;
                box-shadow: 0 15px 50px rgba(0,0,0,0.35);
                overflow: hidden;
            }
            .img img{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;

            }
            .team .content{
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: flex-end;
                width: 100%;
                height: 100%;
                left: 0;
                overflow: hidden;
            }
            .team .data h3{
                color: #28292d;
            }
            .team .social i{
                color: #1F5662;
                padding: 20px;
            }
            .team .content .info{
                padding: 40px;
                text-align: center;
                width: 100%;
                transition: 0.5s ;
                transform: translateY(80px);
            }
            .team:hover .content .info{
                transform: translateY(40px);
            }
            .team .content .info h2{
                font-size: 1.25em;
                font-weight: 600;
                line-height: 1.2;
                position: relative;
                /*  top: -20px;*/
                top: 70px;
            }
            h3{
                color: #555;

            }
            .team .content .info h2 span{
                font-size: 0.75em;
                font-weight: 500;
                opacity: 0.5;
            }
            .team .content .info .data{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin: 20px 0;
            }
            .team{
                background-color: rgb(31, 86, 98,0.2);
                border-radius: 20px;
                box-shadow: 0 35px 80px rgba(0,0,0,0.15);}
            .team:hover .team .content .info .data{
                display: flex;
            }
            .social{
                display: flex;
                justify-content: space-evenly;
            }
            .team{
                position: relative;
                display: flex;
                align-items: end;
                height: 200px;
            }
            .team:hover{
                height: 300px;
            }
            .ot{
                position: relative;
                top: -50px;
            }
            .t{
                margin-bottom: 240px;
            }
            .social i:hover{
                transform: translateY(-10px);
            }
            .t h2{
                color: #1F5662;
            }
            .t h2 span{
                color: #333;
            }
        </style>
        <style>

            .card{
                background-color: #ffffff;
                width: 50vh;
                height: 50vh;
                box-shadow: 0 5px 25px RGBA(1 1 1 /15%);
                border-radius: 10px;
                padding: 10px;
                margin: 1%;
                transition: 0.7s ease;

            }
            .card:hover{
                transform: scale(1.1);
            }
            .pic{
                text-align: center;
                /*to scale the picture*/
            }
            .info{
                text-align: center;
            }
            .pic-card{
                text-align: center;
                position: relative;
                overflow: hidden;
            }
            .con{
                display: grid;
                grid-template-columns: auto auto auto auto;
                gap: 30px;
            }
            .con .card{
                border-radius: 15px;
                max-width: 300px;
                box-shadow: 0 5px 25px RGBA(1 1 1 /15%);
                transition: 0.7s ease;
                padding: 25px;
                box-shadow: 0 5px 25px rgba(1 1 1 /15%);
            }
        </style>
        <style>
            /*
            .slide-effect {

              width: 100%;
              height: 100%;

            }*/

            .slideUp.slideUp2 {
                position: relative;
                font-size: 35px;
                opacity:0;

            }

            .slideUp{
                height: 20vh;
                top:50px;
                font-weight: bold;
                font-size: 30px;
                animation: slideUp ease 2s forwards;
                color: white;
            }

            .slideUp2 {
                font-weight: bold;

                height: 20vh;
                font-size: 30px;
                top:-50px;
                color: white;

                animation: slideUp ease 2s forwards;
            }
            @keyframes slideUp {
                0% {transform: translateY(0);}
                100% {transform: translateY(-20px);opacity:1;}
            }
            @keyframes slideUp2 {
                0% {transform: translateY(0);}
                100% {transform: translateY(-20px);opacity:1;}
            }
            @media only screen and (max-width: 600px) {
                .slide-effect, .text, .slideDown, .slideUp {
                    font-size: 15px;
                }
            }
        </style>




        <!-- /Added by AVADA SEO Suite -->

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-19GRM4RQ8Z"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-19GRM4RQ8Z');
        </script>
        <!-- v1.3.0 Wokiee -->
        <!-- Basic page needs ================================================== -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="theme-color" content="#cda386">
        <meta name="keywords" content="" />
        <meta name="author" content="">
        <title>Touch Beauty</title>
        <link rel="icon" type="image/png" href="https://cdn.salla.sa/VOypj/ExDCt85fz2OYR1hnALR24Ajx3C2XHuPd3vaVkm0M.png" />
        <meta name="twitter:image" content="undefined">


        <link rel="stylesheet" href="new.css">

        <!-- Social meta ================================================== --><!-- /snippets/social-meta-tags.liquid -->
        <meta property="og:site_name" content="Touch Beauty Shop">
        <meta property="og:url" content="https://touchbeauty.shop/">
        <meta property="og:title" content="Touch Beauty Shop">
        <meta property="og:type" content="website">
        <meta property="og:description" content="Touch Beauty Shop">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Touch Beauty Shop">
        <meta name="twitter:description" content="Touch Beauty Shop">
        <!-- Helpers ================================================== -->

        <!-- CSS ================================================== -->
        <link href="https://fonts.googleapis.com/css?family=Hind:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/assets/theme.css?v=173751287040149070571682462608" rel="stylesheet" type="text/css" media="all" />

        <link href="//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/assets/style-rtl.css?v=6166698748261962031681650502" rel="stylesheet" type="text/css" media="all" />
        <script src="//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/assets/jquery.min.js?v=146653844047132007351681650502"></script>
        <link href="vidiocss.css" rel="stylesheet">
        <!-- Header hook for plugins ================================================== -->
        <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta name="facebook-domain-verification" content="wln56kc3pxfv6xq9eu3hq691x6tqkl">
        <meta name="google-site-verification" content="Y3uUoYaaJ2q0T-BjAxSRoA6sO72u4kBZS9wzjZ7TgOw">
        <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/52647395515/digital_wallets/dialog">


        <script>
            (function() {
                var scripts = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/runtime.baseline.en.f8423b4aeafd3581e601.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-packages~Information~NoAddressLocation~Payment~PostPurchase~Review~Shipping~ShopPay~Sho~cf13f96e.baseline.en.8d3a709bcf8c04f77ed7.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information~Payment~ShopPay.baseline.en.935f71e1b5e37b1a673d.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information~Payment.baseline.en.e38e94a10255bd8dac2c.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information.baseline.en.3c067bc64a64a71ff5ad.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-ui~app.baseline.en.26a0342d355a675e2801.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/vendors~app.baseline.en.1188b9033722bc012e84.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-packages~app.baseline.en.4e70883e139eb5a799c1.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.baseline.en.d102fc12c433371f18b0.js"];
                var styles = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-ui~app.baseline.en.ba7746e3965877991bae.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/vendors~app.baseline.en.954db6995929b6f1f646.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.baseline.en.dd733f21b66b59afc26d.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information~Payment~ShopPay.baseline.en.9f248e42bf2a8151ea27.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information.baseline.en.6d08f77e3a864d9cf367.css"];

                function prefetch(url, as, callback) {
                    var link = document.createElement('link');
                    if (link.relList.supports('prefetch')) {
                        link.rel = 'prefetch';
                        link.fetchPriority = 'low';
                        link.as = as;
                        link.href = url;
                        link.onload = link.onerror = callback;
                        document.head.appendChild(link);
                    } else {
                        var xhr = new XMLHttpRequest();
                        xhr.open('GET', url, true);
                        xhr.onloadend = callback;
                        xhr.send();
                    }
                }

                function prefetchAssets() {
                    var resources = [].concat(
                        scripts.map(function(url) { return [url, 'script']; }),
                        styles.map(function(url) { return [url, 'style']; })
                    );
                    var index = 0;
                    (function next() {
                        var res = resources[index++];
                        if (res) prefetch(res[0], res[1], next);
                    })();
                }

                addEventListener('load', prefetchAssets);
            })();
        </script>

        <script id="shopify-features" type="application/json">{"accessToken":"28e0c3199aebaf8299b66c13e1ef25bf","betas":["rich-media-storefront-analytics"],"domain":"touchbeauty.shop","predictiveSearch":false,"shopId":52647395515,"smart_payment_buttons_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/spb.ar.js?v=2","dynamic_checkout_cart_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.ar.js?v=2","locale":"ar","optimusEnabled":false}</script>
        <script>var Shopify = Shopify || {};
            Shopify.shop = "touchbeautyshop.myshopify.com";
            Shopify.locale = "ar";
            Shopify.currency = {"active":"ILS","rate":"1.0"};
            Shopify.country = "PS";
            Shopify.theme = {"name":"wokiee-v-1-3-0","id":133149655227,"theme_store_id":null,"role":"main"};
            Shopify.theme.handle = "null";
            Shopify.theme.style = {"id":null,"handle":null};
            Shopify.cdnHost = "cdn.shopify.com";
            Shopify.routes = Shopify.routes || {};
            Shopify.routes.root = "/";</script>
        <script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
        <script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
        <script>(function() {
                function asyncLoad() {
                    for (var i = 0; i < urls.length; i++) {
                        var s = document.createElement('script');
                        s.type = 'text/javascript';
                        s.async = true;
                        s.src = urls[i];
                        var x = document.getElementsByTagName('script')[0];
                        x.parentNode.insertBefore(s, x);
                    }
                };
                if(window.attachEvent) {
                    window.attachEvent('onload', asyncLoad);
                } else {
                    window.addEventListener('load', asyncLoad, false);
                }
            })();</script>
        <script id="__st">var __st={"a":52647395515,"offset":10800,"reqid":"fcbe5c54-76bf-4d34-9424-0246e4940077","pageurl":"touchbeauty.shop\/","u":"a5c4758fe08c","p":"home"};</script>
        <script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
        <script>!function(o){o.addEventListener("DOMContentLoaded",function(){window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"};var t=['form[action*="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]','form[action*="/account"] input[name="form_type"][value="customer_login"]','form[action*="/account"] input[name="form_type"][value="recover_customer_password"]','form[action*="/account"] input[name="form_type"][value="create_customer"]','form[action*="/contact"] input[name="form_type"][value="customer"]'].join(",");function n(e){e=e.target;null==e||null!=(e=function e(t,n){if(null==t.parentElement)return null;if("FORM"!=t.parentElement.tagName)return e(t.parentElement,n);for(var o=t.parentElement.action,r=0;r<n.length;r++)if(-1!==o.indexOf(n[r]))return t.parentElement;return null}(e,["/contact","/comments","/account"]))&&null!=e.querySelector(t)&&((e=o.createElement("script")).setAttribute("src","https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"),o.body.appendChild(e),o.removeEventListener("focus",n,!0),o.removeEventListener("change",n,!0),o.removeEventListener("click",n,!0))}o.addEventListener("click",n,!0),o.addEventListener("change",n,!0),o.addEventListener("focus",n,!0)})}(document);</script>
        <script integrity="sha256-4VRZk5nmuLKdyxECzHbrGZ+jOgmvT6eNFej4VE7mT80=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/load_feature-e154599399e6b8b29dcb1102cc76eb199fa33a09af4fa78d15e8f8544ee64fcd.js" crossorigin="anonymous"></script>
        <script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" media="screen" href="//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/compiled_assets/styles.css?3344">
        <script id="sections-script" data-sections="promo-fixed" defer="defer" src="//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/compiled_assets/scripts.js?3344"></script>

        <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>
        <script src="//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/assets/servicify-asset.js?v=9391740801321792721681650502" type="text/javascript"></script>
        <!-- /Header hook for plugins ================================================== --><!--Gem_Page_Header_Script-->



        <!--End_Gem_Page_Header_Script-->
        <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
        <script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 52647395515,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "index"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
        <script id="evids-setup">
            (function () {let t,e;function n(){t={page_viewed:{},collection_viewed:{},product_viewed:{},product_variant_viewed:{},search_submitted:{},product_added_to_cart:{},checkout_started:{},checkout_completed:{},payment_info_submitted:{}},e={wpm:{},trekkie:{}}}function o(t){return`${t||"sh"}-${function(){const t="xxxx-4xxx-xxxx-xxxxxxxxxxxx";let e="";try{const n=window.crypto,o=new Uint16Array(31);n.getRandomValues(o);let r=0;e=t.replace(/[x]/g,(t=>{const e=o[r]%16;return r++,("x"===t?e:3&e|8).toString(16)})).toUpperCase()}catch(n){e=t.replace(/[x]/g,(t=>{const e=16*Math.random()|0;return("x"===t?e:3&e|8).toString(16)})).toUpperCase()}return`${function(){let t=0,e=0;t=(new Date).getTime()>>>0;try{e=performance.now()>>>0}catch(t){e=0}const n=Math.abs(t+e).toString(16).toLowerCase();return"00000000".substr(0,8-n.length)+n}()}-${e}`}()}`}function r(n,r){if(!t[n]||"trekkie"!==(null==r?void 0:r.analyticsFramework)&&"wpm"!==(null==r?void 0:r.analyticsFramework))return o("shu");const i="string"==typeof(c=r.cacheKey)&&c?c:"default";var c;const a=function(t,n,o){const r=e[n];return void 0===r[t]&&(r[t]={}),void 0===r[t][o]?r[t][o]=0:r[t][o]+=1,r[t][o]}(n,r.analyticsFramework,i);return function(e,n,r){const i=t[e];if(void 0===i[r]){const t=o();i[r]=[t]}else if(void 0===i[r][n]){const t=o();i[r].push(t)}return i[r][n]}(n,a,i)}function i(){window.Shopify=window.Shopify||{},n(),window.Shopify.evids=(t,e)=>r(t,e)}i();})();
        </script>
        <script id="web-pixels-manager-setup">(function e(e,n,a,o,t,r){var i=null!==e;i&&(window.Shopify=window.Shopify||{},window.Shopify.analytics=window.Shopify.analytics||{},window.Shopify.analytics.replayQueue=[],window.Shopify.analytics.publish=function(e,n,a){window.Shopify.analytics.replayQueue.push([e,n,a])});var s=function(){var e="legacy",n="unknown",a=null,o=navigator.userAgent.match(/(Firefox|Chrome)\/(\d+)/i),t=navigator.userAgent.match(/(Edg)\/(\d+)/i),r=navigator.userAgent.match(/(Version)\/(\d+)(.+)(Safari)\/(\d+)/i);r?(n="safari",a=parseInt(r[2],10)):t?(n="edge",a=parseInt(t[2],10)):o&&(n=o[1].toLocaleLowerCase(),a=parseInt(o[2],10));var i={chrome:60,firefox:55,safari:11,edge:80}[n];return void 0!==i&&null!==a&&i<=a&&(e="modern"),e}().substring(0,1),l=o.substring(0,1);if(i)try{self.performance.mark("wpm:start")}catch(e){}var d,c,u,p,f,h,w,y,g=a+"/"+l+r+s+".js";d={src:g,async:!0,onload:function(){if(e){var a=window.webPixelsManager.init(e);n(a),window.Shopify.analytics.replayQueue.forEach((function(e){a.publishCustomEvent(e[0],e[1],e[2])})),window.Shopify.analytics.replayQueue=[],window.Shopify.analytics.publish=a.publishCustomEvent}},onerror:function(){var n=(e.storefrontBaseUrl?e.storefrontBaseUrl.replace(/\/$/,""):self.location.origin)+"/.well-known/shopify/monorail/unstable/produce_batch",a=JSON.stringify({metadata:{event_sent_at_ms:(new Date).getTime()},events:[{schema_id:"web_pixels_manager_load/2.0",payload:{version:t||"latest",page_url:self.location.href,status:"failed",error_msg:g+" has failed to load"},metadata:{event_created_at_ms:(new Date).getTime()}}]});try{if(self.navigator.sendBeacon.bind(self.navigator)(n,a))return!0}catch(e){}const o=new XMLHttpRequest;try{return o.open("POST",n,!0),o.setRequestHeader("Content-Type","text/plain"),o.send(a),!0}catch(e){console&&console.warn&&console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")}return!1}},c=document.createElement("script"),u=d.src,p=d.async||!0,f=d.onload,h=d.onerror,w=document.head,y=document.body,c.async=p,c.src=u,f&&c.addEventListener("load",f),h&&c.addEventListener("error",h),w?w.appendChild(c):y?y.appendChild(c):console.error("Did not find a head or body element to append the script")})({shopId: 52647395515,storefrontBaseUrl: "https://touchbeauty.shop",cdnBaseUrl: "https://cdn.shopify.com",surface: "storefront-renderer",enabledBetaFlags: ["web_pixels_use_shop_domain_monorail_endpoint","web_pixels_shopify_pixel_validation","web_pixels_prefetch_assets"],webPixelExtensionBaseUrl: "https://cdn.shopify.com",webPixelsConfigList: [{"id":"shopify-app-pixel","configuration":"{}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"0533","apiClientId":"shopify-pixel","type":"APP"},{"id":"shopify-custom-pixel","eventPayloadVersion":"v1","runtimeContext":"LAX","scriptVersion":"0533","apiClientId":"shopify-pixel","type":"CUSTOM"}],initData: {"cart":null,"checkout":null,"customer":null,"productVariants":[]},},function pageEvents(webPixelsManagerAPI) {webPixelsManagerAPI.publish("page_viewed");},"https://cdn.shopify.com","browser","0.0.291","27ebbe9cwc6551374p82226fa4m8497296f");</script>  <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
            window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
            window.ShopifyAnalytics.meta.currency = 'ILS';
            var meta = {"page":{"pageType":"home"}};
            for (var attr in meta) {
                window.ShopifyAnalytics.meta[attr] = meta[attr];
            }</script>
        <script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {

            };
        </script>
        <script class="analytics">(function () {
                var customDocumentWrite = function(content) {
                    var jquery = null;

                    if (window.jQuery) {
                        jquery = window.jQuery;
                    } else if (window.Checkout && window.Checkout.$) {
                        jquery = window.Checkout.$;
                    }

                    if (jquery) {
                        jquery('body').append(content);
                    }
                };

                var hasLoggedConversion = function(token) {
                    if (token) {
                        return document.cookie.indexOf('loggedConversion=' + token) !== -1;
                    }
                    return false;
                }

                var setCookieIfConversion = function(token) {
                    if (token) {
                        var twoMonthsFromNow = new Date(Date.now());
                        twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

                        document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
                    }
                }

                var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
                if (trekkie.integrations) {
                    return;
                }
                trekkie.methods = [
                    'identify',
                    'page',
                    'ready',
                    'track',
                    'trackForm',
                    'trackLink'
                ];
                trekkie.factory = function(method) {
                    return function() {
                        var args = Array.prototype.slice.call(arguments);
                        args.unshift(method);
                        trekkie.push(args);
                        return trekkie;
                    };
                };
                for (var i = 0; i < trekkie.methods.length; i++) {
                    var key = trekkie.methods[i];
                    trekkie[key] = trekkie.factory(key);
                }
                trekkie.load = function(config) {
                    trekkie.config = config || {};
                    trekkie.config.initialDocumentCookie = document.cookie;
                    var first = document.getElementsByTagName('script')[0];
                    var script = document.createElement('script');
                    script.type = 'text/javascript';
                    script.onerror = function(e) {
                        var scriptFallback = document.createElement('script');
                        scriptFallback.type = 'text/javascript';
                        scriptFallback.onerror = function(error) {
                            var Monorail = {
                                produce: function produce(monorailDomain, schemaId, payload) {
                                    var currentMs = new Date().getTime();
                                    var event = {
                                        schema_id: schemaId,
                                        payload: payload,
                                        metadata: {
                                            event_created_at_ms: currentMs,
                                            event_sent_at_ms: currentMs
                                        }
                                    };
                                    return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
                                },
                                sendRequest: function sendRequest(endpointUrl, payload) {
                                    // Try the sendBeacon API
                                    if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
                                        var blobData = new window.Blob([payload], {
                                            type: 'text/plain'
                                        });

                                        if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                                            return true;
                                        } // sendBeacon was not successful

                                    } // XHR beacon

                                    var xhr = new XMLHttpRequest();

                                    try {
                                        xhr.open('POST', endpointUrl);
                                        xhr.setRequestHeader('Content-Type', 'text/plain');
                                        xhr.send(payload);
                                    } catch (e) {
                                        console.log(e);
                                    }

                                    return false;
                                },
                                isIos12: function isIos12() {
                                    return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
                                }
                            };
                            Monorail.produce('monorail-edge.shopifysvc.com',
                                'trekkie_storefront_load_errors/1.1',
                                {shop_id: 52647395515,
                                    theme_id: 133149655227,
                                    app_name: "storefront",
                                    context_url: window.location.href,
                                    source_url: "https://cdn.shopify.com/s/trekkie.storefront.bf49faf0d34cf7aec6c9870eb470f25b50d18490.min.js"});

                        };
                        scriptFallback.async = true;
                        scriptFallback.src = 'https://cdn.shopify.com/s/trekkie.storefront.bf49faf0d34cf7aec6c9870eb470f25b50d18490.min.js';
                        first.parentNode.insertBefore(scriptFallback, first);
                    };
                    script.async = true;
                    script.src = 'https://cdn.shopify.com/s/trekkie.storefront.bf49faf0d34cf7aec6c9870eb470f25b50d18490.min.js';
                    first.parentNode.insertBefore(script, first);
                };
                trekkie.load(
                    {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":52647395515,"isMerchantRequest":null,"themeId":133149655227,"themeCityHash":"8841747351354961903","contentLanguage":"ar","currency":"ILS"},"isServerSideCookieWritingEnabled":true,"monorailRegion":"shop_domain"},"Facebook Pixel":{"pixelIds":["907069156528573"],"agent":"plshopify1.2"},"Google Gtag Pixel":{"conversionId":"AW-0","eventLabels":[{"type":"page_view","action_label":"AW-337134095\/jWVvCOLw2-QDEI-E4aAB"},{"type":"purchase","action_label":"AW-337134095\/XC-4COXw2-QDEI-E4aAB"},{"type":"view_item","action_label":"AW-337134095\/SRZyCOjw2-QDEI-E4aAB"},{"type":"add_to_cart","action_label":"AW-337134095\/Rpu4COvw2-QDEI-E4aAB"},{"type":"begin_checkout","action_label":"AW-337134095\/RawWCO7w2-QDEI-E4aAB"},{"type":"search","action_label":"AW-337134095\/hXjKCOnx2-QDEI-E4aAB"},{"type":"add_payment_info","action_label":"AW-337134095\/a2eVCOzx2-QDEI-E4aAB"}],"targetCountry":"IL"},"Session Attribution":{},"S2S":{"facebookCapiEnabled":false,"facebookAppPixelId":"907069156528573","source":"trekkie-storefront-renderer"}}
                );

                var loaded = false;
                trekkie.ready(function() {
                    if (loaded) return;
                    loaded = true;

                    window.ShopifyAnalytics.lib = window.trekkie;


                    var originalDocumentWrite = document.write;
                    document.write = customDocumentWrite;
                    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
                    document.write = originalDocumentWrite;

                    window.ShopifyAnalytics.lib.page(null,{"pageType":"home"});

                    var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
                    var token = match? match[1]: undefined;
                    if (!hasLoggedConversion(token)) {
                        setCookieIfConversion(token);

                    }
                });


                var eventsListenerScript = document.createElement('script');
                eventsListenerScript.async = true;
                eventsListenerScript.src = "//cdn.shopify.com/shopifycloud/shopify/assets/shop_events_listener-65cd0ba3fcd81a1df33f2510ec5bcf8c0e0958653b50e3965ec972dd638ee13f.js";
                document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

            })();</script>
        <script class="boomerang">
            (function () {
                if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
                    return;
                }
                window.BOOMR = window.BOOMR || {};
                window.BOOMR.snippetStart = new Date().getTime();
                window.BOOMR.snippetExecuted = true;
                window.BOOMR.snippetVersion = 12;
                window.BOOMR.application = "storefront-renderer";
                window.BOOMR.themeName = "Wokiee";
                window.BOOMR.themeVersion = "1.3.0";
                window.BOOMR.shopId = 52647395515;
                window.BOOMR.themeId = 133149655227;
                window.BOOMR.renderRegion = "gcp-us-east1";
                window.BOOMR.url =
                    "https://cdn.shopify.com/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
                var where = document.currentScript || document.getElementsByTagName("script")[0];
                var parentNode = where.parentNode;
                var promoted = false;
                var LOADER_TIMEOUT = 3000;
                function promote() {
                    if (promoted) {
                        return;
                    }
                    var script = document.createElement("script");
                    script.id = "boomr-scr-as";
                    script.src = window.BOOMR.url;
                    script.async = true;
                    parentNode.appendChild(script);
                    promoted = true;
                }
                function iframeLoader(wasFallback) {
                    promoted = true;
                    var dom, bootstrap, iframe, iframeStyle;
                    var doc = document;
                    var win = window;
                    window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
                    bootstrap = function(parent, scriptId) {
                        var script = doc.createElement("script");
                        script.id = scriptId || "boomr-if-as";
                        script.src = window.BOOMR.url;
                        BOOMR_lstart = new Date().getTime();
                        parent = parent || doc.body;
                        parent.appendChild(script);
                    };
                    if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
                        window.BOOMR.snippetMethod = "s";
                        bootstrap(parentNode, "boomr-async");
                        return;
                    }
                    iframe = document.createElement("IFRAME");
                    iframe.src = "about:blank";
                    iframe.title = "";
                    iframe.role = "presentation";
                    iframe.loading = "eager";
                    iframeStyle = (iframe.frameElement || iframe).style;
                    iframeStyle.width = 0;
                    iframeStyle.height = 0;
                    iframeStyle.border = 0;
                    iframeStyle.display = "none";
                    parentNode.appendChild(iframe);
                    try {
                        win = iframe.contentWindow;
                        doc = win.document.open();
                    } catch (e) {
                        dom = document.domain;
                        iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
                        win = iframe.contentWindow;
                        doc = win.document.open();
                    }
                    if (dom) {
                        doc._boomrl = function() {
                            this.domain = dom;
                            bootstrap();
                        };
                        doc.write("<body onload='document._boomrl();'>");
                    } else {
                        win._boomrl = function() {
                            bootstrap();
                        };
                        if (win.addEventListener) {
                            win.addEventListener("load", win._boomrl, false);
                        } else if (win.attachEvent) {
                            win.attachEvent("onload", win._boomrl);
                        }
                    }
                    doc.close();
                }
                var link = document.createElement("link");
                if (link.relList &&
                    typeof link.relList.supports === "function" &&
                    link.relList.supports("preload") &&
                    ("as" in link)) {
                    window.BOOMR.snippetMethod = "p";
                    link.href = window.BOOMR.url;
                    link.rel = "preload";
                    link.as = "script";
                    link.addEventListener("load", promote);
                    link.addEventListener("error", function() {
                        iframeLoader(true);
                    });
                    setTimeout(function() {
                        if (!promoted) {
                            iframeLoader(true);
                        }
                    }, LOADER_TIMEOUT);
                    BOOMR_lstart = new Date().getTime();
                    parentNode.appendChild(link);
                } else {
                    iframeLoader(false);
                }
                function boomerangSaveLoadTime(e) {
                    window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
                }
                if (window.addEventListener) {
                    window.addEventListener("load", boomerangSaveLoadTime, false);
                } else if (window.attachEvent) {
                    window.attachEvent("onload", boomerangSaveLoadTime);
                }
                if (document.addEventListener) {
                    document.addEventListener("onBoomerangLoaded", function(e) {
                        e.detail.BOOMR.init({
                            ResourceTiming: {
                                enabled: true,
                                trackedResourceTypes: ["script", "img", "css"]
                            },
                        });
                        e.detail.BOOMR.t_end = new Date().getTime();
                    });
                } else if (document.attachEvent) {
                    document.attachEvent("onpropertychange", function(e) {
                        if (!e) e=event;
                        if (e.propertyName === "onBoomerangLoaded") {
                            e.detail.BOOMR.init({
                                ResourceTiming: {
                                    enabled: true,
                                    trackedResourceTypes: ["script", "img", "css"]
                                },
                            });
                            e.detail.BOOMR.t_end = new Date().getTime();
                        }
                    });
                }
            })();</script>
    </head>
    <body ><div id="shopify-section-show-helper" class="shopify-section"></div><div id="shopify-section-header-template" class="shopify-section"><nav class="panel-menu mobile-main-menu">
            <ul><li>
                    <a href="home.html">الصفحة الرئيسية</a></li><li>
                    <a href="eye.html">منتجات العناية بمنطقة العيون</a></li><li>
                    <a href="hair.html"> منتجات العناية بالشعر</a></li><li>
                    <a href="skin&body.html"> منتجات العناية بالبشرة و الجسم</a></li><li>
                    <a href="teeth.html">منتجات العناية بالأسنان</a></li></ul>>
        </nav><header class="desctop-menu-large small-header"><!-- tt-mobile-header -->
            <div class="tt-mobile-header">
                <div class="container-fluid">
                    <div class="tt-header-row">
                        <div class="tt-mobile-parent-menu">
                            <div class="tt-menu-toggle mainmenumob-js">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 22 22" style="enable-background:new 0 0 22 22;" xml:space="preserve">
  <g>
      <path d="M1.8,6.1C1.6,6,1.6,5.8,1.6,5.7c0-0.2,0.1-0.3,0.2-0.4C1.9,5.1,2,5,2.2,5h17.5c0.2,0,0.3,0.1,0.4,0.2
             c0.1,0.1,0.2,0.3,0.2,0.4c0,0.2-0.1,0.3-0.2,0.4c-0.1,0.1-0.3,0.2-0.4,0.2H2.2C2,6.3,1.9,6.2,1.8,6.1z M1.8,11.7
             c-0.1-0.1-0.2-0.3-0.2-0.4c0-0.2,0.1-0.3,0.2-0.4c0.1-0.1,0.3-0.2,0.4-0.2h17.5c0.2,0,0.3,0.1,0.4,0.2c0.1,0.1,0.2,0.3,0.2,0.4
             c0,0.2-0.1,0.3-0.2,0.4c-0.1,0.1-0.3,0.2-0.4,0.2H2.2C2,11.9,1.9,11.8,1.8,11.7z M1.8,17.3c-0.1-0.1-0.2-0.3-0.2-0.4
             c0-0.2,0.1-0.3,0.2-0.4c0.1-0.1,0.3-0.2,0.4-0.2h17.5c0.2,0,0.3,0.1,0.4,0.2c0.1,0.1,0.2,0.3,0.2,0.4c0,0.2-0.1,0.3-0.2,0.4
             c-0.1,0.1-0.3,0.2-0.4,0.2H2.2C2,17.5,1.9,17.5,1.8,17.3z"/>
  </g>
</svg>
                            </div>
                        </div>
                        <!-- search -->
                        <div class="tt-mobile-parent-search tt-parent-box"></div>
                        <!-- /search --><!-- cart -->
                        <div class="tt-mobile-parent-cart tt-parent-box"></div>
                        <!-- /cart --><!-- account -->
                        <div class="tt-mobile-parent-account tt-parent-box"></div>
                        <!-- /account --></div>
                </div>
                <div class="container-fluid tt-top-line">
                    <div class="row">
                        <div class="tt-logo-container">
                            <a class="tt-logo tt-logo-alignment" href="/"><h2></h2></a>
                        </div>
                    </div>
                </div>
            </div><!-- tt-desktop-header -->
            <div class="tt-desktop-header">

                <div class="container-fluid">
                    <div class="tt-header-holder">

                        <div class="tt-col-obj tt-obj-logo
" itemscope itemtype="http://schema.org/Organization"><a href="/" class="tt-logo" itemprop="url"><h2 class="tt-title"></h2></a></div><div class="tt-col-obj tt-obj-options obj-move-right"><!-- tt-search -->
                            <div class="tt-desctop-parent-search tt-parent-box">
                                <div class="tt-search tt-dropdown-obj">
                                    <button class="tt-dropdown-toggle"
                                            data-tooltip="بحث"
                                            data-tposition="bottom"
                                    >
                                        <i class="icon-f-85"></i>
                                    </button>
                                    <div class="tt-dropdown-menu">
                                        <div class="container">
                                            <form action="/search" method="get" role="search">
                                                <div class="tt-col">
                                                    <input type="hidden" name="type" value="product" />
                                                    <input class="tt-search-input"
                                                           type="search"
                                                           name="q"
                                                           placeholder="بحث عن المنتجات"
                                                           aria-label="بحث عن المنتجات">
                                                    <button type="submit" class="tt-btn-search"></button>
                                                </div>
                                                <div class="tt-col">
                                                    <button class="tt-btn-close icon-f-84"></button>
                                                </div>
                                                <div class="tt-info-text">عن ماذا تبحث؟</div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /tt-search --><!-- tt-cart -->
                            <div class="tt-desctop-parent-cart tt-parent-box">
                                <div class="tt-cart tt-dropdown-obj">
                                    <button class="tt-dropdown-toggle"
                                            data-tooltip="حقيبة التسوق"
                                            data-tposition="bottom"
                                    >
                                        <i class="icon-f-39"></i>
                                        <span class="tt-text">

      </span>
                                        <span class="tt-badge-cart hide">0</span>
                                    </button>

                                    <div class="tt-dropdown-menu">
                                        <div class="tt-mobile-add">
                                            <h6 class="tt-title">حقيبة التسوق</h6>
                                            <button class="tt-close">اغلاق</button>
                                        </div>
                                        <div class="tt-dropdown-inner">
                                            <div class="tt-cart-layout">
                                                <div class="tt-cart-content">

                                                    <a href="/cart" class="tt-cart-empty" title="عرض حقيبة التسوق">
                                                        <i class="icon-f-39"></i>
                                                        <p>لا يوجد منتجات في حقيبة التسوق</p>
                                                    </a>

                                                    <div class="tt-cart-box hide">
                                                        <div class="tt-cart-list"></div>
                                                        <div class="flex-align-center header-cart-more-message-js" style="display: none;">
                                                            <a href="/cart" class="btn-link-02" title="عرض حقيبة التسوق">. . .</a>
                                                        </div>
                                                        <div class="tt-cart-total-row">
                                                            <div class="tt-cart-total-title">المجموع الكلي</div>
                                                            <div class="tt-cart-total-price">0.00 NIS</div>
                                                        </div>

                                                        <div class="tt-cart-btn">
                                                            <div class="tt-item">
                                                                <a href="page1.html" class="btn">اتمام الطلب</a>
                                                            </div>
                                                            <div class="tt-item">
                                                                <a href="/cart" class="btn-link-02">عرض حقيبة التسوق</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div><div class='item-html-js hide'>
                                            <div class="tt-item">
                                                <a href="#" title="عرض المنتج">
                                                    <div class="tt-item-img">
                                                        img
                                                    </div>
                                                    <div class="tt-item-descriptions">
                                                        <h2 class="tt-title">title</h2>

                                                        <ul class="tt-add-info">
                                                            <li class="details">details</li>
                                                        </ul>

                                                        <div class="tt-quantity"><span class="qty">qty</span> X</div> <div class="tt-price">price</div>
                                                    </div>
                                                </a>
                                                <div class="tt-item-close">
                                                    <a href="/cart/change?id=0&quantity=0" class="tt-btn-close svg-icon-delete header_delete_cartitem_js" title="حذف">
                                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             viewBox="0 0 22 22" style="enable-background:new 0 0 22 22;" xml:space="preserve">
  <g>
      <path d="M3.6,21.1c-0.1-0.1-0.2-0.3-0.2-0.4v-15H2.2C2,5.7,1.9,5.6,1.7,5.5C1.6,5.4,1.6,5.2,1.6,5.1c0-0.2,0.1-0.3,0.2-0.4
             C1.9,4.5,2,4.4,2.2,4.4h5V1.9c0-0.2,0.1-0.3,0.2-0.4c0.1-0.1,0.3-0.2,0.4-0.2h6.3c0.2,0,0.3,0.1,0.4,0.2c0.1,0.1,0.2,0.3,0.2,0.4
             v2.5h5c0.2,0,0.3,0.1,0.4,0.2c0.1,0.1,0.2,0.3,0.2,0.4c0,0.2-0.1,0.3-0.2,0.4c-0.1,0.1-0.3,0.2-0.4,0.2h-1.3v15
             c0,0.2-0.1,0.3-0.2,0.4c-0.1,0.1-0.3,0.2-0.4,0.2H4.1C3.9,21.3,3.7,21.2,3.6,21.1z M17.2,5.7H4.7v14.4h12.5V5.7z M8.3,9
             c0.1,0.1,0.2,0.3,0.2,0.4v6.9c0,0.2-0.1,0.3-0.2,0.4c-0.1,0.1-0.3,0.2-0.4,0.2s-0.3-0.1-0.4-0.2c-0.1-0.1-0.2-0.3-0.2-0.4V9.4
             c0-0.2,0.1-0.3,0.2-0.4c0.1-0.1,0.3-0.2,0.4-0.2S8.1,8.9,8.3,9z M8.4,4.4h5V2.6h-5V4.4z M11.4,9c0.1,0.1,0.2,0.3,0.2,0.4v6.9
             c0,0.2-0.1,0.3-0.2,0.4c-0.1,0.1-0.3,0.2-0.4,0.2s-0.3-0.1-0.4-0.2c-0.1-0.1-0.2-0.3-0.2-0.4V9.4c0-0.2,0.1-0.3,0.2-0.4
             c0.1-0.1,0.3-0.2,0.4-0.2S11.3,8.9,11.4,9z M13.6,9c0.1-0.1,0.3-0.2,0.4-0.2s0.3,0.1,0.4,0.2c0.1,0.1,0.2,0.3,0.2,0.4v6.9
             c0,0.2-0.1,0.3-0.2,0.4c-0.1,0.1-0.3,0.2-0.4,0.2s-0.3-0.1-0.4-0.2c-0.1-0.1-0.2-0.3-0.2-0.4V9.4C13.4,9.3,13.5,9.1,13.6,9z"/>
  </g>
</svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div></div>
                                </div>
                            </div>
                            <!-- /tt-cart --><!-- tt-account -->
                            <div class="tt-desctop-parent-account tt-parent-box">
                                <div class="tt-account tt-dropdown-obj">
                                    <button class="tt-dropdown-toggle"
                                            data-tooltip="حسابي"
                                            data-tposition="bottom"
                                    ><i class="icon-f-94"></i></button>
                                    <div class="tt-dropdown-menu">
                                        <div class="tt-mobile-add">
                                            <button class="tt-close">اغلاق</button>
                                        </div>
                                        <div class="tt-dropdown-inner">
                                            <ul ><li><a href="home.html"><i class="icon-f-77"></i>تسجيل الخروج</a></li><li><a href="myaccount.php">
                                                        <i class="icon-f-94"></i>حسابي</a></li>
                                                <li><a href="page1.html"><i class="icon-f-68"></i>اتمام الطلب</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /tt-account --></div>

                    </div>
                </div>
                <div class="tt-color-scheme-01 menubackground"><div class="container-fluid single-menu">
                        <div class="tt-header-holder">
                            <div class="tt-obj-menu obj-aligment-right">
                                <div class="tt-desctop-parent-menu tt-parent-box">
                                    <div class="tt-desctop-menu tt-hover-01"><nav>
                                            <ul><li class="dropdown selected tt-megamenu-col-02" >
                                                    <a href="home.html">الصفحة الرئيسية</a></li><li class="dropdown tt-megamenu-col-01" >
                                                    <a href="eye.html">منتجات العناية بمنطقة العيون</a></li><li class="dropdown tt-megamenu-col-01" >
                                                    <a href="hair.html"> منتجات العناية بالشعر</a></li><li class="dropdown tt-megamenu-col-01" >
                                                    <a href="skin&body.html"> منتجات العناية بالبشرة و الجسم</a></li><li class="dropdown tt-megamenu-col-01" >
                                                    <a href="teeth.html">منتجات العناية بالأسنان</a></li><li class="dropdown tt-megamenu-col-01" >
                                                </li></ul>
                                        </nav></div>
                                </div>
                            </div>
                        </div>
                    </div></div></div>
            <!-- stuck nav -->
            <div class="tt-stuck-nav">
                <div class="container">
                    <div class="tt-header-row ">
                        <div class="tt-stuck-parent-menu"></div>
                        <div class="tt-stuck-parent-search tt-parent-box"></div><div class="tt-stuck-parent-cart tt-parent-box"></div><div class="tt-stuck-parent-account tt-parent-box"></div></div>
                </div>
            </div>
        </header>


    </div>

    <div id="tt-pageContent" class="show_unavailable_variants">
        <!-- BEGIN content_for_index --><div id="shopify-section-1530224149715" class="shopify-section index-section">
            <div class="nomargin container-indent" data-sectionname="index_revolution">
                <div class="content"   >

                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>

                        </div>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://cdn11.bigcommerce.com/s-335o65ois5/images/stencil/original/carousel/17/makeup.png?c=1&imbypass=on"
                                     class="d-block w-100"  width="500" height="500"alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="slide-effect">
                                        <h1 style="font-family: Tahoma; " class="slideUp" data-animation-in="slideInUp" class="animated slideInUp heroCarousel-title">العناية بالعيون</h1>
                                        <p  style="font-family: Tahoma; "class="slideUp2"data-animation-in="slideInUp" class="animated slideInUp  heroCarousel-description"> تألقي بعيون لامعة وجذابة مع افضل المنتجات  من موقعنا </p>
                                    </div>
                                </div>


                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn11.bigcommerce.com/s-335o65ois5/images/stencil/original/carousel/20/haircare.png?c=1&imbypass=on"  width="500" height="500" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="slide-effect">
                                        <h1 style="font-family: Tahoma; " class="slideUp" data-animation-in="slideInUp" class="animated slideInUp heroCarousel-title">العناية العناية بالشعر</h1>
                                        <p  style="font-family: Tahoma; "class="slideUp2"data-animation-in="slideInUp" class="animated slideInUp  heroCarousel-description"> منتجاتنا  العالمية للعناية بالشعر  لتمنحه تألقاً وترطيباً كثيفاً</p>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn11.bigcommerce.com/s-335o65ois5/images/stencil/original/carousel/18/wepik-2022030-1198.png?c=1&imbypass=on"  width="500" height="500"class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="slide-effect">
                                        <h1 style="font-family: Tahoma; " class="slideUp" data-animation-in="slideInUp" class="animated slideInUp heroCarousel-title">العناية بالبشرة والجسم </h1>
                                        <p  style="font-family: Tahoma; "class="slideUp2"data-animation-in="slideInUp" class="animated slideInUp  heroCarousel-description"> نوفر خيارات واسعة من منتجات العناية التي تمنح البشرة إطلالة مشرقة وتحافظ عليها صحية ومتألقة</p>
                                    </div>

                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="img_3.png" width="500" height="500" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="slide-effect">
                                        <h1 style="font-family: Tahoma; " class="slideUp" data-animation-in="slideInUp" class="animated slideInUp heroCarousel-title">العناية بالاسنان </h1>
                                        <p  style="font-family: Tahoma; "class="slideUp2"data-animation-in="slideInUp" class="animated slideInUp  heroCarousel-description">تحتاج للعناية صحية لأسنانك؟ تفضل بزيادة موقعنا واحصل على أفضل المنتجات</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>  </div>
            </div>
            <div class="wrapper" id="about"  style="background-color: #fdfaf5" >
                <h1 style="text-align: center;color: #cd9575;font-size: 30px;height: 5vh;font-family: Calibri;font-weight: bold"   >عن متجرنا </h1>
                <span class="line"></span>
                <p id="msg" style="text-align: center;font-size: 30px;color:#cd9575;height: 10vh;font-family:Calibri">
                </p></div>

            <div class="container text-center reveal">
                <h1 class="ml11">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters" style="color: #cd9575">الأقسام </span>
  </span>
                </h1>
                <div class="content con" >
                    <div class="card">
                        <div class="pic-card">
                            <!--picture-->
                            <img  width="400" height="300" class="size-img-card"src="https://t4.ftcdn.net/jpg/05/54/07/75/240_F_554077575_FvuMusLpRLU7syIhnPo6nFPMMlgsjEk8.webp" alt="Easy Communicate">
                        </div>
                        <div class="info">
                            <!-- title + information-->
                            <a href="eye1.php">           <h3 style="color: #cd9575">العناية بالعيون</h3>
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="pic-card">
                            <!--picture-->
                            <img   width="400" height="300" class="size-img-card" src="https://cdn-hhgdp.nitrocdn.com/iJAVXJwPiwOODjFEjnLOnKzYsInAbkKl/assets/images/optimized/rev-18dcab9/wp-content/uploads/2022/06/hair-section2-414x.jpg" alt="Easy Communicate">
                        </div>
                        <div class="info">
                            <!-- title + information-->

                            <a href="hair1.php"> <h3 style="color: #cd9575" >العناية بالشعر</h3></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="pic-card">
                            <!--picture-->
                            <img  width="400" height="300" class="size-img-card" src="https://cdn-hhgdp.nitrocdn.com/iJAVXJwPiwOODjFEjnLOnKzYsInAbkKl/assets/images/optimized/rev-18dcab9/wp-content/uploads/2020/02/face-410x.png" alt="Place">
                        </div>
                        <div class="info">
                            <!-- title + information-->

                            <a href="skin&body1.php">  <h3 style="color: #cd9575">العناية بالبشرة والجسم</h3> </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="pic-card">
                            <!--picture-->
                            <img   width="400" height="300"class="size-img-card" src="https://as2.ftcdn.net/v2/jpg/04/93/28/87/1000_F_493288712_eCHK9K9wnk1yVwFW5EZh1gFr61sTpD84.jpg" alt="Cost">
                        </div>
                        <div class="info">
                            <!-- title + information-->
                            <a href="teeth1.php">          <h3 style="color: #cd9575">العناية بالاسنان</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <section  style="text-align: center" class="reveal t">

                <h2  style="text-align: center;top: 20px;color: #cd9575" class="title ot">OUR TEAM</h2>
                <div class="content ca">
                    <div class="cardt team">
                        <div  style="text-align: center"class="img">
                            <img src="https://github.com/AsmaaSaleh1/Sakanat/blob/master/src/img/x.png?raw=true" alt="">
                        </div>
                        <div class="content">
                            <div class="info">
                                <h2 style="text-align: center;top: 90px;color: #cd9575">Shahd Hamad<br><span style="text-align: center;color: #cd9575">Backend developer</span></h2>
                                <div class="data">
                                    <h3 style="text-align: center;color: #cd9575;     bottom:-80px;">Computer Engineer</h3><br>
                                    <div class="social">
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                        <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div style="text-align: center"class="cardt team">
                        <div class="img">
                            <img src="https://github.com/AsmaaSaleh1/Sakanat/blob/master/src/img/girl.png?raw=true" alt="">
                        </div>
                        <div class="content">
                            <div class="info">
                                <h2 style="text-align: center ;top: 90px;color: #cd9575">Raia Ishtayeh <br><span style="text-align: center;color: #cd9575" >Front developer</span></h2>
                                <div class="data">
                                    <h3  style="text-align: center;color: #cd9575;     bottom:-80px;">Computer Engineer</h3><br>
                                    <div class="social">
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                        <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>


                </div>

            </section>


            <div id="shopify-section-footer-template" class="shopify-section"><footer class="nomargin"><div class="tt-footer-col tt-color-scheme-03">
                        <div class="container">
                            <div class="row"><div class="col-md-6 col-lg-3 col-xl-3">
                                    <div class="tt-mobile-collapse">
                                        <h4 class="tt-collapse-title">سياسات الموقع</h4>
                                        <div class="tt-collapse-content"><ul class="tt-list"><li><a href="شروط%20الاستخدام.html">شروط الاستخدام</a></li><li><a href="سياسة-الترجيع.html">سياسة الترجيع</a></li><li><a href="سياسة-الخصوصية.html">سياسة الخصوصية</a></li><li><a href="سياسية-الاستبدال%20والاسترجاع.html">سياسة الاستبدال و الاسترجاع و الغاء الطلب</a></li></ul>
                                        </div>
                                    </div></div>
                                <div class="col-md-6 col-lg-3 col-xl-3">
                                    <div class="tt-mobile-collapse">
                                        <h4 class="tt-collapse-title">تواصل معنا</h4>
                                        <div class="tt-collapse-content">
                                            <address>

                                                <p><span>البريد الالكتروني</span> <a href="mailto:TouchBeautyshop@gmail.com">TouchBeautyshop@gmail.com</a></p>
                                                <p><span>00972566446040</span> </p>
                                                <p><span>فلسطين</span> </p>
                                            </address>

                                        </div>
                                    </div></div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="tt-newsletter">
                                        <div class="tt-mobile-collapse">
                                            <h4 class="tt-collapse-title">انضم لعائلتنا</h4>
                                            <div class="tt-collapse-content">
                                                <p></p>
                                                <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" />
                                                    <div class="form-group">
                                                        <input type="hidden" name="contact[tags]" value="newsletter">
                                                        <input type="email"
                                                               name="contact[email]"
                                                               class="form-control"
                                                               value=""
                                                               placeholder="ادخل بريدك الالكتروني"
                                                               autocomplete="off"
                                                               autocapitalize="off"
                                                               spellcheck="false" >
                                                        <button type="submit" class="btn" name="commit">اشترك معنا</button>
                                                    </div></form>
                                            </div>
                                        </div>
                                    </div><ul class="tt-social-icon">
                                        <li><a class="icon-g-64" target="_blank" href="https://www.facebook.com/touchbeautyshop/"></a></li><li><a class="icon-g-67" target="_blank" href="https://www.instagram.com/touchbeautyshop/?hl=en"></a></li></ul></div>
                            </div>
                        </div>
                    </div><div class="tt-footer-custom tt-color-scheme-04">

                        <div class="container">
                            <div class="tt-row">
                                <div class="tt-col-left"><div class="tt-col-item tt-logo-col">
                                        <a href="/" class="tt-logo tt-logo-alignment"><img src="https://cdn.salla.sa/VOypj/ExDCt85fz2OYR1hnALR24Ajx3C2XHuPd3vaVkm0M.png"
                                                                                           srcset="https://cdn.salla.sa/VOypj/ExDCt85fz2OYR1hnALR24Ajx3C2XHuPd3vaVkm0M.png" alt="" class="tt-retina"></a>
                                    </div><div class="tt-col-item">
                                        <div class="tt-box-copyright">&copy; Touch Beauty 2023. All Rights Reserved</div>
                                    </div></div></div>
                        </div>
                    </div></footer>


            </div><a href="#" class="tt-back-to-top">العودة الى الأعلى</a><!-- modalAddToCart -->
            <div class="modal fade" id="modalAddToCartError" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-add-cart">
                                <i class="icon-h-10"></i>
                                <p class="error_message"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalAddToCartProduct" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="tt-modal-addtocart mobile">
                                <div class="tt-modal-messages">
                                    <i class="icon-f-68"></i> !تم اضافة المنتج الى حقيبة لتسوق
                                </div>
                                <a href="#" class="btn-link btn-close-popup">مواصلة التسوق</a>
                                <a href="/cart" class="btn-link">عرض حقيبة لتسوق</a>

                                <a href="page1.html" class="btn-link">اتمام الطلب</a>
                            </div>
                            <div class="tt-modal-addtocart desctope">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="tt-modal-messages">
                                            <i class="icon-f-68"></i> !تم اضافة المنتج الى حقيبة لتسوق
                                        </div>
                                        <div class="tt-modal-product">
                                            <div class="tt-img"></div>
                                            <div class="tt-title tt-title-js"></div>
                                            <div class="description"></div>
                                            <div class="tt-qty">:الكمية <span></span></div>
                                        </div>
                                        <div class="tt-product-total">
                                            <div class="tt-total total-product-js">
                                                :سعر المنتج <span class="tt-price"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <a href="/cart" class="tt-cart-total" title="عرض حقيبة لتسوق">
                                            يوجد <span class="modal-total-quantity"></span> منتجات<br> في حقيبة التسوق
                                            <div class="tt-total">
                                                :السعر الكلي <span class="tt-price full-total-js"></span>
                                            </div>
                                        </a>

                                        <a href="#" class="btn btn-border btn-close-popup">مواصلة التسوق</a>
                                        <a href="/cart" class="btn btn-border">عرض حقيبة لتسوق</a>

                                        <a href="page1.html" class="btn">اتمام الطلب</a>
                                    </div>
                                </div>
                            </div><div class="tt-modal-slider hide">
                                <hr>
                                <div class="tt-title">:يمكنك الشراء مع هذا المنتج</div>
                                <div class="tt-modal-slider-js header-menu-product arrow-location-03 row">
                                </div>
                            </div></div>
                    </div>
                </div>
            </div><div id="custom-preloader">
                <div class="custom-loader" style="display: none;">
                    <img width="32" height="32" alt="" src="//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/assets/ajax-loader.gif?v=83335857307597093571681650502">
                </div>
            </div><script>
                var theme = {},
                    shop_url = 'https://touchbeauty.shop',
                    money_format = '{{amount}} NIS',
                    color_with_border = '',
                    colors_value = ',coat: #ff0000,yellow: #ffff00,black: #000000,blue: #0000ff,green: #00ff00,purple: #800080,silver: #c0c0c0,white: #ffffff,brown: #7b3f00,light-brown: #feb035,dark-turquoise: #23cddc,orange: #fe9001,tan: #eacea7,violet: #ee82ee,pink: #ffc0cb,grey: #808080,red: #ff0000,light blue: #add8e6,',
                    texture_obj = function(){return JSON.parse('{"Material 1":"//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/assets/filter_color1.png?v=20124293718597421471681650502","Material 2":"//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/assets/filter_color2.png?v=71360560775598599651681650502","Material 3":"//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/assets/filter_color3.png?v=8443039914363099491681650502"}');
                    }
                texture_obj = texture_obj();

                var wokiee_app = {
                    url: '',
                    loader_text: '',
                    main_info: {
                        customerid: '',
                        iid: '',
                        shop: 'touchbeautyshop.myshopify.com',
                        domain: 'touchbeauty.shop',
                    }
                };

                var set_day = 'يوم',
                    set_hour = 'ساعة',
                    set_minute = 'دقيقة',
                    set_second = 'ثواني';

                var addtocart_text = '<span class="icon icon-shopping_basket"></span> <span>اضف الى حقيبة التسوق</span> ',
                    unavailable_text = '<span>Sold Out</span>',
                    addedhtml_text = '<span class="icon icon-shopping_basket"></span> تمت الاضافة',
                    errorhtml_text = '',
                    wait_text = '<span class="icon icon-shopping_basket"></span> انتظر';

                var demo_rtl_string = '<link href="//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/assets/style-rtl.css?v=6166698748261962031681650502" rel="stylesheet" type="text/css" media="all" />';
                var small_image = '//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/assets/dummy.png?v=138633415270097886021681650502';


            </script><script src="//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/assets/vendor.min.js?v=172470609613969388041681650502"></script>
            <div class="revolution_included"></div>
            <script src="//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/assets/jquery.themepunch.revolution_full.min.js?v=130677308081452003961681650502"></script>
            <div class="isotope_included"></div>
            <script src="//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/assets/isotope_full.pkgd.min.js?v=130382727834569346921681650502"></script>
            <script src="//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/assets/theme.js?v=177095055787179909721681650502"></script><!-- modal (ModalSubsribeGood) -->
            <div class="modal  fade"  id="ModalSubsribeGood" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xs">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="tt-modal-subsribe-good">
                                <i class="icon-f-68"></i> <span>لقد تم اشتراكك بنجاح</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function checkSubscribe(){
                    if(location.search.indexOf('customer_posted=true') == -1) return false;
                    $('.tt-modal-subsribe-good').find('span').html('لقد تم اشتراكك بنجاح');
                    $('#ModalSubsribeGood').modal('show');
                    setTimeout(function(){window.history.pushState("", "", location.pathname)}, 100);
                }
                function checkSended(){
                    if(location.search.indexOf('contact_posted=true') == -1) return false;
                    $('.tt-modal-subsribe-good').find('span').html('شكرا لإتصالك بنا. سنعود إليك في أقرب وقت ممكن.');
                    $('#ModalSubsribeGood').modal('show');
                    setTimeout(function(){window.history.pushState("", "", location.pathname)}, 100);
                }
                $(document).ready(function() {
                    checkSubscribe();
                    checkSended();
                });
            </script><!-- Modal (ModalMessage) -->
            <div class="modal fade" id="ModalMessage" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true"  data-pause=1500>
                <div class="modal-dialog">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="tt-login-wishlist">
                                <p> الرجاء تسجيل الدخول لإضافة منتجات إلى قائمة الأمنيات الخاصة بك</p>
                                <div class="row-btn">
                                    <a href="home.html" class="btn btn-small">تسجيل الخروج</a>
                                    <a href="myaccount.php" class="btn btn-border btn-small">حسابي</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div id="shopify-section-promo-fixed" class="shopify-section">



            </div><script>
                var adminlinks = '//cdn.shopify.com/s/files/1/0073/3826/2594/t/1/assets/wokiee_v1.0.3.js?5186256758932862582';
            </script>
            <script src="//cdn.shopify.com/s/files/1/0526/4739/5515/t/7/assets/admin-panel.js?v=132873017308694223931681650502" type="text/javascript"></script>


            <script src="//cdn.shopify.com/s/files/1/0194/1736/6592/t/1/assets/booster-page-speed-optimizer.js?23" type="text/javascript"></script>



            <!--Gem_Page_Footer_Script-->



            <script data-instant-track type="text/javascript">
                var GEMVENDOR = GEMVENDOR || (function(){		var _js = {};		return {			init: function(Args) {				_js = Args;			},			getLibs: function() {				return _js;			}		};	}());
                if(typeof pageLibs === 'undefined' || pageLibs === null){
                    var pageLibs = [];
                }
                GEMVENDOR.init(pageLibs);
            </script>
            <script data-instant-track type="text/javascript" src="https://d1um8515vdn9kb.cloudfront.net/files/gempagev2.js?v=1.0" class="gf-script" defer></script>





            <!--End_Gem_Page_Footer_Script-->
            <div id="shopify-block-3886181796285292942" class="shopify-block shopify-app-block"><div class="cowlendar-bg">
                    <div class="cowlendar-modal">
                        <div id="shopify-cowlendar-widget"></div>
                    </div>
                </div>

                <!-- Load assets like this instead of inside the schema because Shopify does not load asset if there is file name collision with another extension -->
                <link href="https://cdn.shopify.com/extensions/999c1faa-c198-4860-8f13-06e10b730d97/2.57.0/assets/styles.css?v=1.0" rel="stylesheet" type="text/css" media="all" />
                <script src="https://cdn.shopify.com/extensions/999c1faa-c198-4860-8f13-06e10b730d97/2.57.0/assets/app.js?v=2.0" defer></script>

                <script type="text/javascript">
                    window._cowlendarConfig = {
                        "shop_id": "52647395515",
                        "shop_url": "touchbeautyshop.myshopify.com"
                    };
                </script>
            </div>
        </div>
    </div>
    </body>
    <!--//ععمل الستايل للعنا >!--
    -->
    <script>
        //for counters
        let valueDisplays = document.querySelectorAll(".num");
        let interval = 10000;

        valueDisplays.forEach((valueDisplay) => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);
            let counter = setInterval(function () {
                startValue += 1;
                valueDisplay.textContent = startValue;
                if (startValue == endValue) {
                    clearInterval(counter);
                }
            }, duration);
        });
        document.addEventListener('DOMContentLoaded', function() {
            showText("#msg", "تعزيز ثقة المرأة عن طريق تقديم مجموعات كاملة من منتجات العناية بالبشرة والشعروالاسنان والعيون  \n" +
                "   التي تناسب وتلبي جميع احتياجات الجمال لجميع الشرائح من حيث الجودة والفاعلية والمسؤولية. ", 0, 100);
        });
        //For display paragraph letter by letter
        let showText = function (target, message, index, interval) {
            if (index < message.length) {
                document.querySelector(target).innerHTML =
                    document.querySelector(target).innerHTML + message[index++];
                setTimeout(function () { showText(target, message, index, interval); }, interval);
            }
        }
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml11 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
            .add({
                targets: '.ml11 .line',
                scaleY: [0,1],
                opacity: [0.5,1],
                easing: "easeOutExpo",
                duration: 700
            })
            .add({
                targets: '.ml11 .line',
                translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
                easing: "easeOutExpo",
                duration: 700,
                delay: 100
            }).add({
            targets: '.ml11 .letter',
            opacity: [0,1],
            easing: "easeOutExpo",
            duration: 600,
            offset: '-=775',
            delay: (el, i) => 34 * (i+1)
        }).add({
            targets: '.ml11',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
        /**/

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script type="text/javascript">
        window.addEventListener('scroll', reveal);

        function reveal(){
            var reveals = document.querySelectorAll('.reveal');

            for(var i = 0; i < reveals.length; i++){

                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;

                if(revealtop < windowheight - revealpoint){
                    reveals[i].classList.add('active');
                }
                else{
                    reveals[i].classList.remove('active');
                }
            }
        }
    </script>
    <script>
        //for counters
        let valueDisplays = document.querySelectorAll(".num");
        let interval = 10000;

        valueDisplays.forEach((valueDisplay) => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);
            let counter = setInterval(function () {
                startValue += 1;
                valueDisplay.textContent = startValue;
                if (startValue == endValue) {
                    clearInterval(counter);
                }
            }, duration);
        });
        document.addEventListener('DOMContentLoaded', function() {
            showText("#msg", " On the site, we offer you the best housing and the closest to the area you want, at the best price\n" +
                "    We see the suffering of students, especially in trying to find housing close to his university at an affordable price, so we created this website to help you.", 0, 100);
        });
        //For display paragraph letter by letter
        let showText = function (target, message, index, interval) {
            if (index < message.length) {
                document.querySelector(target).innerHTML =
                    document.querySelector(target).innerHTML + message[index++];
                setTimeout(function () { showText(target, message, index, interval); }, interval);
            }
        }
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml11 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
            .add({
                targets: '.ml11 .line',
                scaleY: [0,1],
                opacity: [0.5,1],
                easing: "easeOutExpo",
                duration: 700
            })
            .add({
                targets: '.ml11 .line',
                translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
                easing: "easeOutExpo",
                duration: 700,
                delay: 100
            }).add({
            targets: '.ml11 .letter',
            opacity: [0,1],
            easing: "easeOutExpo",
            duration: 600,
            offset: '-=775',
            delay: (el, i) => 34 * (i+1)
        }).add({
            targets: '.ml11',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
        /**/

    </script>
    </html>

<?php
    }else{
        header("Location:signn.php");
        exit;
    }
}
else{
    header("Location:signn.php");
    exit;
}
}
else
{

}
?>