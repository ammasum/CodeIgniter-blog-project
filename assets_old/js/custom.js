! function(a) {
    "use strict";
    a("html, body");
    var e = a(".pwdMask > .form-control"),
        t = a(".pwd-toggle");
    a(".lnk-toggler").on("click", function(t) {
        t.preventDefault();
        var e = a(this).data("panel");
        a(".authfy-panel.active").removeClass("active"), a(e).addClass("active")
    }), a(t).on("click", function(t) {
        t.preventDefault(), a(this).toggleClass("fa-eye-slash fa-eye"), a(this).hasClass("fa-eye") ? a(e).attr("type", "text") : a(e).attr("type", "password")
    }), a("#forget-lnk").on("click", function() {
        a(".authfy-login .nav-tabs").find("li").removeClass("active")
    }), a(window).on("load", function() {
        a(".square-block").fadeOut(), a("#preload-block").fadeOut("slow", function() {
            a(this).remove()
        })
    })
}(jQuery);
