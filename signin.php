<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" >
    <title>Login to your JIJICOM account</title>
    <meta name="description" content="Login to your account to send bulk messages in a blink" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-structure-min.css">
    <style type="text/css">
        .ic-oth{
            background: url('https://d250qlh00f3d5m.cloudfront.net/education/features.png') no-repeat;
        }
        .ic-feat{
            background: url('https://d250qlh00f3d5m.cloudfront.net/education/edu_spirit.png') no-repeat;
        }
        .edu_clnt_logo{
            background: url('https://d250qlh00f3d5m.cloudfront.net/education/edu_client_logos.png');
        }
        .ic-strtup{
            background: url('images/startups/strt_spirit.png');
        }
        .draft-oth {
            background: url('https://d250qlh00f3d5m.cloudfront.net/stock/feature-draft.png') no-repeat;
        }
        .stk_clnt_logo{
            background: url('https://d250qlh00f3d5m.cloudfront.net/stock/stock_clients_logo.png');
        }
        .devel-oth{
            background: url('https://d250qlh00f3d5m.cloudfront.net/developer/developer_features.png') no-repeat;
        }
        .comm-oth {
            background: url('https://d250qlh00f3d5m.cloudfront.net/internal-communication/ic-icons.png') no-repeat scroll 0 0 rgba(0, 0, 0, 0);
        }
        .devel_clnt_logo{
            background:url('https://d250qlh00f3d5m.cloudfront.net/developer/developer_clients.png') no-repeat;
        }
        .sms-min{
            background:url('https://d250qlh00f3d5m.cloudfront.net/developer/sms-min.png') no-repeat;
        }
    </style>

    <script type="text/javascript">
        adroll_adv_id = "TPY3G6FCT5DYNKQROO3YNH";
        adroll_pix_id = "UY6B2EY6FBA3ZF646FYIHM";
        (function() {
            var oldonload = window.onload;
            window.onload = function() {
                __adroll_loaded = true;
                var scr = document.createElement("script");
                var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
                scr.setAttribute('async', 'true');
                scr.type = "text/javascript";
                scr.src = host + "/j/roundtrip.js";
                ((document.getElementsByTagName('head') || [null])[0] ||
                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
                if (oldonload) {
                    oldonload()
                }
            };
        }());
    </script>

    <!--feedback icon bottom
    <a target="_blank" href="http://features.JIJICOM.com/forums/146824-JIJICOM-feature-and-idea-suggestion-forum" style="display:block; border-radius:50%;position:fixed;bottom:20px;padding:10px; right:85px;width:48px;height:48px;cursor: pointer; color:#fff; font-size: 22px; background:#1c5d9e; z-index:999; box-shadow:0 6px 13px 0 rgba(0,0,0,.23); border: 1px solid #003576;">
        <img src="../images/feedback.png" />
    </a>-->    <link rel="canonical" href="signin" />
    <style>
        #mainScreenSignin {background-color: #666; background-image: url("images/signup_bg.jpg");background-position: center center; background-repeat: no-repeat;background-size: cover;color: #fff;min-height: 440px; width: 100%;}
        #mainScreenSignin h1 {color: #fff;font-size: 2.4em;font-weight: lighter;line-height: 50px;}
        .signupFormInner { background: rgba(0, 31, 51, 0.2);padding: 20px;}
        .formWrap, .formWrap a, .formWrap h2 {color: #fff;}
        .formWrap {padding: 0 0 0 140px;}
        .formWrap h2 span {font-family: "Gotham-Rounded-medium";}
        .formWrap .raw {margin-bottom: 20px;position: relative;}
        .formWrap input[type="text"], .formWrap input[type="password"]{background-color: #fff;width: 100%;border:1px solid #ddd;height:34px/*for IE*/}
        .inp, .selinpt {border: 2px solid #fff;line-height: 30px;padding: 0 10px;}
        .forgotPass {cursor: pointer;display: block;font-size: 13px;margin: 20px 0;text-align: center;}
        .forgotPass:hover{text-decoration: underline}
        input.valid {border: 2px solid #3cb371 !important;}
        input.formError {border: 2px solid #f33 !important;}
        .formWrap label.formError{position: absolute;right: 10px;top: 9px;font-size: 14px;}
    </style>
</head>
<body id="signupWrap">
<div id="notification"></div>
<style type="text/css" scoped>
    .ui-button-icon-only{display:none;}
    .ui-menu{width:195px; z-index:100; overflow-y:auto; overflow-x:hidden;}
</style>
<?php
require_once('header.php');
?>




<div class="mainCnt">
    <section id="mainScreenSignin">

        <div class="container">


            <div class="row" style="padding-top:100px;">

                <div class="col-md-6 col-xs-12">

                    <h1 class="">Delivering bulk SMS to 47 counties. In a blink of a second.</h1>
                    <!--                        <div class="bBox">
                                                <div id="mobileApp">Download Mobile App</div>
                                                <a target="_blank" href="https://itunes.apple.com/us/app/JIJICOM/id981827687" id="iphone"></a>
                                                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.JIJICOM.android" class="gp" id="android"></a>
                                                <a target="_blank" href="http://www.windowsphone.com/en-in/store/app/JIJICOM/c91883dc-2f72-4586-b409-25cb111ff72d" class="wi" id="window"></a>
                                            </div>-->

                </div>

                <div class="col-md-6 col-xs-12">
                    <div class="formWrap" id="signup-form">
                        <div class="signupFormInner">
                            <h2 class="mrB2"><span>Sign in</span></h2>

                            <form id="signin" action="https://control.JIJICOM.com/action_layer.php?action=1" method="POST">

                                <div class="raw clear">
                                    <input type="text" placeholder="Username" class="inp " tabindex="3" id="login" name="login">
                                </div>

                                <div class="raw clear">
                                    <input type="password" placeholder="Password" class="inp " id="pass" tabindex="5" name="pass">
                                </div>

                                <div class="clear">
                                    <button id="strtMsg" tabindex="8" class="btn btn-block btn-medium btn-cyan">Proceed</button>
                                </div>
                            </form>
                        </div>
                        <a class="forgotPass" href="#">Forgot your password?</a>


                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end of banner -->
</div>
<!-- end of main content -->
<?php
require_once('footer.php');
?>
</footer><!--/end of foooter-->
<script type="text/javascript" src="https://d3rtqaterrbel4.cloudfront.net/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script type="text/javascript" src="https://d3rtqaterrbel4.cloudfront.net/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://d3rtqaterrbel4.cloudfront.net/jquery.selectric.js"></script>
<script type="text/javascript" src='js/newScript2015.js'></script>
<script type="text/javascript" src="js/jquery.lazyload.min.js"></script>

<!-- Google Tag Manager -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWQZXP"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MWQZXP');</script>
<!-- End Google Tag Manager -->

<script type="text/javascript">

    $(function(){

        //$("img.lazy").lazyload({ effect : "fadeIn"});


        setTimeout(function(){
            setHeight();
        },400)
    });
</script>
<script type="text/javascript">
    function urlParam(name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results)
            return results[1];
        else
            return false;
    }

    var utmObj = {};

    (urlParam('utm_medium')) ? utmObj['utm_medium'] = urlParam('utm_medium') : '';
    (urlParam('utm_source')) ? utmObj['utm_source'] = urlParam('utm_source') : '';
    (urlParam('utm_campaign')) ? utmObj['utm_campaign'] = urlParam('utm_campaign') : '';
    (urlParam('utm_term')) ? utmObj['utm_term'] = urlParam('utm_term') : '';
    (urlParam('utm_content')) ? utmObj['utm_content'] = urlParam('utm_content') : '';

    var len = $.map(utmObj, function(n, i) { return i; }).length;

    if (len)
    {
        // Put the object into storage
        localStorage.setItem('utmParams', JSON.stringify(utmObj));
    }

    console.log(JSON.parse(localStorage.getItem('utmParams')));
</script><script type="text/javascript" src="https://d3rtqaterrbel4.cloudfront.net/jquery.validate.min.js"></script>
<script>
    //alert(navigator.userAgent);

    if(/IEMobile/i.test(navigator.userAgent))
    {
        $('#window,#mobileApp').css('display','block');
    }
    else if(/Android/i.test(navigator.userAgent))
    {
        $('#android,#mobileApp').css('display','block');
    }
    else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
        $('#iphone,#mobileApp').css('display','block');
    }

    // validate signup form on keyup and submit
    $("#signin").validate({
        errorClass: 'formError',
        rules: {
            login: "required",
            pass: "required"
        },
        messages: {
            login: "Please enter username",
            pass: "Please enter passowrd"
        }
    });

</script>

</body>
</html>
