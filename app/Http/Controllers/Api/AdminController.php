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
    // 


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
            'name' => 'required',
            'description' => 'required',
            'budget' => 'required',
            'assigned_to' => 'required',
            'deadline' => 'required|date|after_or_equal:today',
        ]
        , [
            'name.required' => 'Project name is required.',
            'description.required' => 'Project description is required.',
            'budget.required' => 'Budget is required and must be a number.',
            'assigned_to.exists' => 'Assigned team must exist.',
            'deadline.after_or_equal' => 'Deadline must be after or equal to today.',
            'deadline.required' => 'Deadline is required.',
        ]);
        
        
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validator->errors()
            ], 401);
        }
        $request['status']='pending';
       
        $input = $request->all();
        
        $projects = Project::create($input);

        return response()->json([
            'status' => true,
            'message' => 'Project Created Successfully',
            'data' => $projects->toJson(),
            'deadline' => $input['deadline']
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

    public function teams() {
        $teams = Project::leftJoin('users', 'projects.assigned_to', '=', 'users.id')
                        ->select('projects.*', 'users.username')
                        ->get();
        return view('/team', compact('teams'));
    }
     public function updateStatus(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'member_id' => 'required|exists:projects,id',
            'status' => 'required|in:pending,in-progress,completed,submitted',
        ]);

        // Find the project by ID
        $project = Project::find($request->member_id);

        if (!$project) {
            return response()->json([
                'status' => false,
                'message' => 'Project not found',
            ], 404);
        }

        // Update the project status
        $project->status = $request->status;
        $project->save();

        // Return success response
        return response()->json([
            'status' => true,
            'message' => 'Status updated successfully',
        ]);
    }
    
}
