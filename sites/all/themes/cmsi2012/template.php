<?php
// cmsi2012, based on Footheme/Corolla by Adaptivethemes.com, a starter sub-sub-theme.

/**
 * Rename each function and instance of "cmsi2012" to match
 * your subthemes name, e.g. if you name your theme "cmsi2012" then the function
 * name will be "cmsi2012_preprocess_hook". Tip - you can search/replace
 * on "cmsi2012".
 */

/**
 * Override or insert variables into the html templates.
 * Replace 'cmsi2012' with your themes name, i.e. mytheme_preprocess_html()
 */
function cmsi2012_preprocess_html(&$vars) {

  // Load the media queries styles
  // If you change the names of these files they must match here - these files are
  // in the /css/ directory of your subtheme - the names must be identical!
  $media_queries_css = array(
    'cmsi2012.responsive.style.css',
    'cmsi2012.responsive.gpanels.css'
  );
  load_subtheme_media_queries($media_queries_css, 'cmsi2012'); // Replace 'cmsi2012' with your themes name

 /**
  * Load IE specific stylesheets
  * AT automates adding IE stylesheets, simply add to the array using
  * the conditional comment as the key and the stylesheet name as the value.
  *
  * See our online help: http://adaptivethemes.com/documentation/working-with-internet-explorer
  *
  * For example to add a stylesheet for IE8 only use:
  *
  *  'IE 8' => 'ie-8.css',
  *
  * Your IE CSS file must be in the /css/ directory in your subtheme.
  */
  /* -- Delete this line to add a conditional stylesheet for IE 7 or less.
  $ie_files = array(
    'lte IE 7' => 'ie-lte-7.css',
  );
  load_subtheme_ie_styles($ie_files, 'cmsi2012'); // Replace 'cmsi2012' with your themes name
  // */

}
