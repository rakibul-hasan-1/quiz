<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'department' => ['required'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
            // dd($input);
            $user=new User();
            $user->name=$input['name'];
            $user->email=$input['email'];
            $user->dept_id=$input['department'];
            $user->password=Hash::make($input['password']);
            $user->save();
            return $user;

        // return User::create([
        //     'name' => $input['name'],
        //     'email' => $input['email'],
        //     'dept_id' => $input['department'],
        //     'password' => Hash::make($input['password']),
        // ]);
    }
}
