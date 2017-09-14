// Main JS are copied from theme_t3kit/felayout_t3kit extension to keep the possibility to fix bugs only in one place. But in the case of rewrite original JS scripts for some element/partial/plugin, please disable original JS file for this element in theme_t3kit/.../main.js and create the same file with your JS scripts keeping the same folder structure as it is on theme_t3kit/felayout_t3kit. With this approach, you will keep your code clear and easy to debug.
//
//

// theme_t3kit/felayout_t3kit
// =======================================================

// header
@import '../../../../theme_t3kit/felayout_t3kit/dev/js/main/header/header.js';

// elements
@import '../../../../theme_t3kit/felayout_t3kit/dev/js/main/contentElements/slider.js';
@import '../../../../theme_t3kit/felayout_t3kit/dev/js/main/contentElements/carousel.js';
@import '../../../../theme_t3kit/felayout_t3kit/dev/js/main/contentElements/parallax.js';
@import '../../../../theme_t3kit/felayout_t3kit/dev/js/main/contentElements/heroImage.js';
@import '../../../../theme_t3kit/felayout_t3kit/dev/js/main/contentElements/sliderContainer.js';
@import '../../../../theme_t3kit/felayout_t3kit/dev/js/main/contentElements/imageTextLink.js';
@import '../../../../theme_t3kit/felayout_t3kit/dev/js/main/contentElements/bootstrapSlider.js';

// plugins
@import '../../../../theme_t3kit/felayout_t3kit/dev/js/main/plugins/news/newsCarousel.js';
@import '../../../../theme_t3kit/felayout_t3kit/dev/js/main/plugins/news/news.js';

@import '../../../../theme_t3kit/felayout_t3kit/dev/js/main/suggest.js';

@import '../../../../theme_t3kit/felayout_t3kit/dev/js/main/general.js';



// felayout
// =======================================================
@import 'main/general.js';
