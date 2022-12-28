<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
        //    'user-list',
        //    'user-create',
        //    'user-edit',
        //    'user-delete',

        //    'role-list',
        //    'role-create',
        //    'role-edit',
        //    'role-delete',

        //    'slider-list',
        //    'slider-create',
        //    'slider-edit',
        //    'slider-delete'

        //    'post-list',
        //    'post-create',
        //    'post-edit',
        //    'post-delete'
        
        // 'category-list',
        // 'category-create',
        // 'category-edit',
        // 'category-delete'

        // 'event-list',
        // 'event-create',
        // 'event-edit',
        // 'event-delete'

        // 'statistic-list',
        // 'statistic-create',
        // 'statistic-edit',
        // 'statistic-delete'

        // 'about-list',
        // 'about-create',
        // 'about-edit',
        // 'about-delete',

        // 'team-list',
        // 'team-create',
        // 'team-edit',
        // 'team-delete'

        // 'fog-list',
        // 'fog-create',
        // 'fog-edit',
        // 'fog-delete'

        // 'talent-list',
        // 'talent-create',
        // 'talent-edit',
        // 'talent-delete'
        
        //   'course-list',
        // 'course-create',
        // 'course-edit',
        // 'course-delete'

        // 'contact-list',
        // 'contact-delete'
        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
