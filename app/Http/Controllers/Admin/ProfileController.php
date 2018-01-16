<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPost;
use Auth;

class ProfileController extends CommonController
{
    /*
     * 修改密码视图
     */
    public function passwordForm()
    {
        return view('admin.profile.passwordForm');
    }

    /*
     * 处理修改密码
     */
    public function changePassword(AdminPost $request)
    {
        $model = Auth::guard('admin')->user();
        $model->password = bcrypt($request['password']);
        if($model->save()){
            return redirect()->back();
        }else{
            return redirect()->back()->withInput()->withErrors('修改密码失败！');
        }
    }
}
