@extends('layouts.default')
@section('content')
<h4>User </h4>
<hr class="p-3">
<div class="col-md-12">
    <a style="float: right; display:block;" class="btn btn-primary btn-md" href="{{ route('user.create') }}" role="button">Create New User</a>
</div>
<div class="row">
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Created</th>
            </tr>
        </thead>
        <tbody>
            <?php $n =1; ?>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $n }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->dob }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <td>
                            <a href="{{ route('user.show', ['user' => $user->id]) }}" class="btn btn-show btn-success waves-effect">
                                <i class="material-icons">View</i>
                            </a>

                           {{--<a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-edit btn-primary waves-effect">
                                <i class="material-icons">Edit</i>
                            </a>--}}

                            <a href="" class="btn btn-danger" onclick="
                                var result = confirm('Are you sure you want to delete this record?');

                                if(result){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{$user->id}}').submit();
                                }">
                                Delete
                            </a>

                            <form method="POST" id="delete-form-{{$user->id}}" action="{{route('user.destroy',  $user->id)}}">
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

@endsection
