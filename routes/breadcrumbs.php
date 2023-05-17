<?php
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('dashboard', route('dashboard'));
});
Breadcrumbs::for('nasabah',function($trail){
    $trail->parent('dashboard');
    $trail->push('nasabah', route('nasabah.index'));
});
Breadcrumbs::for('sopir',function($trail){
    $trail->parent('dashboard');
    $trail->push('sopir', route('sopir.index'));
});
Breadcrumbs::for('sampah',function($trail){
    $trail->parent('dashboard');
    $trail->push('sampah', route('sampah.index'));
});
Breadcrumbs::for('jadwal',function($trail){
    $trail->parent('dashboard');
    $trail->push('jadwal', route('jadwal.index'));
});
Breadcrumbs::for('transaksi', function($trail){
    $trail->parent('dashboard');
    $trail->push('transaksi', route('transaksi.index'));
});
Breadcrumbs::for('laporan',function($trail){
    $trail->parent('dashboard');
    $trail->push('laporan', route('laporan.index'));
});