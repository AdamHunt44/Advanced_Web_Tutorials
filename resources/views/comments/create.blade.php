<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.app')

@section('page_title')
    Create New
@endsection

@section('page_heading')
    Create New
@endsection

@section ('content')
    <form action="/add/" method="POST">
        <fieldset>
            @csrf
            <label>User</label>
            <input class="input" type="text" name="name"
                   placeholder="Enter User's Name">
            <label>Comment</label>
            <input class="input" type="text" name="comment"
                   placeholder="Enter the Comment">
            <button type="submit">Add Comment</button>
        </fieldset>
    </form>

    <p>
        <a href="/">Back</a>
    </p>
@endsection
</html>

@error('comment')
    <div class="notification is-warning">
        <p>
            {{ $message }}
        </p>
    </div>
@enderror
