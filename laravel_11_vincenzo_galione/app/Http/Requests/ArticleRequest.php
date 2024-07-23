<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            //
            'title' => 'required',
            'subtitle'=> 'required',
            'body'=> 'required'

        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'Non hai inserito il nome dell articolo',
            'subtitle.required' => 'Non hai inserito il sottotitolo dell articolo',
            'body.required' => 'Non hai inserito il corpo dell articolo'
        ];
    }
}
