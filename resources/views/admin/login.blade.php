@extends('common')
@section('content')
    <div class="col-sm-12 text-center">
        <div class="col-sm-12" style="font-size: 24px;font-weight: bolder;padding-bottom: 15px;">
            Login
        </div>
        <form id="login" action="{{url('/Login')}}" class="col-sm-4 col-sm-offset-4 form-horizontal" role="form" method="post" onsubmit="return commit();">
            {{csrf_field()}}
            <div class="form-group">
                <label for="E-Mail" class="col-sm-3 control-label">E-Mail:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password:</label>
                <div class="col-sm-9">
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
        //提交表单触发该函数
        function commit() {
            //使用jquery.form.js插件的异步提交表单函数
            $('#login').ajaxSubmit({
                //在表单提交之前执行的函数，可以使用正则过滤非法输入
                //beforeSubmit:function (formData) {}
                //异步提交表单之后执行的函数
                success:function (status) {
                    if (status == 1)
                        window.location.href = "{{url('/')}}";
                }
            });
            //必须返回false，阻止表单的默认提交
            return false;
        }
    </script>
@endsection