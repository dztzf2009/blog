<?php

namespace App\Http\Controllers\Component;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->isMethod('post')) {
            $file = $request->file('uploadImage');
            // 文件是否上传成功
            if ($file->isValid()) {
                // 获取文件相关信息
                $originalName = $file->getClientOriginalName(); // 文件原名
                $ext = $file->getClientOriginalExtension();     // 扩展名
                $realPath = $file->getRealPath();   //临时文件的绝对路径
                $type = $file->getClientMimeType();     // image/jpeg

                // 上传文件
                $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
                // 使用我们新建的uploads本地存储空间（目录）
                //这里的uploads是配置文件的名称
                if (Storage::disk('uploads')->put($filename, file_get_contents($realPath))) {
                    return ['valid' => 1, 'message' => asset('uploads/' . $filename)];
                }
                return ['valid' => 0, 'message' => '上传失败'];
            }
            return ['valid' => 0, 'message' => '上传失败文件大小不能超过2MB'];
        }
    }
}
