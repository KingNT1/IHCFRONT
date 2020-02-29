$(document).on('change', '#deport_id', function () {
    $.ajax({
        dataType: "json",
        type: 'POST',
        url: '../type_tournament',
        data: {
            deportId: $(this).val()
        },
        success: function (response) {
            console.log(response)
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("Status: " + textStatus); alert("Error: " + errorThrown);
        }
    });
});
