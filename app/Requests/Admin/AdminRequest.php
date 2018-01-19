<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class AdminRequest
 * @package App\Http\Requests\Admin
 */
class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return true;
        //        return Auth::user()->is_admin;
    }
}