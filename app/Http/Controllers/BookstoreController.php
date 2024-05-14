<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookstoreRequest;
use App\Models\Store;
use Illuminate\Http\Request;

class BookstoreController extends Controller
{
    public function index(){
        return view('site.bookstore.index');
    }

    public function store(StoreBookstoreRequest $request){
        $client = new Store();   
    
        $client->name = $request->name;
        $client->address = $request->address;
        $client->active = $request->active;
    
        $client->save();
    
        return redirect('index');
    }

    public function show(Store $client)
    {
        $clients = $client->all();
        return view('site.bookstore.show', compact('clients'));
    }

    public function edit(Store $client, string $id)
    {
        if(!$client = $client->find($id))
        {
            return back();
        }
        return view('site.bookstore.edit', compact('client'));
    }

    public function update(StoreBookstoreRequest $request, Store $client, string $id)
    {
        if(!$client = $client->find($id))
        {
            return back();
        }

        $client->update($request->only([
        'name',
        'address',
        'active'
        ]));

        return view('site.bookstore.updatesuccess');
    }

    public function destroy(string|int $id)
    {
        if(!$client = Store::find($id))
        {
            return back();
        }
        $client->delete();

        return view('site.bookstore.destroysuccess');
    }
}


