<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('ambassador_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Ambassador" format="csv" />
                <livewire:excel-export model="Ambassador" format="xlsx" />
                <livewire:excel-export model="Ambassador" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.ambassador.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.ambassador.fields.user') }}
                            @include('components.table.sort', ['field' => 'user.email'])
                        </th>
                        <th>
                            {{ trans('cruds.ambassador.fields.verified_at') }}
                            @include('components.table.sort', ['field' => 'verified_at.email_verified_at'])
                        </th>
                        <th>
                            {{ trans('cruds.ambassador.fields.invested') }}
                            @include('components.table.sort', ['field' => 'invested.real_money'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($ambassadors as $ambassador)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $ambassador->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $ambassador->id }}
                            </td>
                            <td>
                                @if($ambassador->user)
                                    <span class="badge badge-relationship">{{ $ambassador->user->email ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($ambassador->verifiedAt)
                                    <span class="badge badge-relationship">{{ $ambassador->verifiedAt->email_verified_at ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($ambassador->invested)
                                    <span class="badge badge-relationship">{{ $ambassador->invested->real_money ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('ambassador_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.ambassadors.show', $ambassador) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('ambassador_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.ambassadors.edit', $ambassador) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('ambassador_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $ambassador->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $ambassadors->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush