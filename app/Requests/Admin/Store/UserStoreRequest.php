<?php

namespace App\Http\Requests\Admin\Store;

/**
 * Class UserStoreRequest
 * @package App\Http\Requests\Admin\Store
 */
class UserStoreRequest extends StoreRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        return [
            'email'      => 'required|max:255|email|unique:users',
            'name'       => 'required',
            'password'   => 'required|min:6',
            'is_admin'   => 'boolean',
            'is_active'  => 'boolean',
            'company_id' => 'nullable',
        ];
    }
}