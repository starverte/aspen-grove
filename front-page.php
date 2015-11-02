<?php
/**
 * The template for displaying the front page
 *
 * @package Flint/Aspen Grove
 * @since 0.1.0
 *
 */

get_header(); ?>
<?php flint_get_sidebar('header'); ?>

    <div id="carousel-aspen-grove" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-aspen-grove" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-aspen-grove" data-slide-to="1"></li>
        <li data-target="#carousel-aspen-grove" data-slide-to="2"></li>
        <li data-target="#carousel-aspen-grove" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://placehold.it/3840x1500?text=Slide+1">
        </div>
        <div class="item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/chronic-pain.png">
        </div>
        <div class="item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/painful-treatments.png">
        </div>
        <div class="item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stress.png">
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-aspen-grove" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-aspen-grove" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <section id="meet-gil" class="bg-green-light">

      <div class="container">
        <div class="row">

          <h2 class="col-xs-12 section-title">Meet Gil</h2>

          <a class="btn btn-green-dark btn-top-right">Learn More</a>

          <div class="col-md-4 image"><img style="border-radius:50%;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/gil-wette.jpg"></div>

          <div class="col-md-8">
            <p>Licensed Physical Therapist since 1994</p>
            <p>Certified Practitioner: Lower Systems - Dynamic Manual Interface</p>
            <p>Background in Tai Chi and Aikido</p>
          </div>

        </div>
      </div>

    </section>

    <section id="what-to-expect" class="bg-green-dark">

      <div class="container">
        <div class="row">

          <h2 class="col-xs-12 section-title">What to Expect</h2>

          <div class="container">
            <div class="row">
              <div class="image col-xs-12 col-md-4"><img style="border-radius:50%;" src="http://placehold.it/600?text=Manual+Therapy+icon"></div>
              <div class="col-xs-12 col-md-8">
                <p>
                  <p class="callout-header">Manual Therapy</p>
                  Pain-free hands-on work to help get your healing back in swing
                </p>
              </div>
            </div>
            <div class="row">
              <div class="image col-xs-12 col-md-4"><img style="border-radius:50%;" src="http://placehold.it/600?text=Exercise+icon"></div>
              <div class="col-xs-12 col-md-8">
                <p>
                  <p class="callout-header">Exercise</p>
                  For flowing, integrated, powerful movement
                </p>
              </div>
            </div>
            <div class="row">
              <div class="image col-xs-12 col-md-4"><img style="border-radius:50%;" src="http://placehold.it/600?text=Education+icon"></div>
              <div class="col-xs-12 col-md-8">
                <p>
                  <p class="callout-header">Education</p>
                  Learn how the process of healing occurs so that you can support your process of recovery
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="aspen-trees" class="bg-green-light">
      <div class="container">
        <div class="row">
          <h2 class="col-xs-12 section-title">The Aspen Trees</h2>

          <div class="image col-md-4"><img style="border-radius:50%;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/aspen-trees.jpg"></div>

          <div class="col-md-8">
            <p class="callout-header">Like a grove of aspen trees, the human body is made up of many interdependent components</p>
            <p class="aspen-text">
              A grove of aspen trees shares a complex root system; what affects one tree affects the entire organism.
            </p>
            <p class="aspen-text">
              Similarly, a human body shares various systems, including the circulatory, muscular, and skeletal systems; what affects one system affects the entire body. The same is true for anatomical parts; while the symptoms may be in the neck, shoulder, or back, the problem may actually be in the hip, knees, or legs.
            </p>
            <p class="aspen-text">
              The aspen grove in the logo reminds us to have a holistic approach, and to not lose sight of the person as a whole.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="conditions-treated" class="bg-green-dark">
      <div class="container">
        <div class="row">
          <h2 class="col-xs-12 section-title">Conditions Treated</h2>

          <div class="col-xs-12 col-md-4">
            <ul class="condition-list">
              <li class="condition-item">Back</li>
              <li class="condition-item">Neck</li>
              <li class="condition-item">Joints<br>
                <span class="condition-desc">arms, legs, and anything in between</span></li>
            </ul>
          </div>

          <div class="col-xs-12 col-md-4">
            <ul class="condition-list">
              <li class="condition-item">Chronic fatigue</li>
              <li class="condition-item">Chronic illness</li>
              <li class="condition-item">Autoimmune</li>
            </ul>
          </div>

          <div class="col-xs-12 col-md-4">
            <ul class="condition-list">
              <li class="condition-item">Stress Relief</li>
              <li class="condition-item">Improved Sleep</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="other" class="bg-green-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="section-title">Office</h2>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/office.png">
            <p class="address">107 Peterson St<br>Fort Collins, CO 80524</p>
          </div>
          <div class="col-md-4">
            <h2 class="section-title">Contact</h2>
            <div id="contact-form-6">
              <form action="http://witi.dev/?page_id=6#contact-form-6" class="contact-form commentsblock" method="post">
                <div>
                  <label class="grunion-field-label name" for="g6-name">Name*</label> <input class="name" id="g6-name" name="g6-name" required="" type="text" value="">
                </div>

                <div>
                  <label class="grunion-field-label email" for="g6-email">Email*</label> <input class="email" id="g6-email" name="g6-email" required="" type="email" value="">
                </div>

                <div>
                  <label class="grunion-field-label url" for="g6-website">Website</label> <input class="url" id="g6-website" name="g6-website" type="text" value="">
                </div>

                <div>
                  <label class="grunion-field-label textarea" for="contact-form-comment-g6-comment">Comment*</label>
                  <textarea id="contact-form-comment-g6-comment" name="g6-comment" required="" rows="5" spellcheck="false" style="background-color: transparent !important; z-index: auto; position: relative; line-height: 20px; font-size: 14px; -webkit-transition: none; transition: none; overflow: auto; background-position: initial initial !important; background-repeat: initial initial !important;">
            </textarea>
                </div>

                <p class="contact-submit"><input class="pushbutton-wide" type="submit" value="Submit »"> <input id="_wpnonce" name="_wpnonce" type="hidden" value="1269072358"><input name="_wp_http_referer" type="hidden" value="/?page_id=6&amp;preview=true"> <input name="contact-form-id" type="hidden" value="6"> <input name="action" type="hidden" value="grunion-contact-form"></p>
              </form>
            </div>
          </div>
          <div class="col-md-4">
          </div>
        </div>
      </div>
    </section>
</div><!-- #page -->

<?php flint_get_sidebar('footer'); ?>
<?php get_footer(); ?>

