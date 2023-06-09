<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserDataPassordRequest extends FormRequest
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
            'citizenship' => 'required|string|max:100',
            'passport_series' => 'required|string|max:100',
            'passport_number' => 'required|string|max:100',
            'date_registration' => 'required|date',
            'issued_by' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            'citizenship' => 'Название прописки не валидно',
            'passport_series' => 'Срия паспорта не валидна',
            'passport_number' =>'Номер паспорта не валиден',
            'date_registration' => 'Дата выдачи паспорта не валидна',
            'issued_by' => 'Название организации выдачи паспорта не валидно',
        ];
    }
}
