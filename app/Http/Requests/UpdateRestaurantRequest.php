<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Restaurant;

class UpdateRestaurantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    //  méthode détermine si l'utilisateur est autorisé à effectuer cette requête. Dans ce cas, la méthode renvoie toujours true, ce qui signifie que toutes les requêtes sont autorisées.
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'address' => 'required|string',
            'zipCode' => 'required|integer',
            'town' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'review' => 'required|numeric|min:1',
        ];
    }
    public function updateRestaurant(Restaurant $restaurant)
    {
        // return Restaurant::updated([
        //     'name' => $this->name,
        //     'description' => $this->description,
        //     'address' => $this->address,
        //     'zipCode' => $this->zipCode,
        //     'town' => $this->town,
        //     'city' => $this->city,
        //     'review' => $this->review,
        // ]);
        $validatedData = $this->validated();

        $restaurant->update($validatedData);
    }
}
