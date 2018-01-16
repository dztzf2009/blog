@extends('admin.layout')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">修改课程</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/lesson/{{ $lesson['id'] }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input type="hidden" name="preview" value="{{ $lesson['preview'] }}">
            <div class="box-body">
                <div class="form-group">
                    <label for="title">课程名称</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $lesson['title'] }}">
                </div>
                <div class="form-group">
                    <label for="introduce">课程介绍</label>
                    <input type="text" class="form-control" name="introduce" id="introduce"
                           value="{{ $lesson['introduce'] }}">
                </div>
                <div class="form-group">
                    <label for="introduce">课程图片</label>
                    <div class="file-loading">
                        <input id="uploadImage" name="uploadImage" type="file"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="introduce">是否推荐</label>
                    <div class="row">
                        <div class="col-xs-1">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="isrecommend"
                                           value="1" {{$lesson['iscommend']==1?'checked':''}}>是
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="isrecommend"
                                           value="0" {{$lesson['iscommend']==0?'checked':''}}>否
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ishot">是否热门</label>
                    <div class="row">
                        <div class="col-xs-1">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="ishot" value="1" {{$lesson['ishot']==1?'checked':''}}>是
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="ishot" value="0" {{$lesson['ishot']==0?'checked':''}}>否
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="click">点击数</label>
                    <input type="text" class="form-control" name="click" id="click" value="{{ $lesson['click'] }}">
                </div>
            </div>
            <!-- /.box-body -->
            <div id="app">
                <div class="box-body" v-for="(v,k) in videos">
                    <div class="form-group">
                        <label for="title">视频标题</label>
                        <input type="text" class="form-control" v-model="v.title"/>
                    </div>
                    <div class="form-group">
                        <label for="title">视频地址</label>
                        <input type="text" class="form-control" v-model="v.path">
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary" @click.prevent="del">删除视频</button>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-primary" @click.prevent="add">添加视频</button>
                </div>
                <textarea name="videos" hidden>@{{ videos }}</textarea>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">保存</button>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        $(function () {
            $("#uploadImage").fileinput({
                uploadUrl: '/component/upload', // you must set a valid URL here else you will get an error
                allowedFileExtensions: ['jpg', 'png', 'gif'],
                overwriteInitial: false,
                maxFileSize: 1000,
                maxFilesNum: 10,
                autoReplace:false,
                enctype: 'multipart/form-data',
                initialPreview: "{{ $lesson['preview'] }}",
                initialPreviewAsData: true, // identify if you are sending preview data only and not the raw markup
            }).on("fileuploaded", function (event, data) {
                if (data.response) {
                    $("[name='preview']").val(data.response.message);
                }
            });
        });
        window.onload = function () {
            var vm = new Vue({
                el: '#app',
                data: {
                    videos: JSON.parse('{!! $videos !!}')
                },
                methods: {
                    add: function () {
                        var field = {title: '', path: ''};
                        this.videos.push(field);
                    },
                    del: function (k) {
                        this.videos.splice(k, 1);
                    }
                },
            });
        }
    </script>
@endsection