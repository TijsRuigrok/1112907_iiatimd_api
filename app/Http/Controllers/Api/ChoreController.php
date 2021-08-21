<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Chore;

class ChoreController extends Controller
{
    public function self()
    {
        try {
            $user = auth()->userOrFail();
        } catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return $user->chores;
    }

    public function store(Request $request)
    {
        $details = $request->only(['guid', 'name', 'points', 'date']);

        try {
            $user = auth()->userOrFail();
        } catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        $chore = $user->chores()->create($details);

        return $chore;
    }

    public function remove($id)
    {
        try {
            $user = auth()->userOrFail();
        } catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        $user->chores()->where('guid', '=', $id)->delete();
            
        return $user->chores;
    }

    public function complete($id)
    {
        try {
            $user = auth()->userOrFail();
        } catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        $chore = $user->chores()->where('guid', '=', $id)->update(['completed' => '1']);

        return $user->chores;
    }
}
