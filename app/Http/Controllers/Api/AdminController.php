<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Project;
use Validator;
use Auth;

class AdminController extends Controller
{
    public function createProject(Request $request)
    {
        $teams = User::where('role', 'user')->get();
        // return response()->json ([
        //     'status' => true,
        //     'message' => 'Project Created Successfully',
        //     'data' => $teams
        // ]);
        return view('createProject', compact('teams'));
    }
    public function store(Request $request)
    {

       
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'budget' => 'required|numeric',
            'assigned_to' => 'required|exists:users,id', // Ensure assigned_to matches a valid user ID
        ], [
            'name.required' => 'Project name is required.',
            'description.required' => 'Project description is required.',
            'budget.required' => 'Budget is required and must be a number.',
            'assigned_to.exists' => 'Assigned team must exist.',
        ]);
        
        
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validator->errors()
            ], 401);
        }
        $input = $request->all();
        
        $projects = Project::create($input);

        return response()->json([
            'status' => true,
            'message' => 'Project Created Successfully',
            'data' => $projects
        ]);
    }
    public function index()
    {
        $projects = Project::all();
        return response()->json([
            'status' => true,
            'message' => 'Projects fetched successfully',
            'data' => $projects
        ]);
    }

    public function teams(){
        Auth::user()->authorizeRoles(['admin']);
        $projects = Project::leftJoin('users', 'projects.assigned_to', '=', 'users.id'  )->select('projects.*', 'users.username')->get();
        return view('/team', compact('teams'));
    }
}
