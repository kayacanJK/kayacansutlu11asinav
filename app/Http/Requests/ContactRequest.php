<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>['string','min:3','max:50'],
            'email'=>['string','email'],
            'phone'=>['string','min:10','max:11'],
            'subject'=>['string','min:8','max:200'],

        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Ad Soyad',
            'email' => 'E-Posta',
            'phone' => 'Telefon',
            'subject' => 'İletişim Nedeni',
            'message' => 'Mesaj',
        ];
    }
}
