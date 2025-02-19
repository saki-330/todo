@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endsection

@section('content')
<div class="todo-alert">
    <div class="todo-alert__success">
        <p>カテゴリを削除しました</p>
    </div>
</div>
<div class="todo-category">
    <div class="">