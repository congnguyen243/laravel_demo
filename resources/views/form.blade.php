
<div class="container col-md-5">
    
    <form action="/post" method="POST">
        @csrf
        
        <div>
            Name: <input type="text" name="products[0][name]">
            Price: <input type="text" name="products[0][price]">
        </div>
        <div>
            Name: <input type="text" name="products[1][name]">
            Price: <input type="text" name="products[1][price]">
        </div>
        <div>
            Name: <input type="text" name="products[2][name]">
            Price: <input type="text" name="products[2][price]">
        </div>
        <br>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
