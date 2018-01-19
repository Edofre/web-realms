<?php

namespace App\Http\Requests\Admin\Update;

/**
 * Class UpdateUserRequest
 * @package App\Http\Requests\Admin\Update
 */
class UserUpdateRequest extends UpdateRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        // Fetch the user from the route to exclude the user when searching for unique emails
        $user = $this->route('user');
        $rules = [
            'email'      => 'required|max:255|email|unique:users,email,' . $user->id,
            'name'       => 'required',
            'password'   => 'nullable',
            'is_admin'   => 'boolean',
            'is_active'  => 'boolean',
            'company_id' => 'nullable',
        ];

        return $rules;
    }
}
