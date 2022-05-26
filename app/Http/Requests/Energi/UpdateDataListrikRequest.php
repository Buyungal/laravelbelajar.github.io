<?php

namespace App\Http\Requests\Energi;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Energi\DataListrik;

class UpdateDataListrikRequest extends FormRequest
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
        $rules = DataListrik::$rules;
        
        return $rules;
    }
}
