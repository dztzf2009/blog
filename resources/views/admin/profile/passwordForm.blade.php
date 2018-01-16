@extends('admin.layout')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">修改密码</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/changePassword" method="post">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="original_password">旧密码</label>
                    <input type="password" class="form-control" name="original_password" id="original_password" placeholder="旧密码">
                </div>
                <div class="form-group">
                    <label for="password">新密码</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="新密码">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">确认密码</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="确认密码">
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">保存</button>
            </div>
        </form>
    </div>
@endsection