<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    #[Validate('required|unique:users')]
    public $username = '';

    #[Validate('required|unique:users')]
    public $email = '';

    #[Validate('required')]
    public $first_name = '';
    
    #[Validate('required')]
    public $last_name = '';
    
    public $phone_number = '';

    #[Validate('required|min:6')]
    public $password = '';

    #[Validate('required|same:password')]
    public $confirm_password = '';
    
    #[Validate('required')]
    public $user_type = 'patient';

    public function save()
    {
        $this->password = Hash::make($this->password);
        $user = User::create($this->all());
        return $user;
    }
}
