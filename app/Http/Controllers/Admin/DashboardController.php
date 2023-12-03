<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;

class DashboardController extends Controller
{
    public function index() {
        $projects = Project::orderBy('id', 'desc')->paginate(4);
        $technologies = Technology::orderBy('id')->paginate(4);
        $types = Type::orderBy('id')->paginate(4);

        return view('admin.home', compact('projects', 'technologies', 'types'));
    }
}
