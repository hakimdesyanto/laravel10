<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class StoreStudentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'idstudents' => 'required|min:7|max:7|unique:students,idstudents',
            'full_name' => 'required',
            'gender' => 'required',
            'addres' => 'required',
            'email' => 'required|unique:students,email',
            'phone' => 'required|numeric'
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'idstudents.required' => ':attribute Tidak boleh kosong'
    //     ];
    // }

    public function attributes(): array
    {
        return [
            'idstudents' => 'ID Student',
            'full_name' => 'Full Name',
            'gender' => 'Gender',
            'addres' => 'Address',
            'email' => 'Email',
            'phone' => 'Phone',

        ];
    }
}
