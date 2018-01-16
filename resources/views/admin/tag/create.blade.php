@extends('admin.layout')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">增加标签</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/tag" method="post">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="name">标签名称</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="标签名称">
                </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">保存</button>
            </div>
        </form>
    </div>
@endsection