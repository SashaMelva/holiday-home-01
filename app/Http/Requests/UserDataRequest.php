<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserDataRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'surname' => 'required|string|max:100',
            'name' => 'required|string|max:100',
            'patronymic' => 'required|string|max:100',
            'phone_number' => 'required',
            'date_birth' => 'required|date'
        ];
    }

    public function messages(): array
    {
        return [
            'surname' => 'Фамилия не валидно',
            'name' => 'Имя не валидно',
            'patronymic' =>'Отчетво не валидно',
            'phone_number' => 'Номер телефона не валиден',
            'date_birth' => 'Дата рождения не валидна',
        ];
    }
}
