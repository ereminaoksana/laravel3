$(document).ready(function () {

    /**
     * Выпадающий поиск
     */
    $(".serach").click(function () {
        $("#serach").fadeToggle();
    });


    /**
     * Вход/рег
     */
    $(".i-not-have-acc").click(function () {
        $("#log-in-enter-data").hide();
        $("#reg-enter-data").show();
        $(".i-not-have-acc").css({
            'text-shadow': '0 0 2px black',
            'color': 'red'
        });
        $(".i-have-acc").css({
            'text-shadow': 'none',
            'color': 'black'
        });
    });
    $(".i-have-acc").click(function () {
        $("#log-in-enter-data").show();
        $("#reg-enter-data").hide();
        $(".i-have-acc").css({
            'text-shadow': '0 0 2px black',
            'color': 'red'
        });
        $(".i-not-have-acc").css({
            'text-shadow': 'none',
            'color': 'black'
        });
    });
    /**
     * Скрыть логин
     */
    $(".popup").click(function () {
        $("#log-in").fadeToggle();
        $(".popup").fadeToggle();
    });

    /**
     * Открыть логин
     */
    $(".log-in").click(function () {
        $("#log-in").fadeToggle();
        $(".popup").fadeToggle();
    });

    /**
     * Открыть корзину
     */
    $(".cart").click(function () {
        var show = $("#main_cart").attr('show');
        if (show == 'y') {
            $("#main_cart").slideUp();
            $("#main_cart").attr('show', 'n')
        }
        if (show == 'n') {
            $("#main_cart").slideDown();
            $("#main_cart").attr('show', 'y')
        }

    });

    function asd() {
        alert(1);
    }


    /**
     * Слайдер диапазона цены
     */
    $(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 10000,
            values: [0, 10000],
            slide: function (event, ui) {
                $("#amount").val("" + ui.values[0] + " - " + ui.values[1]);
            }
        });
        $("#amount").val("" + $("#slider-range").slider("values", 0) +
            " - " + $("#slider-range").slider("values", 1));
    });

    /**
     * Слайдер диапазона возраста
     */
    $(function () {
        $("#slider-range2").slider({
            range: true,
            min: 0,
            max: 18,
            values: [0, 18],
            slide: function (event, ui) {
                $("#amount2").val("" + ui.values[0] + " - " + ui.values[1]);
            }
        });
        $("#amount2").val("" + $("#slider-range2").slider("values", 0) +
            " - " + $("#slider-range2").slider("values", 1));
    });

    /**
     * Карточка товара
     */
    $(".one_item").mouseenter(function () {
        var desc = $(this).find("#hide_desc");
        desc.show();
    });
    $(".one_item").mouseleave(function () {
        var desc = $(this).find("#hide_desc");
        desc.hide();
    });


    /**
     * Личный кабинет
     */
    $('.users_cabinet').click(function () {
        $('.popup_users_modal').fadeToggle();
    });


    $('.enter-reg-tel').mask("+7(999) 999-9999");


    $('.add_to_collections').click(function () {

        var id = $(this).data('id');
        
        var _token = $('.token > input').val();
        
        $.ajax({
            url: '/profile/addtocollect',
            type: 'post',
            data: {id:id, _token:_token},
            success: function (response) {
                alert(response);
            }
        });

    });


});