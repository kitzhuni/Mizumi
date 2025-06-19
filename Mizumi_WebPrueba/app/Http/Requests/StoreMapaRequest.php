<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMapaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
   
    public function rules()
{
    return [
        'columnas' => 'required|integer|min:1|max:20',
        'filas' => 'required|integer|min:1|max:20',
        'sillasxmesa' => 'required|integer|min:1|max:10',
        'precioAdulto' => 'required|numeric|min:0',
        'precioMenor' => 'required|numeric|min:0',
        'precioInfantes' => 'required|numeric|min:0',
        'escenarios' => 'sometimes|array',
        'escenarios.*.x' => 'required|integer|min:0|max:20',
        'escenarios.*.y' => 'required|integer|min:0|max:20',
        'pistas' => 'sometimes|array',
        'pistas.*.x' => 'required|integer|min:0|max:20',
        'pistas.*.y' => 'required|integer|min:0|max:20',
        'mesas' => 'required|array',
        'mesas.*.x' => 'required|integer|min:0|max:20',
        'mesas.*.y' => 'required|integer|min:0|max:20'
    ];
}
}
