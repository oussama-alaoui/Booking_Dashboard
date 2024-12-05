{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('users')" />
<x-backpack::menu-item title="Admins" icon="la la-question" :link="backpack_url('admins')" />
<x-backpack::menu-item title="Categories" icon="la la-question" :link="backpack_url('categories')" />
<x-backpack::menu-item title="Sub categories" icon="la la-question" :link="backpack_url('sub-categories')" />
<x-backpack::menu-item title="Centers" icon="la la-question" :link="backpack_url('center')" />
<x-backpack::menu-item title="Clients" icon="la la-question" :link="backpack_url('clients')" />
<x-backpack::menu-item title="Cities" icon="la la-question" :link="backpack_url('city')" />
<x-backpack::menu-item title="Waiters" icon="la la-question" :link="backpack_url('waiters')" />
<x-backpack::menu-item title="Bookeds" icon="la la-question" :link="backpack_url('booked')" />