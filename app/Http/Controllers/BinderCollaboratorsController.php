<?php

namespace App\Http\Controllers;

use App\Binder;
use App\User;
use Illuminate\Http\Request;

class BinderCollaboratorsController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    public function index(Binder $binder)
    {
        $this->authorize('manage', $binder);

        $collaborator_ids = $binder->collaborators->pluck('id');
        $collaborator_ids->push($binder->created_by_id);

        $users = User::whereNotIn('id', $collaborator_ids)->get();

        return view('binders.collaborators.index', [
            'binder' => $binder,
            'users' => $users,
            'collaborators' => $binder->collaborators
        ]);
    }

    public function add(Binder $binder)
    {
        $this->authorize('manage', $binder);

        $binder->collaborators()->attach(request()->user_id);

        return redirect()->back()->with('success', 'Collaborator added!');
    }
}
