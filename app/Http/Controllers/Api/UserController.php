<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getPoints()
    {
        $user = $this->authUser();

        return $user->points;
    }

    public function editPoints(Request $request)
    {
        $user = $this->authUser();

        $user->update(['points' => $request->points]);

        return $user;
    }

    public function getUpdatedAt()
    {
        $user = $this->authUser();

        return $user->updated_at;
    }

    public function editUpdatedAt(Request $request)
    {
        $user = $this->authUser();

        $user->update(['updated_at' => $request->updated_at]);

        return $user;
    }
}
