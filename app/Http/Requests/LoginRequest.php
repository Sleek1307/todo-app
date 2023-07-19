<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
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
            "name_or_email" => "required",
            "password" => "required"
        ];
    }

    public function getCredentials()
    {
        $username = $this->get("name_or_email");

        if ($this->isEmail($username)) {
            return [
                "email" => $username,
                "password" => $this->get("password")
            ];
        }

        return ["name" => $this->get("name_or_email"), "password" => $this->get("password")];
    }

    private function isEmail($param)
    {
        $factory = $this->container->make(ValidationFactory::class);

        return !$factory->make(["name_or_email" => $param], ["name_or_email" => "email"])->fails();
    }
}