<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManagerRequest extends FormRequest
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
        $managerId = $this->route('manager');
        return [
            'name' => 'required|min:2|max:50',
            'email' => $managerId ? 'required|email|min:2|max:50|unique:managers,email,' . $managerId . ',id' : 'required|email|min:2|max:50|unique:managers,email',
            'phone' => $managerId ? 'max:11|unique:managers,phone,' . $managerId . ',id' : 'max:11|unique:managers,phone',
            'password' => $managerId ? 'max:30' : 'required|min:6|max:30'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên nhân viên không được để trống',
            'name.min' => 'Tên nhân viên tối thiếu là 2 ký tự',
            'name.max' => 'Tên nhân viên tối đa 50 ký tự',
            'email.required' => 'Email không được bỏ trống',
            'email.email' => 'Định dạng email không hợp lệ',
            'email.unique' => 'Email đã tồn tại',
            'email.max' => 'Email tối đa 50 ký tự',
            'password.required' => 'Mật khẩu phải bắt buộc',
            'password.min' => 'Mật khẩu phải có tối thiểu 6 ký tự',
            'password.max' => 'Mật khẩu tối đa 30 ký tự',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'password.confirmed' => 'Xác nhận mật khẩu không hợp lệ'
        ];
    }
}
