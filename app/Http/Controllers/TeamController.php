<?php

namespace App\Http\Controllers;

use App\Http\Repositories\TeamRepository;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    protected $teamRepository;

    public function __construct(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    public function createTeam(Request $request){
        return $this->teamRepository->createTeam($request);
    }

    public function teamView($id){
        return $this->teamRepository->teamView($id);
    }

}
