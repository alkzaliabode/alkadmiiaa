<?php 
require_once 'vendor/autoload.php';
\ = require_once 'bootstrap/app.php';
\->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

\ = User::where('email', 'roan1@admin.com')->first();
\ = Role::where('name', 'super_admin')->first();

if(\ && \) {
    \ = Permission::all();
    \->syncRoles([\]);
    \->syncPermissions(\);
    \->syncPermissions(\);
    echo 'Permissions updated for admin user and super_admin role.\n';
} else {
    echo 'User or role not found.\n';
}
