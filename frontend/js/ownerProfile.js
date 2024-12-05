$("#edit").click(() => {
    $(".update-btn").removeClass("hide");
    $("#edit").addClass("hide");
    $(".inp").removeClass("read-only");
})
$(".update-btn").click(() => {
    $(".update-btn").addClass("hide");
    $("#edit").removeClass("hide");
    $(".inp").addClass("read-only");
})