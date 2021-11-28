<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_access',
            ],
            [
                'id'    => 4,
                'title' => 'role_create',
            ],
            [
                'id'    => 5,
                'title' => 'role_edit',
            ],
            [
                'id'    => 6,
                'title' => 'role_show',
            ],
            [
                'id'    => 7,
                'title' => 'role_delete',
            ],
            [
                'id'    => 8,
                'title' => 'role_access',
            ],
            [
                'id'    => 9,
                'title' => 'user_create',
            ],
            [
                'id'    => 10,
                'title' => 'user_edit',
            ],
            [
                'id'    => 11,
                'title' => 'user_show',
            ],
            [
                'id'    => 12,
                'title' => 'user_delete',
            ],
            [
                'id'    => 13,
                'title' => 'user_access',
            ],
            [
                'id'    => 14,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 15,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 16,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 17,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 18,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 19,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 20,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 21,
                'title' => 'product_create',
            ],
            [
                'id'    => 22,
                'title' => 'product_edit',
            ],
            [
                'id'    => 23,
                'title' => 'product_show',
            ],
            [
                'id'    => 24,
                'title' => 'product_delete',
            ],
            [
                'id'    => 25,
                'title' => 'product_access',
            ],
            [
                'id'    => 26,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 27,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 28,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 29,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 30,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 31,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 32,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 33,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 34,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 35,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 36,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 37,
                'title' => 'smart_wallet_access',
            ],
            [
                'id'    => 38,
                'title' => 'manual_bonu_create',
            ],
            [
                'id'    => 39,
                'title' => 'manual_bonu_edit',
            ],
            [
                'id'    => 40,
                'title' => 'manual_bonu_show',
            ],
            [
                'id'    => 41,
                'title' => 'manual_bonu_delete',
            ],
            [
                'id'    => 42,
                'title' => 'manual_bonu_access',
            ],
            [
                'id'    => 43,
                'title' => 'extra_bonu_create',
            ],
            [
                'id'    => 44,
                'title' => 'extra_bonu_edit',
            ],
            [
                'id'    => 45,
                'title' => 'extra_bonu_show',
            ],
            [
                'id'    => 46,
                'title' => 'extra_bonu_delete',
            ],
            [
                'id'    => 47,
                'title' => 'extra_bonu_access',
            ],
            [
                'id'    => 48,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 49,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 50,
                'title' => 'wallet_show',
            ],
            [
                'id'    => 51,
                'title' => 'wallet_access',
            ],
            [
                'id'    => 52,
                'title' => 'ambassador_show',
            ],
            [
                'id'    => 53,
                'title' => 'ambassador_access',
            ],
            [
                'id'    => 54,
                'title' => 'advisor_show',
            ],
            [
                'id'    => 55,
                'title' => 'advisor_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
