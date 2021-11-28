@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.ambassador.title_singular') }}:
                    {{ trans('cruds.ambassador.fields.id') }}
                    {{ $ambassador->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.ambassador.fields.id') }}
                            </th>
                            <td>
                                {{ $ambassador->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ambassador.fields.user') }}
                            </th>
                            <td>
                                @if($ambassador->user)
                                    <span class="badge badge-relationship">{{ $ambassador->user->email ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ambassador.fields.verified_at') }}
                            </th>
                            <td>
                                @if($ambassador->verifiedAt)
                                    <span class="badge badge-relationship">{{ $ambassador->verifiedAt->email_verified_at ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.ambassador.fields.invested') }}
                            </th>
                            <td>
                                @if($ambassador->invested)
                                    <span class="badge badge-relationship">{{ $ambassador->invested->real_money ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('ambassador_edit')
                    <a href="{{ route('admin.ambassadors.edit', $ambassador) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.ambassadors.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection