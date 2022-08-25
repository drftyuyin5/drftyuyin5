<header class="u-clearfix u-custom-color-2 u-header u-header" id="sec-3a05">
  <div class="u-clearfix u-sheet u-sheet-1">
    <?php $logo = theme_get_logo(array(
            'default_src' => "np://user.desktop.nicepage.com/Site_7812978/images/icons8-spyware-1001.png?rand=eac2",
            'default_url' => "https://nicepage.com"
        )); $url = stripos($logo['url'], 'http') === 0 ? esc_url($logo['url']) : $logo['url']; ?><a <?php if (is_customize_preview()) echo 'data-default-src="' . esc_url($logo['default_src']) . '" '; ?>href="<?php echo $url; ?>" class="u-image u-logo u-image-1 custom-logo-link" data-image-width="100" data-image-height="100">
      <img <?php if ($logo['svg']) { echo 'style="width:'.$logo['width'].'px"'; } ?>src="<?php echo esc_url($logo['src']); ?>" class="u-logo-image u-logo-image-1">
    </a>
  </div>
</header>