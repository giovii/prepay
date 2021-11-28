<?php

namespace App\Http\Requests;

use App\Models\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('user_edit'),
            response()->json(
                ['message' => 'This action is unauthorized.'],
                Response::HTTP_FORBIDDEN
            ),
        );

        return true;
    }

    public function rules(): array
    {
        return [
            'email' => [
                'email:rfc',
                'required',
                'unique:users,email,' . request()->route('user')->id,
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
            'investor_type' => [
                'nullable',
                'in:' . implode(',', array_keys(User::INVESTOR_TYPE_SELECT)),
            ],
            'refcode' => [
                'string',
                'nullable',
            ],
            'user_type' => [
                'nullable',
                'in:' . implode(',', array_keys(User::USER_TYPE_SELECT)),
            ],
        ];
    }
}
