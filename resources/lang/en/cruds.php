<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'locale'                   => 'Locale',
            'locale_helper'            => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'surname'                  => 'Surname',
            'surname_helper'           => ' ',
            'phone_number'             => 'Phone Number',
            'phone_number_helper'      => ' ',
            'investor_type'            => 'Investor Type',
            'investor_type_helper'     => ' ',
            'address'                  => 'Address',
            'address_helper'           => ' ',
            'city'                     => 'City',
            'city_helper'              => ' ',
            'zip_code'                 => 'Zip Code',
            'zip_code_helper'          => ' ',
            'vat'                      => 'Vat',
            'vat_helper'               => ' ',
            'refcode'                  => 'Refcode',
            'refcode_helper'           => ' ',
            'user_type'                => 'User Type',
            'user_type_helper'         => ' ',
        ],
    ],
    'productManagement' => [
        'title'          => 'Opportunity Management',
        'title_singular' => 'Opportunity Management',
    ],
    'productCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'photo'              => 'Photo',
            'photo_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'productTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'product' => [
        'title'          => 'Opportunity',
        'title_singular' => 'Opportunity',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'name'                         => 'Name',
            'name_helper'                  => ' ',
            'description'                  => 'Description',
            'description_helper'           => ' ',
            'category'                     => 'Categories',
            'category_helper'              => ' ',
            'photo'                        => 'Photo',
            'photo_helper'                 => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
            'location'                     => 'Location',
            'location_helper'              => ' ',
            'short_description'            => 'Short Description',
            'short_description_helper'     => ' ',
            'opportunity_code'             => 'Opportunity Code',
            'opportunity_code_helper'      => ' ',
            'maximum_target'               => 'Maximum Target',
            'maximum_target_helper'        => ' ',
            'minimum_target'               => 'Minimum Target',
            'minimum_target_helper'        => ' ',
            'roi'                          => 'Roi',
            'roi_helper'                   => ' ',
            'start_founding'               => 'Start Founding',
            'start_founding_helper'        => ' ',
            'end_founding'                 => 'End Founding',
            'end_founding_helper'          => ' ',
            'risk'                         => 'Risk',
            'risk_helper'                  => 'risk',
            'repayment'                    => 'Repayment',
            'repayment_helper'             => ' ',
            'manager_prepay_invest'        => 'Manager Prepay Invest',
            'manager_prepay_invest_helper' => ' ',
            'prepay_invest'                => 'Prepay Invest',
            'prepay_invest_helper'         => ' ',
            'email_owner'                  => 'Email Owner',
            'email_owner_helper'           => ' ',
            'section'                      => 'Section',
            'section_helper'               => ' ',
            'financial_details'            => 'Financial Details',
            'financial_details_helper'     => ' ',
            'documents'                    => 'Documents',
            'documents_helper'             => ' ',
            'state'                        => 'State',
            'state_helper'                 => ' ',
            'bonus_multiplier'             => 'Bonus Multiplier',
            'bonus_multiplier_helper'      => ' ',
        ],
    ],
    'faqManagement' => [
        'title'          => 'FAQ Management',
        'title_singular' => 'FAQ Management',
    ],
    'faqCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'faqQuestion' => [
        'title'          => 'Questions',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'question'          => 'Question',
            'question_helper'   => ' ',
            'answer'            => 'Answer',
            'answer_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'smartWallet' => [
        'title'          => 'Smart Wallet',
        'title_singular' => 'Smart Wallet',
    ],
    'manualBonu' => [
        'title'          => 'Manual Bonus',
        'title_singular' => 'Manual Bonu',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'value'             => 'Value',
            'value_helper'      => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'extraBonu' => [
        'title'          => 'Extra Bonus',
        'title_singular' => 'Extra Bonu',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'value'             => 'Value',
            'value_helper'      => ' ',
            'every_when'        => 'Every When',
            'every_when_helper' => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'transaction' => [
        'title'          => 'Transactions',
        'title_singular' => 'Transaction',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'opportunity_code'        => 'Opportunity Code',
            'opportunity_code_helper' => ' ',
            'user'                    => 'User',
            'user_helper'             => ' ',
            'invested'                => 'Invested',
            'invested_helper'         => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'owner'                   => 'Owner',
            'owner_helper'            => ' ',
        ],
    ],
    'wallet' => [
        'title'          => 'Wallet',
        'title_singular' => 'Wallet',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'user'                 => 'User',
            'user_helper'          => ' ',
            'real_money'           => 'Real Money',
            'real_money_helper'    => ' ',
            'virtual_money'        => 'Virtual Money',
            'virtual_money_helper' => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'ambassador' => [
        'title'          => 'Ambassador',
        'title_singular' => 'Ambassador',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'user'               => 'User',
            'user_helper'        => ' ',
            'verified_at'        => 'Verified At',
            'verified_at_helper' => ' ',
            'invested'           => 'Invested',
            'invested_helper'    => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'owner'              => 'Owner',
            'owner_helper'       => ' ',
        ],
    ],
    'advisor' => [
        'title'          => 'Advisor',
        'title_singular' => 'Advisor',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'user_email'          => 'User Email',
            'user_email_helper'   => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
            'owner'               => 'Owner',
            'owner_helper'        => ' ',
            'transactions'        => 'Transactions',
            'transactions_helper' => ' ',
        ],
    ],
];
