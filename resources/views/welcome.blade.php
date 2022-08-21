@include('layout.app')
@include('layout.nav')


{{-- home --}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset("images/banner1.png")}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset("images/banner1.png")}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset("images/banner1.png")}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


{{-- background --}}

<div class="imgbg">
    <img src="{{asset("images/Group 64.png")}}" alt="">
</div>

<div class="about">
    <div class="about-col">
        <div class="about-cover">
            <img src="{{asset("images/Pillar Images.jpg")}}" alt="">
        </div>
        <div class="desc-about">
            <h3>Tentang Bimbel Gama</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, dolore maiores. Vero necessitatibus quo culpa? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti natus repudiandae veniam obcaecati. Quas at inventore cum a unde non voluptate repudiandae iure eius labore! Vel quisquam quam exercitationem magnam.</p>
        </div>
    </div>
</div>


{{-- youtube --}}

<div class="yt">
    <div class="yt-frame">
        <iframe class="ytv" src="https://www.youtube.com/embed/Ikivv5jl7ek" theme=light” title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>


<div class="visimisi">
    <div class="vm">
        <div class="visi">
            <h3>VISI</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique neque obcaecati vel repudiandae dicta ducimus sapiente ea odio ad vero maxime facilis voluptatum maiores, numquam soluta vitae in cum excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Id aspernatur iure nisi. Quas magnam vel magni recusandae illum dolore esse aperiam temporibus natus consectetur voluptatem cumque alias necessitatibus, possimus labore?</p>
        </div>
        <div class="misi">
            <h3>MISI</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique neque obcaecati vel repudiandae dicta ducimus sapiente ea odio ad vero maxime facilis voluptatum maiores, numquam soluta vitae in cum excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non corporis eveniet tempore libero porro. Aspernatur nisi nihil culpa consequatur aut recusandae autem eligendi, ipsam, asperiores, esse doloremque sequi tenetur quas.</p>
        </div>
    </div>
</div>



{{-- program --}}
<div class="program">

    <div class="program-row">
        <div class="p1">
            <a href="/program"><img src="{{asset("images/Group 65.png")}}" alt=""></a>
        </div>
        <div class="p1">
            <a href="/program"><img src="{{asset("images/Group 65.png")}}" alt=""></a>
        </div>
        <div class="p1">
            <a href="/program"><img src="{{asset("images/Group 65.png")}}" alt=""></a>
        </div>
    </div>
</div>



{{-- jumlah --}}


<div class="txt">
    <div class="jdltxt">

        <h1>Fasilitas Bimbel Gama</h1>
    </div>
</div>
<div class="jumlahsiswa">

    <div class="siswa">
        <div class="js-1">
            <img src="{{asset("images/Group 66.png")}}" alt="">
        </div>
        <div class="js-1">
            <img src="{{asset("images/Group 66.png")}}" alt="">
        </div>
        <div class="js-1">
            <img src="{{asset("images/Group 66.png")}}" alt="">
        </div>
        <div class="js-1">
            <img src="{{asset("images/Group 66.png")}}" alt="">
        </div>
    </div>
</div>



{{-- lokasi --}}

<div class="lks">
    <div class="lks1">

        <img src="{{asset("images/Group 46.png")}}" alt="">
    </div>
</div>


{{-- lokasi --}}

<div class="lokk">
    <div class="lkk">

        <img src="{{asset("images/Pillar Images.jpg")}}" alt="">
    </div>
</div>
<div class="lokasi">
    <div class="lokasigama">
        <div class="loc">
            <button>Jln. S, Parman NO.191 Ulak Karang. Padang</button>
        </div>
        <div class="loc">
            <button>Jln. S, Parman NO.31 Ulak Karang Padang</button>
        </div>
        <div class="loc">
            <button>Jln. Proklamasi NO.38 A-B Tarandam. Padang</button>
        </div>
        <div class="loc">
            <button>Jln. Proklamasi NO.61 Tarandam. Padang</button>
        </div>
        <div class="loc">
            <button>Jln. Dipenogoro VI Suku Kota Solok</button>
        </div>
        <div class="loc">
            <button>Jln. Prov, Hazairin NO.62 Belakang Balok. Bukittinggi</button>
        </div>
        <div class="loc">
            <button>Jln. Soekarno Hatta NO.79 Balai nan duo. Payakumbuh</button>
        </div>
        <div class="loc">
            <button>Jln. Hamka No.24 Parak Jua. Batusangkar</button>
        </div>
        <div class="loc">
            <button>Jln. Soekarno Hatta NO.10B Bukit Surungan. Padang Panjang</button>
        </div>
    </div>
</div>



{{-- ulasan --}}

<div class="row-1">
    <div class="row-1-col">
        <h2>Apa Kata Mereka?</h2>
    </div>
</div>
<div class="kata">
    
    <div class="katamereka">
        <div class="km">
            <div class="rowkm">
                <div class="nama">
                    <h4>nama</h4>
                    <img src="{{asset("images/Pillar Images.jpg")}}" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="rowkm">
                <div class="nama">
                    <h4>nama</h4>
                    <img src="{{asset("images/Pillar Images.jpg")}}" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="rowkm">
                <div class="nama">
                    <h4>nama</h4>
                    <img src="{{asset("images/Pillar Images.jpg")}}" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="rowkm">
                <div class="nama">
                    <h4>nama</h4>
                    <img src="{{asset("images/Pillar Images.jpg")}}" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="rowkm">
                <div class="nama">
                    <h4>nama</h4>
                    <img src="{{asset("images/Pillar Images.jpg")}}" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>
</div>




<footer>
    <div class="footer">
        <div class="footer-1">
            <div class="foot">
                <img src="{{asset("images/Logo GAMA-WHITE.png")}}" alt="">
                <p>Jalan Ulak Karang, Padang
                    Sumatera Barat
                    Indonesia 20202</p>
            </div>
            <div class="foot">
                <h3>Lokasi Bimbel Gama</h3>
                <p> Jln. S, Parman NO.31 Ulak Karang Padang</p>
                <p> Jln. Proklamasi NO.38 A-B Tarandam. Padang</p>
                <p> Jln. Proklamasi NO.61 Tarandam. Padang</p>
                <p> Jln. Dipenogoro VI Suku Kota Solok</p>
                <p> Jln. Prov, Hazairin NO.62 Belakang Balok. Bukittinggi</p>
                <p> Jln. Soekarno Hatta NO.79 Balai nan duo. Payakumbuh</p>
                <p> Jln. Hamka No.24 Parak Jua. Batusangkar</p>
                <p> Jln. Soekarno Hatta NO.10B Bukit Surungan. Padang Panjang</p>
            </div>
            <div class="foot">
                <h3>Hubungi Bimbel Gama</h3>
                <p>0751-7050588</p>
                <p>0751-442684</p>
                <p>082170355474</p>
                <p>0751-28565</p>
                <p>0751-893774</p>
                <p>082388389339</p>
                <p>0751-91927</p>
                <p>0752-8100004</p>
                <p>082388746868</p>
                <p>082360180181</p>
                <p>085263344110</p>
            </div>
        </div>
        
    </div>
    {{-- <div class="sosmed">
        
    </div> --}}
</footer>