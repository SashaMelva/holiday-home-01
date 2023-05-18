<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchHotelRequest extends FormRequest
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
            'city' => 'required|string|max:100',
            'arrival_date' => 'required|date',
            'date_departure' => 'required|date',
            'count_adults' => 'required',
            'count_children' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'city' => 'Название города не валидно',
            'arrival_date' => 'Дата приезда указана неверно',
            'date_departure' => 'Дата уезда указана неверно',
            'count_adults' => 'Количество взрослых гостей не валидно',
            'count_children' => 'Количество детей не валидно',
        ];
    }
}
