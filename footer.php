<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p class="sub-footer"> © 2016 JIJICOM MEDIA | All Rights Reserved. | <a href="terms">Terms of use</a> | <a href="privacy">Privacy policy</a>
                </p>
            </div>
        </div>
    </div>
</footer><!--/end of foooter-->
<script type="text/javascript" src="https://d3rtqaterrbel4.cloudfront.net/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script type="text/javascript" src="https://d3rtqaterrbel4.cloudfront.net/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://d3rtqaterrbel4.cloudfront.net/jquery.selectric.js"></script>
<script type="text/javascript" src='js/newScript2015.js'></script>
<script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="js/event.js"></script>
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

        $("img.lazy").lazyload({ effect : "fadeIn"});
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
</script>

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

<!-- MAIN SECTION END -->
<script type="text/javascript">
    var whichToShow1 = Math.floor(Math.random() * $('#quotes1 .quote').length);
    $('#quotes1 .quote').hide().eq(whichToShow1).fadeIn(1000);

    //hide image befor dom ready
    addVisibility("#top_footer figure", ".cic", "#happilyOnBoard");

    window.onload = function() {
        setTimeout(function() {
            //show image when dom ready
            remVisibility("#top_footer figure", ".cic", "#happilyOnBoard");
            setHeight();
        }, 500)
    }
    $(window).scroll(function() {
        setHeight();
    });
    jQuery(document).ready(function($) {

        //set animation timing
        var animationDelay = 3000,
        //loading bar effect
            barAnimationDelay = 3800,
            barWaiting = barAnimationDelay - 3000, //3000 is the duration of the transition on the loading bar - set in the scss/css file
        //letters effect
            lettersDelay = 50,
        //type effect
            typeLettersDelay = 150,
            selectionDuration = 500,
            typeAnimationDelay = selectionDuration + 800,
        //clip effect
            revealDuration = 600,
            revealAnimationDelay = 1500;

        initHeadline();


        function initHeadline() {
            //insert <i> element for each letter of a changing word
            singleLetters($('.cd-headline.letters').find('b'));
            //initialise headline animation
            animateHeadline($('.cd-headline'));
        }

        function singleLetters($words) {
            $words.each(function() {
                var word = $(this),
                    letters = word.text().split(''),
                    selected = word.hasClass('is-visible');
                for (i in letters) {
                    if (word.parents('.rotate-2').length > 0)
                        letters[i] = '<em>' + letters[i] + '</em>';
                    letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>' : '<i>' + letters[i] + '</i>';
                }
                var newLetters = letters.join('');
                word.html(newLetters).css('opacity', 1);
            });
        }

        function animateHeadline($headlines) {
            var duration = animationDelay;
            $headlines.each(function() {
                var headline = $(this);

                if (headline.hasClass('loading-bar')) {
                    duration = barAnimationDelay;
                    setTimeout(function() {
                        headline.find('.cd-words-wrapper').addClass('is-loading')
                    }, barWaiting);
                }
                //trigger animation
                setTimeout(function() {
                    hideWord(headline.find('.is-visible').eq(0))
                }, duration);
            });
        }

        function hideWord($word) {
            var nextWord = takeNext($word);

            if ($word.parents('.cd-headline').hasClass('type')) {
                var parentSpan = $word.parent('.cd-words-wrapper');
                parentSpan.addClass('selected').removeClass('waiting');
                setTimeout(function() {
                    parentSpan.removeClass('selected');
                    $word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass('in').addClass('out');
                }, selectionDuration);
                setTimeout(function() {
                    showWord(nextWord, typeLettersDelay)
                }, typeAnimationDelay);

            } else if ($word.parents('.cd-headline').hasClass('letters')) {
                var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
                hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
                showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);

            } else if ($word.parents('.cd-headline').hasClass('clip')) {
                $word.parents('.cd-words-wrapper').animate({width: '2px'}, revealDuration, function() {
                    switchWord($word, nextWord);
                    showWord(nextWord);
                });

            } else if ($word.parents('.cd-headline').hasClass('loading-bar')) {
                $word.parents('.cd-words-wrapper').removeClass('is-loading');
                switchWord($word, nextWord);
                setTimeout(function() {
                    hideWord(nextWord)
                }, barAnimationDelay);
                setTimeout(function() {
                    $word.parents('.cd-words-wrapper').addClass('is-loading')
                }, barWaiting);

            } else {
                switchWord($word, nextWord);
                setTimeout(function() {
                    hideWord(nextWord)
                }, animationDelay);
            }
        }

        function showWord($word, $duration) {
            if ($word.parents('.cd-headline').hasClass('type')) {
                showLetter($word.find('i').eq(0), $word, false, $duration);
                $word.addClass('is-visible').removeClass('is-hidden');

            } else if ($word.parents('.cd-headline').hasClass('clip')) {
                $word.parents('.cd-words-wrapper').animate({'width': $word.width() + 10}, revealDuration, function() {
                    setTimeout(function() {
                        hideWord($word)
                    }, revealAnimationDelay);
                });
            }
        }

        function hideLetter($letter, $word, $bool, $duration) {
            $letter.removeClass('in').addClass('out');

            if (!$letter.is(':last-child')) {
                setTimeout(function() {
                    hideLetter($letter.next(), $word, $bool, $duration);
                }, $duration);
            } else if ($bool) {
                setTimeout(function() {
                    hideWord(takeNext($word))
                }, animationDelay);
            }

            if ($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
                var nextWord = takeNext($word);
                switchWord($word, nextWord);
            }
        }

        function showLetter($letter, $word, $bool, $duration) {
            $letter.addClass('in').removeClass('out');

            if (!$letter.is(':last-child')) {
                setTimeout(function() {
                    showLetter($letter.next(), $word, $bool, $duration);
                }, $duration);
            } else {
                if ($word.parents('.cd-headline').hasClass('type')) {
                    setTimeout(function() {
                        $word.parents('.cd-words-wrapper').addClass('waiting');
                    }, 200);
                }
                if (!$bool) {
                    setTimeout(function() {
                        hideWord($word)
                    }, animationDelay)
                }
            }
        }

        function takeNext($word) {
            return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
        }

        function takePrev($word) {
            return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
        }

        function switchWord($oldWord, $newWord) {
            $oldWord.removeClass('is-visible').addClass('is-hidden');
            $newWord.removeClass('is-hidden').addClass('is-visible');
        }
    });

    /*$('body').badge({
     link:"javascript:void(0);",
     startDate: "2015-10-17",
     endDate: "2015-10-20",
     html: "Hello, Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
     imageUrl: ""
     });*/
</script>
<!-- Google Code for Remarketing tag -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 963669542;
    var google_conversion_label = "qoB9CLLM0wQQptzBywM";
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/963669542/?value=1.00&amp;currency_code=INR&amp;label=qoB9CLLM0wQQptzBywM&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

<!-- Start of Async HubSpot Analytics Code -->
<script type="text/javascript">
    (function(d,s,i,r) {
        if (d.getElementById(i)){return;}
        var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
        n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/676631.js';
        e.parentNode.insertBefore(n, e);
    })(document,"script","hs-analytics",300000);
</script>
<!-- End of Async HubSpot Analytics Code -->