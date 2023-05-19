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
        $userData = DataUsers::where('id_user', $id)->get();
        $userPassportData = PassportDataUsers::where('data_user_id', $id)->get();

        return view('user/profile', ['userData' => $userData, 'userPassportData' => $userPassportData, 'user' => $user]);
    }

    public function saveUserData(UserDataRequest $request)
    {
        $valid = $request->validated();
        $usersData = DataUsers::where('id_user', Auth::user()->id)->get();
        $id = (int)Auth::user()->id;
        if (!isset($usersData->id)) {
            DataUsers::create([
                'id_user' => $id,
                'surname' => $valid["surname"],
                'name' => $valid["name"],
                'gender' => $valid["gender"],
                'patronymic' => $valid["patronymic"],
                'phone_number' => $valid["phone_number"],
                'date_birth' => $valid["date_birth"]
            ]);
        } else {
            $usersData->surname = $valid["surname"];
            $usersData->name = $valid["name"];
            $usersData->gender = $valid["gender"];
            $usersData->patronymic = $valid["patronymic"];
            $usersData->phone_number = $valid["phone_number"];
            $usersData->date_birth = $valid["date_birth"];
            $usersData->save();
        }

        return back()->withInput();//redirect()->route('profile.show');
    }

    public function saveUserPassportData(UserDataPassordRequest $request)
    {
        $valid = $request->validated();
        $passportData = PassportDataUsers::where('data_user_id', Auth::user()->id)->get();


        if (!isset($passportData->id)) {
            PassportDataUsers::create([
                'data_user_id' => Auth::user()->id,
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
