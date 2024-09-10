<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
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
            'thumbnail' => 'sometimes|required|image|max:4096',
            'title' => 'sometimes|required',
            'genre_id' => 'sometimes|required|exists:genres,id',
            'subtitle' => 'nullable',
            'actor' => 'sometimes|required',
            'synopsis' => 'sometimes|required',
            'imdb_rating' => 'sometimes|required|integer|min:1|max:10',
            'link' => 'sometimes|required',
            'quality' => 'sometimes|required',
            'year' => 'sometimes|required|integer|min:1000|max:2024',
            'duration' => 'sometimes|required',
        ];
    }
}