<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\User;
use Auth;

class UserController extends Controller
{
    public function getList()
    {
        $users = DB::table('users')->get();
        $data = [
            'users' => $users
        ];
        return view('admin/user/list', $data);
    }

    public function getAdd()
    {
        $roleList = DB::table("roles")->get();
        $data = ['roleList' => $roleList];
        return view("admin/user/add", $data);
    }

    public function postAdd(Request $request)
    {
        $validateRules = [
            'fullname' => 'required|min:6',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'role_id' => 'required',
        ];
        $validator = Validator::make($request->all(), $validateRules);
        if ($validator->fails()) {
            return redirect()->route("admin.user.add")->withErrors($validator)->withInput();
        }
        $data = [
            'username' => $request->input('username'),
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->password),
            'role_id' => $request->input('role_id'),
        ];
        DB::table('users')->insert($data);
        return redirect()->route('admin.user.add')->with('alert_success', 'Tạo user thành công.');
    }

    public function getEdit($id)
    {
        $listRole = DB::table('roles')->get();
        $user = DB::table("users")->where('id', '=', $id)->first();
        $data = ['user' => $user, 'listRole' => $listRole];
        return view("admin/user/edit", $data);
    }

    public function postEdit(Request $request, $id)
    {
        $validateRules = [
            'fullname' => 'required|min:6',
            'email' => 'required|email',
            'role_id' => 'required',
        ];
        $validator = Validator::make($request->all(), $validateRules);
        if ($validator->fails()) {
            return redirect()->route("admin.user.edit", ['id' => $id])->withErrors($validator)->withInput();
        }
        if ($request->has('password')) {
            $user = DB::table('users')->where('id', $id)->limit(1);
            $user->update([
                'username' => $request->input('username'),
                'fullname' => $request->input('fullname'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
                'role_id' => $request->input('role_id'),
                'password' => Hash::make($request->password)
            ]);
            return redirect()->route('admin.user.edit', ['id' => $id])->with('success', 'Cập nhật người dùng thành công.');
        } else {
            $user = DB::table('users')->where('id', $id)->limit(1);
            $user->update([
                'username' => $request->input('username'),
                'fullname' => $request->input('fullname'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
                'role_id' => $request->input('role_id'),
            ]);
            return redirect()->route('admin.user.edit', ['id' => $id])->with('success', 'Cập nhật người dùng thành công.');
        }
    }

    public function getDelete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('admin.user')->with('alert_success', 'Xóa user thành công.');
    }

    public function getProfile(Request $request)
    {
        $user = $request->session()->get('auth');
        return view('/admin.profile', ['user' => $user]);
    }

    public function editProfile(Request $request)
    {
        $user = $request->session()->get('auth');
        $validateRules = [
            'fullname' => 'required|min:6',
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6',
        ];
        $validator = Validator::make($request->all(), $validateRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $fullname = $request->fullname;
        $password = Hash::make($request->password);
        $update = DB::table('users')->where('id', $user->id)->limit(1);
        $update->update([
            'fullname' => $fullname,
            'password' => $password,
        ]);
        return redirect()->back()->with('alert_success', 'Cập nhật thông tin thành công.');
    }

    public function postEventUser(Request $request)
    {
        $validateRules = [
            'name' => 'required|min:6',
            'content' => 'required',
            'amount' => 'required|numeric',
            'time' => 'required',
            'address' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
        $validator = Validator::make($request->all(), $validateRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $fileName = auth()->id() . '_' . time() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('file'), $fileName);
        $data = [
            'name_event' => $request->input('name'),
            'content' => $request->input('content'),
            'user_id' => Auth::user()->id,
            'amount' => $request->amount,
            'member' => 0,
            'time' => $request->time,
            'address' => $request->address,
            'image' => $fileName,
        ];

        DB::table('event')->insert($data);
        return redirect()->back()->with('success', 'Tạo sự kiện thành công.');
    }

    public function editUserClient(Request $request)
    {
        $validateRules = [
            'fullname' => 'required|min:6',
        ];
        $validator = Validator::make($request->all(), $validateRules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->has('password')) {
            $user = DB::table('users')->where('id', Auth::user()->id)->limit(1);
            $user->update([
                'fullname' => $request->fullname,
                'password' => Hash::make($request->password)
            ]);
            return redirect()->back()->with('success', 'Cập nhật thông tin thành công.');
        } else {
            $user = DB::table('users')->where('id', Auth::user()->id)->limit(1);
            $user->update([
                'fullname' => $request->fullname,
            ]);
            return redirect()->back()->with('success', 'Cập nhật thông tin thành công.');
        }
    }
}
