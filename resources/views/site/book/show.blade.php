@vite(['resources/sass/app.scss','resources/js/app.js','resources/css/app.css'])
<div class="container-sm">
    <div class="row bg-gray-300 rounded-lg h-12 mt-2 text-center text-lg font-serif font-bold">
        <div>
            BOOK'S LIST
        </div>
    </div>
    <div class="row mt-5">
        <div class="col font-bold">Name</div>
        <div class="col font-bold">ISBN</div>
        <div class="col font-bold">Value</div>
        <div class="col font-bold">Upadate</div>
        <div class="col font-bold">Delete</div>
    </div>
    @foreach ($clients as $client)
        <div class="row gap-1">
            <div class="col p-2">{{$client->name}}</div>
            <div class="col p-2">{{$client->isbn}}</div>
            <div class="col p-2">{{$client->value}}</div>
            <div class="col p-2"><a href="{{route('book.edit', $client->id)}}">Update</a></div>
            <div class="col p-2"><form action="{{route('book.destroy', $client->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</div>