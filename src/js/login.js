var email = $("#email");
var pass = $("#password");

$("#email").on("click", function () {
    $(".span1").addClass("active-input");
})

$("#password").on("click", function () {
    $(".span2").addClass("active-input");
})
