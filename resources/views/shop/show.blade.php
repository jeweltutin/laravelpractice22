@extends('layouts.default')
@section('content')
<h2>Category Name: </h2>
<p>{{ $category->title }}</p>

<h3>Products in {{ $category->title }}</h3>

<ul>
    @foreach($category->products as $product)
    <li>{{ $product->name }}</li>
    @endforeach
</ul>
<h3>All Categories</h3>
<ul class="list-group">
    @foreach ($allcategories as $cat )
        <li class="list-group-item"><a href="{{ route('category.show', ['category' => $cat->id]) }}">
            {{ $cat->title }}
        </a></li>
    @endforeach
  </ul>
@endsection



