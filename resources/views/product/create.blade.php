@extends('layouts.default')
@section('content')
<h4>Create New Product </h4>
<hr class="p-3">

<div class="row">
    <div class="col-md-8">
        <form action={{ route('product.store') }} method="POST">
            @csrf
            <div  class="mb-3">
                <label for="" class="form-label">Category</label>
                <select class="form-select" name="selected_categories[]" aria-label="<select class="form-select" multiple aria-label="multiple select example">">
                    <option selected>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                <label style="padding-top: 20px;" for="productName" class="form-label">Product Name</label>
                <input type="text" name="name" class="form-control" id="productName" aria-describedby="productHelp">
                <div id="productHelp" class="form-text">The product name is important for adding new product</div>
                </div>
                <div class="mb-3">
                <label for="productPrice" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" id="productPrice">
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>

@endsection
