<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "id_project" => "required",
            "pin_code" => "required"
        ];
    }
    public function  messages()
    {
        return [
            "id_project" => "chưa nhập mã dự án",
            "pin_code" => "chưa nhập mã pin"
        ];
    }
}
