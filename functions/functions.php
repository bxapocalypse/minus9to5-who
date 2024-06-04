<?php

$site_structure = [
    '/PHP/minus-who-we-are/who-we-are.php' => ['name' => 'Who We Are', 'parent' => null],
    '/PHP/minus-who-we-are/our-staff.php' => ['name' => 'Our Staff', 'parent' => '/PHP/minus-who-we-are/'],
    '/PHP/minus-who-we-are/our-steering-committee.php' => ['name' => 'Our Steering Committee', 'parent' => '/PHP/minus-who-we-are/'],
    '/PHP/minus-who-we-are/our-partners.php' => ['name' => 'Our Partners', 'parent' => '/PHP/minus-who-we-are/'],
];


function get_breadcrumb($site_structure, $current_url) {
    $breadcrumb = [];

    // Ensure the current URL starts with a '/'

    if (substr($current_url, 0, 1) !== '/') {
        $current_url = '/' . $current_url;
    }

    //Collect all pages for the breadcrumbs
    foreach ($site_structure as $url => $page) {
        $breadcrumb[$url] = $page['name'];
    }

return $breadcrumb;
}


                        function display_breadcrumb($breadcrumb, $current_url) {
                            $output = '<nav aria-label="breadcrumb" class="breadcrumbs__nav"><ol class="breadcrumb">';

                            
                            foreach ($breadcrumb as $url => $name) {
                                if ($url === $current_url) {
                                    //Last item - make it plain text
                                    $output .= '<li class="breadcrumb-item active" aria-current="page">' . htmlspecialchars($name) . '</li>';

                                } else {
                                   // Other pages - make them links
                                    $output .= '<li class="breadcrumb-item"><a href="' . $url . '">' . htmlspecialchars($name) . '</a></li>';
                                }
                            }

                            $output .= '</ol></nav>';
                            echo $output;
                        }



    //Example usage


