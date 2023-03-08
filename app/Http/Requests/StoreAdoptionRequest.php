<?php

namespace App\Http\Requests;

use App\Models\Adoption;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAdoptionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('adoption_create');
    }

    public function rules()
    {
        return [
            'adpotee_id' => [
                'required',
                'integer',
            ],
            'animal_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
