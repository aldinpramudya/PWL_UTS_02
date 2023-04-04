<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;
        if(strlen($search)){
            $book = Book::where('judul', 'LIKE', "%$search%") -> paginate(5);
        }
        else{
            $book = Book::paginate(5);
        }
        return view('book.index', ['book'=>$book]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'jenis_buku'=> 'required',
            'harga'=> 'required',
            'qty' => 'required',
        ]);

        Book::create($request->all());

        return redirect()->route('book.index')->with('success', 'Buku Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Book = Book::find($id);
        return view('book.detail', compact('Book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Book = Book::find($id);
        return view('book.edit', compact('Book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'jenis_buku'=> 'required',
            'harga'=> 'required',
            'qty' => 'required',
        ]);

        Book::find($id)->update($request->all());

        return redirect()->route('book.index')->with('success', 'Buku Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::find($id)->delete();
        return redirect()->route('book.index')->with('success', 'Buku berhasil dihapus');
    }
}
