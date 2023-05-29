<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBaseInformationRoomRequest extends FormRequest
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
            'hotel_id' => '',
            'room_number' => '',
            'title' => 'required|string|max:100',
            'category_id' => 'required|integer',
            'number_beds' => 'required|integer',
            'area_square_meters' => 'required|integer',
            'number_rooms' => 'required|integer',
            'description' => 'string|max:255',
            'price' => 'required',
            'check_in_time' => 'required',
            'check_out_time' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'title' => 'Название номера не валидно',
            'category_id' => 'Категория номмера не валидна',
            'number_beds' => 'Количество комнат не валидно',
            'area_square_meters' => 'Площадь комнаты не валидно',
            'number_rooms' => 'Количество комнат не валидно',
            'description' => 'Описание не валидно',
            'price' => 'Цена не валидна',
            'check_in_time' => 'Время приезда не валидно',
            'check_out_time' => 'Время выезда не валидно'
        ];
    }
}
