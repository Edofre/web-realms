<?php

// Guest Home
Breadcrumbs::register('guest.home', function ($breadcrumbs) {
    $breadcrumbs->push('Home', route('guest.home'));
});