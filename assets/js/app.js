/* 
 * Code written by Nguyen Van Hung at @imrhung
 * Feel free to re-use or share it.
 * Happy code!!!
 */

function fadeAlert() {
    $("#alert-area").removeClass("in");
    window.setTimeout(function () {
        $('#alert_placeholder').empty();
    }, 1000);
    
}

/*
 * @type: success, info, warning, danger
 */
function showAlert(type, message) {
    $('#alert_placeholder').html('<div class="alert alert-'
            + type 
            + ' alert-dismissable fade in" id="alert-area"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span>' 
            + message 
            + '</span> </div>');
    window.setTimeout(function () {
        //fadeAlert();
    }, 5000);
}