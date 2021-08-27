<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Validation\Rule;

class AlterarCadastro extends FormRequest
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
        $emailRule = Rule::unique((new User)->getTable());
        $emailRule->ignore($this->route('user'));
        return [
            'name' => "required|max:255",
            'email' => "required|email|max:255|unique:users,email,". auth()->user()->id . ",id",
            'document' => "required|min:11|max:11",
            'password' => "required"
        ];
    }
}
