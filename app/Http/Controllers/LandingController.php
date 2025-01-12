<?php

namespace App\Http\Controllers;

use App\Actions\CreateStartupAction;
use App\DTO\StartupDTO;
use App\Http\Requests\StartupRequest;
use App\Models\Direction;
use App\Models\Model;
use App\Models\Resource;
use App\Models\Social;
use App\Models\Startup;
use Exception;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function application()
    {
        $directions = Direction::all();
        $models = Model::all();
        $resources = Resource::all();
        $socials = Social::all();
        return view('application',compact('directions','models','resources','socials'));
    }

    public function store(StartupRequest $request,CreateStartupAction $createStartupAction)
    {
        try {
            $startup = $createStartupAction->execute(StartupDTO::fromRequest($request));
            return back()->with('aaaa','aaa');
        }catch (Exception $exception){
            dd($exception);
        }
    }

}
