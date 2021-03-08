<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::register('ClientHome', function ($breadcrumbs) {
    $breadcrumbs->push('Мои объекты', route('client-home'));
});

Breadcrumbs::for('facility', function ($breadcrumbs, $facility) {
    $breadcrumbs->parent('ClientHome');
    $breadcrumbs->push($facility->address, route('facility.show', $facility->id));
});

Breadcrumbs::for('device-create', function ($breadcrumbs, $facility) {
    $breadcrumbs->parent('facility', $facility);
    $breadcrumbs->push('Добавление прибора', route('device.create'));
});

Breadcrumbs::for('device', function ($breadcrumbs, $device) {
    $breadcrumbs->parent('facility', $device->facility);
    $breadcrumbs->push($device->number, route('device.show',$device->id));
});

Breadcrumbs::for('report', function ($breadcrumbs, $facility) {
    $breadcrumbs->parent('facility', $facility);
    $breadcrumbs->push('Отчет внутренний', route('report', $facility->id));
});


Breadcrumbs::register('CMS', function ($breadcrumbs) {
    $breadcrumbs->push('Панель менеджера', route('cms'));
});

Breadcrumbs::for('cms-facilities', function ($breadcrumbs) {
    $breadcrumbs->parent('CMS');
    $breadcrumbs->push('Список Объектов', route('facility-list'));
});

Breadcrumbs::for('cms-facility', function ($breadcrumbs, $facility) {
    $breadcrumbs->parent('cms-facilities');
    $breadcrumbs->push($facility->address, route('facility-item', $facility->id));
});

Breadcrumbs::for('cms-device', function ($breadcrumbs, $device) {
    $breadcrumbs->parent('cms-facility', $device->facility);
    $breadcrumbs->push($device->number, route('cms-device-item',$device->id));
});

Breadcrumbs::for('cms-create-device', function ($breadcrumbs, $facility) {
    $breadcrumbs->parent('cms-facility', $facility);
    $breadcrumbs->push('Добавление прибора учета');
});
