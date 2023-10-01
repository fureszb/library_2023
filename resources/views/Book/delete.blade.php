<h1>Könyv törlése</h1>

<form method="DELETE" action="/api/book/delete/{{ $book->id }}">

    @csrf
    @method('DELETE')
    <h2>Biztosan törölni szeretné ezt a könyvet?</h2>

    <p>
        Cím: {{ $book->title }} <br>
        Szerző: {{ $book->author }}
    </p>

    <button type="submit">Törlés</button>

</form>

@endsection
