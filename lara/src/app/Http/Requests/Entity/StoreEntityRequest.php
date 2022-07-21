<?php
namespace App\Http\Requests\Entity;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
//    public function authorize()
//    {
//        return true; // Можно всем
//        // return false; // Только зарегистрированным
//    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        //https://laravel.su/docs/8.x/validation#form-request-validation
        return [
            'name' => 'required|string|min:1|max:100',
            'description' => 'required|string',
        ];
    }
}
