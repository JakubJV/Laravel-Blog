@extends('master')

@section('title', 'Administrace')

@section('content')
    <div class="container mt-5">
        <h1 class="card-header text-center text-capitalize mt-3">
            Administrace Příspěvků 
        </h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Název</th>
                    <th>Autor</th>
                    <th>Vytvořeno</th>
                    <th>Akce</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user ? $post->user->email : 'Neznámý autor' }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>
                            <form action="{{ route('admin.delete', $post->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Opravdu chcete smazat tento příspěvek?')">
                                    Smazat
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $posts->links() }}
    </div>
@endsection
