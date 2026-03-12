<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>
<body class="mod-bg-1 mod-nav-link ">
<main id="js-page-content" role="main" class="page-content">
    <div class="col-md-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Задание
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse"
                            data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen"
                            data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                </div>
            </div>
            <?php foreach ($list as $item) { ?>
            <div class="panel-container show">
                <div class="panel-content">
                    <a class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                        <a class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                            <img <?php echo $item ['foto']?><?php echo  $item ['name']?>>
                                <a class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                            < class="ml-2 mr-3">
                                <h5 class="m-0">
                                    <?php echo $item ['name2']?>
                                    <small class="m-0 fw-300">
                                        <?php echo $item ['job']?>
                                    </small>
                                </h5>
                                <?php
                                $list = [
                                        [
                                                'name' => 'Jos K',
                                                'job' => ' Partnet &amp; Contributor',
                                                'username' => '@atlantz',
                                                'twitter' => 'https://twitter.com/@atlantez',
                                                'wrapbootstrap' => 'wrapbootstrap.com/user/Walapa',
                                                'name2' => '(ASP.NET Developer)',
                                                'title' => "Contact Jos",
                                                'foto' => 'img/demo/authors/josh.png'
                                        ], [
                                                'name' => 'Sunny A',
                                                'job' => 'Lead Author',
                                                'username' => '@myplaneticket',
                                                'twitter' => 'https://twitter.com/@myplaneticket',
                                                'wrapbootstrap' => 'https://wrapbootstrap.com/user/myorange',
                                                'name2' => '(UI/UX Expert)',
                                                'title' => "Contact Sunny",
                                                'foto' => "img/demo/authors/sunny.png",
                                        ],[
                                                'name'=> 'Jovanni L',
                                            'job' => 'Partner &amp; Contributor',
                                            'username' => '@lodev09',
                                            'twitter' => 'https://twitter.com/lodev09',
                                            'wrapbootstrap' => 'https://wrapbootstrap.com/user/lodev09',
                                            'name2' => '(PHP Developer)',
                                            'title' => "Contact Jovanni",
                                            'foto' => "img/demo/authors/jovanni.png",
                                        ],[
                                                'name' => 'Roberto R',
                                            'job' => ' Partnet &amp; Contributor',
                                            'username' => '@sildur',
                                            'twitter' => 'https://twitter.com/sildur',
                                            'wrapbootstrap' => 'https://wrapbootstrap.com/user/sildur',
                                            'name2' => '(Rails Developer)',
                                            'title' => "Contact Roberto",
                                            'foto' => "img/demo/authors/roberto.png",
                                        ]


                                ];

                                ?>



                        <a class="text-info fs-sm"<?php echo $item['wrabootstarp'] ?>></a>
                              <a> title="Contact Sunny"<?php echo $item ['title']?>><i class="fal fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                            <img <?php echo $item ['foto']?><?php echo $item['name'] ?>
                                 class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                            <div class="ml-2 mr-3">
                                <h5 class="m-0">
                                    <?php echo $item['name2'] ?>
                                    <small class="m-0 fw-300">
                                        <?php echo $item ['job'] ?>
                                    </small>
                                </h5>
                                <a <?php echo $item ['twitter'] ?> class="text-info fs-sm" target="_blank"><?php echo ['username']?> </a>
                                -
                                <a<?php echo $item['wrabootstarp']?> class="text-info fs-sm" target="_blank"
                                   <?php echo $item ['title']?>><i class="fal fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                            <img <?php echo $item ['foto']?><?php echo $item['name'] ?>
                           <a> class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                            <div class="ml-2 mr-3">
                                <h5 class="m-0">
                                    <?php echo $item['name2'] ?>
                                    <small class="m-0 fw-300">
                                        <?php echo $item ['job'] ?>
                                    </small>
                                </h5>
                                <a <?php echo  $item ['twitter']?>class="text-info fs-sm"
                               <?php echo $item['wrabootstarp']?> target="_blank"><?php echo ['username']?></a>
                                <a  class="text-info fs-sm" target="_blank"
                                   <?php echo $item ['title'] ?>><i class="fal fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                            <img <?php echo $item ['foto']?><?php echo $item['name'] ?>></img>
                               <a  class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                            <div class="ml-2 mr-3">
                                <h5 class="m-0">
                                    <?php echo $item['name2'] ?>
                                    <small class="m-0 fw-300">
                                        <?php echo $item ['job'] ?>
                                    </small>
                                </h5>
                                <a <?php echo $item ['twitter'] ?>class="text-info fs-sm"
                                   target="_blank"></a>
                                <a <?php echo $item['wrabootstarp']?> class="text-info fs-sm" target="_blank"<?php echo ['username']?>
                                        <?php echo $item ['title'] ?>><i class="fal fa-envelope"></i></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>
<script>
    // default list filter
    initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
    // custom response message
    initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
</script>
</body>
</html>
