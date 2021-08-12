<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FundRequest extends FormRequest
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
            'donation_campaigns_id' => 'required|integer|exists:donation_campaigns,id',
            'image'                 => 'required|image|mimes:jpeg,jpg,png|max:2048'
            
        ];
    }
}
