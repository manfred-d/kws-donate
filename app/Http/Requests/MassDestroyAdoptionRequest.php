<?php

namespace App\Http\Requests;

use App\Models\Adoption;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAdoptionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('adoption_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:adoptions,id',
        ];
    }
}
