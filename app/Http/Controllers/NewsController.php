<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
}

// Tampilkan form tambah berita
public function create()
{
    return view('news.create');
}

// Simpan berita baru dengan validasi
public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
    ]);

    // Simpan data ke dalam database
    Post::create($validatedData);

    // Redirect dengan pesan sukses
    return redirect()->route('news.index')->with('success', 'Berita berhasil ditambahkan.');
}

// Tampilkan daftar berita
public function index()
{
    $posts = Post::all();
    return view('news.index', compact('posts'));
}

// Tampilkan detail berita
public function show($id)
{
    $post = Post::findOrFail($id);
    return view('news.show', compact('post'));
}

// Tampilkan form edit berita
public function edit($id)
{
    $post = Post::findOrFail($id);
    return view('news.edit', compact('post'));
}

// Update berita dengan validasi
public function update(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
    ]);

    // Cari berita dan update datanya
    $post = Post::findOrFail($id);
    $post->update($validatedData);

    // Redirect dengan pesan sukses
    return redirect()->route('news.index')->with('success', 'Berita berhasil diperbarui.');
}

// Hapus berita
public function destroy($id)
{
    $post = Post::findOrFail($id);
    $post->delete();

    // Redirect dengan pesan sukses
    return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus.');
}
