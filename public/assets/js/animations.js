$(function () {
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
    //color navbar change
    var tela = window.innerWidth;
    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            $(".navbar").addClass("active");
        } else {
            $(".navbar").removeClass("active");
        }
    });

    $(".pesquisa").click(function () {
        $(".search").slideToggle();
    });

    $(".config").click(function () {
        $(".filtro").slideToggle();
    });

    $(".nav .nav-link").on("click", function () {
        $(".nav").find(".active").removeClass("active");
        $(this).addClass("active");
    });

    $(".home").click(function () {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        $(".nav").find(".active").removeClass("active");
        $(".home").addClass("active");
    });

    $("#imoveis").click(function () {
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });

    $("#contato").click(function () {
        $("html, body").animate({ scrollTop: $(document).height() }, "slow");
    });

    window.garage = "";
    window.recreation = "";

    $(".search-btn-pool").click(function () {
        $(this).toggleClass("white");
        recreation = 1;
    });

    $(".search-btn-car").click(function () {
        $(this).toggleClass("white");
        garage = 1;
    });

    $("#emailIcon").click(function () {
        var input = document.createElement("input");
        input.setAttribute("value", "bragaddb@hotmail.com");
        document.body.appendChild(input);
        input.select();
        document.execCommand("copy");
        document.body.removeChild(input);

        $('#emailIcon[data-toggle="tooltip"]')
            .attr("data-original-title", "Email copiado !")
            .tooltip("dispose")
            .tooltip("show");
    });
});
