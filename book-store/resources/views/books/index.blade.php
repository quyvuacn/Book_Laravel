@extends('books.layout')



@section('content')
    <table class="table">
        <thead>
        <tr>
            <th colspan="4" style="text-align: center">
                <form action="{{route('books')}}" method="get">
                    <input type="text" name="search">
                    <button>Search</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </form>
            </th>
        </tr>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">ISBN</th>
            <th scope="col">pub_year</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <th scope="row">{{$book->bookid}}</th>
                <td>{{$book->title}}</td>
                <td>{{$book->ISBN}}</td>
                <td>{{$book->pub_year}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @if(count($books)==0)
        <p>Không có dữ liệu cho cuốn sách này</p>
    @endif
    {!! $books->links() !!}


@endsection
