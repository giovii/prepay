<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\AmbassadorResource;
use App\Models\Ambassador;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AmbassadorApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ambassador_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AmbassadorResource(Ambassador::with(['user', 'verifiedAt', 'invested', 'owner'])->get());
    }

    public function show(Ambassador $ambassador)
    {
        abort_if(Gate::denies('ambassador_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AmbassadorResource($ambassador->load(['user', 'verifiedAt', 'invested', 'owner']));
    }
}
