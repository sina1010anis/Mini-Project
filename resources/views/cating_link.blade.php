<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Link Cat</title>
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
    <div>
        <form action="{{ route('link_cat') }}" method="POST">
            @csrf
            <label for="link">Your link </label>
            <input type="text" id="link" name="link" placeholder="Type like ...">
            @error('link')
                <p style="color: red">{{ $message }}</p>
            @enderror
            <input type="submit" value="Submit">

        </form>
        @if (session('link'))
            <p style="color: green">{{ session('link') }}</p>
        @endif
    </div>
    <br>
    <div>
        <form action="{{ route('search_link') }}" method="POST">
            @csrf
            <label for="link">Send New link </label>
            <input type="text" id="link" name="link" placeholder="Type like ...">
            @error('link')
                <p style="color: red">{{ $message }}</p>
            @enderror
            <input type="submit" value="Submit">

        </form>
        @if (session('link'))
            <p style="color: green">{{ session('link') }}</p>
        @endif
    </div>
    <div>
        <p dir="rtl" align="center">
            ابتدا باید یک لینک مورد نظر را در بخش Your Link وارد کنیم پس از این که لینک را وارد کردیم یک لینک کوتاه شده به ما میدهد و لینک کوتاه شده را در بخش Send New Link وارد میکنم و در ضفحه ایجاد شده یک لینک کوتاه شده مشاهده میکنیم حال لینک مورد نظر را کپی کرده وبرای دوستان کود ارسال میکنیم
        </p>
    </div>
</body>
</html>
