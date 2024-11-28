<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Request as RequestModel;
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


        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'description' => 'required',
                'budget' => 'required',
                'assigned_to' => 'required',
                'deadline' => 'required|date|after_or_equal:today',
            ]
            ,
            [
                'name.required' => 'Project name is required.',
                'description.required' => 'Project description is required.',
                'budget.required' => 'Budget is required and must be a number.',
                'assigned_to.exists' => 'Assigned team must exist.',
                'deadline.after_or_equal' => 'Deadline must be after or equal to today.',
                'deadline.required' => 'Deadline is required.',
            ]
        );


        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validator->errors()
            ], 401);
        }
        $request['status'] = 'pending';

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

    public function teams()
    {
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
            'status' => 'required|in:pending,in-progress,completed,submitted,open',
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
    public function deleteProject(Request $request, $id)
    {
        $project = Project::find($id);
        if (!$project) {
            return response()->json([
                'status' => false,
                'message' => 'Project not found',
            ], 404);
        }
        $project->delete();
        return response()->json([
            'status' => true,
            'message' => 'Project deleted successfully',
        ]);
    }

    public function request(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'project_id' => 'required|exists:projects,id',
            'givenBy_id' => 'required|exists:users,id',
        ], [
            'project_id.required' => 'Project ID is required.',
            'givenBy_id.required' => 'User ID is required.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 401);
        }

        // Prepare the data for insertion
        $data = [
            'project_id' => $request->project_id,
            'givenBy_id' => $request->givenBy_id,
            'requestBy_id' => Auth::id(), // Corrected to match the column name in the database
            'assigned_to' => $request->givenBy_id, // Assign givenBy_id to assigned_to if needed
        ];

        // Create the request record
        $newRequest = RequestModel::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Request sent successfully',
            'data' => $newRequest,
        ]);
    }

   public function requestsShow()
   {
       $requests = RequestModel::leftJoin('projects', 'requests.project_id', '=', 'projects.id')
           ->leftJoin('users', 'requests.requestBy_id', '=', 'users.id')
           ->select('requests.*', 'projects.name', 'projects.deadline','projects.status','projects.budget', 'users.username')
           ->get();
       return view('/requests', compact('requests'));
   }
   public function moduleShow()
   {
       $requests = RequestModel::leftJoin('projects', 'requests.project_id', '=', 'projects.id')
           ->leftJoin('users', 'requests.requestBy_id', '=', 'users.id')
           ->select('requests.*', 'projects.name', 'projects.deadline','projects.status','projects.budget', 'users.username')
           ->get();
       return view('/module', compact('requests'));
   }

    // public function requestsShow()
    // {
    //     $requests = RequestModel::with(['user', 'project']) // Eager load user and project relationships
    //         ->get();
        
    //     return view('/requests', compact('requests'));
    // }

    public function accept(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'project_id' => 'required|exists:projects,id',
            'request_id' => 'required|exists:requests,id',
            'requestBy_id' => 'required|exists:users,id',
        ]);
    
        $newProject = Project::find($request->project_id);
        $newProject->assigned_to = $request->requestBy_id;
        $newProject->status = 'pending';
        $newProject->save();
    
        // Delete the request
        $requestModel = RequestModel::where('project_id', $request->project_id);
        $requestModel->delete();
    
        return response()->json([
            'status' => true,
            'message' => 'Request accepted successfully',
            'data' => $newProject,
            'redirect_url' => url('/team'),
        ]);
    }
    


}



