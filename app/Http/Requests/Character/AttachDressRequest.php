<?php

namespace App\Http\Requests\Character;

use Illuminate\Foundation\Http\FormRequest;

class AttachDressRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'dress_ids' => "required|array|exists:dresses,id",
        ];
    }
}
