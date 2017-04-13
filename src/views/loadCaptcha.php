<!-- copied from https://github.com/dancodes/recaptcha/commit/a530617a1f476c734063a1e2a69f1db03c9dac2e -->
<script type="text/javascript">
    if(typeof grecaptcha === "undefined") {
        debugger;

        var recaptcha_script = document.createElement('script');
        recaptcha_script.src = 'https://www.google.com/recaptcha/api.js?onload=grecaptchaCallback&render=explicit<?php echo (isset($lang) ? '&hl='.$lang : '') ?>';
        document.getElementsByTagName('head')[0].appendChild(recaptcha_script);
    }

    if(typeof grecaptchaCallback === "undefined") {
        window.grecaptchaCallback = function() {
            $(".g-recaptcha").each(function() {
                $elem = $(this);

                //Only render empty containers
                if($elem.children().length == 0) {
                    grecaptcha.render($elem[0], $elem.data());
                }
            })
        }
    }
</script>