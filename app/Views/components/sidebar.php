<?php
////////// contoh data
//$data['sidebar_menu'] = [
//    [
//        'header' => 'Pengaturan',
//        'item' => [
//            [
//                'url' => '/admin/profil',
//                'icon' => '',
//                'label' => 'Profil'
//            ],
//            [
//                'url' => '/admin/rekening',
//                'icon' => '',
//                'label' => 'Rekening'
//            ],
//            [
//                'url' => '/admin/instansi',
//                'icon' => 'far fa-building',
//                'label' => 'Instansi'
//            ],
//            [
//                'url' => '/admin/operator',
//                'icon' => '',
//                'label' => 'Operator'
//            ],
//        ]
//    ],
////////// tambahain sebanyak yang diperlukan
//    [
//        'header' => 'Pengaturan',
//        'item' => [
//            'url' => 'profil',
//            'icon' => '',
//            'label' => 'Profil'
//        ],
//    ]
//];
?>
<!-- Main Sidebar Container -->
<aside class="app-sidebar shadow">
    <div class="sidebar-brand">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="/logo/kab.png" alt="Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Appkj</span>

    </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar-wrapper">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= current_url(true)->getPath() ?></a>
            </div>
        </div> -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <?php if (isset($sidebar_menu)): ?>
                    <?php foreach ($sidebar_menu as $menu): ?>
                        <li class="nav-header"><?= $menu['header'] ?></li>
                        <?php foreach ($menu['item'] as $item): ?>
                            <?php if (isset($item['header'])): ?>
                                <li class="nav-item <?= in_array(
                                    current_url(true)->getPath(),
                                    array_column($item, 'url'),
                                )
                                    ? 'menu-is-opening menu-open'
                                    : '' ?>">
                                    <a href="#"
                                       class="nav-link <?= in_array(
                                           current_url(true)->getPath(),
                                           array_column($item, 'url'),
                                       )
                                           ? 'active'
                                           : '' ?>">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>
                                            <?= $item['header'] ?>
                                            <i class="right bi bi-circle"></i>
                                        </p>
                                    </a>

                                    <ul class="nav nav-treeview">
                                        <?php foreach ($item['item'] as $subitem): ?>
                                            <li class="nav-item">
                                                <a href="<?= $subitem['url'] ?>"
                                                   class="nav-link <?= $subitem['url'] == (env('CI_ENVIRONMENT') === 'production' ? str_replace('/index.php', '', current_url(true)->getPath()) : current_url(true)->getPath())
                                                       ? 'active'
                                                       : '' ?>">
                                                    <i class="nav-icon <?= $subitem['icon'] ?: 'bi bi-circle' ?>"></i>
                                                    <p><?= $subitem['label'] ?></p>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a href="<?= $item['url'] ?>"
                                       class="nav-link <?= $item['url'] == (env('CI_ENVIRONMENT') === 'production' ? str_replace('/index.php', '', current_url(true)->getPath()) : current_url(true)->getPath())
                                           ? 'active'
                                           : '' ?>">
                                        <i class="nav-icon <?= $item['icon'] ?: 'bi bi-circle'?>"></i>
                                        <p><?= $item['label'] ?></p>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>TIDAK ADA $sidebar_menu</p>
                        </a>
                    </li>
                <?php endif; ?>


            </ul>
        </nav>
    </div>
</aside>
