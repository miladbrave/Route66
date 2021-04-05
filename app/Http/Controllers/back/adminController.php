<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class adminController extends Controller
{

    public function index()
    {
        $admins = User::latest()->get();
        return view('back.admin.index',compact('admins'));
    }

    public function create()
    {
        return view('back.admin.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed',
        ], [
            'name.required' => 'لطفا نام خود را وارد کنید.',
            'email.required' => 'لطفا ایمیل خود را وارد کنید.',
            'email.unique' => 'ایمیل وارد شده تکراری می باشد',
            'email.email' => 'لطفا ایمیل معتبر را وارد کنید',
            'password.required' => 'لطفا رمزعبور وارد کنید.',
            'password.min' => 'حداقل کاراکتر رمز عبور 4 می باشد.',
            'password.confirmed' => 'عدم تطابق رمز عبور.',
        ]);
        $validator->validate();

        $admin = new User();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->passwoord);
        $admin->admin = "admin";
        $admin->save();

        return redirect()->route('admin.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $admin = User::findOrFail($id);
        return view('back.admin.edit',compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $admin = User::findOrfail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$admin->id,
            'password' => 'required_if:password,exist|nullable|min:4|confirmed',
        ], [
            'name.required' => 'لطفا نام خود را وارد کنید.',
            'email.required' => 'لطفا ایمیل خود را وارد کنید.',
            'email.unique' => 'ایمیل وارد شده تکراری می باشد',
            'email.email' => 'لطفا ایمیل معتبر را وارد کنید',
            'password.min' => 'حداقل کاراکتر رمز عبور 4 می باشد.',
            'password.confirmed' => 'عدم تطابق رمز عبور.',
        ]);
        $validator->validate();

        $admin->name = $request->name;
        $admin->email = $request->email;
        if (isset($request->password)){
            $admin->password = Hash::make($request->password);
        }
        $admin->admin = "admin";
        $admin->save();

        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $admin = User::findOrFail($id);
        $admin->delete();
        return back();
    }
}
