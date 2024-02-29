{{-- <style>
    form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form div {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.eroorm {
    color: #ff0000;
    font-size: 12px;
    margin-top: 5px;
}

button[type="submit"] {
    padding: 10px 20px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #45a049;
}

</style>
@section('title','rigester')

     <div>
        <form action="" method="post">
        @csrf

        <div>
            <label for="name" class="text-sm"> Name</label>
            <input id="name" type="text" name="name" value="{{old('name')}}">

            <div class="eroorm">
                @error('name')
                    {{ $message }}
                @enderror
            </div>

        </div>
        <div>
            <label for="email" class="text-sm">email</label>
            <input id="email" type="text" name="email" value="{{old('email')}}">

            <div class="eroorm">
                @error('email')
                    {{ $message }}
                @enderror
            </div>

        </div>
        <div>
            <label for="password" class="text-sm">password</label>
            <input id="password" type="password" name="password" value="{{old('password')}}">

            <div class="eroorm">
                @error('password')
                    {{ $message }}
                @enderror
            </div>

        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        </form>
     </div> --}}
