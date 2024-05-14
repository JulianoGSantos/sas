@vite(['resources/sass/app.scss','resources/js/app.js','resources/css/app.css'])
<div class="container-sm">
    <div class="row bg-gray-300 rounded-lg h-12 mt-2 text-center text-lg font-serif font-bold">
        <div>
            BOOKSTORE'S LIST
        </div>
    </div>
    <div class="row mt-5">
        <div class="col font-bold">Name</div>
        <div class="col font-bold">Address</div>
        <div class="col font-bold">Active</div>
        <div class="col font-bold">Update</div>
        <div class="col font-bold">Delete</div>
    </div>
    @foreach ($clients as $client)
        <div class="row text-start">
            <div class="col">{{$client->name}}</div>
            <div class="col">{{$client->address}}</div>
            <div class="col">{{$client->active}}</div>
            <div class="col"><a href="{{route('bookstore.edit', $client->id)}}">Update</a></div>
            <div class="col"><form action="{{route('bookstore.destroy', $client->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</div>