<?php

/**
 * @file
 * Lists available colors and color schemes for the Bartik theme.
 */

$info = array(
  // Available colors and color labels used in theme.
  'fields' => array(
    'top' => t('Header: background top'),
    'bottom' => t('Header: background bottom'),
    'bg' => t('Main background'),
    'sidebar' => t('Sidebar background'),
    'sidebarborders' => t('Sidebar borders'),
    'footer' => t('Footer: background'),
    'footertext' => t('Footer: Text'),
    'titleslogan' => t('Title and slogan'),
    'text' => t('Text color'),
    'link' => t('Link color'),
    'linkhover' => t('Link: Hover color'),
  ),
  // Pre-defined color schemes.
  'schemes' => array(
    'default' => array(
      'title' => t('Nognom (default)'),
      'colors' => array(
        'top' => '#055a8e',
        'bottom' => '#1d84c3',
        'bg' => '#ffffff',
        'sidebar' => '#f6f6f2',
        'sidebarborders' => '#f9f9f9',
        'footer' => '#292929',
        'footertext' => '#999999',
        'titleslogan' => '#fffeff',
        'text' => '#3b3b3b',
        'link' => '#0071B3',
        'linkhover' => '#023b5c',
      ),
    ),
    'firehouse' => array(
      'title' => t('Reds'),
      'colors' => array(
        'top' => '#cd2d2d',
        'bottom' => '#d64e4e',
        'bg' => '#ffffff',
        'sidebar' => '#f1f4f0',
        'sidebarborders' => '#ededed',
        'footer' => '#1f1d1c',
        'footertext' => '#3b3b3b',
        'titleslogan' => '#fffeff',
        'text' => '#888888',
        'link' => '#d6121f',
        'linkhover' => '#5b272b',
      ),
    ),
    'evs' => array(
      'title' => t('EVS'),
      'colors' => array(
        'top' => '#d6c970',
        'bottom' => '#4f4a29',
        'bg' => '#ffffff',
        'sidebar' => '#ffffff',
        'sidebarborders' => '#897f48',
        'footer' => '#3f300e',
        'footertext' => '#ffffff',
        'titleslogan' => '#ffffff',
        'text' => '#3b3b3b',
        'link' => '#0071B3',
        'linkhover' => '#023b5c',
      ),
    ),
  ),

  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => array(
    'css/colors.css',
  ),

  // Files to copy.
  'copy' => array(
    'logo.svg',
  ),

  // Gradient definitions.
  'gradients' => array(
    array(
      // (x, y, width, height).
      'dimension' => array(0, 0, 0, 0),
      // Direction of gradient ('vertical' or 'horizontal').
      'direction' => 'vertical',
      // Keys of colors to use for the gradient.
      'colors' => array('top', 'bottom'),
    ),
  ),

  // Preview files.
  'preview_library' => 'nognom/color.preview',
  'preview_html' => 'color/preview.html',

  // Attachments.
  '#attached' => [
    'drupalSettings' => [
      'color' => [
        // Put the logo path into JavaScript for the live preview.
        'logo' => theme_get_setting('logo.url', 'nognom'),
      ],
    ],
  ],
);
