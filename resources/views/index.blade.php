<h1>Daftar Berita</h1>
@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="{{ route('news.create') }}">Tambah Berita</a>

<ul>
    @foreach($posts as $post)
        <li>
            <a href="{{ route('news.show', $post->id) }}">{{ $post->title }}</a>
            <a href="{{ route('news.edit', $post->id) }}">Edit</a>
            <form action="{{ route('news.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </li>
    @endforeach
</ul>
