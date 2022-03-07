<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return [
            'name' => 'required|min:10|max:70|',
            'price' =>'required |integer|gt:0',  
            'stock' =>'required|', 
        ];
    }
}
