<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $users = DB::select('select * from users');
        return view('users.index', ['users' => $model->paginate(15)],['users'=>$users]);
    }

    public function destroy($id) {
        DB::delete('delete from users where id = ?',[$id]);
        }
}
