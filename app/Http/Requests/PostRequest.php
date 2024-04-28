<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'post.title' => 'required|max:100',
            'post.body' => 'required|max:4000',
            ];
    }
}
