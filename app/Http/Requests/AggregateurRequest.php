<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AggregateurRequest extends FormRequest
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
            'nom_partenaire' => 'required|string',
          
            'adresse' => 'required|string',
            'fonction' => 'required|string',
            'reference' => 'required|string|unique:aggregateurs,reference,' . $this->route('aggregateur'),
            'commision' => 'required|numeric',
            'taux_couverture_dollar' => 'required|numeric',
            'ninea' => 'required|string|unique:aggregateurs,ninea,' . $this->route('aggregateur'),
        ];
    }
    
}
