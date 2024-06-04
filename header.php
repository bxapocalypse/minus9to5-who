
<?php

include_once("functions/functions.php");

$current_url = $_SERVER['REQUEST_URI'];
$breadcrumb = get_breadcrumb($site_structure, $current_url);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="/media/minus_9_to_5_media/images/evms-minus9to5.ico">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <!--<link rel="stylesheet" href="css/icon-font.css">-->

    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://use.typekit.net/hbc2bmr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://kit.fontawesome.com/e651c62bdc.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--video styles-->

    <link rel="stylesheet" type="text/css" href="/media/minus_9_to_5_media/web_assets/video.css" />

    <!--video styles-->


    <script type="text/javascript">
        $(document).ready(function() {
            $('ul li').click(function() {
                $(this).siblings().removeClass('active');
                $(this).toggleClass('active');
            })
        })
    </script>

    <title>Minus 9 to 5</title>
</head>

<body>

    <div class="wrapper">

        <a class="skip-link" href="#main">Skip to content</a>

        <div class="minus9to5-search">
            <form class="form-inline my-2 my-lg-0" id="form-search">
                <label aria-label="search">Search</label>
                <input class="form-control" type="search" aria-label="Search" name="q" id="searchInput">
                <button class="minus9to5-search-btn" type="submit" aria-label="Submit search"><img src="/media/minus_9_to_5_media/images/search-icon-1.svg" alt="Submit search"></button>

                <script>
                    const f = document.getElementById('form-search');
                    const q = document.getElementById('searchInput');
                    const funnelback = 'https://search.evms.edu/s/search.html?collection=evms-search&query=';
                    const restUrl = '&collection=evms-search&profile=_default';

                    function submitted(event) {
                        event.preventDefault();
                        const url = funnelback + q.value + restUrl;
                        const win = window.open(url, '_blank');
                        win.focus();
                    }

                    f.addEventListener('submit', submitted);
                </script>
            </form>
            <div class="minus9to5-search-x" aria-label="close search">X</div>
        </div><!--minus9to5-search emds-->

        <div class="secondaryTopbar">
            <div class="secondaryTopbar__inner">
                <div class="secondaryTopbar__inner__logo">
                    <a href="/"><img class="topbar__inner__logo-img" src="images/topbar__logo-img.png" alt="EVMS Logo" /></a>
                </div><!--topbar__logo ends-->

                <nav class="secondaryTopbar__inner__nav" aria-label="Secondary Navigation">
                    <ul class="secondaryTopbar__inner__nav__ul">
                        <li class="secondaryTopbar__inner__nav__ul-li">
                            <a href="/" target="_self">Home</a>
                        </li><!--secondaryTopbar__inner__nav__ul-li ends-->
                        <li class="secondaryTopbar__inner__nav__ul-li">
                            <a href="/about/">About Us</a>
                            <ul class="multilevel-linkul-0">
                                <li><a href="/about/why_we_exist/">Why We Exist</a></li>
                                <li><a href="/about/who_we_are/">Who We Are</a>
                                    <ul class="multilevel-linkul-1">
                                        <li><a href="/about/who_we_are/our_staff/">Our Staff</a></li>
                                        <li><a href="/about/who_we_are/our_steering_committee/">Our Steering Committee</a></li>
                                        <li><a href="/about/who_we_are/our_partners/">Our Partners</a></li>

                                    </ul>

                                </li>
                                <li><a href="/about/how_we_work/">How We Work</a>
                                    <ul class="multilevel-linkul-1">
                                        <li><a href="/about/how_we_work/common_agenda/">Common Agenda</a></li>
                                        <li><a href="/about/how_we_work/our_structure/">Our Structure</a></li>

                                    </ul>

                                </li>
                                <li><a href="/about/our_impact/">Our Impact</a>
                                    <ul class="multilevel-linkul-1">
                                        <li><a href="/about/our_impact/learning_and_evaluation/">Learning and Evaluation</a></li>
                                        <li><a href="/about/our_impact/baseline_data/">Baseline Data</a></li>

                                    </ul>

                                </li>

                            </ul>

                        </li><!--secondaryTopbar__inner__nav__ul-li ends-->
                        <li class="secondaryTopbar__inner__nav__ul-li"><a href="/working_groups/">Working Groups</a>
                            <ul class="multilevel-linkul-0">
                                <li><a href="/working_groups/healthy_homes_healthy_children/">Healthy Homes, Healthy Children</a>
                                    <ul class="multilevel-linkul-1">
                                        <li><a href="/working_groups/healthy_homes_healthy_children/pathway_through_pregnancy/">Pathway Through Pregnancy</a></li>

                                    </ul>

                                </li>
                                <li><a href="/working_groups/thriving_families/">Thriving Families</a>
                                    <ul class="multilevel-linkul-1">
                                        <li><a href="/working_groups/thriving_families/ready_region_family_councils/">Ready Region Family Councils</a></li>

                                    </ul>

                                </li>
                                <li><a href="/working_groups/community_connections/">Community Connections</a></li>
                                <li><a href="/working_groups/early_learning_and_development/">Early Learning and Development</a></li>
                                <li><a href="/working_groups/data_and_knowledge_sharing/">Data and Knowledge Sharing</a></li>
                                <li><a href="/working_groups/policy_and_advocacy/">Policy and Advocacy</a></li>

                            </ul>

                        </li><!--secondaryTopbar__inner__nav__ul-li ends-->
                        <li class="secondaryTopbar__inner__nav__ul-li"><a href="/resources/">Resources</a>
                            <ul class="multilevel-linkul-0">
                                <li><a href="https://planningcouncil.myresourcedirectory.com/" target="_blank">Resources757</a></li>
                                <li><a href="/resources/parenting_resources/">Parenting Resources</a>
                                    <ul class="multilevel-linkul-1">
                                        <li><a href="https://www.sleeptighthamptonroads.org/" target="_blank">Sleep Tight</a></li>
                                        <li><a href="/resources/parenting_resources/home-visiting/">Support for Parenting and Pregnant Families in Hampton Roads</a></li>
                                        <li><a href="/resources/parenting_resources/support_groups/">Support Groups</a></li>
                                        <li><a href="/resources/parenting_resources/parent_education_/">Parent Education </a></li>

                                    </ul>

                                </li>
                                <li><a href="/working_groups/healthy_homes_healthy_children/pathway_through_pregnancy/">Pathway Through Pregnancy: Hampton Roads</a></li>
                                <li><a href="/resources/the_basics_hampton_roads/">The Basics Hampton Roads</a></li>
                                <li><a href="/resources/training_lists/">Professional Development Training</a></li>
                                <li><a href="/resources/family_friendly_businesses/">Family-Friendly Businesses</a></li>
                                <li><a href="/resources/ready_region_southeastern/">Ready Region Southeastern</a>
                                    <ul class="multilevel-linkul-1">
                                        <li><a href="/resources/ready_region_southeastern/about_ready_regions/">About Ready Regions</a></li>
                                        <li><a href="/resources/ready_region_southeastern/about_vqb5/">About VQB5</a></li>
                                        <li><a href="/resources/ready_region_southeastern/about_ready_region_southeastern/">About Ready Region Southeastern</a></li>
                                        <li><a href="/resources/ready_region_southeastern/director_or_family_day_home_providers/">Director or Family Day Home Providers</a></li>
                                        <li><a href="/resources/ready_region_southeastern/teachers/">Teachers</a></li>
                                        <li><a href="/resources/ready_region_southeastern/class_observer/">CLASS Observer</a></li>

                                    </ul>

                                </li>
                                <li><a href="/resources/ready_set_register/">Ready, Set, Register Southeastern</a>
                                    <ul class="multilevel-linkul-1">
                                        <li><a href="/resources/ready_set_register/preschool/">Infant, Toddler and Preschool Programs</a></li>
                                        <li><a href="/resources/ready_set_register/kindergarten_registration/">Kindergarten Registration</a></li>

                                    </ul>

                                </li>
                                <li><a href="/resources/news/">News</a></li>

                            </ul>

                        </li><!--secondaryTopbar__inner__nav__ul-li ends-->
                    </ul><!--secondaryTopbar__inner__nav__ul ends-->
                </nav><!--secondaryTopbar__inner__nav ends-->

                <div class="secondaryTopbar__inner__search">

                    <!--img class="secondaryTopbar__inner__search-icon" src="/media/minus_9_to_5_media/images/search-icon-blk.png" /-->
                </div>
            </div><!--secondaryTopbar__inner ends-->
        </div><!--secondaryTopbar ends-->



        <!--this top bar & nav pops up when it is mobile view-->
        <div class="mobilTopBar">
            <div class="mobilTopBar__logo">
                <a href="/" class="mobilTopBar__logo-link" aria-label="Click to go back to the homepage"><img class="mobilTopBar__logo-link-img" src="/media/minus_9_to_5_media/images/topbar__logo-img.png" alt="EVMSmobile logo" /></a>
            </div><!--mobilTopBar__logo ends-->
            <button class="mobilTopBar__menuToggle">
                <img class="mobilTopBar__menuToggle-img" src="/media/minus_9_to_5_media/images/three-line-menu-icon-24.jpg" aria-label="Open Mobile Menu" alt="Menu Toggle" /> MENU
            </button>
        </div><!--mobilTopBar ends-->


        <!--this nav pops up when it is mobile view-->
        <nav class="mobil" aria-label="Mobile Navigation">
            <ul class="mobil__ul">
                <li class="mobil__ul-li sub-menu"><a href="/" target="_self">Home</a></li>
                <li class="mobil__ul-li sub-menu"><a href="/about/">About Us</a>
                    <ul class="multilevel-linkul-0">
                        <li><a href="/about/why_we_exist/">Why We Exist</a></li>
                        <li><a href="/about/who_we_are/">Who We Are</a>
                            <ul class="multilevel-linkul-1">
                                <li><a href="/about/who_we_are/our_staff/">Our Staff</a></li>
                                <li><a href="/about/who_we_are/our_steering_committee/">Our Steering Committee</a></li>
                                <li><a href="/about/who_we_are/our_partners/">Our Partners</a></li>

                            </ul>

                        </li>
                        <li><a href="/about/how_we_work/">How We Work</a>
                            <ul class="multilevel-linkul-1">
                                <li><a href="/about/how_we_work/common_agenda/">Common Agenda</a></li>
                                <li><a href="/about/how_we_work/our_structure/">Our Structure</a></li>

                            </ul>

                        </li>
                        <li><a href="/about/our_impact/">Our Impact</a>
                            <ul class="multilevel-linkul-1">
                                <li><a href="/about/our_impact/learning_and_evaluation/">Learning and Evaluation</a></li>
                                <li><a href="/about/our_impact/baseline_data/">Baseline Data</a></li>

                            </ul>

                        </li>

                    </ul>

                </li>
                <li class="mobil__ul-li sub-menu"><a href="/working_groups/">Working Groups</a>
                    <ul class="multilevel-linkul-0">
                        <li><a href="/working_groups/healthy_homes_healthy_children/">Healthy Homes, Healthy Children</a>
                            <ul class="multilevel-linkul-1">
                                <li><a href="/working_groups/healthy_homes_healthy_children/pathway_through_pregnancy/">Pathway Through Pregnancy</a></li>

                            </ul>

                        </li>
                        <li><a href="/working_groups/thriving_families/">Thriving Families</a>
                            <ul class="multilevel-linkul-1">
                                <li><a href="/working_groups/thriving_families/ready_region_family_councils/">Ready Region Family Councils</a></li>

                            </ul>

                        </li>
                        <li><a href="/working_groups/community_connections/">Community Connections</a></li>
                        <li><a href="/working_groups/early_learning_and_development/">Early Learning and Development</a></li>
                        <li><a href="/working_groups/data_and_knowledge_sharing/">Data and Knowledge Sharing</a></li>
                        <li><a href="/working_groups/policy_and_advocacy/">Policy and Advocacy</a></li>

                    </ul>

                </li>
                <li class="mobil__ul-li sub-menu"><a href="/resources/">Resources</a>
                    <ul class="multilevel-linkul-0">
                        <li><a href="https://planningcouncil.myresourcedirectory.com/" target="_blank">Resources757</a></li>
                        <li><a href="/resources/parenting_resources/">Parenting Resources</a>
                            <ul class="multilevel-linkul-1">
                                <li><a href="https://www.sleeptighthamptonroads.org/" target="_blank">Sleep Tight</a></li>
                                <li><a href="/resources/parenting_resources/home-visiting/">Support for Parenting and Pregnant Families in Hampton Roads</a></li>
                                <li><a href="/resources/parenting_resources/support_groups/">Support Groups</a></li>
                                <li><a href="/resources/parenting_resources/parent_education_/">Parent Education </a></li>

                            </ul>

                        </li>
                        <li><a href="/working_groups/healthy_homes_healthy_children/pathway_through_pregnancy/">Pathway Through Pregnancy: Hampton Roads</a></li>
                        <li><a href="/resources/the_basics_hampton_roads/">The Basics Hampton Roads</a></li>
                        <li><a href="/resources/training_lists/">Professional Development Training</a></li>
                        <li><a href="/resources/family_friendly_businesses/">Family-Friendly Businesses</a></li>
                        <li><a href="/resources/ready_region_southeastern/">Ready Region Southeastern</a>
                            <ul class="multilevel-linkul-1">
                                <li><a href="/resources/ready_region_southeastern/about_ready_regions/">About Ready Regions</a></li>
                                <li><a href="/resources/ready_region_southeastern/about_vqb5/">About VQB5</a></li>
                                <li><a href="/resources/ready_region_southeastern/about_ready_region_southeastern/">About Ready Region Southeastern</a></li>
                                <li><a href="/resources/ready_region_southeastern/director_or_family_day_home_providers/">Director or Family Day Home Providers</a></li>
                                <li><a href="/resources/ready_region_southeastern/teachers/">Teachers</a></li>
                                <li><a href="/resources/ready_region_southeastern/class_observer/">CLASS Observer</a></li>

                            </ul>

                        </li>
                        <li><a href="/resources/ready_set_register/">Ready, Set, Register Southeastern</a>
                            <ul class="multilevel-linkul-1">
                                <li><a href="/resources/ready_set_register/preschool/">Infant, Toddler and Preschool Programs</a></li>
                                <li><a href="/resources/ready_set_register/kindergarten_registration/">Kindergarten Registration</a></li>

                            </ul>

                        </li>
                        <li><a href="/resources/news/">News</a></li>

                    </ul>

                </li>
            </ul>
        </nav>



        <section class="blue__header">
            <h1 class="blue__header__title">
                Our Staff
            </h1>
        </section>

        
            <!-- <div class="breadcrumbs" aria-label="breadcrumbs Navigation">
                <ul class="breadcrumbs__ul">
                <ul class="breadcrumbs__ul__li"><a href="/">Minus 9 to 5</a>&nbsp; / &nbsp;<a href="/about/">About Us</a>&nbsp; / &nbsp;<a href="/about/who_we_are/">Who We Are</a>&nbsp; / &nbsp;Our Staff</li>
                </ul> 
            </div> -->

                <?php
                    display_breadcrumb($breadcrumb, $current_url);

                ?> 
        