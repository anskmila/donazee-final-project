<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonationCampaignRequest extends FormRequest
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
            'title' => 'required|max:255',
            'fundraiser_name' => 'required|max:255',
            'target' => 'required|integer',
            'deadline' => 'required|date',
            'purpose' => 'required',
            'receiver' => 'required|max:255',
            'description' => 'required'
        ];
    }
}
