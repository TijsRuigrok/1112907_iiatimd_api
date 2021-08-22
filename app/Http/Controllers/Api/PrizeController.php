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

    public function claim($id)
    {
        $user = $this->authUser();

        $prize = $user->prizes()->where('guid', '=', $id)->update(['claimed' => '1']);

        return $user->prizes;
    }
}
