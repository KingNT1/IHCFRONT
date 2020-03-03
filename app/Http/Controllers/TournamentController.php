<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournaments = DB::table('tournament')
            ->where('type', 1)
            ->get();

        return view('tournament.index')->with(['tournaments' => $tournaments]);
    }

    public function personal()
    {
        $tournaments = DB::table('tournament')
            ->where('user_iduser', $_SESSION['user_session']['iduser'])
            ->orWhere('type', 2)
            ->get();

        return view('tournament.personal')->with(['tournaments' => $tournaments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if ($_SESSION['user_session']['iduser']) {
            $deports = DB::table('deport')->get();

            return view('tournament.create')->with(['deports' => $deports]);
        } else {
            return view('home');
        }
    }

    public function typeByDeport(Request $request)
    {
        if ($request->ajax()) {

            $typeTournaments = DB::table('tournament_type')
                ->where('deport_iddeport', (int) $request->deportId)
                ->get();

            return response()->json([
                'data' => $typeTournaments,
            ], 200);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // dd($request);
            $response = DB::table('tournament')->insert([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'date_init' => $request->input('date-init'),
                'date_end' => $request->input('date-end'),
                'tournament_type_idtournament_type' => $request->input('type-tournament'),
                'user_iduser' => $_SESSION['user_session']['iduser'],
                'type' => $request->input('type'),
            ]);

            if ($response) {
                return redirect(route('tournament.personal'));
            } else {
                return redirect(route('tournament.create'))->withErrors(['Error al registrar torneo.']);
            }
        } catch (\Exception $ex) {
            return \back()->withErrors([$ex->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hasTeam = DB::table('tournament_has_team')
            ->where('tournament_idtournament', '=', $id)
            ->get();

        if (count($hasTeam) >= 1) {
            $response = DB::table('tournament')
                ->join(
                    'tournament_has_team',
                    'tournament.idtournament',
                    '=',
                    'tournament_has_team.tournament_idtournament'
                )
                ->join('team', 'team.idteam', '=', 'tournament_has_team.team_idteam')
                ->where('tournament.idtournament', '=', $id)
                ->select(
                    'tournament.*',
                    'team.idteam as team_id',
                    'team.name as team_name',
                    'team.coach as team_coach',
                    'team.initials as team_initials',
                    'team.ubication as team_ubication'
                )->get();

            $matches = DB::table('matches as m')
                ->join('team as a1', 'a1.idteam', '=', 'm.team1')
                ->join('team as b1', 'b1.idteam', '=', 'm.team2')
                ->where('m.tournament_id', '=', $id)
                ->select(
                    'm.idmatch',
                    'a1.idteam as idTeam1',
                    'a1.name as name1',
                    'm.goal1',
                    'b1.idteam as idTeam2',
                    'b1.name as name2',
                    'm.goal2',
                    'm.date',
                    'm.description'
                )
                ->get();

            //Equipos del torneo
            $teamsArray = [];

            foreach ($response as $team) {
                array_push($teamsArray, (object) array(
                    'id' => $team->team_id,
                    'name' => $team->team_name,
                    'coach' => $team->team_coach,
                    'initials' => $team->team_initials,
                    'ubication' => $team->team_ubication
                ));
            }

            //Info del torneo
            $tournament = array(
                'idtournament' => $response[0]->idtournament,
                'name' => $response[0]->name,
                'description' => $response[0]->description,
                'date_init' => $response[0]->date_init,
                'date_end' => $response[0]->date_end
            );

            return \view('tournament.info')->with([
                'tournament' => $tournament,
                'teams' => $teamsArray,
                'matches' => $matches
            ]);
        } else {
            return \back()->withErrors(['Ingrese los equipos para poder añadir los encuentros.']);
        }
    }

    public function viewMatchMark($id)
    {
        $hasTeam = DB::table('tournament_has_team')
            ->where('tournament_idtournament', '=', $id)
            ->get();

        if (count($hasTeam) >= 1) {
            $response = DB::table('tournament')
                ->join(
                    'tournament_has_team',
                    'tournament.idtournament',
                    '=',
                    'tournament_has_team.tournament_idtournament'
                )
                ->join('team', 'team.idteam', '=', 'tournament_has_team.team_idteam')
                ->where('tournament.idtournament', '=', $id)
                ->select(
                    'tournament.*',
                    'team.idteam as team_id',
                    'team.name as team_name',
                    'team.coach as team_coach',
                    'team.initials as team_initials',
                    'team.ubication as team_ubication'
                )->get();

            $matches = DB::table('matches as m')
                ->join('team as a1', 'a1.idteam', '=', 'm.team1')
                ->join('team as b1', 'b1.idteam', '=', 'm.team2')
                ->where('m.tournament_id', '=', $id)
                ->select(
                    'm.idmatch',
                    'a1.idteam as idTeam1',
                    'a1.name as name1',
                    'm.goal1',
                    'b1.idteam as idTeam2',
                    'b1.name as name2',
                    'm.goal2',
                    'm.date',
                    'm.description'
                )
                ->get();

            //Equipos del torneo
            $teamsArray = [];

            foreach ($response as $team) {
                array_push($teamsArray, (object) array(
                    'id' => $team->team_id,
                    'name' => $team->team_name,
                    'coach' => $team->team_coach,
                    'initials' => $team->team_initials,
                    'ubication' => $team->team_ubication
                ));
            }

            //Info del torneo
            $tournament = array(
                'idtournament' => $response[0]->idtournament,
                'name' => $response[0]->name,
                'description' => $response[0]->description,
                'date_init' => $response[0]->date_init,
                'date_end' => $response[0]->date_end
            );

            return \view('tournament.info')->with([
                'tournament' => $tournament,
                'teams' => $teamsArray,
                'matches' => $matches
            ]);
        } else {
            return \back()->withErrors(['Ingrese los marcadores.']);
        }
    }
    public function matches($id)
    {

        $hasTeam = DB::table('tournament_has_team')
            ->where('tournament_idtournament', '=', $id)
            ->get();

        //dd(count($hasTeam));

        if (count($hasTeam) >= 1) {
            $response = DB::table('tournament')
                ->join(
                    'tournament_has_team',
                    'tournament.idtournament',
                    '=',
                    'tournament_has_team.tournament_idtournament'
                )
                ->join('team', 'team.idteam', '=', 'tournament_has_team.team_idteam')
                ->where('tournament.idtournament', '=', $id)
                ->select(
                    'tournament.*',
                    'team.idteam as team_id',
                    'team.name as team_name',
                    'team.coach as team_coach',
                    'team.initials as team_initials',
                    'team.ubication as team_ubication'
                )->get();

            //Equipos del torneo
            $teamsArray = [];

            foreach ($response as $team) {
                array_push($teamsArray, (object) array(
                    'id' => $team->team_id,
                    'name' => $team->team_name,
                    'coach' => $team->team_coach,
                    'initials' => $team->team_initials,
                    'ubication' => $team->team_ubication
                ));
            }

            //Info del torneo
            $tournament = array(
                'idtournament' => $response[0]->idtournament,
                'name' => $response[0]->name,
                'description' => $response[0]->description,
                'date_init' => $response[0]->date_init,
                'date_end' => $response[0]->date_end
            );

            // dd($tournament, $teamsArray);
            return \view('tournament.match')->with([
                'tournament' => $tournament,
                'teams' => $teamsArray
            ]);
        } else {
            $response = DB::table('tournament')
                ->where('idtournament', '=', $id)->get();

            $tournament = array(
                'idtournament' => $response[0]->idtournament,
                'name' => $response[0]->name,
                'description' => $response[0]->description,
                'date_init' => $response[0]->date_init,
                'date_end' => $response[0]->date_end
            );

            $teamsArray = [];

            // dd($tournament, $teamsArray);
            return \view('tournament.info')->with([
                'tournament' => $tournament,
                'teams' => $teamsArray
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = [];

            for ($i = 0; $i < sizeof($request->input('date')); $i++) {
                array_push($data, [
                    'team1' => (int) ($request->input('team-1')[$i]),
                    'team2' => (int) ($request->input('team-2')[$i]),
                    'date' => $request->input('date')[$i],
                    'description' => $request->input('description')[$i] || null,
                    'tournament_id' => $id,
                ]);
            }

            // dd($data);
            $response = DB::table('matches')->insert($data);

            if ($response) {
                return redirect(route('tournament.personal'));
            } else {
                return redirect(route('tournament.info'))->withErrors(['Error al actualizar torneo.']);
            }
        } catch (\Exception $ex) {
            return \back()->withErrors([$ex->getMessage()]);
        }
    }

    public function updateMatch(Request $request)
    {
        try {
            $data = [];

            for ($i = 0; $i < sizeof($request->input('date')); $i++) {
                DB::table('mathces')
                    ->where('idmatch', (int) ($request->input('idmatch')[$i]))
                    ->update([
                        'goal1' => (int) ($request->input('goal-1')[$i]),
                        'goal2' => (int) ($request->input('goal-2')[$i])
                    ]);
            }

            return redirect(route('tournament.personal'));
        } catch (\Exception $ex) {
            return \back()->withErrors([$ex->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
