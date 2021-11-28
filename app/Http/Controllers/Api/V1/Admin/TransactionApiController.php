<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\TransactionResource;
use App\Models\Transaction;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TransactionApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('transaction_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TransactionResource(Transaction::with(['opportunityCode', 'user', 'owner'])->get());
    }

    public function show(Transaction $transaction)
    {
        abort_if(Gate::denies('transaction_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TransactionResource($transaction->load(['opportunityCode', 'user', 'owner']));
    }
}
