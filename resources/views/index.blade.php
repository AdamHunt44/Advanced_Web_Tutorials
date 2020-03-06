<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<body>
<table class="table is-striped is-hoverable">
    <thead>
    <th>User</th>
    <th>Comments</th>
    <th>Date</th>
    <th>Likes</th>
    <th>View</th>
    <th>Up Vote</th>
    <th>Down Vote</th>
    </thead>
    <tbody>
    @foreach ($comments as $c)
        <tr>
            <td>{{ $c -> name }}</td>
            <td>{{ $c -> comment }}</td>
            <td>{{ $c -> created_at -> format('D jS F') }}</td>
            <td>{{ $c -> likes }}</td>
            <td>
                <a class="button"
                   href="/comment/{{ $c -> id }}/">
                    <ion-icon name="eye"></ion-icon>
                </a>
            </td>
            <td>
                <a class="button"
                   href="/comment/{{ $c -> id }}/upvote/">
                    <ion-icon name="thumbs-up"></ion-icon>
                </a>
            </td>
            <td>
                <a class="button"
                   href="/comment/{{ $c -> id }}/downvote/">
                    <ion-icon name="thumbs-down"></ion-icon>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $comments -> links () }}
</body>
@endsection
<script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
