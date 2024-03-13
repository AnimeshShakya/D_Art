<?php

use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Spatie\Permission\Models\Role;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('dashboard'));
});

// Home > Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Dashboard', route('dashboard'));
});

// Home > Dashboard > User Management
// Breadcrumbs::for('user-management.index', function (BreadcrumbTrail $trail) {
//     $trail->parent('dashboard');
//     $trail->push('User Management', route('user-management.users.index'));
// });

// Home > Dashboard > User Management > Users
Breadcrumbs::for('user-management.users.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Users', route('user-management.users.index'));
});

// Home > Dashboard > User Management > Users > [User]
Breadcrumbs::for('user-management.users.show', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('user-management.users.index');
    $trail->push(ucwords($user->name), route('user-management.users.show', $user));
});

// Home > Dashboard > User Management > Roles
Breadcrumbs::for('user-management.roles.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Roles', route('user-management.roles.index'));
});

// Home > Dashboard > User Management > Roles > [Role]
Breadcrumbs::for('user-management.roles.show', function (BreadcrumbTrail $trail, Role $role) {
    $trail->parent('user-management.roles.index');
    $trail->push(ucwords($role->name), route('user-management.roles.show', $role));
});

// Home > Dashboard > User Management
Breadcrumbs::for('user-management.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('User Management', route('user-management.index'));
});

// Home > Dashboard > User Management > Add User
Breadcrumbs::for('user-management.add', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Add User', route('user-management.add'));
});

// Home > Dashboard > User Management > View User
Breadcrumbs::for('user-management.view', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('View User', route('user-management.view'));
});

// Home > Dashboard > User Management > edit User
Breadcrumbs::for('user-management.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Edit User', route('user-management.edit'));
});

// Home > Dashborad > User Management > view Group
Breadcrumbs::for('user-management.viewGroup', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('View Group', route('user-management.viewGroup'));
});

// Home > Dashboard > Group Management
Breadcrumbs::for('group-management.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Group Management', route('group-management.index'));
});

//Home > Dashboard > Group Management > Add Group
Breadcrumbs::for('group-management.add', function (BreadcrumbTrail $trail) {
    $trail->parent('group-management.index');
    $trail->push('Add Group', route('group-management.add'));
});

//Home > Dashboard > Group Management > View Group
Breadcrumbs::for('group-management.view', function (BreadcrumbTrail $trail) {
    $trail->parent('group-management.index');
    $trail->push('View Group', route('group-management.view'));
});

// Home > Dashboard > Group Management > Edit Group
Breadcrumbs::for('group-management.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('group-management.index');
    $trail->push('Edit Group', route('group-management.edit'));
});

// Home > Dashboard > Group Management > View subscribers
Breadcrumbs::for('group-management.subscriber', function (BreadcrumbTrail $trail) {
    $trail->parent('group-management.index');
    $trail->push('View Subscribers', route('group-management.subscriber'));
});

// Home > Dashboard > Group Management > View subscribers > Assign Subscribers
Breadcrumbs::for('subscriber-management.assign', function (BreadcrumbTrail $trail) {
    $trail->parent('group-management.subscriber');
    $trail->push('Assign Subscribers', route('group-management.assignSubscriber'));
});

// Home > Dashboard > Group Management > Album Management
Breadcrumbs::for('group-management.album', function (BreadcrumbTrail $trail) {
    $trail->parent('group-management.index');
    $trail->push('Album Management', route('album-management.index'));
});

// Home > Dashboard > Group Management > Album Management > Add
Breadcrumbs::for('album-management.add', function (BreadcrumbTrail $trail) {
    $trail->parent('group-management.album');
    $trail->push('Add', route('album-management.add'));
});

// Home > Dashboard > Group Management > Album Management > Edit
Breadcrumbs::for('album-management.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('group-management.album');
    $trail->push('Edit', route('album-management.edit'));
});

// Home > Dashboard > Box Setting
Breadcrumbs::for('box-setting.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Box Setting', route('box-setting.index'));
});

// Home > Dashboard > Box Setting > add
Breadcrumbs::for('box-setting.add', function (BreadcrumbTrail $trail) {
    $trail->parent('box-setting.index');
    $trail->push('Add', route('box-setting.add'));
});

// Home > Dashboard > Box Setting > view
Breadcrumbs::for('box-setting.view', function (BreadcrumbTrail $trail) {
    $trail->parent('box-setting.index');
    $trail->push('View', route('box-setting.view'));
});

// Home > Dashboard > Box Setting > edit
Breadcrumbs::for('box-setting.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('box-setting.index');
    $trail->push('Edit', route('box-setting.edit'));
});

// Home > Dashboard > Media Management
Breadcrumbs::for('media-management.index', function (BreadcrumbTrail $trail) {
    $trail->parent('group-management.album');
    $trail->push('Media Management', route('media-management.index'));
});

// Home > Dashboard > Media Management > Add
Breadcrumbs::for('media-management.add', function (BreadcrumbTrail $trail) {
    $trail->parent('media-management.index');
    $trail->push('Add', route('media-management.add'));
});

// Home > Dashboard > Media Management > edit
Breadcrumbs::for('media-management.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('media-management.index');
    $trail->push('Edit', route('media-management.edit'));
});

// Home > Dashboard > News Management
Breadcrumbs::for('news-management.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('News Management', route('news-management.index'));
});

// Home > Dashboard > News Management > Add
Breadcrumbs::for('news-management.add', function (BreadcrumbTrail $trail) {
    $trail->parent('news-management.index');
    $trail->push('Add', route('news-management.add'));
});

// Home > Dashboard > News Management > view
Breadcrumbs::for('news-management.view', function (BreadcrumbTrail $trail) {
    $trail->parent('news-management.index');
    $trail->push('View', route('news-management.view'));
});

// Home > Dashboard > News Management > edit
Breadcrumbs::for('news-management.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('news-management.index');
    $trail->push('Edit', route('news-management.edit'));
});

// Home > Dashboard > Currency Change
Breadcrumbs::for('currency-change.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Currency Change', route('currency-change.index'));
});

// Home > Dashboard > Currency Change > add
Breadcrumbs::for('currency-change.add', function (BreadcrumbTrail $trail) {
    $trail->parent('currency-change.index');
    $trail->push('Add', route('currency-change.add'));
});

// Home > Dashboard > Currency Change > edit
Breadcrumbs::for('currency-change.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('currency-change.index');
    $trail->push('Edit', route('currency-change.edit'));
});