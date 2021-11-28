@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.advisor.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('advisor_create')
                    <a class="btn btn-indigo" href="{{ route('admin.advisors.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.advisor.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('advisor.index')

    </div>
</div>
@endsection