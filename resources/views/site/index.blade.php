<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/sass/app.scss','resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <div class="container-sm">
        <div class="row bg-gray-300 rounded-lg h-12 mt-2 text-center text-lg font-serif font-bold">
            <div>
                CHOOSE AN OPTION
            </div>
        </div>
        <div class="container-sm mt-5">
            <div class="row text-center">
                <div class="col">
                    <a href="{{route('book.show')}}" class="btn btn-primary">Find your book</a>
                </div>
                <div class="col">
                    <a href="{{route('bookstore.show')}}" class="btn btn-primary">Find your bookstore</a>
                </div>
            </div>
        </div>
        <div class="grid mt-5 font-serif text-base">
            <div class="row justify-content-evenly">
                <div class="card" style="width: 18rem;">
                    <img src="img/book.png" class="card-img-top p-1 rounded-t-lg" alt="book">
                    <div class="card-body">
                    <p class="card-text">click the button below to register your book</p>
                    <a href="{{route('book.index')}}" class="btn btn-primary">Register</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/bookstore.png" class="card-img-top p-1 rounded-t-lg" alt="bookstore">
                    <div class="card-body">
                    <p class="card-text">click the button below to register your bookstore</p>
                    <a href="{{route('bookstore.index')}}" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="/logout" method="POST">
        @csrf
        <div class="grid justify-content-end mr-20">
            <a class="btn btn-danger" role="button" href="/logout" onclick="event.preventDefault();this.closest('form').submit();"
            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: 1.0rem; --bs-btn-font-size: 0.8rem;">Logout</a>
        </div>
    </form>
</body>
</html>