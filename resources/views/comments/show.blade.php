@section('content')
    <div class="box">
        <table class="table is-striped">
            <tbody>
            <tr>
                <td>Name:</td>
                <td>{{ $comment -> name}}</td>
            </tr>
            <tr>
                <td>Date:</td>
                <td>{{ $comment -> updated_at -> format('D jS F') }}</td>
            </tr>
            <tr>
                <td>Comment:</td>
                <td>{{ $comment -> comment }}</td>
            </tr>
            <tr>
                <td>Likes:</td>
                <td>{{ $comment -> likes }}</td>
            </tr>
            </tbody>
        </table>
    </div>

    <p>
        <a class="button" href="/">Back</a>
    </p>
@endsection
