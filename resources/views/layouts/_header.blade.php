<!-- <header class="navbar  flex-md-nowrap">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Sign out</a>
        </li>
    </ul>
</header> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light mx-5">
    <a class="navbar-brand" href="">Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent	" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="/master/z001">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/master/z002">Product</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link" href="/master/z001" >
                Danh mục
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">User</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Bạn muốn tìm gì ?" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
        </form>

        <div class="form-inline my-2 mx-2 my-lg-0">
            <a href="#"class="btn btn-primary">Logout</a>
            <a href="{% url 'cart' %}">
                <img id="cart-icon" src="">
            </a>
            <p id="cart-total"></p>
        </div>
    </div>
</nav>