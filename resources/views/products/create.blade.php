<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
            
        @endif
    </div>
    <form method="post" action="{{ route('product.store') }}">
    @csrf
    @method('post')
    <div>
        <label>Name:</label>
        <input type="text" name="name" placeholder="Sugar" />
    </div>
    <div>
        <label>Qty:</label>
        <input type="text" name="qty" placeholder="2" />
    </div>
    <div> 
        <label>Price:</label>
        <input type="text" name="price" placeholder="10.00" />
    </div>
    <div>
        <label>Description:</label>
        <input type="text" name="description" placeholder="2kg" />
    </div>
    <div>
        <input type="submit" value="Save" />
    </div>
    </form>
</body>
</html>