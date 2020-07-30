<div class="container-fluid mt-3">
		<section class="ftco-section testimony-section" id="guru-section">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Guru</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
                    <?php foreach ($guru as $u): ?>
               <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(<?=base_url('assets/img/profile/'. $u->image);?>)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4"><small><i>"<?= $u->motivasi ?>"</i></small></p>
                    <p class="name"><?= $u->name ?></p>
                    <span class="position"><small><?= $u->no_hp ?></small></span>
                  </div>
                </div>
              </div>
                  <?php endforeach; ?>
             
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>