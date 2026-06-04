//-----------------------------------------------------------

$(document).ready(function () {
    // メニューの開閉
    $(".btnGnav a").click(function (e) {
        e.stopPropagation(); // クリックイベントの伝播を防ぐ
        $(".overlay").fadeToggle(200);
        $(".mobile-menu").toggleClass("active");
        $(this).toggleClass("btn-open").toggleClass("btn-close");
    });

    // オーバーレイをクリックでメニューを閉じる
    $(".overlay").on("click", function () {
        $(".overlay").fadeToggle(200);
        $(".mobile-menu").removeClass("active");
        $(".btnGnav a").removeClass("btn-open").addClass("btn-close");
    });

    // メニュー内のリンクをクリックでメニューを閉じる（サブメニュー以外）
    $(".menu li > a:not(.has-submenu > a)").on("click", function () {
        $(".overlay").fadeOut(200);
        $(".mobile-menu").removeClass("active");
    });

    // サブメニューの開閉
    $(".has-submenu > a").on("click", function (e) {
        e.preventDefault(); // 通常のリンク動作を無効化
        e.stopPropagation(); // クリックイベントの伝播を防ぐ
        $(this).parent().toggleClass("open");
        $(this).siblings(".submenuMobile").stop(true, true).slideToggle(200);
    });
});

//-----------------------------------------------------------

$('#btn-to-top').click(function(){
    $('html, body').animate({scrollTop: 0}, 500);
    return false;
});