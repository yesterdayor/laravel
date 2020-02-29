<!-- 保存在 resources/views/child.blade.php 文件中 -->

@extends('layouts.app')

@section('title', '页面标题')

@section('sidebar')
    @parent

    <p>This is appended to the master 追加的模板.</p>
@endsection

@section('content')
    <p>This is my body 内容.</p>
@endsection

@section('script')
    (function(){
        alert("hahahaha")})();

    @endsection
