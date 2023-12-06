<?php

namespace App\Http\Requests\Disput;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        
        '*'=> 'nullable|string',
        'id'=> ['integer', 'required'],
             
            
        ];
    }
    
    public function messages()
{
    return [
    
         'required' => 'Поле обязательно.',
    ];
}
//========================================
public function withValidator($validator)
{
    $validator->after(function ($validator) {
    	
    	//dd($validator);
        
           // $validator->errors()->add('field', 'Что-то не так с этим полем!');
        
    });
    
    
    
}
}