<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Validator;

/**
 * Created By : Dilshan Subhashana Rajapaksha
 * Created At : 05/02/2020
 * Summary : Control all user functionaries
 * @param Request $request - collect all user's data from frontend
 * @return \Illuminate\Http\JsonResponse
 */

class UserController extends Controller
{
//    add new administrator
    public function saveuser (Request $request){

//        validate the form
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|min:3|max:100',
            'nic_number' => 'required|min:10|max:13',
            'telephone' => 'required|min:10|max:10',
            'email' => 'required|min:10|max:100',
            'password' => 'required|min:4|max:20'
        ],
            [
                'full_name.required' => 'Admin name is required !',
                'full_name.min:3' => 'Admin name should have minimum 3 characters !',
                'full_name.max:100' => 'Admin name cannot exceeded maximum 100 characters !',
                'nic_number.required' => 'NIC number is required !',
                'nic_number.min:10' => 'NIC number should have minimum 10 characters !',
                'nic_number.max:13' => 'NIC number cannot exceeded maximum 10 characters !',
                'telephone.required' => 'Telephone number is required !',
                'telephone.min:10' => 'Telephone number should have minimum 10 characters !',
                'telephone.max:10' => 'Telephone number cannot exceeded maximum 10 numbers !',
                'email.required' => 'Email address is required !',
                'email.min:10' => 'Email address should have minimum 10 characters !',
                'email.max:100' => 'Email address cannot exceeded maximum 100 characters !',
                'password.required' => 'Password is required !',
                'password.min:4' => 'Password should have minimum 4 characters',
                'password.max:20' => "Password cannot exceeded maximum 20 characters"
            ]
        );

        if ($validator->fails()) {
            return response() -> json(array (
                'success'=> false,
                'data' => $validator -> errors() -> all()[0]
            ));
        }

        $user = new User();

        $user->	fullname = $request->input('full_name');
        $user->	nic = $request->input('nic_number');
        $user->	occupation = $request->input('occupation');
        $user->	telephone = $request->input('telephone');
        $user->	email = $request->input('email');
        $user->	password = $request->input('password');

        $user->save();

        return response() -> json(array (
           'success' => true,
            'data'=> "Successful !"
        ));

    }
}
