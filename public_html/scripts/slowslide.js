$("#myProjects").click(function() {
    $('html, body').animate({
        scrollTop: $("#projects").offset().top  - 20
    }, 1000);
    return false;
});
$("#mySkills").click(function() {
    $('html, body').animate({
        scrollTop: $("#skills").offset().top  - 20
    }, 1000);
    return false;
});