$(document).ready(function() {
    $(".btn-request").click(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
            }
        })

        $.ajax({
            url: `${window.location.href}/all-users`,
            type: 'GET',
            success: function (data) {
                console.log(data);                
            }
        });
    });
});
