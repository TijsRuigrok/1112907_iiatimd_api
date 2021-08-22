<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;
use App\Chore;

class ChoreController extends Controller
{
    public function self()
    {
        $user = $this->authUser();

        return $user->chores;
    }

    public function store(Request $request)
    {
        $details = $request->only(['guid', 'name', 'points', 'date']);

        $user = $this->authUser();

        $chore = $user->chores()->create($details);

        return $chore;
    }

    public function remove($id)
    {
        $user = $this->authUser();

        $user->chores()->where('guid', '=', $id)->delete();
            
        return $user->chores;
    }

    public function editCompleted(Request $request, $guid)
    {
        $user = $this->authUser();

        $user->chores()->where('guid', '=', $guid)->update(['completed' => $request->completed]);

        return $user;
    }
}
