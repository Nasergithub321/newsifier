<?php

namespace App\Http\Requests\User;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
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
        $rules = [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|unique:users,email',
            'password' => 'required|max:255',
            'role' => 'required|exists:App\Models\Role,id'
        ];

        return $rules;
    }

    protected function formatErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }

    protected function failedValidation(Validator $validator)
    {
        $data = [
            'success' => false,
            'message' => 'Validation Error',
            'data' => $validator->errors(),
            "count" => count($validator->errors()),
            "status" => 422
        ];
        throw new HttpResponseException(response()->json(
            $data, 422));
    }
}
