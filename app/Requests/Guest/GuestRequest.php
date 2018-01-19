<?php

namespace App\Http\Requests\Guest;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ClientRequest
 * @package App\Http\Requests\Guest
 */
class GuestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}