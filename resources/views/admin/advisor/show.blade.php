@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.advisor.title_singular') }}:
                    {{ trans('cruds.advisor.fields.id') }}
                    {{ $advisor->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.advisor.fields.id') }}
                            </th>
                            <td>
                                {{ $advisor->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.advisor.fields.user_email') }}
                            </th>
                            <td>
                                @if($advisor->userEmail)
                                    <span class="badge badge-relationship">{{ $advisor->userEmail->email ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.advisor.fields.transactions') }}
                            </th>
                            <td>
                                @if($advisor->transactions)
                                    <span class="badge badge-relationship">{{ $advisor->transactions->invested ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('advisor_edit')
                    <a href="{{ route('admin.advisors.edit', $advisor) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.advisors.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection