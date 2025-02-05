@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<form class="form">
    @csrf
    <div class="confirm-message">
        <a class=""></a>
    </div>
    <div class="todo">
        <div class="todo-inner">
            <div class="todo__create">
                <div class="todo__input-content">
                    <input type="text" name="input" />
                </div>
                <div class="todo__input-button">
                    <button class="todo__input-button-submit" type="submit">作成</button>
                </div>
            </div>
            <div class="todo__edit">
                <a class="todo__edit--title">Todo</a>
                <div class="todo__edit--list">
                    <div class="todo__edit--list-content">
                        <input type="text" name="edit">
                    </div>
                    <div class="todo__list-button">
                        <div class="todo__list-button-update">
                            <button class="todo__list-button-update-submit" type="submit">更新</button>
                        </div>
                        <div class="todo__list-button-delete">
                            <button class="todo__list-button-delete-submit" type="submit">削除</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection