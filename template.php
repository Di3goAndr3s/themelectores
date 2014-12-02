<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 *
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */


// function carval_form_alter(&$form, &$form_state, $form_id) {
//   if ($form_id == 'search_block_form') {
//     // HTML5 placeholder attribute
//     $form['search_block_form']['#attributes']['placeholder'] = t('Search');
//   }
// }

//  function carval_form_alter(&$form, &$form_state, $form_id) {
//   if ($form_id == 'views-exposed-form-productos-y-servicios-block-7') {
//     // HTML5 placeholder attribute
//     $form['views-exposed-form-productos-y-servicios-block-7']['#attributes']['placeholder'] = t('Search');
//   }
// }
//



// function carval_file_link($variables) {
//  $file = $variables['file'];
//  $icon_directory = $variables['icon_directory'];
//  $url = file_create_url($file->uri);
//  $icon = theme('file_icon', array('file' => $file, 'icon_directory' => $icon_directory));
//  // Set options as per anchor format described at
//  // http://microformats.org/wiki/file-format-examples
//  $options = array(
//    'attributes' => array(
//      'type' => $file->filemime . '; length=' . $file->filesize,
//    ),
//  );
//  // Use the description as the link text if available.
//  if (empty($file->description)) {
//    $link_text = $file->filename;
//  }
//  else {
//    $link_text = $file->description;
//    $options['attributes']['title'] = check_plain($file->filename);
//  }
//  //open files of particular mime types in new window
//  $new_window_mimetypes = array('application/pdf','text/plain');
//  if (in_array($file->filemime, $new_window_mimetypes)) {
//    $options['attributes']['target'] = '_blank';
//  }
//  return '<span class="file">' . $icon . ' ' . l($link_text, $url, $options) . '</span>';
//}





//function carval_form_alter(&$form, &$form_state, $form_id){
//  if($form_id == "views_exposed_form"){
//    dsm($form); // print $form array on the top of the page
//    if (isset($form['title'])) {
//            $form['title']['#attributes'] = array('placeholder' => array(t('Gemeente...')));
//    }
//  }

    function lectores_preprocess_html(&$vars) {
      //dsm($vars);  
      $vars['classes_array'][3] = '';  
      //adding theme-specific sidebar indicator class
//      if (!empty($vars['page']['REGIONNAME'])) {
//         $vars['classes_array'][] = 'lectores-sidebar';
//      } else {
//         $vars['classes_array'][] = 'lectores-no-sidebar';
//      }
    }


 ?>



