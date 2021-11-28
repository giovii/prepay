<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ambassador;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AmbassadorController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ambassador_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ambassador.index');
    }

    public function show(Ambassador $ambassador)
    {
        abort_if(Gate::denies('ambassador_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ambassador->load('user', 'verifiedAt', 'invested', 'owner');

        return view('admin.ambassador.show', compact('ambassador'));
    }
}
