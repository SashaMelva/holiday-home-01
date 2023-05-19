<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDataPassordRequest;
use App\Http\Requests\UserDataRequest;
use App\Models\DataUsers;
use App\Models\PassportDataUsers;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function show()
    {
        $id = Auth::user()->id;
        $user = \App\Models\User::find($id);
        $userData = DataUsers::where('user_id', $id);
        $userPassportData = PassportDataUsers::where('user_id', $id);
        return view('user/profile', ['userData' => $userData, 'userPassportData' => $userPassportData, 'user' => $user]);
    }

    public function saveUserData(UserDataRequest $request)
    {
        $valid = $request->validated();
        $gender = "female";

        if ($valid["gender_male"] == "on") {
            $gender = "male";
        }

        $usersData = DataUsers::where('user_id', Auth::user()->id);

        if (empty($usersData)) {
            DataUsers::create([
                'user_id' => Auth::user()->id,
                'surname' => $valid["surname"],
                'name' => $valid["name"],
                'gender' => $gender,
                'patronymic' => $valid["patronymic"],
                'phone_number' => $valid["phone_number"],
                'date_birth' => $valid["date_birth"]
            ]);
        }else{
            $usersData->surname = $valid["surname"];
            $usersData->name = $valid["name"];
            $usersData->gender = $valid["gender"];
            $usersData->patronymic = $valid["patronymic"];
            $usersData->phone_number = $valid["phone_number"];
            $usersData->date_birth = $valid["date_birth"];
            $usersData->save();
        }

        return redirect()->route('profile.show');
    }

    public function saveUserPassportData(UserDataPassordRequest $request)
    {
        $valid = $request->validated();
        $passportData = PassportDataUsers::where('user_id', Auth::user()->id);

        if (empty($passportData)) {
            PassportDataUsers::create([
                'user_id' => Auth::user()->id,
                'citizenship' => $valid["citizenship"],
                'passport_series' => $valid["passport_series"],
                'passport_number' => $valid["passport_number"],
                'date_registration' => $valid["date_registration"],
                'issued_by' => $valid["issued_by"]
            ]);
        } else {
            $passportData->citizenship = $valid["citizenship"];
            $passportData->passport_series = $valid["passport_series"];
            $passportData->passport_number = $valid["passport_number"];
            $passportData->date_registration = $valid["date_registration"];
            $passportData->issued_by = $valid["issued_by"];
            $passportData->save();
        }

        return redirect()->route('profile.show');
    }
}
