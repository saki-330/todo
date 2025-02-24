@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endsection

@section('content')
<div class="category__alert">
    @if (session('message'))
    <div class="category__alert--success">
        {{ session('message') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="category__alert--danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
<div class="todo-category">
    <div class="category-create">
        <form class="category-create__form">
            <div class="category-create__text">
                <input class="category-create__text-box" type="text">
            </div>
            <div class="category-create__button">
                <button class="category-create__button-submit">作成</button> 
            </div> 
        </form>  
    </div>
    <div class="category-list">
        <table class="category-list__table">
            <tr class="category-list-header">
                <th class="category-list-header__title">category</th>
            </tr>
            <tr class="category-list-content">
                <form class="category-update">
                    <td class="category-list-content-data">category1</td>
                    <td class="category-update__button">
                        <button class="category-update__button-submit" type="submit">更新</button>
                    </td>
                </form>
                <form class="category-delete">
                    <td class="category-delete__button">
                        <button class="category-delete__button-submit" type="submit">削除</button>
                    </td>
                </form>
            </tr>
                
</div>
@endsection