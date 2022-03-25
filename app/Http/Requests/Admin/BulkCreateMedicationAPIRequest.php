<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BulkCreateMedicationAPIRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'data.*.code' => ['nullable', 'string'],
            'data.*.name' => ['nullable', 'string'],
            'data.*.strength' => ['nullable', 'string'],
            'data.*.unit' => ['nullable', 'string'],
            'data.*.med_form' => ['nullable', 'string'],
            'data.*.mfg_name' => ['nullable', 'string'],
            'data.*.is_active' => ['boolean'],
        ];
    }
}
