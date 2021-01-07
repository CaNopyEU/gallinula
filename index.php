<?php
include 'form-to-email.php';
include 'header.html';
?>


    <!-- Intro -->
    <section id="intro" class="main style1 dark fullscreen">
        <div class="content">
            <header>
                <h2 class="txtIntro">Gallinula</h2>
            </header>
            <p class="txtIntro pIntro">Firma zabývající se převážně zemními pracemi, přípravnou stavební činností a
                autodopravou.
                Působíme po celé ČR a disponujeme vlastním vozovým parkem a potřebným vybavením k úspěšné realizaci
                Vašich zakázek.</p>
            <footer>
                <a href="#services" class="button style2 down">More</a>
            </footer>
        </div>
    </section>

    <!-- One -->
    <section id="services" class="main style2 right dark fullscreen">
        <div class="content box style2 txtIntro">
            <header>
                <h2 class="txtIntro">Naše služby</h2>
            </header>
            <h3 style="line-height: 2;">Zemní a výkopové práce</h3>
            <h3 style="line-height: 2;">Odvoz a dovoz materiálu</h3>
            <h3 style="line-height: 2;"><a href="recyklace.php">Recyklace</a></h3>
            <span><a href="recyklace.php">Více informací ..</a></span>
            <h3 style="line-height: 2;">Demolice objektů včetně jejich vyklizení </h3>
            <h3 style="line-height: 2;">Zemědělská činnost a rekultivace</h3>
            <h3 style="line-height: 2;">Vnitrostátní a mezinárodní nákladní doprava</h3>
            <p style="margin-top: 7%"><a href="sluzby.php">Více informací o službách ..</a></p>
        </div>
        <a href="#gallery" class="button style2 down anchored">Next</a>
    </section>


    <!-- Work -->
    <section id="gallery" class="main style3 primary">
        <div class="content">
            <header>
                <h2 class="txtIntro">Galerie</h2>
            </header>
            <div class="gallery-container">
                <!-- Gallery  -->
                <div class="gallery">
                    <article class="from-left">
                        <p class="image-title">Akce D1</p>
                        <img onclick="openModal('action_d1')" class="image fit contrast"
                             src="images/action_d1/d1_01.jpg" alt=""/>

                    </article>
                </div>
                <div class="gallery">
                    <article class="from-right">
                        <p class="image-title">Akce Pačejov</p>
                        <img onclick="openModal('action_pacejov')" class="image fit contrast"
                             src="images/action_pacejov/action_pacejov_1.jpg" alt=""/>
                    </article>
                </div>
            </div>
            <div class="gallery-container">
                <div class="gallery">
                    <article class="from-left">
                        <p class="image-title">Bagry kolové</p>
                        <img onclick="openModal('bagry_kov')" class="image fit contrast"
                             src="images/bagry_kov/bagry_kov_1.jpg" alt=""/>
                    </article>
                </div>
                <div class="gallery">
                    <article class="from-right">
                        <p class="image-title">Bagry pásové</p>
                        <img onclick="openModal('bagry_pas')" class="image fit contrast"
                             src="images/bagry_pas/bagry_pas_1.jpg" alt=""/>
                    </article>
                </div>
            </div>
            <div class="gallery-container">
                <div class="gallery">
                    <article class="from-left">
                        <p class="image-title">Traktory</p>
                        <img onclick="openModal('tracs')" class="image fit contrast"
                             src="images/tracs/tracs_1.jpg" alt=""/>
                    </article>
                </div>
                <div class="gallery">
                    <article class="from-right">
                        <p class="image-title">Doprava</p>
                        <img onclick="openModal('trafic')" class="image fit contrast"
                             src="images/trafic/trafic_1.jpg" alt=""/>
                    </article>
                </div>
            </div>
            <div class="gallery-container">
                <div class="gallery" style="width: 50%">
                    <article class="from-right">
                        <p class="image-title">Ostatní</p>
                        <img onclick="openModal('others')" class="image fit contrast"
                             src="images/others/oth_1.jpg" alt=""/>
                    </article>
                </div>
            </div>
            <!-- The Modal -->
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h2 id="modal_header_name"></h2>
                    </div>
                    <div id="inner_image" class="modal-body"></div>
                    <div id="modal_counters"></div>
                    <div id="image_slides" class="row"></div>
                </div>
            </div>
        </div>
        <!--<div class="gallery-container">
            <div class="gallery">
                <article class="from-left">
                    <p class="image-title">text 3</p>
                    <a href="images/fulls/article1/01minirypadlo.jpg" class="image fit">

                        <img
                                src="images/thumbs/01minirypadloThumbs.jpg" title="Minirýpadlo" alt=""/>
                    </a>
                    <a href="images/fulls/02rypadloPasoveUni.jpg" class="image fit"></a>
                </article>
            </div>
            <div class="gallery">
                <article class="from-right">
                    <p class="image-title">text 4</p>
                    <a href="images/fulls/article1/01minirypadlo.jpg" class="image fit">
                        <img
                                src="images/thumbs/01minirypadloThumbs.jpg" title="Minirýpadlo" alt=""/>
                    </a>
                </article>
            </div>
        </div>
        <div class="gallery-container">
            <div class="gallery" style="width: 50%">
                <article class="from-right">
                    <p class="image-title">text 3</p>
                    <a href="images/fulls/article1/01minirypadlo.jpg" class="image fit">

                        <img
                                src="images/thumbs/01minirypadloThumbs.jpg" title="Minirýpadlo" alt=""/>
                    </a>
                    <a href="images/fulls/02rypadloPasoveUni.jpg" class="image fit"></a>
                </article>
            </div>

        </div>-->
        <!--<article class="from-right">
            <a href="images/fulls/02rypadloPasoveUni.jpg" class="image fit"><img
                        src="images/thumbs/02rypadloPasoveUniThumbs.jpg" title="Rýpadlo Pásové Universální" alt=""/></a>
        </article>
        <article class="from-left">
            <a href="images/fulls/03rypadloKoloveUni.jpg" class="image fit"><img
                        src="images/thumbs/03rypadloKoloveUniThumbs.jpg" title="Rýpadlo Kolové Universální" alt=""/></a>
        </article>
        <article class="from-right">
            <a href="images/fulls/04rypadloNakladac.jpg" class="image fit"><img
                        src="images/thumbs/04rypadloNakladacThumbs.jpg" title="Rýpadlo - Nakladač" alt=""/></a>
        </article>
        <article class="from-left">

            <a href="images/fulls/05nakladacBezOtoce.jpg" class="image fit"><img
                        src="images/thumbs/05nakladacBezOtoceThumbs.jpg" title="Nakladač Bez Otoče" alt=""/></a>
        </article>
        <article class="from-right">
            <a href="images/fulls/06nakladacSmykemRizeny.jpg" class="image fit"><img
                        src="images/thumbs/06nakladacSmykemRizenyThumbs.jpg" title="Nakladač Smykem Řízený" alt=""/></a>
        </article>-->
        <a href="#pricelist" class="button style2 down anchored">Next</a>
    </section>

    <!-- cenik -->
    <section id="pricelist" class="main style2 secondary left dark fullscreen">
        <div class="content box style2">
            <header>
                <h2 class="txtIntro">Ceník</h2>
            </header>
            <p class="txtIntro">Ceník je velice individuální, <a href="#form" style="color: #98c593;">pro bližší
                    informace
                    Nás prosím kontaktujte.</a></p>
        </div>
        <a href="#contact" class="button style2 down anchored">Next</a>
    </section>

    <!-- Contact -->
    <section id="contact" class="main style3 secondary">
        <div class="content">
            <header>
                <h2 class="txtIntro" style="padding-bottom: 5%">Kontaktujte nás</h2>
                <span style="font-weight: 500">
						<p style="line-height: 0.5;">Gallinula s.r.o.</p>
						<p style="line-height: 0.5;">Vedená u Městského soudu v Praze, oddíl C,</p>
                        <p style="line-height: 0.5;">vložka 303443</p>
						<p style="line-height: 0.5;">Sídlem, Světova 523/1, Libeň, 180 00 Praha 8</p>
						<p style="line-height: 0.5; padding-bottom: 5%">IČ: 07612788</p>
                       <p style="line-height: 0.5;">Provozovna:</p>
                       <p style="line-height: 0.5;">Parcela č. 275/15, 294 74, Skorkov - Otradovice</p>
                       <p style="line-height: 0.5;; padding-bottom: 5%">(ul. Vestecká 999 -  areál za lesoškolkou)</p>
                       <p style="line-height: 0.5;">Korespondenční adresa:</p>
                       <p style="line-height: 0.5;">Dlouhá 130, Horní Beřkovice, 411 85</p>
						<p style="line-height: 0.5;"><a href="mailto: gallinula@email.cz" class="contactsA">gallinula@email.cz</a></p>
                        <p style="line-height: 0.5;"><a href="mailto: gallinula.info@email.cz" class="contactsA">gallinula.info@email.cz</a></p>
						<p style="line-height: 0.5;">Dispečink, <a href="tel:+420733710258" class="contactsA">+420 733 710 285</a></p>
						<p style="line-height: 0.5; padding-bottom: 5%">115-8259020277/0100</p>
                        <p>
                            Dispečink vozidla:<br/>
                            Milan Týc <br/>
                            <a href="tel:+420602778687" class="contactsA" style="font-weight: bold">+420 602 778 687</a><br/>
                            <a href="mailto: dis.gallinula@email.cz" class="contactsA">dis.gallinula@email.cz</a>
                        </p>
                       <p style="line-height: 0.5;">Odpovědná osoba:</p>
                       <p style="line-height: 0.5;"> Jana Špinková,
                           <a href="tel:+420734141643" class="contactsA" style="font-weight: bold">+420 734 141 643</a>
                       </p>
						</span>
            </header>
            <section id="form">
                <div class="box">

                  <?php if (isset($error_messages)) {
                    echo "<p style='color: #ff0000'>Formulář nebyl odeslán. Vyplňte prosím povinné údaje a Vaši zprávu.</p>";
                  }; ?>

                    <form action="<?= $_SERVER['REQUEST_URI']; ?>" name="myemailform" method="post">
                        <div class="fields">
                            <div class="field half"><input type="text" name="jmeno" placeholder="Jméno" maxlength="25"
                                                           value="<?= (isset($_jmeno) ? $_jmeno : ''); ?>"/></div>
                            <div class="field half"><input type="email" name="email" placeholder="Email" id="formEmail"
                                                           maxlength="30"
                                                           value="<?= (isset($_email) ? $_email : ''); ?>"/>
                            </div>
                            <div class="field"><textarea name="text" id="formMessage" placeholder="Zpráva" rows="6"
                                                         onclick="getTextareaLength()"><?= (isset($_text) ? $_text : ''); ?></textarea>
                            </div>
                        </div>
                        <ul class="actions special">
                            <li><input type="submit" name="submit" value="Odeslat"
                                       formaction="http://gallinula.cz/index.php#form"/></li>
                        </ul>
                    </form>

                </div>
            </section>
        </div>
    </section>
    <script>
      function getTextareaLength() {
        document.getElementById("formMessage").maxLength = "800";
      }

      let modal = document.getElementById("myModal");

      // Get the button that opens the modal
      //var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      let span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal


      // When the user clicks on <span> (x), close the modal
      span.onclick = function () {
        modal.style.display = "none";
      };

      document.onkeydown = function(evt) {
        evt = evt || window.event;
        if (evt.keyCode == 27) {
          modal.style.display = "none";
        }
      };

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target === modal) {
          modal.style.display = "none";
        }
      };
      const gallery = {
        'action_d1': {
          'name': 'Akce D1',
          'path': 'action_d1',
          'images': [
            'd1_01',
            'd1_02',
            'd1_03',
            'd1_04',
          ]
        },
        'action_pacejov': {
          'name': 'Akce Pačejov',
          'path': 'action_pacejov',
          'images': [
            'action_pacejov_1',
            'action_pacejov_2',
            'action_pacejov_3',
            'action_pacejov_4',
            'action_pacejov_5'
          ]
        },
        'bagry_kov': {
          'name': 'Bagry kolové',
          'path': 'bagry_kov',
          'images': [
            'bagry_kov_1',
            'bagry_kov_2',
            'bagry_kov_3',
            'bagry_kov_4',
            'bagry_kov_5',
            'bagry_kov_6'
          ]
        },
        'bagry_pas': {
          'name': 'Bagry pásové',
          'path': 'bagry_pas',
          'images': [
            'bagry_pas_1',
            'bagry_pas_2',
            'bagry_pas_3'
          ]
        },
        'tracs': {
          'name': 'Traktory',
          'path': 'tracs',
          'images': [
            'tracs_1',
            'tracs_2'
          ]
        },
        'trafic': {
          'name': 'Doprava',
          'path': 'trafic',
          'images': [
            'trafic_1',
            'trafic_2',
            'trafic_3',
            'trafic_4',
            'trafic_5',
            'trafic_6',
            'trafic_7',
            'trafic_8',
            'trafic_9',
            'trafic_10',
            'trafic_11',
          ]
        },
        'others': {
          'name': 'Ostatní',
          'path': 'others',
          'images': [
            'oth_1',
            'oth_2',
            'oth_3',
            'oth_4',
            'oth_5',
            'oth_6',
            'oth_7',
            'oth_8',
            'oth_9',
            'oth_10',
            'oth_11',
            'oth_12',
            'oth_13',
            'oth_14',
          ]
        }
      };

      let slideIndex = 1;
      let currentGallery = '';

      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);

      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function openModal(name) {
        slideIndex = 1;
        modal.style.display = "block";
        showSlides(slideIndex, name);
      }

      function modalImage(index) {
        document.getElementById("inner_image").innerHTML = '<img class="slider-image" src="images/' + currentGallery.path + '/' + index + '">\n'
      }

      function modalSlides(item, index) {
        let result =
          '<div class="column">\n' +
          '<img class="demo cursor" src="images/' + currentGallery.path + '/' + item + '.jpg"' +
          ' onclick="currentSlide(' + Number(index + 1) + ')" alt="The Woods">\n' +
          '</div>';
        document.getElementById("image_slides").innerHTML += result;
      }

      function modalCounters() {

        document.getElementById("modal_counters").innerHTML = '<a class="prev" onclick="plusSlides(-1)">❮</a>\n' +
          '<a class="next" onclick="plusSlides(1)">❯</a>\n'

      }

      function showSlides(n, name) {
        let i;

        if (name) {
          let slides = gallery[name].images;  /*document.getElementsByClassName("mySlides");*/
          currentGallery = gallery[name];
          document.getElementById("image_slides").innerHTML = '';
          slides.forEach(modalSlides);
        }
        document.getElementById("modal_header_name").innerHTML = currentGallery.name;
        modalCounters();
        let dots = document.getElementsByClassName("demo");
        //var captionText = document.getElementById("caption");
        if (n > currentGallery.images.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = currentGallery.images.length
        }
        /*for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }*/
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        //slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        //captionText.innerHTML = dots[slideIndex - 1].alt;
        //var name_of_image = currentGallery.images[slideIndex - 1];
        modalImage(currentGallery.images[slideIndex - 1] + '.jpg', name);
      }

    </script>
<?php include 'footer.html';