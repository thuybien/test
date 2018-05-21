<h1>hello world!</h1>
<h2>{{$name}}</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ route('user') }}">
    name: <input name="username"><br>
    age: <input name="email">
    <button type="submit">sub</button>
    {{ csrf_field() }}
</form>