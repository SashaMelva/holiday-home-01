<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class LoginHistoryController extends Controller
{
    public function historyAdmin()
    {

        $historyUsers = DB::table('admins')
            ->join('login_history', 'login_history.user_id', '=', 'admins.user_id')
            ->join('users', 'login_history.user_id', '=', 'users.id')
            ->get();

        return view('admin/history/history_main', ['historyUsers' => $historyUsers, 'title' => 'Администратора']);
    }

    public function historyGuests()
    {
        $historyUsers = DB::table('users')
            ->join('login_history', 'login_history.user_id', '=', 'admins.user_id')
            ->get();
        return view('admin/history/history_main', ['historyUsers' => $historyUsers, 'title' => 'Клиентов']);
    }

    public function historyAgents()
    {
        $historyUsers = DB::table('agents')
            ->join('login_history', 'login_history.user_id', '=', 'agents.user_id')
            ->join('users', 'login_history.user_id', '=', 'users.id')
            ->get();
        return view('admin/history/history_main', ['historyUsers' => $historyUsers, 'title' => 'Менеджеров отелей']);
    }
}
