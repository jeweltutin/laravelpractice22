@extends('layouts.default')
@section('content')

<h4>Category - Products</h4>
<hr class="p-3">
<div class="row">
    <div class="col-md-3">
        <ul class="list-group">
            @foreach ($allcategories as $cat )
            <li class="list-group-item"><a href="{{ route('category.show', ['category' => $cat->id]) }}">
                {{ $cat->title }}
            </a></li>
            @endforeach
          </ul>
    </div>
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Created</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n =1; ?>
                    @foreach($category->products as $product)
                        <tr>
                            <td>{{ $n }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>
                                <td>
                                    <a href="{{ route('product.show', ['product' => $product->id]) }}" class="btn btn-show btn-success waves-effect">
                                        <i class="material-icons">View</i>
                                    </a>

                                   {{--<a href="{{ route('product.edit', ['product' => $product->id]) }}" class="btn btn-edit btn-primary waves-effect">
                                        <i class="material-icons">Edit</i>
                                    </a>--}}

                                    <a href="" class="btn btn-danger" onclick="
                                        var result = confirm('Are you sure you want to delete this record?');

                                        if(result){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{$product->id}}').submit();
                                        }">
                                        Delete
                                    </a>

                                    <form method="POST" id="delete-form-{{$product->id}}" action="{{route('product.destroy',  $product->id)}}">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                </td>
                            </td>
                            <?php $n++; ?>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
