<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
              
            'name' => 'required|min:3|max:25|regex:/^[A-Za-z\s\.\-]+$/',
            "email"=>"required|email|unique:students,email",
            "age"=>"required|numeric|between:18,30",
            "city"=>"required",

            //
        ];
    }

    public function messages()
        {
            return [
                "name.required"=>"Student Name filed is mandatory",
                "name.min"=>"Student Name field must be at least 3 characters.",
                "name.min"=>"Student Name field must not be greater than 25 characters.",
                "email.required"=>"Student Email filed is mandatory",
            ];
        }

    protected $stopOnFirstFailure = true;    
}

