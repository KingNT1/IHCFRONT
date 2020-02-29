<?php

namespace App\Http\Repositories;

use DB;
use Exception;
use Validator;


class TeamRepository
{
    //Crea equipo y jugadores
    public function createTeam($request)
    {
        if ($request->ajax()) {

            $validate = Validator::make($request->all(), [
                'teamData.name' => 'required',
                'teamData.coach' => 'required',
                'teamData.initials' => 'required',
                'teamData.ubication' => 'required'
            ]);

            if ($validate->fails()) {
                return response()->json([
                    'errors' => $validate->getMessageBag()->toArray(),
                    'status' => 422,
                ], 422);
            }

            $teamData = $request->team;
            $playersData = $request->players;

            //Team
            DB::table('team')->insert(
                [
                    'name' => $teamData['name'],
                    'coach' => $teamData['coach'],
                    'initials' => $teamData['initials'],
                    'ubication' => $teamData['ubication'],
                ]
            );

            //Selecciona el ultimo ID de la tabla team, que sería el recien creado
            $lastId = DB::table('team')->select(DB::raw('MAX(idteam) as max'))->get();

            //Tournament_has_team
            DB::table('tournament_has_team')->insert(
                [
                    'tournament_idtournament' => 2, //id del torneo
                    'team_idteam' => $lastId[0]->max
                ]
            );

            //Player
            foreach ($playersData as $p) {
                //Guarda el jugador en la tabla ´player´
                DB::table('player')->insert(
                    [
                        'name' => $p['playerName'],
                        'position' => $p['playerPosition'],
                        'number' => $p['playerNumber']
                    ]
                );

                //ID del ultimo jugador insertado
                $lastPlayerId = DB::table('player')
                    ->select(DB::raw('MAX(idplayer) as max'))->get();

                //Insertar en ´team_has_player´
                DB::table('team_has_player')->insert(
                    [
                        'team_idteam' => $lastId[0]->max,
                        'player_idplayer' => $lastPlayerId[0]->max
                    ]
                );
            }

            return response()->json(['message' => 'OK']);
        }
    }

    public function teamView($id)
    {
        $playersArray = [];

        $teamInfo = DB::table('tournament') 
            ->join('tournament_has_team', 'tournament.idtournament',
                '=', 'tournament_has_team.tournament_idtournament'
            )
            ->join('team', 'team.idteam', '=', 'tournament_has_team.team_idteam')
            ->join('team_has_player', 'team.idteam', '=', 'team_has_player.team_idteam')
            ->join('player', 'player.idplayer', '=', 'team_has_player.player_idplayer')
            ->where('team.idteam', '=', $id)
            ->select(
                'tournament.*',
                'team.name as team_name',
                'team.coach as team_coach',
                'team.initials as team_initials',
                'team.ubication as team_ubication',
                'player.idplayer',
                'player.name as player_name',
                'player.position as player_position',
                'player.number as player_number'
            )->get(); 
            //Bota 5 lineas porque son 5 jugadores, pero la data de equipo se repite

        //Equipo
        $teamData = array(
            'name' => $teamInfo[0]->team_name,
            'coach' => $teamInfo[0]->team_coach,
            'initials' => $teamInfo[0]->team_initials,
            'ubication' => $teamInfo[0]->team_ubication
        );

        //Jugadores
        foreach ($teamInfo as $player) {
            array_push($playersArray, (object) array(
                'playerName' => $player->player_name,
                'playerPosition' => $player->player_position,
                'playerNumber' => $player->player_number
            ));
        }

        //Torneo actual
        $tournament = array(
            'name' => $teamInfo[0]->name,
            'description' => $teamInfo[0]->description,
            'dateInit' => $teamInfo[0]->date_init,
            'dateEnd' => $teamInfo[0]->date_end
        );

        return \view('teaminfo')->with([
            'team' => $teamData,
            'players' => $playersArray,
            'actualTournament' => $tournament
        ]);
    }
}
