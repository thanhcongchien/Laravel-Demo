<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormPost extends FormRequest
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
                 'title' => 'required|unique:posts|max:255',
            'keywords'=>'required',
            'description'=>'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'body' => 'required'

            
        ];
    }

     public function messages()
    {
        return [
            'title.required' => 'Title is required!',
            'keywords.required' => 'Keywords is required!',
            'description.required' => 'Description is required!',
            'image.required' => 'Image is required!',
            'body.required' =>'Body is required'
        ];
    }

}
