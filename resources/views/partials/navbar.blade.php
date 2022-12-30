<nav class="navbar bg-white sticky-top navbar-expand-md shadow-sm border-bottom border-dark">
    <div class="container">
        <a href="/" class="navbar-brand me-5" style="font-family: stranger things; font-size: 2rem">Yakusoku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav me-auto justify-content-between">
                <li class="{{Request::is('/category') ? 'active' : ''}}"><a href="" class="nav-link">Category</a></li>
                <li class=""><a href="" class="nav-link">Author</a></li>
                <li class=""><a href="" class="nav-link">Series</a></li>
            </ul>
            <ul class="navbar-nav flex-row">
                <div id="open-searchbox" class="nav-link mx-2"><i class="bi bi-search" style="font-size: 1.4rem; cursor: pointer; color:black"></i></div>
                <a href="user" class="nav-link mx-2"><i class="bi bi-person-circle" style="font-size: 1.4rem; color:black"></i></a>
                <a href="{{ url("cart") }}" class="nav-link mx-2"><i class="bi bi-bag" style="font-size: 1.4rem; color:black"></i></a>
            </ul>
        </div>
        
    </div>
    <div class="container-fluid position-absolute bg-white " id="searchbox" style=" display: none!important">

        <form action="" class="container-fluid d-flex align-items-center justify-content-center flex-wrap" style="height: 100%;">
            
            <button class="btn border-0" type="submit" >
                <i class="bi bi-search" style="font-size: 1.7rem"></i>
            </button>
            
            <div class="col-6 mx-4"><input type="text" name="keyword" id="keyword" class="form-control border-0 py-3" placeholder="Search..." autocomplete="off"></div>

            <div id="close-searchbox" style="cursor: pointer">
                <i class="bi bi-x" style="font-size: 1.6rem" ></i>
            </div>
            
        </form>
        
    </div>
        
    </nav>

<script>
    $(document).ready(function () {
        
        $("#open-searchbox").click(function (e) { 
            e.preventDefault();
            $("#searchbox").show();
        });
        
        $("#close-searchbox").click(function (e) { 
            e.preventDefault();
            $("#searchbox").hide();
        });
    });
        
</script>