<!doctype html>
<html lang="en">

<head>
    <title>Laravel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>Welcome, {{ $name ?? 'guest' }}<br />
        Today is {{ date('Y-m-d H:i:s') }}
    </h1>
    <h2>
        {!! $demo !!}
    </h2>

    @if ($name != '')
        {{ 'NAME IS NOT EMPTY' }}
    @else
        {{ 'NAME IS EMPTY' }}
    @endif
    <br />
    @unless($name == 'rakesh')
        {{ 'Please enter your name = rakesh' }};
    @endunless
    <br />
    @isset($name)
        Welcome, {{ $name }}
    @endisset
    <br />
    @for ($i = 0; $i < 5; $i++)
        <h2>This is For Loop, value of "i" is = {{ $i }}</h2>
    @endfor
    <br />
    @php
        $i = 1;
    @endphp
    @while ($i <= 5)
        <h2>This is While Loop, value of "i" is = {{ $i }}</h2>
        @php
            $i++;
        @endphp
    @endwhile
    <br />
    @php
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
    @endphp
    <select>
        @foreach ($array as $key => $i)
            <option value="{{ $key }}">
                <h2>This is ForEach Loop, value of "i" is = {{ $i }}</h2>
            </option>
        @endforeach
    </select>
</body>

</html>
