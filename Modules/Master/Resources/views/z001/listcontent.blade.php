<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Content</th>
            <!-- <th>Path</th>
            <th>Author</th> -->
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
            <tr>
                <td>
                    {{$row->id}}
                </td>
                <td>
                    {{$row->content}}
                </td>
                <td><a data-product="{{$row->id}}" data-content="{{$row->content}}" class="btn-edit" >Edit</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href=""  data-product="{{$row->id}}" class="btn-delete">Delete</a></td>
            </tr>
        @endforeach            
    </tbody>
</table>