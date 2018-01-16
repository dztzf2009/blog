@extends('admin.layout')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">课程列表</h3>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="">课程列表</a></li>
            <li><a href="/admin/lesson/create">新增课程</a></li>
        </ul>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th width="100">编号</th>
                    <th>课程名称</th>
                    <th>视频数量</th>
                    <th width="120">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['title'] }}</td>
                        <td>{{ $item->videos()->count() }}</td>
                        <td>
                            <a href="/admin/lesson/{{ $item['id'] }}/edit">编辑</a>
                            <a href="javascript:void(0);" onclick="del({{ $item['id'] }})" )>删除</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    <script type="text/javascript">
        function del(id) {
            $.ajax({
                url: '/admin/lesson/' + id,
                method: 'DELETE',
                success: function (response) {
                    if (response.valid == 1) {
                        alert('删除成功');
                        window.location.reload();
                    }
                }
            });
        }
    </script>
@endsection