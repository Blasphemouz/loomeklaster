<?php

use Kirby\Exception\PermissionException;

return function ($kirby) {
    // send already logged-in user somewhere else
    if ($kirby->user()) {
        go('home');
    }

    // create empty error list
    $errors = [];

    // the form was sent
    if (get('register') && $kirby->request()->is('POST')) {
        // validate CSRF token
        if (csrf(get('csrf')) === true) {
            // get form data
            $data = [
                'email' => get('email'),
                'name' => get('name'),
                'language' => get('language')
            ];
            // validation rules
            $rules = [
                'email' => ['required', 'email'],
                'name' => ['required', 'minLength' => 3],
            ];
            // error messages
            $messages = [
                'email' => 'Palun sisestage sobiv E-Posti aadress',
                'name' => 'Teie kasutajanimes peab olema vähemalt 3 tähte',
            ];
            // check if data is valid
            if ($invalid = invalid($data, $rules, $messages)) {
                $errors = $invalid;

                // the data is fine, let's create a user
            } else {
                // authenticate
                $kirby->impersonate('kirby');
                try {
                    // create new user
                    $user = $kirby->users()->create([
                        'email' => $data['email'],
                        'role' => 'user',
                        'language' => $data['language'],
                        'name' => $data['name'],
                    ]);
                    if (isset($user) === true) {
                        // create the authentication challenge
                        try {
                            $status = $kirby->auth()->createChallenge($user->email(), false, 'login');
                            go('/login');
                        } catch (PermissionException $e) {
                            $errors[] = $e->getMessage();
                        }
                    }
                } catch (Exception $e) {
                    $errors[] = $e->getMessage();
                }
            }
        } else {
            $errors[] = 'Ebasobiv CSRF token.';
        }
    }

    return [
        'errors' => $errors
    ];
};