@extends('homemodule::layouts.LayoutHome')

@section('main')
<div class="container col-md-5">
    
    <div class="row mx-5 ">
        <div class="">
            <h3 class="text-center">List of Users</h3>
            <hr>
            <div class="container text-left">
                <a href="create" class="btn btn-success">Add
                    New User</a>
            </div>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Path</th>
                        <th>Author</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            a
                        </td>
                        <td>
                            b
                        </td>
                        <td>
                            c
                        </td>
                        <td>
                            d
                        </td>
                        <td><a href="">Edit</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="">Delete</a></td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection