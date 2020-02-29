<?php

namespace App\Http\Repositories;

use DB;
use Exception;

class TeamRepository
{
    //Crea equipo y jugadores
    public function createTeam($request)
    {
        if ($request->ajax()) {

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
}
