<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AgentController extends Controller
{
    public function dashboard(): View
    {
        return view('agent.agentDashboard');
    }
}
