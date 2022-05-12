<?php

namespace App\Http\Requests\backend\videos;

use Illuminate\Foundation\Http\FormRequest;

class store extends FormRequest
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
            'name' => ['required', 'string', 'max:191'],
            'meta_keywords' => ['max:191'],
            'meta_des' => [  'min:8','Nullable'],
            'des'=>['required', 'string', 'max:191'],
            'youtube'=>['url','required'],
           // 'published',
            'image'=>['required'],
            //'cat_id',
        //    'user_id'
        ];
    }
}
