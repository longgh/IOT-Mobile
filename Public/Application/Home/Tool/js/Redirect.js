/**
 * Created by Administrator on 2017/8/1.
 */
$(function () {
    var url = $('.url').text();
    var time = parseInt($('.time').text()) * 1000;
    setTimeout(function () {
        location.href = url;
    }, time)

});
