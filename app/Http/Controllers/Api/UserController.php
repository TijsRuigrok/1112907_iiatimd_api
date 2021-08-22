<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function setUpdateTimestamp(Request $request)
    {
        $user = $this->authUser();

        $user->update(['updated_at' => $request->updated_at]);

        return $user;
    }

    public function getUpdateTimestamp()
    {
        $user = $this->authUser();

        return $user->updated_at;
    }

    public function setPoints(Request $request)
    {
        $user = $this->authUser();

        $user->update(['points' => $request->points]);

        return $user;
    }

    public function getPoints()
    {
        $user = $this->authUser();

        return $user->points;
    }
}
