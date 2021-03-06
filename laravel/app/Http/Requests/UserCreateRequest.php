<?php

namespace App\Http\Requests;

use Auth;
use App\Http\Requests\Request;

class UserCreateRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow access if the user logged in is web master or developer
        if( Auth::user()->hasRole( 'Web Developer' ) ) {
            $authorised = true;
        } elseif ( Auth::user()->hasRole( 'Web Master' ) ) {
            $authorised = true;
        } elseif ( Auth::user()->hasRole( 'Web Communication' ) ) {
            $authorised = false;
        } else {
            $authorised = false;
        }
        return $authorised;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=> 'Required|max:80|NotIn:php,ruby',
            'email'=> 'Required|Email|Unique:users',
            'password'=>'Required|AlphaNum|min:8|Confirmed',
            // 'password_confirmation'=>'Required|AlphaNum|Min:8',
            // 'civility'=> 'NotIn:php,ruby',
            // 'birthday'=> 'NotIn:php,ruby',
            // 'birth_location'=> 'NotIn:php,ruby',
            // 'phone'=> 'Numeric',
            // 'photo'=> '',
            // 'job'=> 'NotIn:php,ruby',
            // 'address'=> 'NotIn:php,ruby',
            // 'postal_code'=> 'Numeric',
            // 'city'=> 'NotIn:php,ruby',
            'family_id'=> 'Required',
            'jersey_nbr'=> 'integer',
        ];
    }

}