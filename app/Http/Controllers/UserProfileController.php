<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDataPassordRequest;
use App\Http\Requests\UserDataRequest;
use App\Models\DataUsers;
use App\Models\PassportDataUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function show()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $userData = DataUsers::where('user_id', $id)->first();

        if (isset($userData->id)) {
            $userPassportData = PassportDataUsers::where('data_user_id', $userData->id)->get();
        } else {
            $userPassportData = null;
        }

        return view('user/profile', ['userData' => $userData, 'user' => $user, 'userPassportData' => $userPassportData]);
    }

    public function saveUserData(UserDataRequest $request)
    {
        $valid = $request->validated();
        $usersData = DataUsers::where('user_id', Auth::user()->id)->first();
        $id = (int)Auth::user()->id;

        if (!isset($usersData->id) && count($usersData) == 0) {
            DataUsers::create([
                'user_id' => $id,
                'surname' => $valid["surname"],
                'name' => $valid["name"],
                'gender' => $valid["gender"],
                'patronymic' => $valid["patronymic"],
                'phone_number' => $valid["phone_number"],
                'date_birth' => $valid["date_birth"],
                'passport_data_id' => 0
            ]);
        } else {
            $usersData[0]->surname = $valid["surname"];
            $usersData[0]->name = $valid["name"];
            $usersData[0]->gender = $valid["gender"];
            $usersData[0]->patronymic = $valid["patronymic"];
            $usersData[0]->phone_number = $valid["phone_number"];
            $usersData[0]->date_birth = $valid["date_birth"];
            $usersData[0]->save();
        }

        return back()->withInput();
    }

    public function saveUserPassportData(UserDataPassordRequest $request)
    {
        $valid = $request->validated();
        $passportData = PassportDataUsers::where('data_user_id', Auth::user()->id)->get();
        $userData = DataUsers::where('user_id', Auth::user()->id)->get();

        if (!isset($passportData->id) && count($passportData) == 0) {
            PassportDataUsers::create([
                'data_user_id' => $userData->id,
                'citizenship' => $valid["citizenship"],
                'passport_series' => $valid["passport_series"],
                'passport_number' => $valid["passport_number"],
                'date_registration' => $valid["date_registration"],
                'issued_by' => $valid["issued_by"]
            ]);
        } else {
            $passportData[0]->citizenship = $valid["citizenship"];
            $passportData[0]->passport_series = $valid["passport_series"];
            $passportData[0]->passport_number = $valid["passport_number"];
            $passportData[0]->date_registration = $valid["date_registration"];
            $passportData[0]->issued_by = $valid["issued_by"];
            $passportData[0]->save();
        }

        return back()->withInput();
    }
}
