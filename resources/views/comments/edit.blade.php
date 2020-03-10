@extends('layouts.app')

@section('page_heading')
    Comment from {{ $comment -> name }}
@endsection

@section ('content')
    <form action = "/comment/{{ $comment -> id }}/edit/" method="POST">
        <fieldset>
            @csrf
            <label>User</label>
            <input class="input" type="text"
                   value="{{ $comment -> name }}">
            <br>
            <label>Date</label>
            <input class="input" type="text"
                   value="{{ $comment -> updated_at }}" readonly>
            <br>
            <label>Comment</label>
            <input class="input" type="text" name="comment"
                   value="{{ $comment -> comment }}" autofocus>
            <br>
            <button type="submit">Save Changes</button>
        </fieldset>
    </form>
@endsection

@error('comment')
    <div class="notification is-warning">
        <p>
            {{ $message }}
        </p>
    </div>
@enderror
