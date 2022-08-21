{{-- <nav>
    <div class="nav">
        <div class="navbar">
            <div class="nav-row1">
                <img src="{{asset("images/Logo GAMA-02.png")}}" alt="">
            </div>
            <div class="nav-row">
                <a href="/">HOME</a>
                <a href="/program">PROGRAM</a>
                <a href="#" onclick="contoh()">PEMBELAJARAN</a>
            </div>
            <div class="nav-row2">
                <a href="/blog">BLOG</a>
                <button><a href="/login">TRYOUT</a></button>
                <button><a href="/login">LOGIN</a></button>
            </div>
        </div>
    </div>
</nav> --}}


<script type="text/javascript">

    function contoh() {

        swal("Hai !!", "Anda harus login untuk mengakses halaman ini");

    }

</script>



<nav class="navbar navbar-expand-lg  navbar-custom">
    <a class="navbar-brand" href="#"><img src="{{asset("images/Logo GAMA-02.png")}}" alt="" style="width: 20%"></a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon icon-custom"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link" href="/pembelajaran">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/program">Program</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="contoh()">Pembelajaran</a>
        </li>
      
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Tryout &#8681;</button>
            <div id="myDropdown" class="dropdown-content">
            <a class="nav-link" href="/login">TRYOUT</a>
            <a class="nav-link" href="/login">LOGIN</a>
          </div>
        </div>

        </li>
      </ul>
    </div>
  </nav>

