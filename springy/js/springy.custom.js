(function($) {
    $(document).ready(function() {
        iac();
        filesNewTab();
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

})(jQuery);