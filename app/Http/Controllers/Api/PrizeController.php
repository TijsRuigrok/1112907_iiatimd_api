<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\Controller;

class PrizeController extends Controller
{
    public function self()
    {
        $user = $this->authUser();

        return $user->prizes;
    }

    public function store(Request $request)
    {
        $details = $request->only(['guid', 'name', 'points']);

        $user = $this->authUser();

        $prize = $user->prizes()->create($details);

        return $prize;
    }

    public function remove($id)
    {
        $user = $this->authUser();

        $user->prizes()->where('id', '=', $id)->delete();
            
        return $user->prizes;
    }

    public function editClaimed(Request $request, $guid)
    {
        $user = $this->authUser();

        $user->prizes()->where('guid', '=', $guid)->update(['claimed' => $request->claimed]);

        return $user;
    }
}
