<?php

namespace App\Http\Controllers\Admin;

use App\Model\Lesson;
use App\Model\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Lesson::get();
        return view('admin.lesson.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lesson.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Lesson $lesson)
    {
        $res = false;
        $lesson['title'] = $request['title'];
        $lesson['introduce'] = $request['introduce'];
        $lesson['preview'] = $request['preview'];
        $lesson['isrecommend'] = $request['isrecommend'];
        $lesson['ishot'] = $request['ishot'];
        $lesson['click'] = $request['click'];
        if ($lesson->save()) {
            $videos = json_decode($request['videos'], true);
            foreach ($videos as $video) {
                $res = $lesson->videos()->create($video);
            }
            if ($res) {
                return redirect('admin/lesson');
            }
            return redirect()->back()->withInput()->withErrors('增加视频失败！');
        } else {
            return redirect()->back()->withInput()->withErrors('增加课程失败！');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::find($id);
        $videos = json_encode($lesson->videos()->get()->toArray(), JSON_UNESCAPED_UNICODE);
        return view('admin.lesson.edit', compact('lesson', 'videos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $res = false;
        $lesson = Lesson::find($id);
        $lesson['title'] = $request['title'];
        $lesson['introduce'] = $request['introduce'];
        $lesson['preview'] = $request['preview'];
        $lesson['isrecommend'] = $request['isrecommend'];
        $lesson['ishot'] = $request['ishot'];
        $lesson['click'] = $request['click'];
        $videos_num = $lesson->videos()->count();
        if ($videos_num > 0) {
            if (false == Video::where('lesson_id', $id)->delete()) {
                return redirect()->back()->withInput()->withErrors('修改视频失败！');
            }
        }
        if ($lesson->save()) {
            $videos = json_decode($request['videos'], true);
            foreach ($videos as $video) {
                $res = $lesson->videos()->create($video);
            }
            if ($res) {
                return redirect('admin/lesson');
            }
            return redirect()->back()->withInput()->withErrors('增加视频失败！');
        } else {
            return redirect()->back()->withInput()->withErrors('增加课程失败！');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson = Lesson::find($id);
        $videos_num = $lesson->videos()->count();
        if ($videos_num > 0) {
            if (false == Video::where('lesson_id', $id)->delete()) {
                return $this->error('删除失败');
            }
        }
        Lesson::destroy($id);
        return $this->success('删除成功');
    }
}
