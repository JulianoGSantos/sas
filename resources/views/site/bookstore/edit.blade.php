<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Bookstore's Data</title>
    @vite(['resources/sass/app.scss','resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <div class="container-sm w-4/12 mt-4">
        <form action="{{route('bookstore.update', $client->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="iname">Name: </label>
                <input type="text" name="name" id="iname" placeholder="enter name" class=" form-control rounded-md ring-2  opacity-60" value="{{$client->name}}"><br>
            </div>
            <div class="mb-3">
                <label for="iaddress" class="form-label">Address: </label>
                <input type="text" name="address" id="iaddress" class=" form-control rounded-md ring-2  opacity-60" value="{{$client->address}}"><br>
            </div>
            <div class="mb-3">
                <label for="iactive" class="form-label">Active: </label>
                <select name="active" id="iactive" class="form-label">
                    <option value="{{$client->active}}">No</option>
                    <option value="{{$client->active}}">Yes</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
        
        <script>
            $('#ivalue').mask('0.00');
        </script>
    </div>
</body>
</html>