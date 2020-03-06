@extends('layouts.app')

@section('page_heading')
    Comment from {{ $comment -> name }}
@endsection

@section('content')
    <div class="box">
        <table class="table is-striped">
            <tbody>
            <tr>
                <td>User Name: {{ $comment -> name }}</td>
            </tr>
            <tr>
                <td>Comment: {{ $comment -> comment }}</td>
            </tr>
            <tr>
                <td>Date: {{ $comment -> created_at -> format('D jS F') }}</td>
            </tr>
            <tr>
                <td>Likes: {{ $comment -> likes }}</td>
            </tr>
            </tbody>
        </table>
        <p>
            <a class="button" href="/">Return</a>
        </p>
    </div>
@endsection
