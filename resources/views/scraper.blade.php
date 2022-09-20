<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scraper</title>
    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>
<body>
    <form action="{{ route('scraper_post') }}" method="post">
        @csrf
        <label for="link">Your URL </label>
        <input type="text" id="link" name="url" placeholder="Type URL ...">
        @error('url')
            <p style="color: red">{{ $message }}</p>
        @enderror
        <input type="submit" value="Submit">

    </form>
    @if (session('url'))
        <p style="color: green">{{ session('url') }}</p>
    @endif
    </form>
    @if (session('data'))
        <div>
            {!! session('data') !!}
        </div>    
    @endif
    
</body>
</html>