<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\AdvisorResource;
use App\Models\Advisor;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdvisorApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('advisor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AdvisorResource(Advisor::with(['userEmail', 'transactions', 'owner'])->get());
    }

    public function show(Advisor $advisor)
    {
        abort_if(Gate::denies('advisor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AdvisorResource($advisor->load(['userEmail', 'transactions', 'owner']));
    }
}
