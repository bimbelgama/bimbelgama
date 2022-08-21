@include('layout.app')


<div class="login">
    <div class="login-col">
        <div class="login-row">
            <img src="{{asset("images/bg-login.png")}}" alt="">
        </div>
<div class="formlogin">

    <div class="login-form">
        <div class="login-img">
            <img src="{{asset("images/Logo GAMA-02.png")}}" alt="">
        </div>
        <div class="login-text">
            <h1>Halo</h1>
            <h6>Login Untuk Memulai Tryout</h6>
        </div>
            <div class="form">
                <form action="">
                    <input type="text" placeholder="Id Siswa">
                    <input type="password" placeholder="Password">
                </form>
                <p>Pastikan ID dan Password sudah benar</p>
            </div>
            <div class="masuk">
                <div class="masuk-btn">
                    <a href="#">Masuk</a>
                </div>
                <div class="back">
                    <a href="/">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>