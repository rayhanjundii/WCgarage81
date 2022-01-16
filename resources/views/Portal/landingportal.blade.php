@extends('layouts.app')
@section('section')

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <header>
        <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner"
            style="background-image: url(../images/frn.png);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <h1>Portal Manajemen</h1>
                        <h2>Garasi 81 | Garage 81 | Kopi Portal </h2>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </header>
        <div class="judulproduk">
            <h2> Produk Kami </h2>
        </div>
        <div class="container">
            <section class="produk">
                <div class="produk">
                    <div class="icon">
                        <a href="{{ route('cafecmh') }}">
                            <img src="/images/cmh.png">
                    </div>
                    <h2>Garage 81 Cimahi</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum hic fuga tempore cum dignissimos
                        dicta!
                    </p>
                    </a>
                </div>
                <div class="produk">
                    <div class="icon">
                        <a href="{{ route('cafe81') }}">
                            <img src="/images/frn.png">
                    </div>
                    <h2>Garasi 81 Bandung</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum hic fuga tempore cum dignissimos
                        dicta!
                    </p>
                    </a>
                </div>
                <div class="produk">
                    <div class="icon">
                        <a href="{{ route('kopiprt') }}">
                            <img src="/images/prt.png">
                    </div>
                    <h2>Kopi Portal</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum hic fuga tempore cum dignissimos
                        dicta!
                    </p>
                    </a>
                </div>
            </section>
        </div>
        </div>
      
        <div class="slider">

            <div class="slidas">\
                  @foreach ($galeri as $g)
                <!--radio button start-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">
               
                <!--radio button end-->
                <!--slide image mulai-->
                <div class="slide first lg">
                    <div class="container">
                        <div class="slide">
                            
                                <a href="{{ asset('upload/' . $g->foto_galeri) }}" class="fancybox"
                                    data-fancybox="ggblg" data-gallery="gallery" height="50px" width="50px">
                                    <img src="{{ asset('upload/' . $g->foto_galeri) }}" class="img-fluid mb-2"
                                        alt="white sample" width="200px" height="200px" />
                                </a>
                         

                        </div>
                    </div>
                </div>
                <!--slide image end-->
                <!--otomatis navigasi mulai-->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                    <div class="auto-btn5"></div>
                 
                </div>
                <!--otomatis navigasi end-->
                  @endforeach
            </div>
            <!--manual navigasi mulai-->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
                <label for="radio5" class="manual-btn"></label>
               

            </div>
            <!--manual navigasi end-->
        </div>
         
        
        <!-- image slider berakhir-->

        <script type="text/javascript">
            var counter = 1;
            setInterval(function() {
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if (counter > 6) {
                    counter = 1;
                }
            }, 5000);
        </script>
        <!--Acara Garage 81-->
        <div id="fh5co-blog" class="fh5co-section">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <h2>Events</h2>
                        <p>Lorem ipsum dolor sit amet, couatur. Aliquam quaerat pariatur repellendus veniam nemo, saepe,
                            culpa eius aspernatur cumque suscipit quae nobis illo tempora. Eum veniam necessitatibus,
                            blanditiis
                            facilis quidem dolore! Dolorem, molestiae.</p>
                    </div>
                </div>
                
                <div class="row">
                    @foreach($event as $evn)
                    <div class="col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="{{ asset('upload/' . $evn->foto_event) }}" class="fancybox blog-bg"
                                data-fancybox="ggblg" data-gallery="event" height="150px" width="100px">
                                <img src="{{ asset('upload/' . $evn->foto_event) }}" class="img-fluid mb-2 blog"
                                alt="white sample" width="350px" height="200px" />
                            </a>
                            <div class="blog-text">
                                <span class="posted_on">{{ $evn->tgl_event }}</span>
                                <h3><a href="#">{{ $evn->nama }}</a></h3>
                                <p>{!! $evn->rinciankegiatan !!}</p>
                                <ul class="stuff">
                                    <li><a href="#"><i class="icon-arrow-right22"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </div>
        <!--Acara Garage 81-->
        


    @endsection
