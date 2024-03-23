@extends('layout')

@section('main')
<main class="container">
  <section class="single-blog-post">
    <h1>About Me</h1>
    <div class="single-blog-post-ContentImage" data-aos="fade-left">
      <img style="width: 1000px; height:500px" src={{asset("images/about-img.png")}} alt="" />
    </div>

    <div>
      <p class="about-text">
        2002 Yılında Malatya'da doğdum. Orta Öğrenimini ve Liseyi Malatya'da bitirdim. 2020 Yılında Nevşehir Hacı Bektaş Veli Üniversitesi Bilgisayar Mühendisliğini kazandım ve şuan ikinci sınıftayım.
        Neler yapıyorum? Yazılımla uğraşıyorum.3 Yıldır Nevşehir Belediyesi Halk oyunları Grubundayım. Gösterilere çıktım ve güzel tecrübeler kazandığım yerlerden biridir. Kendimi geliştirmek için çeşitli kurslara gittim ve halen devam ettiğim kurslar var.Kursun içinde öğrendiklerimin yanında çeşitli tecrübeler ve deneyimlerde kazanmak ayrı bir güzel. Kızılay, Gençlik Spor Gönüllülüğü vb... alanlarda gönülülükler yapıyorum. Çok aktif olmasamda bu gibi gönüllülük yerlerinin çoğunda kaydım var. Türkiye'yi geziyorum. çoğu gezdiğim yeri kendi imkanlarımla Mavi sırt çantamla yolculuğa çıkıyorum... 
        Daha detaylı bilgi isterseniz instagram ve linkedln'e bakabilirsiniz.
      </p>
    </div>
  </section>

  
</main>
@endsection