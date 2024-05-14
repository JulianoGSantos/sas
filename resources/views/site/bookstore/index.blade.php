<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Book</title>
    @vite(['resources/sass/app.scss','resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <div class="container-sm w-4/12 mt-4">
        <form action="{{route('bookstore.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="iname" class="form-label">Name: </label>
                <input type="text" name="name" class="form-control rounded-md ring-2" id="iname" placeholder="enter name">
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">Address: </label>
                <input type="text" name="address" class="form-control rounded-md ring-2" id="isbn">
            </div>
            <div class="mb-3">
                <label for="iactive" class="form-label">Active: </label>
                <select name="active" id="iactive" class="form-label">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>