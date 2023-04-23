<?php
/**

 * Template Name: Warranty FAQ

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage kmgimport

 */
get_header(); ?>

<section class="faq custom-pad-2">
    <div class="container">
      <!-- heading 1 -->
      <div class="row">
        <div class="col-md-12">
          <div class="custom-heading">
            <?php $ipv5 = get_field('ipv_version_5'); ?>
            <h3 class="product-section-heading"><?php echo $ipv5['ipv_version_5_title']; ?></h3>
          </div>
        </div>
      </div>
      <!-- heading 1 -->
      <div class="row">
        <div class="col-md-12">
          <div class="faq-accordion">
            <div class="accordion" id="accordionExample">

              <?php 
                    $all_ipv5 = $ipv5['question_related_ipv_5'];
                    $i=1;
                    foreach ($all_ipv5 as $each_ipv5) {
              ?>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button <?php if($i== 1){ echo 'collapsed';}?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>"
                    aria-expanded="true" aria-controls="collapseOne">
                    <?php echo get_the_title($each_ipv5); ?>
                  </button>
                </h2>
                <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php  if($i == 1){ echo 'show';} ?>" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <span>
                      <?php
                        $post1 = get_post($each_ipv5); 
                        $content1 = apply_filters('the_content', $post1->post_content);
                        echo $content1;
                      ?>
                    </span>
                  </div>
                </div>
              </div>
              <?php $i++; } ?>

            </div>
          </div>
        </div>
      </div>
      <!-- heading 2 -->
      <div class="row pt-md-5 pt-4">
        <div class="col-md-12">
          <div class="custom-heading">
            <?php $ipvd3 = get_field('ipv_version_d3'); ?>
            <h3 class="product-section-heading"><?php echo $ipvd3['ipv_d3_mod_title']; ?></h3>
          </div>
        </div>
      </div>
      <!-- accordion 2 -->
      <div class="row">
        <div class="col-md-12">
          <div class="faq-accordion">
            <div class="accordion" id="accordionExample">
              <?php 
                    $all_ipvd3 = $ipvd3['question_related_ipv_d3'];
                    $i=1;
                    foreach ($all_ipvd3 as $each_ipvd3) {
              ?>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button <?php if($i== 1){ echo 'collapsed';}?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>"
                    aria-expanded="true" aria-controls="collapseOne">
                    <?php echo get_the_title($each_ipvd3); ?>
                  </button>
                </h2>
                <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php  if($i == 1){ echo 'show';} ?>" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <span>
                      <?php
                          $post2 = get_post($each_ipvd3); 
                          $content2 = apply_filters('the_content', $post2->post_content);
                          echo $content2;
                        ?>
                    </span>
                  </div>
                </div>
              </div>
              <?php $i++; } ?>
            </div>
          </div>
        </div>
      </div>
      <!-- heading 3 -->
      <div class="row pt-md-5 pt-4">
        <div class="col-md-12">
          <div class="custom-heading">
            <?php $general_question = get_field('general_question'); ?>
            <h3 class="product-section-heading"><?php echo $general_question['general_question_title']; ?></h3>
          </div>
        </div>
      </div>
      <!-- accordion 3 -->
      <div class="row">
        <div class="col-md-12">
          <div class="faq-accordion">
            <div class="accordion" id="accordionExample">
              <?php 
                    $all_question = $general_question['all_qna'];
                    $i=1;
                    foreach ($all_question as $each_question) {
              ?>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button <?php if($i== 1){ echo 'collapsed';}?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>"
                    aria-expanded="true" aria-controls="collapseOne">
                    <?php echo get_the_title($each_question); ?>
                  </button>
                </h2>
                <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php if($i== 1){ echo 'show';}?>" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <?php
                      $post3 = get_post($each_question); 
                      $content3 = apply_filters('the_content', $post3->post_content);
                      echo $content3;
                    ?>
                  </div>
                </div>
              </div>
              <?php $i++; } ?>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="faq-bottom">
            <ul class="bottom-text">
              <?php $extra_links = get_field('extra_links');
              for ($i=0; $i<=4 ; $i++) { 
              ?>
              <li><a href="<?php echo $extra_links['s_link_'.$i]; ?>"><?php echo $extra_links['s_title_'.$i]; ?></a></li>
            <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();