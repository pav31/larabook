<?php namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator {

    public function test() {
        echo "Registration test";
    }

    /**
     * Validation rules for the registration form
     *
     * @var array
     */
    protected $rules = [
        'username' => 'required|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed'
    ];
}