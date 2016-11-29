@extends('common')
@section('content')
    <div class="col-sm-12 text-center">
        <div class="col-sm-12" style="font-size: 24px;font-weight: bolder;padding-bottom: 15px;">
            Login
        </div>
        <form id="login" action="{{url('/Login')}}" class="col-sm-4 col-sm-offset-4 form-horizontal" role="form" method="post" onsubmit="return commit();">
            {{csrf_field()}}
            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" required="required">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">登录</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        function commit() {
            $('#login').ajaxSubmit({
                beforeSubmit:function (formData) {
//                    formData[2]['value'];
                }
            });
            return false;
        }
    </script>
@endsection