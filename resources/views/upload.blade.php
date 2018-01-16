<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blog后台</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/bower_components/bootstrap-fileinput/css/fileinput.min.css")}}">
    <!-- jQuery 3 -->
    <script src="{{ asset("/bower_components/jquery/dist/jquery.min.js")}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset("/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
    <!-- bootstrap-fileinput -->
    <script src="{{ asset('/bower_components/bootstrap-fileinput/js/fileinput.min.js') }}"></script>
</head>
<body>
<div class="container kv-main">
    <form enctype="multipart/form-data">
        <div class="file-loading">
            <input id="file-0c" class="file" type="file" multiple data-min-file-count="3">
        </div>
        <hr>
        <div class="form-group">
            <div class="file-loading">
                <input id="file-0d" class="file" type="file">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="file-loading">
                <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="file-loading">
                <input id="file-2" type="file" class="file" readonly data-show-upload="false">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="file-loading">
                <label>Preview File Icon</label>
                <input id="file-3" type="file" multiple>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="file-loading">
                <input id="file-4" type="file" class="file" data-upload-url="#">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <button class="btn btn-warning" type="button">Disable Test</button>
            <button class="btn btn-info" type="reset">Refresh Test</button>
            <button class="btn btn-primary">Submit</button>
            <button class="btn btn-default" type="reset">Reset</button>
        </div>
        <hr>
        <div class="form-group">
            <div class="file-loading">
                <input type="file" class="file" id="test-upload" multiple>
            </div>
            <div id="errorBlock" class="help-block"></div>
        </div>
        <hr>
        <div class="form-group">
            <div class="file-loading">
                <input id="file-5" class="file" type="file" multiple data-preview-file-type="any" data-upload-url="#">
            </div>
        </div>
    </form>
</div>
</body>
</html>
