$(document).on('change', '#deport_id', function () {
    document.getElementById("type_tournament").options.length = 0;

    $.ajax({
        dataType: "json",
        type: 'POST',
        url: './type_tournament',
        data: {
            deportId: $(this).val()
        },
        success: function (result) {
            if (result.data.length > 0) {
                let s = ``
                result.data.forEach(r => {
                    s += `<option value="${r.idtournament_type}">${r.name}</option>`
                });
                $('#type_tournament').html(s);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("Status: " + textStatus); alert("Error: " + errorThrown);
        }
    });
});
