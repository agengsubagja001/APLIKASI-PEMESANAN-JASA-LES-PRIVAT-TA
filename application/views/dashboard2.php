<!-- head -->
<?php $this->load->view('partials/head') ?>

<!-- navbar-->
<?php $this->load->view('partials/navbar') ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Temukan Guru Les Privat Terbaik Dalam Hitungan Detik</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">Kami Merupakan Platfrom Penyedia Guru Les Privat di Kabupaten Indramayu</h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="#pengajar" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Cari Pengajar</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="<?= base_url() ?>assets/template_dashboard/assets/img/hero1.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">


  <!-- ======= Team Section ======= -->
  <section id="pengajar" class="team">

    <header class="section-header">
      <h2>Team</h2>
      <p>Pengajar</p>

      <div class="container h-100 mt-3">
        <div class="d-flex justify-content-center h-100">
          <div class="searchbar">
            <input class="search_input" type="text" name="search_text" id="search_text" placeholder="Search...">
            <a href="" type="submit" class="search_icon"><i class="bi bi-search"></i></a>
          </div>
        </div>
      </div>

      <!-- <div class="container h-100 mt-3">
        <div class="d-flex justify-content-center h-100">
          <?php echo form_open('dashboard/search') ?>
          <div class="searchbar">
            <input class="search_input" type="text" name="keyword" placeholder="Search...">
            <a href="" type="submit" class="search_icon"><i class="bi bi-search"></i></button>
          </div>
          <?php echo form_close() ?>
        </div>
      </div> -->

    </header>

    <div class="container" data-aos="fade-up">
      <div class="row gy-4" id="result">
        <?php foreach ($show_datapengajar as $pjr) : ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <a href="<?php echo base_url() . 'detail_pengajar?id=' . $pjr->id_pengajar ?>">
              <div class="member">
                <div class="member-img">
                  <img src="<?php echo base_url() . 'assets/foto_pengajar/' . $pjr->gambar ?>" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4><?php echo $pjr->nama_pengajar ?></h4>
                  <span><?php echo $pjr->bidang ?></span>
                  <p><?php echo $pjr->alamat ?></p>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach ?>
      </div>
    </div>

  </section><!-- End Team Section -->

  <!-- ======= Values Section ======= -->
  <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Our Values</h2>
        <p>Odit est perspiciatis laborum et dicta</p>
      </header>

      <div class="row">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <img src="<?= base_url() ?>assets/template_dashboard/assets/img/values-1.png" class="img-fluid" alt="">
            <h3>Ad cupiditate sed est odio</h3>
            <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <img src="<?= base_url() ?>assets/template_dashboard/assets/img/values-2.png" class="img-fluid" alt="">
            <h3>Voluptatem voluptatum alias</h3>
            <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
          <div class="box">
            <img src="<?= base_url() ?>assets/template_dashboard/assets/img/values-3.png" class="img-fluid" alt="">
            <h3>Fugit cupiditate alias nobis.</h3>
            <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Values Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-headset" style="color: #15be56;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-people" style="color: #bb0852;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Features</h2>
        <p>Laboriosam et omnis fuga quis dolor direda fara</p>
      </header>

      <div class="row">

        <div class="col-lg-6">
          <img src="<?= base_url() ?>assets/template_dashboard/assets/img/features.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
          <div class="row align-self-center gy-4">

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Eos aspernatur rem</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Facilis neque ipsa</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Volup amet voluptas</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Rerum omnis sint</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Alias possimus</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Repellendus mollitia</h3>
              </div>
            </div>

          </div>
        </div>

      </div> <!-- / row -->

      <!-- Feature Tabs -->
      <div class="row feture-tabs" data-aos="fade-up">
        <div class="col-lg-6">
          <h3>Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero</h3>

          <!-- Tabs -->
          <ul class="nav nav-pills mb-3">
            <li>
              <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a>
            </li>
            <li>
              <a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a>
            </li>
            <li>
              <a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a>
            </li>
          </ul><!-- End Tabs -->

          <!-- Tab Content -->
          <div class="tab-content">

            <div class="tab-pane fade show active" id="tab1">
              <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
              </div>
              <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Incidunt non veritatis illum ea ut nisi</h4>
              </div>
              <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
            </div><!-- End Tab 1 Content -->

            <div class="tab-pane fade show" id="tab2">
              <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
              </div>
              <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Incidunt non veritatis illum ea ut nisi</h4>
              </div>
              <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
            </div><!-- End Tab 2 Content -->

            <div class="tab-pane fade show" id="tab3">
              <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
              </div>
              <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
              <div class="d-flex align-items-center mb-2">
                <i class="bi bi-check2"></i>
                <h4>Incidunt non veritatis illum ea ut nisi</h4>
              </div>
              <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
            </div><!-- End Tab 3 Content -->

          </div>

        </div>

        <div class="col-lg-6">
          <img src="<?= base_url() ?>assets/template_dashboard/assets/img/features-2.png" class="img-fluid" alt="">
        </div>

      </div><!-- End Feature Tabs -->

      <!-- Feature Icons -->
      <div class="row feature-icons" data-aos="fade-up">
        <h3>Ratione mollitia eos ab laudantium rerum beatae quo</h3>

        <div class="row">

          <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
            <img src="<?= base_url() ?>assets/template_dashboard/assets/img/features-3.png" class="img-fluid p-4" alt="">
          </div>

          <div class="col-xl-8 d-flex content">
            <div class="row align-self-center gy-4">

              <div class="col-md-6 icon-box" data-aos="fade-up">
                <i class="ri-line-chart-line"></i>
                <div>
                  <h4>Corporis voluptates sit</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="ri-stack-line"></i>
                <div>
                  <h4>Ullamco laboris nisi</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="ri-brush-4-line"></i>
                <div>
                  <h4>Labore consequatur</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="ri-magic-line"></i>
                <div>
                  <h4>Beatae veritatis</h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <i class="ri-command-line"></i>
                <div>
                  <h4>Molestiae dolor</h4>
                  <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <i class="ri-radar-line"></i>
                <div>
                  <h4>Explicabo consectetur</h4>
                  <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div><!-- End Feature Icons -->

    </div>

  </section><!-- End Features Section -->

  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Blog</h2>
        <p>Recent posts form our Blog</p>
      </header>

      <div class="row">

        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="<?= base_url() ?>assets/template_dashboard/assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
            <span class="post-date">Tue, September 15</span>
            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="<?= base_url() ?>assets/template_dashboard/assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
            <span class="post-date">Fri, August 28</span>
            <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="post-box">
            <div class="post-img"><img src="<?= base_url() ?>assets/template_dashboard/assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
            <span class="post-date">Mon, July 11</span>
            <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Recent Blog Posts Section -->


</main><!-- End #main -->

<script>
  $(document).ready(function() {

    load_data();

    function load_data(query) {
      $.ajax({
        url: "<?php echo base_url(); ?>dashboard/fetch",
        method: "POST",
        data: {
          query: query
        },
        success: function(data) {
          $('#result').html(data);
        }
      })
    }

    $('#search_text').keyup(function() {
      var search = $(this).val();
      if (search != '') {
        load_data(search);
      } else {
        load_data();
      }
    });
  });
</script>

<?php if ($this->session->flashdata('success')) : ?>
  <script>
    swal("Berhasil Login", "Selamat anda berhasil login ", "success");
  </script>
<?php endif; ?>


<!-- ======= Footer ======= -->
<?php $this->load->view('partials/footer') ?>