<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5',
            'producer' => 'required|min:5',
            'description' => 'required|min:5|max:300',
            'cover' => 'required|image'
        ];
    }

    public function message(): array{
        return [
            'title.required'=>'Inserisci il titolo del gioco',
            'producer.required'=>'Inserisci il produttore del gioco',
            'description.required'=>'Inserisci una trama del gioco',
            'cover.image' => "Inserisci un'immagine"
        ];
    }
}
