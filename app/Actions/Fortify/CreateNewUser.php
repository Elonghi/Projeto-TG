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
            if( ($input['number'] >= 1) && ($input['number'] <= 25) ){
                $turma = 1;
                $pelotao = 1;
            }else if( ($input['number'] >= 26) && ($input['number'] <= 50) ){
                $pelotao = 2;
                $turma = 1;
            }
            else if( ($input['number'] >= 51) && ($input['number'] <= 75) ){
                $pelotao = 3;
                $turma = 2;
            }else{
                $pelotao = 4;
                $turma = 2;
            }
            

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'number' => $input['number'],
            'name' => $input['name'],
            'password' => Hash::make($input['password']),
            'pelotao' => $pelotao,
            'turma' => $turma,  
        ]);
    }
}
