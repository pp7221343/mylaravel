@extends('master.app')

@section('content')

    <div class="wel-title">laravel</div>
    <div class="wel-nav">
        <div class="wel-menu">
            <a href="">1</a>
            <a href="">2</a>
            <a href="">3</a>
        </div>
        {{--<ul>--}}
            {{--<li></li>--}}
            {{--<li></li>--}}
            {{--<li></li>--}}
            {{--<li></li>di--}}
            {{--<li></li>--}}
        {{--</ul>--}}
    </div>
    <div class="wel-login">
        <form action="">
            <div class="col-lg-6">
                <label for="account">account:</label>
                <input type="text" name="account">
            </div>
            <div class="col-lg-6">
                <label for="password">password:</label>
                <input type="text" name="password" id="password" >
            </div>
            <div style="text-align: center;margin-top: 20px;">
                <button type="submit">login</button>
            </div>
        </form>
        <div id="app">
            @{{ message }}
        </div>
    </div>

    <script>
        var account = new Vue({
            el:'#app',
            data:{
                message:'hello world'
            }
        })
    </script>
    @stop

@section('css')
    <style>
        .wel-title{width:100%;height:150px;font-size: 80px;text-align: center;padding-top:30px;}
        .wel-nav{width:100%;height:30px;background-color: #2a88bd}
        .wel-menu{height:30px;width:1200px;margin:0 auto;background-color: red;}
        .wel-login{width:500px;height:500px;margin:0 auto;background-color: #8c8c8c}
    </style>
    @stop