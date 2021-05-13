@extends('homemodule::layouts.LayoutHome')

@section('main')
<div class="container col-md-5">
    <div class="card">
        <div class="card-body">
            
            <form action="{{url('homemodule/store')}}" method="post">
                {{ csrf_field()}}
                <caption>
                    <h2>Edit Post</h2>
                </caption>
                <input type="hidden" name="id" />
                <fieldset class="form-group">
                    <label>Title</label> <input type="text" class="form-control" name="Title" required="required">
                </fieldset>
                <fieldset class="form-group">
                    <label>Content</label> <input type="text" class="form-control" name="Content">
                </fieldset>
                <fieldset class="form-group">
                    <label>Path</label> <input type="file" class="form-control-file" name="Path">
                </fieldset>
                <fieldset class="form-group">
                    <label>Author</label> <input type="text" class="form-control" name="Author">
                </fieldset>

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
</div>
<script>
xmlhttp.open("GET", "http://localhost:8008/homemodule/posts", true);
xmlhttp.send();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      dataFunction(JSON.parse(this.responseText));
    }
};    
</script>
@endsection