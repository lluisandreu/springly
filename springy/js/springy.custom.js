(function($) {
    $(document).ready(function() {
        iac();
        filesNewTab();
        prettyButtons();
        prettyForms();
    });

    function iac() {
        $(".iac").hide();
        $(".iac-container").hover(function() {
            $(this).find(".iac").show();
        }, function() {
            $(this).find(".iac").hide();
        });
    };

    function filesNewTab() {
        $('.field-type-file').find('a').attr('target', '_blank');
    }

    function prettyButtons() {
        $('input[type=submit]').addClass('pretty medium default btn');
    }

    function prettyForms() {
        $('input[type=text], input[type=email], input[type=password]').addClass('input').wrap('<div class="field"></div>');
        $('textarea').addClass('input textarea').wrap('<div class="field"></div>');
        $('select').wrap('<div class="field"><div class="picker"></div></div>');
    }

})(jQuery);