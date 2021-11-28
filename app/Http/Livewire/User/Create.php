<?php

namespace App\Http\Livewire\User;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public User $user;

    public array $roles = [];

    public string $password = '';

    public array $listsForFields = [];

    public function mount(User $user)
    {
        $this->user                = $user;
        $this->user->investor_type = 'private';
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.user.create');
    }

    public function submit()
    {
        $this->validate();
        $this->user->password = $this->password;
        $this->user->save();
        $this->user->roles()->sync($this->roles);

        return redirect()->route('admin.users.index');
    }

    protected function rules(): array
    {
        return [
            'user.name' => [
                'string',
                'nullable',
            ],
            'user.surname' => [
                'string',
                'nullable',
            ],
            'user.email' => [
                'email:rfc',
                'required',
                'unique:users,email',
            ],
            'password' => [
                'string',
                'required',
            ],
            'roles' => [
                'required',
                'array',
            ],
            'roles.*.id' => [
                'integer',
                'exists:roles,id',
            ],
            'user.locale' => [
                'string',
                'nullable',
            ],
            'user.phone_number' => [
                'string',
                'nullable',
            ],
            'user.investor_type' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['investor_type'])),
            ],
            'user.refcode' => [
                'string',
                'nullable',
            ],
            'user.address' => [
                'string',
                'nullable',
            ],
            'user.city' => [
                'string',
                'nullable',
            ],
            'user.zip_code' => [
                'string',
                'nullable',
            ],
            'user.vat' => [
                'string',
                'nullable',
            ],
            'user.user_type' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['user_type'])),
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['roles']         = Role::pluck('title', 'id')->toArray();
        $this->listsForFields['investor_type'] = $this->user::INVESTOR_TYPE_SELECT;
        $this->listsForFields['user_type']     = $this->user::USER_TYPE_SELECT;
    }
}
