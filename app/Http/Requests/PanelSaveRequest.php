<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PanelSaveRequest extends FormRequest
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
            'Nombre' => 'required|alpha',
            'Apellido' => 'required|alpha',
            'Dni' => 'required|numeric|digits:8|unique:users,Dni',
            'Email' => 'required|email|unique:users,Email',
            'Contraseña' => 'required|string'
        ];
    }
}
