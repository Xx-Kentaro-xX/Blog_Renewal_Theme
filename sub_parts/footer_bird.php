<!-- vanta.js HeroBird -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vanta.js/three.r119.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vanta.js/vanta.birds.min.js"></script>

<script>
  // Bird animation
  VANTA.BIRDS({
    el: "#hero_animation",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    scale: 1.0,
    scaleMobile: 1.0,
    backgroundColor: 0xffffff,
    color1: 0x00a99d,
    color2: 0x008b8b,
    colorMode: "lerpGradient",
    birdSize: 1.5,
    wingSpan: 24.0,
    quantity: 4.0,
  });
</script>