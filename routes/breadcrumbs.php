<?php
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
});
Breadcrumbs::for('nasabah',function(
    $trail){
    $trail->parent('dashboard');
    $trail->push('nasabah', route('nasabah.index'));
});
Breadcrumbs::for('sopir',function($trail){
    $trail->parent('dashboard');
    $trail->push('Sopir', route('sopir.index'));
});
Breadcrumbs::for('sampah',function($trail){
    $trail->parent('dashboard');
    $trail->push('Sampah', route('sampah.index'));
});
Breadcrumbs::for('jadwal',function($trail){
    $trail->parent('dashboard');
    $trail->push('Jadwal', route('jadwal.index'));
});
Breadcrumbs::for('transaksi', function($trail){
    $trail->parent('dashboard');
    $trail->push('Laporan', route('transaksi.index'));
});

Breadcrumbs::for('jadwalnasabah',function(
    $trail){
    $trail->parent('dashboard');
    $trail->push('Nasabah', route('jadwalnasabah.index'));
});