<!-- vanta.js globe -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vanta.js/three.r119.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vanta.js/vanta.globe.min.js"></script>

<script>
  // Globe animation
  VANTA.GLOBE({
    el: "#hero_animation",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    scale: 1.0,
    scaleMobile: 1.0,
    color: 0x00a99d,
    color2: 0xdeb887,
    backgroundColor: 0xffffff,
    size: 1.3
  });
</script>