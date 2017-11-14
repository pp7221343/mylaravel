@extends('master.app')
@section('css')
    <link href="/css/admin_login/style.css" rel="stylesheet" type="text/css" media="all"/>
    @stop

@section('content')

    <div class="login">
        <h2>My world</h2>
        <div class="login-top">
            <h1>LOGIN FORM</h1>
            <form method="post" action="/verify_admin_login">
                <input type="text" name="user" value="User Id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Id';}">
                <input type="password" name="password" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <div class="forgot">
                <a href="#">forgot Password</a>
                <input type="submit" value="Login" >
            </div>
            </form>
        </div>
        <div class="login-bottom">
            <h3>New User &nbsp;<a href="#">Register</a>&nbsp Here</h3>
        </div>
        @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        @if(isset($log))
            <div class="alert alert-danger">
                <ul>
                    <li>@{{ $log }}</li>
                </ul>
            </div>
            @endif
    </div>

    @stop

@section('js')

    <script type="text/javascript">
//        document.onkeydown = keydown;
//        var data ;
//        function keydown(e){
//            if(e.which != 13){
//                data = data+String.fromCharCode(e.which);
//            } else {
//                alert(data);
//                data = "";
//            }
//        }

    </script>


    @stop