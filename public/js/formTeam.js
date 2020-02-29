$(document).on("click", "#btn-create-team", function() {

    $('#spinner').html(`<div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
  </div>`);

    //Datos de equipo
    let teamData = {
        name: $("#team-name").val(),
        coach: $("#coach-name").val(),
        initials: $("#team-initials").val(),
        ubication: $("#team-ubication").val()
    };

    //Datos de jugadores
    let playersArray = [];

    for (let i = 0; i < 5; i++) {
        playersArray.push({
            playerName: $(`#player-name-${i+1}`).val(),
            playerPosition: $(`#player-pos-${i+1} option:selected`).text(),
            playerNumber: $(`#player-number-${i+1}`).val()
        })
    }

    let tourId = $("#tournament-id").val();

    $.ajax({
        type: "POST",
        method: "POST",
        url: "../../../team/create",
        data: {
            team: teamData,
            players: playersArray,
            tournamentId: tourId
        },
        success: function(result) {
            window.location.href = "../../../tournament/" + result.id + "/info";
        },
        error: function() {
            console.log("... error");
        }
    });

});