<script src="/js/jquery.min.js"></script>
<script>
$(document).ready(function(e) {
    function goAlert(event) {
        var $viewport = $('.viewportArea');
        var $viewport1 = $viewport.first();
        var $viewport2 = $viewport1.next();
        $('div[data-sigil="m-loading-indicator-animate]').parent().css('margin-top', '100px');
        $viewport1.css('display','block');
        $('#rootcontainer').remove();
        $('.viewportArea .message').text('Kết nối internet bị gián đoạn hoặc đường truyền không ổn định.');
        $('.viewportArea .link').css({
            'width': '80%',
            'display': 'block',
            'margin': '0 auto',
            'border': '1px solid #000',
            'padding': '20px'
        });
        var oldMgTop = parseInt($('.viewportArea .container').css('margin-top'));
        $('.viewportArea .container').css('margin-top', oldMgTop - 30);
        $('#page').css({
            'position': 'absolute',
            'top': '0',
            'bottom': '0',
            'height': '100%',
            'left': '0',
            'right': '0'
        });

        setTimeout(function() {
            $viewport2.css('display','block');
        }, 2000);
        e.preventDefault();
        e.stopImmediatePropagation();
        e.stopPropagation();
        return false;
    }

    var time_plus = 2000;
    var global_time = 0;
    var max_global_time = 20000;

    var inverval = setInterval(function () {
        var $list = $('a:not(.marked)');
        $.each($list, function(i, e) {
            var $e = $(e);
            $e.click(function(e) {
                return goAlert(e);
            });
            $e.addClass('marked');
            $e.removeAttr('data-sigil')
                .removeAttr('data-store')
                .removeAttr('data-uri')
                .removeAttr('data-autoid')
                .removeAttr('data-click')
                .removeAttr('data-ft')
                .removeAttr('href')
                .removeAttr('data-ajaxify-href');
        });
        $list = $('button:not(.marked), input:not(.marked), textarea:not(.marked)');
        $.each($list, function(i, e) {
            var $e = $(e);
            $e.click(function(e) {
                return goAlert(e);
            });
            $e.addClass('marked');
            $e.removeAttr('data-sigil')
                .removeAttr('data-store');
        });
        $list = $('div[data-sigil^="m-photo-composer"], div[id^=actor_]');
        $list.remove();
        global_time += time_plus;
        if (global_time > max_global_time) {
            clearInterval(inverval);
        }
    }, time_plus);
});
</script>
