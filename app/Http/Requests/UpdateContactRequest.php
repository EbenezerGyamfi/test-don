<?php

namespace App\Http\Requests;

use App\Rules\IsPhoneNumber;
use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone' => ['required', new IsPhoneNumber],
            'name' => 'sometimes|nullable|string',
            'email' => 'sometimes|nullable|email',
        ];
    }
}
