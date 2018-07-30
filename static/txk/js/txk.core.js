/* 返回顶部插件 */
(function ($) {
    $.fn.toTop = function (opt) {
        //variables
        var elem = this;
        var win = $(window);
        var doc = $('html, body');
        var options = opt;
        //如果没有配置自定义的参数，则使用默认
        if (!options) {
            options = $.extend({
                autohide: true,
                offset: 100,
                speed: 500,
                right: 15,
                bottom: 50
            }, opt);
        }
        elem.css({
            'position': 'fixed',
            'right': options.right,
            'bottom': options.bottom,
            'cursor': 'pointer'
        });
        if (options.autohide) {
            elem.css('display', 'none');
        }
        elem.click(function () {
            doc.animate({scrollTop: 0}, options.speed);
        });
        win.scroll(function () {
            var scrolling = win.scrollTop();
            if (options.autohide) {
                if (scrolling > options.offset) {
                    elem.fadeIn(options.speed);
                }
                else elem.fadeOut(options.speed);
            }
        });
    };
})(jQuery);
/* 返回顶部插件 end */
/* 鼠标点击向上冒泡弹出提示动画 */
$.extend({
    bubble: {
        _tip: ['法制', '爱国', '敬业', '诚信', '友善', '富强', '民主', '文明', '和谐', '自由', '平等', '公正'],
        init: function () {
            var bubbleIndex = 0;
            $('body').click(function (e) {
                bubbleIndex = bubbleIndex >= $.bubble._tip.length ? 0 : bubbleIndex;
                if (!e.originalEvent) {
                    return;
                }
                var x = e.originalEvent.x || e.originalEvent.layerX || 0;
                var y = e.originalEvent.y || e.originalEvent.layerY || 0;
                var html = '<span style="position: fixed;z-index:9999;left: ' + x + 'px;top: ' + y + 'px;"></span>';
                var $box = $(html).appendTo($(this));
                $box.effectBubble({
                    y: -100,
                    className: 'thumb-bubble',
                    fontSize: 0.5,
                    content: '<i class="fa fa-smile-o"></i>' + $.bubble._tip[bubbleIndex]
                });
                setTimeout(function () {
                    $box.remove();
                }, 1002);
                bubbleIndex++;
            });
        },
        unbind: function (duration) {
            $("body").unbind('click');
            if (duration && !isNaN(duration = parseInt(duration))) {
                setTimeout(function () {
                    $.bubble.init();
                }, duration);
            }
        }
    }
});