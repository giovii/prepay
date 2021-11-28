<?php

namespace App\Http\Livewire\User;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public User $user;

    public array $roles = [];

    public string $password = '';

    public array $listsForFields = [];

    public function mount(User $user)
    {
        $this->user  = $user;
        $this->roles = $this->user->roles()->pluck('id')->toArray();
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.user.edit');
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
            'user.email' => [
                'email:rfc',
                'required',
                'unique:users,email,' . $this->user->id,
            ],
            'password' => [
                'string',
            ],
            'roles' => [
                'required',
                'array',
            ],
            'roles.*.id' => [
                'integer',
                'exists:roles,id',
            ],
            'user.investor_type' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['investor_type'])),
            ],
            'user.refcode' => [
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
