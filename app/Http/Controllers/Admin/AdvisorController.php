<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advisor;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdvisorController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('advisor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.advisor.index');
    }

    public function show(Advisor $advisor)
    {
        abort_if(Gate::denies('advisor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $advisor->load('userEmail', 'transactions', 'owner');

        return view('admin.advisor.show', compact('advisor'));
    }
}
