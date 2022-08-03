@extends('layouts.default')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>User</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">User Details</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {{--@include('includes.errors')--}}
                            <h3 class="card-title"><span class="text-success">{{ $user->name }}</span>  - Details</h3>
                            <span style="margin-left: 7px;" class="badge bg-blue"></span>
                            <div class="card-tools text-md-end">
                                <a href="{{ route('user.index') }}" class="btn btn-primary btn-md active" role="button" aria-pressed="true">User List</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td><strong>User Name</strong></td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email</strong></td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Date of Birth</strong></td>
                                        <td>
                                            @if (!empty($user->profile->dob))
                                                {{ $user->profile->dob }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Biography</strong></td>
                                        <td>
                                            @if (!empty($user->profile->bio))
                                                {{ $user->profile->bio }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Facebook</strong></td>
                                        <td>
                                            @if (!empty($user->profile->facebook))
                                                {{ $user->profile->facebook }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Twitter</strong></td>
                                        <td>
                                            @if (!empty($user->profile->twitter))
                                                {{ $user->profile->twitter }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Git Hub</strong></td>
                                        <td>
                                            @if (!empty($user->profile->github))
                                                {{ $user->profile->github }}
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
