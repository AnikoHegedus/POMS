$(document).ready(function () {

    
    $("#second-install").hide();
    $(".previous-btn").hide();
    
    $(".next-btn").click(function () {
        $("#first-install").hide();
        $("#second-install").show();
        $(".previous-btn").show();
        $(".next-btn").hide();
    });

    $(".previous-btn").click(function () {
        $("#first-install").show();
        $("#second-install").hide();
        $(".previous-btn").hide();
        $(".next-btn").show();
    });

});