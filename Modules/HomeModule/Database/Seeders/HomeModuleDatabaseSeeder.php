<?php

namespace Modules\HomeModule\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class HomeModuleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title'=>'post1',
            'content'=>'content 1',
            'path'=>'path1',
            'author'=>'author 1',
            'idcategory'=>1,
            'created_at'=>gmdate('Y-m-d H-i:s',time()+7*3600),
            ],
            ['title'=>'post2',
            'content'=>'content 2',
            'path'=>'path2',
            'author'=>'author 2',
            'idcategory'=>2,
            'created_at'=>gmdate('Y-m-d H-i:s',time()+7*3600),
            ],
            ['title'=>'post3',
            'content'=>'content 3',
            'path'=>'path3',
            'author'=>'author 3',
            'idcategory'=>2,
            'created_at'=>gmdate('Y-m-d H-i:s',time()+7*3600),
            ],
            ['title'=>'post4',
            'content'=>'content 4',
            'path'=>'path4',
            'author'=>'author 4',
            'idcategory'=>1,
            'created_at'=>gmdate('Y-m-d H-i:s',time()+7*3600),
            ],
            ['title'=>'post5',
            'content'=>'content 5',
            'path'=>'path5',
            'author'=>'author 5',
            'idcategory'=>1,
            'created_at'=>gmdate('Y-m-d H-i:s',time()+7*3600),
            ],
        ];
        DB::table('posts')->insert($data);
        // $this->call("OthersTableSeeder");
    }
}
