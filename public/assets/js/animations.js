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
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });

    $(".config").click(function () {
        $(".filtro").slideToggle();
        $(".pesq").toggle("slow");
    });

    $(".search-button").on("click", function () {
        $(this).toggleClass("text-green");
    });

    $(".home").click(function () {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        $(".nav").find(".active").removeClass("active");
        $(".home").addClass("active");
    });

    $("#contato").click(function () {
        $("html, body").animate({ scrollTop: $(document).height() }, "slow");
    });

    window.garage = 0;
    window.recreation = 0;

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

    $("#categories").change(function () {
        if ($("#categories").val() == 2 || $("#categories").val() == 3) {
            $("#hide").hide("slow");
        } else {
            $("#hide").show("slow");
        }
    });
});
