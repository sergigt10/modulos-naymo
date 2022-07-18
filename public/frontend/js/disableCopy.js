$(document).ready(function () {
    //Disable cut copy paste
    $(document).bind('cut copy paste', function (e) {
        e.preventDefault();
    });
    //Disable mouse right click
    $(document).on("contextmenu",function(e){
        return false;
    });
});
