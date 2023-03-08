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
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 39,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 40,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 41,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 42,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 43,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 44,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 45,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 46,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 47,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 48,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 49,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 50,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 51,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 52,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 53,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 54,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 55,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 56,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 57,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 58,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 59,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 60,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 61,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 62,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 63,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 64,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 65,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 66,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 67,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 68,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 69,
                'title' => 'campaign_create',
            ],
            [
                'id'    => 70,
                'title' => 'campaign_edit',
            ],
            [
                'id'    => 71,
                'title' => 'campaign_show',
            ],
            [
                'id'    => 72,
                'title' => 'campaign_delete',
            ],
            [
                'id'    => 73,
                'title' => 'campaign_access',
            ],
            [
                'id'    => 74,
                'title' => 'donation_create',
            ],
            [
                'id'    => 75,
                'title' => 'donation_edit',
            ],
            [
                'id'    => 76,
                'title' => 'donation_show',
            ],
            [
                'id'    => 77,
                'title' => 'donation_delete',
            ],
            [
                'id'    => 78,
                'title' => 'donation_access',
            ],
            [
                'id'    => 79,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 80,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 81,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 82,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 83,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 84,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 85,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 86,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 87,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 88,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 89,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 90,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 91,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 92,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 93,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 94,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 95,
                'title' => 'product_create',
            ],
            [
                'id'    => 96,
                'title' => 'product_edit',
            ],
            [
                'id'    => 97,
                'title' => 'product_show',
            ],
            [
                'id'    => 98,
                'title' => 'product_delete',
            ],
            [
                'id'    => 99,
                'title' => 'product_access',
            ],
            [
                'id'    => 100,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 101,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 102,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 103,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 104,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 105,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 106,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 107,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 108,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 109,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 110,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 111,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 112,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 113,
                'title' => 'adoption_create',
            ],
            [
                'id'    => 114,
                'title' => 'adoption_edit',
            ],
            [
                'id'    => 115,
                'title' => 'adoption_show',
            ],
            [
                'id'    => 116,
                'title' => 'adoption_delete',
            ],
            [
                'id'    => 117,
                'title' => 'adoption_access',
            ],
            [
                'id'    => 118,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
