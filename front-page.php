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

    <div id="carousel-aspen-grove-banners" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="hidden-sm hidden-md hidden-lg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-xs.png">
          <img class="hidden-xs" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-sm.png">
        </div>
        <div class="item" id="item_chronic_pain">
          <img class="hidden-sm hidden-md hidden-lg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/chronic-pain-xs.png">
          <img class="hidden-xs" src="<?php echo get_stylesheet_directory_uri(); ?>/img/chronic-pain-sm.png">
          <div class="carousel-caption">
            <h3>Do you have a chronic or complex condition that just isn't improving as you'd like?</h3>
          </div>
        </div>
        <div class="item" id="item_painful_treatments">
          <img class="hidden-sm hidden-md hidden-lg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/painful-treatments-xs.png">
          <img class="hidden-xs" src="<?php echo get_stylesheet_directory_uri(); ?>/img/painful-treatments-sm.png">
          <div class="carousel-caption">
            <h3>Are you tired and frustrated with painful treatments that aren't helping?</h3>
          </div>
        </div>
        <div class="item" id="item_stress">
          <img class="hidden-sm hidden-md hidden-lg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stress-xs.png">
          <img class="hidden-xs" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stress-sm.png">
          <div class="carousel-caption">
            <h3>Are you looking to decrease your level of stress and deal with your stress better?</h3>
          </div>
        </div>
      </div>
    </div>

    <section id="meet-gil" class="bg-green-light">

      <div class="container">
        <div class="row">

          <h2 class="col-xs-12 col-md-10 section-title">Meet Gil</h2>

          <div class="hidden-xs hidden-sm col-md-2">
            <a class="btn btn-green-dark btn-block" href="<?php echo esc_url( home_url() ); ?>/meet-gil" style="margin-top:20px">Learn More</a>
          </div>

          <div class="col-md-4 image"><img style="border-radius:50%;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/gil-wette.jpg"></div>

          <div class="col-md-8">
            <p>Licensed Physical Therapist since 1994</p>
            <p>Certified Practitioner: Lowen Systems - Dynamic Manual Interface</p>
            <p>Background in Tai Chi and Aikido</p>
          </div>

          <div class="hidden-md hidden-lg col-xs-12">
            <a class="btn btn-green-dark btn-block" href="<?php echo esc_url( home_url() ); ?>/meet-gil">Learn More</a>
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
              <div class="image col-xs-12 col-md-4"><img style="border-radius:50%;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/manual-therapy-icon.png"></div>
              <div class="col-xs-12 col-md-8">
                <p>
                  <p class="callout-header"><a href="<?php echo esc_url( home_url() ); ?>/manual-therapy">Manual Therapy</a></p>
                  Pain-free hands-on work to help get your healing back in swing
                </p>
              </div>
            </div>
            <div class="row">
              <div class="image col-xs-12 col-md-4"><img style="border-radius:50%;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/exercise-icon.png"></div>
              <div class="col-xs-12 col-md-8">
                <p>
                  <p class="callout-header"><a href="<?php echo esc_url( home_url() ); ?>/exercise">Movement Therapy and Exercise</a></p>
                  For flowing, integrated, powerful movement
                </p>
              </div>
            </div>
            <div class="row">
              <div class="image col-xs-12 col-md-4"><img style="border-radius:50%;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/education-icon.png"></div>
              <div class="col-xs-12 col-md-8">
                <p>
                  <p class="callout-header"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Education</a></p>
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
          <h2 class="col-xs-12 section-title">Services Provided</h2>

          <div id="carousel-aspen-grove-services" class="col-xs-12 carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-aspen-grove-services" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-aspen-grove-services" data-slide-to="1"></li>
              <li data-target="#carousel-aspen-grove-services" data-slide-to="2"></li>
              <li data-target="#carousel-aspen-grove-services" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active" id="item_recovery">
                <img class="hidden-sm hidden-md hidden-lg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/blank-xs.png">
                <img class="hidden-xs" src="<?php echo get_stylesheet_directory_uri(); ?>/img/blank-sm.png">
                <div class="carousel-caption">
                  <h3>Recovery from painful and limiting conditions of the body: back, neck, head, arms, and legs</h3>
                </div>
              </div>
              <div class="item" id="item_treatment">
                <img class="hidden-sm hidden-md hidden-lg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/blank-xs.png">
                <img class="hidden-xs" src="<?php echo get_stylesheet_directory_uri(); ?>/img/blank-sm.png">
                <div class="carousel-caption">
                  <h3>Treatment of chronic and complex conditions, including chronic pain, chronic fatigue, and multiple injuries</h3>
                </div>
              </div>
              <div class="item" id="item_support">
                <img class="hidden-sm hidden-md hidden-lg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/blank-xs.png">
                <img class="hidden-xs" src="<?php echo get_stylesheet_directory_uri(); ?>/img/blank-sm.png">
                <div class="carousel-caption">
                  <h3>Support for atheletes—whether student, recreational, or competitive—for both injury recovery and performance enhancement</h3>
                </div>
              </div>
              <div class="item" id="item_stress_mgmt">
                <img class="hidden-sm hidden-md hidden-lg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/blank-xs.png">
                <img class="hidden-xs" src="<?php echo get_stylesheet_directory_uri(); ?>/img/blank-sm.png">
                <div class="carousel-caption">
                  <h3>Stress management: both improving your ability to relax and coaching your movements to avoid becoming so stressed</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="other" class="bg-green-light">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <h2 class="section-title">Office</h2>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/office.png">
            <p class="address">107 Peterson St<br>Fort Collins, CO 80524</p>
          </div>
          <div class="col-xs-12 col-md-4 col-md-offset-4">
            <h2 class="section-title">Contact</h2>
              <?php
                query_posts( array( 'page_id' => 151 ) );

                if ( have_posts() ) {
                  while ( have_posts() ) {
                    the_post();
                    the_content();
                  }
                }
                wp_reset_query();
              ?>
          </div>
        </div>
      </div>
    </section>
</div><!-- #page -->

<?php flint_get_sidebar('footer'); ?>
<?php get_footer(); ?>
