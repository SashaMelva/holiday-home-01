<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBaseInformationHotelRequest extends FormRequest
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
            'full_title' => 'required|string|max:100',
            'short_title' => 'required|string|max:100',
            'city_id' => '',
            'city_add' => '',
            'address' => 'required|string|max:200',
            'number_rooms' => 'required|integer',
            'description' => 'string|max:255',
            'star' => 'required|integer',
            'category_id' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'full_title' => 'Полное название отеля не валидно',
            'short_title' => 'Полное название отеля не валидно',
            'address' => 'Адресс отеля указан не валидно',
            'number_rooms' => 'Количество комнат не валидно',
            'description' => 'Описание отеля не валидно',
            'star' => 'Количество звёзд отеля не валидно',
            'category_id' => 'Категория отела не валидна',
        ];
    }
}
