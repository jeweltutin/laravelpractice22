@extends('layouts.default')
@section('content')
<h4>Category List: </h4>
<hr class="p-3">

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Created</th>
            </tr>
        </thead>
        <tbody>
            <?php $n =1; ?>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $n }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>
                        <td>
                            <a href="{{ route('category.show', ['category' => $category->id]) }}" class="btn btn-show btn-success waves-effect">
                                <i class="material-icons">View</i>
                            </a>

                           {{--<a href="{{ route('category.edit', ['category' => $category->id]) }}" class="btn btn-edit btn-primary waves-effect">
                                <i class="material-icons">Edit</i>
                            </a>--}}

                            <a href="" class="btn btn-danger" onclick="
                                var result = confirm('Are you sure you want to delete this record?');

                                if(result){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{$category->id}}').submit();
                                }">
                                Delete
                            </a>

                            <form method="POST" id="delete-form-{{$category->id}}" action="{{route('category.destroy',  $category->id)}}">
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
<h4>All Categories </h4>

<hr class="p-3">

{{--<ol class="list-group list-group-numbered">
    @foreach ($categories as $category )
    <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold">Subheading</div>
          <a href="{{ route('category.categorys.show', $category->id) }}"> {{ $category->title }} </a>
        </div>
        <span class="badge bg-primary rounded-pill">14</span>
      </li>
    @endforeach
  </ol>--}}

@endsection
