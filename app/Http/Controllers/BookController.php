<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('site.book.index');
    }

    public function store(StoreBookRequest $request){
        $client = new Book();   

        $client->name = $request->name;
        $client->isbn = $request->isbn;
        $client->value = $request->value;

        $client->save();

        return redirect('index');
    }

    public function show(Book $client)
    {
        $clients = $client->all();
        return view('site.book.show', compact('clients'));
    }

    public function edit(Book $client, string $id)
    {
        if(!$client = $client->find($id))
        {
            return back();
        }
        return view('site.book.edit', compact('client'));
    }

    public function update(StoreBookRequest $request, Book $client, string $id)
    {
        if(!$client = $client->find($id))
        {
            return back();
        }

        $client->update($request->only([
        'name',
        'isbn',
        'value'
        ]));

        return view('site.book.updatesuccess');
    }

    public function destroy(string|int $id)
    {
        if(!$client = Book::find($id))
        {
            return back();
        }
        $client->delete();

        return view('site.book.destroysuccess');
    }
}
