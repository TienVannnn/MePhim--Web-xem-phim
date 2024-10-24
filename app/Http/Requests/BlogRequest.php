<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
        $blogID = $this->route('blog');
        return [
            'name' => $blogID ?  'required|unique:blogs,name,' . $blogID . ',id|min:2|max:255' : 'required|unique:blogs,name|min:2|max:255',
            'slug' => $blogID ?  'required|unique:blogs,slug,' . $blogID . ',id|min:2|max:255' : 'required|unique:blogs,slug|min:2|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên bài viết bắt buộc',
            'name.min' => 'Tên bài viết tối thiểu 5 ký tự',
            'name.max' => 'Tên bài viết tối đa 200 ký tự',
            'slug.required' => 'Tên slug bắt buộc',
            'slug.min' => 'Tên slug tối thiểu 5 ký tự',
            'slug.max' => 'Tên slug tối đa 200 ký tự',
            'image.required' => 'Ảnh bài viết phải bắt buộc',
            'image.mimes' => 'Định dạng ảnh không hợp lệ',
            'image.max' => 'Ảnh tối đa 2048',
            'content.required' => 'Nội dung bài viết là bắt buộc'
        ];
    }
}
