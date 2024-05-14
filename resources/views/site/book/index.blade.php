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
        <form action="{{route('book.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="iname">Name: </label>
                <input type="text" name="name" id="iname" placeholder="enter name" class=" form-control rounded-md ring-2  opacity-60" value=" {{ old('name')}}"><br>
            </div>
            <div class="mb-3">
                <label for="iisbn" class="form-label">ISBN: </label>
                <input type="number" name="isbn" id="iisbn" class=" form-control rounded-md ring-2  opacity-60" value=" {{ old('isbn')}}"><br>
            </div>
            <div class="mb-3">
                <label for="ivalue" class="form-label">Value: </label>
                <input type="number" name="value" id="ivalue" placeholder="US$ 0.00" class=" form-control rounded-md ring-2  opacity-60" value=" {{ old('value')}}"><br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
        
        <script>
            $('#ivalue').mask('00.00');
        </script>
    </div>
</body>
</html>