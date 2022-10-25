<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
        return [
            "id" => "required",
            "full_name" => "required",
            "gender" => "required",
            "birthday" => "required",
            "address" => "required",
            "phone" => "required",
            "email" => "required",
            "position" => "required"

        ];
    }
    public function messages()
    {
        return [
            "id.required" => "Chưa nhập mã nhân viên!",
            "full_name.required" => "Chưa nhập tên nhân viên!",
            "gender.required" => "Chưa nhập giới tính nhân viên!",
            "birthday.required" => "Chưa nhập ngày sinh nhân viên!",
            "address.required" => "Chưa nhập địa chỉ nhân viên!",
            "phone.required" => "Chưa nhập SĐT nhân viên!",
            "email.required" => "Chưa nhập email nhân viên!",
            "position.required" => "Chưa nhập chức vụ nhân viên!"

        ];
    }
}
