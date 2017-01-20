<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $article_id = (isset($this->route('article')->id)) ? 
            $this->route('article')->id : null;

        return [
            'title' => ['required', 'min:3', 'max:20', 
                Rule::unique('articles')->ignore($article_id)],
            'text' => 'required|min:5'
        ];
    }
}
