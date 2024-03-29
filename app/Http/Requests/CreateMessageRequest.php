<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMessageRequest extends FormRequest
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
            //
            'nombre'=>'required',
            'apellidop'=>'required',
            'email'=>'required||email',
            'ru' => 'unique:estudiantes,ru||required',
            'cedula' => 'required||unique:personas,cedula',
            'telefono'=> 'required'

           


        ];
    }
}
