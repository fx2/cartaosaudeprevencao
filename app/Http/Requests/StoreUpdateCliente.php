<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Validation\Rule;

class StoreUpdateCliente extends FormRequest
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
        $id = $this->segment(3);
        $user = User::where('id', $id)->first();

        return [
            'name' => "required|max:255",
            'email' => "nullable|email|max:255|unique:users,id, $user->id",
            'document' => "required|min:11|max:11",
            'password' => "nullable",
            'telefone' => "nullable",
            'zipCode' => "nullable",
            'state' => "nullable",
            'city' => "nullable",
            'neighborhood' => "nullable",
            'street' => "nullable",
            'number' => "nullable",
            'complement' => "nullable",
            'idendereco' => "nullable",
            'idtelefone' => "nullable"
        ];
    }
}
