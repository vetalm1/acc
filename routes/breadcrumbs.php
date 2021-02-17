<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::register('ClientHome', function ($breadcrumbs) {

    $breadcrumbs->push('Мои объекты', route('client-home'));

});

Breadcrumbs::for('facility', function ($breadcrumbs, $facility) {
    $breadcrumbs->parent('ClientHome');
    $breadcrumbs->push($facility->address, route('facility.show', $facility->id));
});

Breadcrumbs::for('device', function ($breadcrumbs, $device) {
    $breadcrumbs->parent('facility', $device->facility);
    $breadcrumbs->push($device->number, route('device.show',$device->id));
});