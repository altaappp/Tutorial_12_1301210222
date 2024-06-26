<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
<body>
    <h1>Product Details</h1>
    
    @if ($product)
        <p><strong>Name:</strong> {{ $product->name }}</p>
        <p><strong>Price:</strong> ${{ $product->price }}</p>
    @else
        <p>Product not found.</p>
    @endif
    
    <a href="{{ route('products.index') }}">Back to Product List</a>
</body>
</html>
