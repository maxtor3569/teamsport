$(function () {

    var iOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
    var is_uiwebview = /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(navigator.userAgent);
    var ua = navigator.userAgent.toLowerCase();
    var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
    if (isAndroid) {
        notyfy({
            text: 'Hãy sử dụng App Android mới của chúng tôi : https://play.google.com/store/apps/details?id=com.teamsport.app',
            layout: 'top',
            dismissQueue: true,
            style: 'bootstrap',
            type: 'information',
            buttons: [{
                addClass: 'btn btn-success btn-small btn-icon glyphicons ok_2',
                text: '<i></i> Có',
                onClick: function ($notyfy) {
                    $notyfy.close();
                    window.location.href = 'https://play.google.com/store/apps/details?id=com.teamsport.app'

                }
            }, {
                addClass: 'btn btn-danger btn-small btn-icon glyphicons remove_2',
                text: '<i></i> Không',
                onClick: function ($notyfy) {
                    $notyfy.close();

                }
            }]
        });

    }
});