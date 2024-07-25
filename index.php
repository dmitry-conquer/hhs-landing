<?php // Template name: Landing page 
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>
  <div class="landing-page">
    <?php $header_logo = get_field('header_logo'); ?>
    <?php $header_raw_tel = get_field('header_raw_tel'); ?>
    <?php $header_formated_tel = get_field('header_formated_tel'); ?>
    <?php $header_tel_label = get_field('header_tel_label'); ?>
    <header class="header">
      <div class="header__container">
        <div class="header__body">
          <?php if ($header_logo && is_array($header_logo)) : ?>
            <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>" class="header__logo" />
          <?php endif; ?>
          <div class="header__contacts">
            <?php if ($header_tel_label) : ?>
              <p class="header__contacts-text"> <?php echo $header_tel_label; ?></p>
            <?php endif; ?>
            <?php if ($header_raw_tel && $header_formated_tel) : ?>
              <a href="<?php echo $header_formated_tel; ?>" class="header__contacts-tel"><?php echo $header_raw_tel; ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </header>

    <main>
      <?php $h_title_slogan = get_field('h_title_slogan'); ?>
      <?php $h_title_text = get_field('h_title_text'); ?>
      <?php $h_subtitle = get_field('h_subtitle'); ?>
      <?php $h_link = get_field('h_link'); ?>
      <?php $h_link_label = get_field('h_link_label'); ?>
      <?php $h_text = get_field('h_text'); ?>
      <?php $h_image = get_field('h_image'); ?>
      <?php $h_background = get_field('h_background'); ?>
      <section class="hero" style="background-image: url('<?php echo $h_background; ?>')">
        <div class="hero__container">
          <div class="hero__body">
            <div class="hero__content">
              <div class="hero__title">
                <?php if ($h_title_slogan) : ?>
                  <p class="hero__title-slogan"><?php echo $h_title_slogan; ?></p>
                <?php endif; ?>

                <?php if ($h_title_text) : ?>
                  <h1 class="hero__title-text"><?php echo $h_title_text; ?></h1>
                <?php endif; ?>
              </div>
              <?php if ($h_subtitle) : ?>
                <h2 class="hero__subtitle"> <?php echo $h_subtitle; ?></h2>
              <?php endif; ?>

              <?php if ($h_text) : ?>
                <div class="hero__text">
                  <?php echo $h_text; ?>
                </div>
              <?php endif; ?>

              <?php if ($h_link && is_array($h_link)) : ?>
                <a href="<?php echo $h_link['url']; ?>" class="hero__link primary-button"><?php echo $h_link['title']; ?></a>
              <?php endif; ?>

              <?php if ($h_link_label) : ?>
                <p class="hero__link-label"><?php echo $h_link_label; ?></p>
              <?php endif; ?>
            </div>
            <?php if ($h_image && is_array($h_image)) : ?>
              <img src="<?php echo $h_image['url']; ?>" alt="<?php echo $h_image['alt']; ?>" class="hero__image" />
            <?php endif; ?>
          </div>
        </div>
      </section>

      <?php $form_title = get_field('form_title'); ?>
      <?php $form_image = get_field('form_image'); ?>
      <?php $form_script = get_field('form_script'); ?>
      <section class="fb-form" id="contact-us">
        <div class="fb-form__container">
          <div class="fb-form__inner">
            <?php if ($form_image && is_array($form_image)) : ?>
              <img src="<?php echo $form_image['url']; ?>" alt="<?php echo $form_image['alt']; ?>" class="fb-form__image" />
            <?php endif; ?>
            <div class="fb-form__body">
              <div class="fb-form__form">
                <?php if ($form_title) : ?>
                  <h2 class="fb-form__form-title"><?php echo $form_title; ?></h2>
                <?php endif; ?>
                <?php if ($form_script) : ?>
                  <div class="fb-form__form-script"><?php echo $form_script; ?></div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php $benefits_title = get_field('benefits_title'); ?>
      <?php $benefits_text = get_field('benefits_text'); ?>
      <?php $benefits_subtitle = get_field('benefits_subtitle'); ?>
      <?php $benefits_description = get_field('benefits_description'); ?>
      <?php $benefits_list = get_field('benefits_list'); ?>
      <?php $benefits_image = get_field('benefits_image'); ?>
      <section class="benefits">
        <div class="benefits__container">
          <div class="benefits__header">
            <?php if ($benefits_title) : ?>
              <h2 class="benefits__title"><?php echo $benefits_title; ?></h2>
            <?php endif; ?>
            <?php if ($benefits_text) : ?>
              <p class="benefits__text">
                <?php echo $benefits_text; ?>
              </p>
            <?php endif; ?>
          </div>
          <div class="benefits__body">
            <div class="benefits__content">
              <?php if ($benefits_subtitle) : ?>
                <h3 class="benefits__subtitle"><?php echo $benefits_subtitle; ?></h3>
              <?php endif; ?>

              <?php if ($benefits_description) : ?>
                <p class="benefits__desc">
                  <?php echo $benefits_description; ?>
                </p>
              <?php endif; ?>

              <?php if ($benefits_list) : ?>
                <div class="benefits__list">
                  <?php foreach ($benefits_list as $item) : ?>
                    <?php $icon = $item['icon']; ?>
                    <?php $title = $item['title']; ?>
                    <div class="benefits__item">
                      <?php if ($icon && is_array($icon)) : ?>
                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $title; ?>" />
                      <?php endif; ?>
                      <?php if ($title) : ?>
                        <p><?php echo $title; ?></p>
                      <?php endif; ?>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>
            <?php if ($benefits_image && is_array($benefits_image)) : ?>
              <img src="<?php echo $benefits_image['url']; ?>" alt="<?php echo $benefits_image['alt']; ?>" class="benefits__image" />
            <?php endif; ?>
          </div>
        </div>
      </section>

      <?php $services_title = get_field('services_title'); ?>
      <?php $services_text = get_field('services_text'); ?>
      <?php $services_image_skilled = get_field('services_image_skilled'); ?>
      <?php $services_title_skilled = get_field('services_title_skilled'); ?>
      <?php $services_list_skilled = get_field('services_list_skilled'); ?>
      <?php $services_label_skilled = get_field('services_label_skilled'); ?>
      <?php $services_image_nonskilled = get_field('services_image_nonskilled'); ?>
      <?php $services_title_nonskilled = get_field('services_title_nonskilled'); ?>
      <?php $services_list_nonskilled = get_field('services_list_nonskilled'); ?>
      <?php $services_label_nonskilled = get_field('services_label_nonskilled'); ?>
      <section class="services">
        <div class="services__container">
          <div class="services__header">
            <?php if ($services_title) : ?>
              <h2 class="services__title"><?php echo $services_title; ?></h2>
            <?php endif; ?>
            <?php if ($services_text) : ?>
              <p class="services__text"> <?php echo $services_text; ?></p>
            <?php endif; ?>
          </div>
          <div class="services__row">
            <div class="services__row-image">
              <?php if ($services_image_skilled) : ?>
                <img src="<?php echo $services_image_skilled['url']; ?>" alt="<?php echo $services_image_skilled['alt']; ?>" />
              <?php endif; ?>
              <?php if ($services_label_skilled) : ?>
                <div class="services__row-label"><?php echo $services_label_skilled; ?></div>
              <?php endif; ?>
            </div>
            <div class="services__row-content">
              <?php if ($services_title_skilled) : ?>
                <h3 class="services__row-title"><?php echo $services_title_skilled; ?></h3>
              <?php endif; ?>
              <?php if ($services_list_skilled) : ?>
                <div class="services__row-list">
                  <?php echo $services_list_skilled; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="services__row services__row_reverse">
            <div class="services__row-image">
              <?php if ($services_image_nonskilled && is_array($services_image_nonskilled)) : ?>
                <img src="<?php echo $services_image_nonskilled['url']; ?>" alt="<?php echo $services_image_nonskilled['alt']; ?>" />
              <?php endif; ?>
              <?php if ($services_label_nonskilled) : ?>
                <div class="services__row-label">
                  <?php echo $services_label_nonskilled; ?>
                </div>
              <?php endif; ?>
            </div>
            <div class="services__row-content">
              <?php if ($services_title_nonskilled) : ?>
                <h3 class="services__row-title"><?php echo $services_title_nonskilled; ?></h3>
              <?php endif; ?>

              <?php if ($services_list_nonskilled) : ?>
                <div class="services__row-list">
                  <?php echo $services_list_nonskilled; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>

      <?php $support_icon = get_field('support_icon'); ?>
      <?php $support_text = get_field('support_text'); ?>
      <?php $support_link = get_field('support_link'); ?>
      <?php $support_image = get_field('support_image'); ?>
      <?php $support_bg = get_field('support_bg'); ?>

      <section class="support">
        <div class="support__body">
          <?php if ($support_icon && is_array($support_icon)) : ?>
            <div class="support__icon">
              <img src=" <?php echo $support_icon['url']; ?>" alt=" <?php echo $support_icon['alt']; ?>" />
            </div>
          <?php endif; ?>

          <?php if ($support_image && is_array($support_image)) : ?>
            <div class="support__image">
              <img src="<?php echo $support_image['url']; ?>" alt="<?php echo $support_image['alt']; ?>" />
            </div>
          <?php endif; ?>

          <div class="support__content" style="background-image: url('<?php echo $support_bg; ?>');">
            <?php if ($support_text) : ?>
              <div class="support__text">
                <?php echo $support_text; ?>
              </div>
            <?php endif; ?>
            <?php if ($support_link && is_array($support_link)) : ?>
              <a href="<?php echo $support_link['url']; ?>" class="support__link primary-button"><?php echo $support_link['title']; ?></a>
            <?php endif; ?>
          </div>
        </div>
      </section>



      <?php $why_title = get_field('why_title'); ?>
      <?php $why_text = get_field('why_text'); ?>
      <?php $why_stars = get_field('why_stars'); ?>
      <?php $why_testimonials = get_field('why_testimonials'); ?>
      <section class="why-choose">
        <div class="why-choose__container">
          <div class="why-choose__header">
            <?php if ($why_title) : ?>
              <h2 class="why-choose__title"><?php echo $why_title; ?></h2>
            <?php endif; ?>
            <?php if ($why_text) : ?>
              <p class="why-choose__text">
                <?php echo $why_text; ?>
              </p>
            <?php endif; ?>
          </div>
          <?php if ($why_testimonials) : ?>
            <div class="why-choose__list">
              <?php foreach ($why_testimonials as $item) : ?>
                <div class="why-choose__item">
                  <?php if ($why_stars && is_array($why_stars)) : ?>
                    <img src="<?php echo $why_stars['url']; ?>" alt="<?php echo $why_stars['alt']; ?>" class="why-choose__item-stars" />
                  <?php endif; ?>
                  <p class="why-choose__item-text">
                    <?php echo $item['text']; ?>
                  </p>
                  <p class="why-choose__item-author"> <?php echo $item['author']; ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </section>

      <?php $how_bg = get_field('how_bg'); ?>
      <?php $how_title = get_field('how_title'); ?>
      <?php $how_list = get_field('how_list'); ?>
      <section class="how-it-works" style="background-image: url('<?php echo $how_bg['url']; ?>')">
        <div class="how-it-works__container">
          <?php if ($how_title) : ?>
            <h2 class="how-it-works__title"><?php echo $how_title; ?></h2>
          <?php endif; ?>

          <?php if ($how_list) : ?>
            <div class="how-it-works__list">
              <?php $how_count = 1; ?>
              <?php foreach ($how_list as $item) : ?>
                <div class="how-it-works__item">
                  <p class="how-it-works__item-label"> <?php echo $how_count; ?></p>
                  <h3 class="how-it-works__item-title"><?php echo $item['title']; ?></h3>
                  <p class="how-it-works__item-text"><?php echo $item['text']; ?></p>
                </div>
                <?php $how_count++; ?>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </section>
    </main>

    <?php $footer_text = get_field('footer_text'); ?>
    <?php $footer_link = get_field('footer_link'); ?>
    <?php $footer_logo = get_field('footer_logo'); ?>
    <?php $footer_content = get_field('footer_content'); ?>
    <?php $footer_addresses = get_field('footer_addresses'); ?>

    <footer class="footer">
      <div class="footer__container">
        <div class="footer__body">
          <div class="footer__left">
            <?php if ($footer_text) : ?>
              <p class="footer__text">
                <?php echo $footer_text; ?>
              </p>
            <?php endif; ?>

            <?php if ($footer_link && is_array($footer_link)) : ?>
              <a href="<?php echo $footer_link['url']; ?>" class="footer__link primary-button"><?php echo $footer_link['title']; ?></a>
            <?php endif; ?>
          </div>
          <div class="footer__center">
            <?php if ($footer_logo && is_array($footer_logo)) : ?>
              <img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" class="footer__logo" />
            <?php endif; ?>
            <?php if ($footer_content) : ?>
              <div class="footer__content">
                <?php echo $footer_content; ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="footer__right">
            <?php if ($footer_addresses) : ?>
              <address class="footer__addresses">
                <?php foreach ($footer_addresses as $item) : ?>
                  <div class="footer__address">
                    <img src="<?php echo $item['icon']; ?>" alt="Icon" class="footer__address-icon" />
                    <div class="footer__address-body">
                      <p class="footer__address-title"><?php echo $item['title']; ?></p>
                      <p class="footer__address-text"><?php echo $item['text']; ?></p>
                    </div>
                  </div>
                <?php endforeach; ?>
              </address>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </div>
</body>

</html>