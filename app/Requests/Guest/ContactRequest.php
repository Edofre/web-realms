<?php

namespace App\Http\Requests\Guest;

/**
 * Class ContactRequest
 * @package App\Http\Requests
 */
class ContactRequest extends GuestRequest
{
    public static function getSubjectOptions()
    {
        return [
            __('guest.subjectOption.question')    => __('guest.subjectOption.question'),
            __('guest.subjectOption.suggestion')  => __('guest.subjectOption.suggestion'),
            __('guest.subjectOption.information') => __('guest.subjectOption.information'),
            __('guest.subjectOption.callback')    => __('guest.subjectOption.callback'),
            __('guest.subjectOption.customer')    => __('guest.subjectOption.customer'),
            __('guest.subjectOption.other')       => __('guest.subjectOption.other'),
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        return [
            'name'    => 'required',
            'email'   => 'required',
            'subject' => 'required',
            'message' => 'required',
        ];
    }
}
