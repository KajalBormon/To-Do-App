<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'name' => "required|string|regex:/^[a-zA-Z\s]+$/|max:255",
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function messages(): array{
        return [
            'name.required' => 'Name is Required',
            'name.string' => 'Name must be a string',
            'name.regex' => 'The name must only contain letters and spaces.',
            'name.max' => 'Name must be less than 255 characters',

            'email.required' => 'Email is Required',
            'email.email' => 'Email must be a valid email',
            'email.unique' => 'Email already exists',
            'email.max' => 'Email must be less than 255 characters',

            'password.required' => 'Password is Required',
            'password.min' => 'Password must be at least 8 characters',
            'password.confirmed' => 'Password confirmation does not match',
        ];
    }
}
