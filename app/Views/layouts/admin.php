<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>

<?php
$data['sidebar_menu'] = [
    [
        'header' => 'Profil',
        'item' => [
             [
                 'url' => '/admin/artikel',
                 'icon' => 'bi bi-circle',
                 'label' => 'Artikel',
             ],
            [
                'url' => '/admin/',
                'icon' => 'bi bi-circle',
                'label' => 'Ubah Profil',
            ],
        ],
    ],
    [
        'header' => 'Laporan',
        'item' => [
            [
                'url' => '/admin/',
                'icon' => 'bi bi-circle',
                'label' => 'laporan 1',
            ],
            [
                'url' => '/admin/',
                'icon' => 'bi bi-circle',
                'label' => 'laporan 2',
            ]
        ],
    ],

    [
        'header' => 'pengaturan',
        'item' => [
            [
                'url' => '/admin/',
                'icon' => 'bi bi-circle',
                'label' => 'pengaturan 1',
            ],
            [
                'url' => '/admin/',
                'icon' => 'bi bi-circle',
                'label' => 'Pengaturan 2',
            ]
        ],
    ],

];
?>

<?= view('components/navbar') ?>

<?= view('components/sidebar', $data) ?>

<main class="app-main">
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">
                        <?= $this->renderSection('title') ?> &nbsp;
                    </h3>
                </div>
<!--                <div class="col-sm-6">-->
<!--                    <ol class="breadcrumb float-sm-end">-->
<!--                        <li class="breadcrumb-item"><a href="#">Home</a></li>-->
<!--                        <li class="breadcrumb-item active" aria-current="page">-->
<!--                            Sidebar Mini-->
<!--                        </li>-->
<!--                    </ol>-->
<!--                </div>-->
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid">
    <?= $this->renderSection('content') ?>
        </div>
    </div>
</main>

<?= $this->endSection() ?>
