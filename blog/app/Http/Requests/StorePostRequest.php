<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
        return [
            'title' => 'required|min:5|max:255', // ['required', 'min:5', 'max:255'] (Este tambien sirve)
            'slug' => 'required|unique:posts',
            'categoria' => 'required',
            'content' => 'required',
        ];
    }
    // public function messages()
    // {
    //     return [
    //         'title.required' => 'El campo título es requerido',
    //         'slug.required' => 'El campo slug es requerido',
    //         'categoria.required' => 'El campo categoria es requerido',
    //         'content.required' => 'El campo content es requerido',
    //     ];
    // }

    public function messages()
    {
        return [
            'title.required' => 'El campo :attribute es requerido',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'name',
        ];
    }
}
