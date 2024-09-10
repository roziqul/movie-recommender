<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'thumbnail' => 'required|image|max:4096',
            'title' => 'required',
            'genre_id' => 'required|exists:genres,id',
            'subtitle' => 'nullable',
            'actor' => 'required',
            'synopsis' => 'required',
            'imdb_rating' => 'required|float|min:1|max:10',
            'link' => 'required',
            'quality' => 'required',
            'year' => 'required|integer|min:1000|max:2024',
            'duration' => 'required',
        ];
    }
}
