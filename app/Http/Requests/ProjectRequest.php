<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            "name_project" => "required",
            "created_project" => "required",
            "end_project" => "required",
            "status" => "required",
            "assignment" => "required"
        ];
    }
    public function messages()
    {
        return [
            "id.required" => "Chưa nhập mã dự án!",
            "name_project.required" => "Chưa nhập tên dự án!",
            "created_project.required" => "Chưa nhập ngày bắt đầu dự án!",
            "end_project.required" => "Chưa nhập ngày kết thúc dự án!",
            "status.required" => "Chưa nhập trạng thái dự án!",
            "assignment.required" => "Chưa nhập phân công dự án!"

        ];
    }
}
