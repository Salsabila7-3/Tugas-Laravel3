<form action="{{ isset($post) ? route('news.update', $post->id) : route('news.store') }}" method="POST">
    @csrf
    @if(isset($post))
        @method('PUT')
    @endif

    <label for="title">Judul:</label>
    <input type="text" name="title" value="{{ old('title', $post->title ?? '') }}" required>

    <label for="content">Konten:</label>
    <textarea name="content" required>{{ old('content', $post->content ?? '') }}</textarea>

    <button type="submit">{{ isset($post) ? 'Update' : 'Tambah' }} Berita</button>
</form>
