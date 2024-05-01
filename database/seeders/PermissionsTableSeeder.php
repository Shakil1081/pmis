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
                'title' => 'division_create',
            ],
            [
                'id'    => 18,
                'title' => 'division_edit',
            ],
            [
                'id'    => 19,
                'title' => 'division_show',
            ],
            [
                'id'    => 20,
                'title' => 'division_delete',
            ],
            [
                'id'    => 21,
                'title' => 'division_access',
            ],
            [
                'id'    => 22,
                'title' => 'configuration_access',
            ],
            [
                'id'    => 23,
                'title' => 'district_create',
            ],
            [
                'id'    => 24,
                'title' => 'district_edit',
            ],
            [
                'id'    => 25,
                'title' => 'district_show',
            ],
            [
                'id'    => 26,
                'title' => 'district_delete',
            ],
            [
                'id'    => 27,
                'title' => 'district_access',
            ],
            [
                'id'    => 28,
                'title' => 'maritalstatus_create',
            ],
            [
                'id'    => 29,
                'title' => 'maritalstatus_edit',
            ],
            [
                'id'    => 30,
                'title' => 'maritalstatus_show',
            ],
            [
                'id'    => 31,
                'title' => 'maritalstatus_delete',
            ],
            [
                'id'    => 32,
                'title' => 'maritalstatus_access',
            ],
            [
                'id'    => 33,
                'title' => 'gender_create',
            ],
            [
                'id'    => 34,
                'title' => 'gender_edit',
            ],
            [
                'id'    => 35,
                'title' => 'gender_show',
            ],
            [
                'id'    => 36,
                'title' => 'gender_delete',
            ],
            [
                'id'    => 37,
                'title' => 'gender_access',
            ],
            [
                'id'    => 38,
                'title' => 'religion_create',
            ],
            [
                'id'    => 39,
                'title' => 'religion_edit',
            ],
            [
                'id'    => 40,
                'title' => 'religion_show',
            ],
            [
                'id'    => 41,
                'title' => 'religion_delete',
            ],
            [
                'id'    => 42,
                'title' => 'religion_access',
            ],
            [
                'id'    => 43,
                'title' => 'blood_group_create',
            ],
            [
                'id'    => 44,
                'title' => 'blood_group_edit',
            ],
            [
                'id'    => 45,
                'title' => 'blood_group_show',
            ],
            [
                'id'    => 46,
                'title' => 'blood_group_delete',
            ],
            [
                'id'    => 47,
                'title' => 'blood_group_access',
            ],
            [
                'id'    => 48,
                'title' => 'quotum_create',
            ],
            [
                'id'    => 49,
                'title' => 'quotum_edit',
            ],
            [
                'id'    => 50,
                'title' => 'quotum_show',
            ],
            [
                'id'    => 51,
                'title' => 'quotum_delete',
            ],
            [
                'id'    => 52,
                'title' => 'quotum_access',
            ],
            [
                'id'    => 53,
                'title' => 'examination_create',
            ],
            [
                'id'    => 54,
                'title' => 'examination_edit',
            ],
            [
                'id'    => 55,
                'title' => 'examination_show',
            ],
            [
                'id'    => 56,
                'title' => 'examination_access',
            ],
            [
                'id'    => 57,
                'title' => 'exam_board_create',
            ],
            [
                'id'    => 58,
                'title' => 'exam_board_edit',
            ],
            [
                'id'    => 59,
                'title' => 'exam_board_show',
            ],
            [
                'id'    => 60,
                'title' => 'exam_board_delete',
            ],
            [
                'id'    => 61,
                'title' => 'exam_board_access',
            ],
            [
                'id'    => 62,
                'title' => 'office_unit_create',
            ],
            [
                'id'    => 63,
                'title' => 'office_unit_edit',
            ],
            [
                'id'    => 64,
                'title' => 'office_unit_show',
            ],
            [
                'id'    => 65,
                'title' => 'office_unit_delete',
            ],
            [
                'id'    => 66,
                'title' => 'office_unit_access',
            ],
            [
                'id'    => 67,
                'title' => 'designation_create',
            ],
            [
                'id'    => 68,
                'title' => 'designation_edit',
            ],
            [
                'id'    => 69,
                'title' => 'designation_show',
            ],
            [
                'id'    => 70,
                'title' => 'designation_delete',
            ],
            [
                'id'    => 71,
                'title' => 'designation_access',
            ],
            [
                'id'    => 72,
                'title' => 'leave_category_create',
            ],
            [
                'id'    => 73,
                'title' => 'leave_category_edit',
            ],
            [
                'id'    => 74,
                'title' => 'leave_category_show',
            ],
            [
                'id'    => 75,
                'title' => 'leave_category_delete',
            ],
            [
                'id'    => 76,
                'title' => 'leave_category_access',
            ],
            [
                'id'    => 77,
                'title' => 'leave_type_create',
            ],
            [
                'id'    => 78,
                'title' => 'leave_type_edit',
            ],
            [
                'id'    => 79,
                'title' => 'leave_type_show',
            ],
            [
                'id'    => 80,
                'title' => 'leave_type_delete',
            ],
            [
                'id'    => 81,
                'title' => 'leave_type_access',
            ],
            [
                'id'    => 82,
                'title' => 'training_type_create',
            ],
            [
                'id'    => 83,
                'title' => 'training_type_edit',
            ],
            [
                'id'    => 84,
                'title' => 'training_type_show',
            ],
            [
                'id'    => 85,
                'title' => 'training_type_delete',
            ],
            [
                'id'    => 86,
                'title' => 'training_type_access',
            ],
            [
                'id'    => 87,
                'title' => 'country_create',
            ],
            [
                'id'    => 88,
                'title' => 'country_edit',
            ],
            [
                'id'    => 89,
                'title' => 'country_show',
            ],
            [
                'id'    => 90,
                'title' => 'country_delete',
            ],
            [
                'id'    => 91,
                'title' => 'country_access',
            ],
            [
                'id'    => 92,
                'title' => 'travel_purpose_create',
            ],
            [
                'id'    => 93,
                'title' => 'travel_purpose_edit',
            ],
            [
                'id'    => 94,
                'title' => 'travel_purpose_show',
            ],
            [
                'id'    => 95,
                'title' => 'travel_purpose_delete',
            ],
            [
                'id'    => 96,
                'title' => 'travel_purpose_access',
            ],
            [
                'id'    => 97,
                'title' => 'employee_list_create',
            ],
            [
                'id'    => 98,
                'title' => 'employee_list_edit',
            ],
            [
                'id'    => 99,
                'title' => 'employee_list_show',
            ],
            [
                'id'    => 100,
                'title' => 'employee_list_delete',
            ],
            [
                'id'    => 101,
                'title' => 'employee_list_access',
            ],
            [
                'id'    => 102,
                'title' => 'license_type_create',
            ],
            [
                'id'    => 103,
                'title' => 'license_type_edit',
            ],
            [
                'id'    => 104,
                'title' => 'license_type_show',
            ],
            [
                'id'    => 105,
                'title' => 'license_type_delete',
            ],
            [
                'id'    => 106,
                'title' => 'license_type_access',
            ],
            [
                'id'    => 107,
                'title' => 'job_type_create',
            ],
            [
                'id'    => 108,
                'title' => 'job_type_edit',
            ],
            [
                'id'    => 109,
                'title' => 'job_type_show',
            ],
            [
                'id'    => 110,
                'title' => 'job_type_delete',
            ],
            [
                'id'    => 111,
                'title' => 'job_type_access',
            ],
            [
                'id'    => 112,
                'title' => 'grade_create',
            ],
            [
                'id'    => 113,
                'title' => 'grade_edit',
            ],
            [
                'id'    => 114,
                'title' => 'grade_show',
            ],
            [
                'id'    => 115,
                'title' => 'grade_delete',
            ],
            [
                'id'    => 116,
                'title' => 'grade_access',
            ],
            [
                'id'    => 117,
                'title' => 'employee_detail_access',
            ],
            [
                'id'    => 118,
                'title' => 'education_informatione_create',
            ],
            [
                'id'    => 119,
                'title' => 'education_informatione_edit',
            ],
            [
                'id'    => 120,
                'title' => 'education_informatione_show',
            ],
            [
                'id'    => 121,
                'title' => 'education_informatione_delete',
            ],
            [
                'id'    => 122,
                'title' => 'education_informatione_access',
            ],
            [
                'id'    => 123,
                'title' => 'professionale_create',
            ],
            [
                'id'    => 124,
                'title' => 'professionale_edit',
            ],
            [
                'id'    => 125,
                'title' => 'professionale_show',
            ],
            [
                'id'    => 126,
                'title' => 'professionale_delete',
            ],
            [
                'id'    => 127,
                'title' => 'professionale_access',
            ],
            [
                'id'    => 128,
                'title' => 'addressdetaile_create',
            ],
            [
                'id'    => 129,
                'title' => 'addressdetaile_edit',
            ],
            [
                'id'    => 130,
                'title' => 'addressdetaile_show',
            ],
            [
                'id'    => 131,
                'title' => 'addressdetaile_delete',
            ],
            [
                'id'    => 132,
                'title' => 'addressdetaile_access',
            ],
            [
                'id'    => 133,
                'title' => 'upazila_create',
            ],
            [
                'id'    => 134,
                'title' => 'upazila_edit',
            ],
            [
                'id'    => 135,
                'title' => 'upazila_show',
            ],
            [
                'id'    => 136,
                'title' => 'upazila_delete',
            ],
            [
                'id'    => 137,
                'title' => 'upazila_access',
            ],
            [
                'id'    => 138,
                'title' => 'emergence_contacte_create',
            ],
            [
                'id'    => 139,
                'title' => 'emergence_contacte_edit',
            ],
            [
                'id'    => 140,
                'title' => 'emergence_contacte_show',
            ],
            [
                'id'    => 141,
                'title' => 'emergence_contacte_delete',
            ],
            [
                'id'    => 142,
                'title' => 'emergence_contacte_access',
            ],
            [
                'id'    => 143,
                'title' => 'spouse_informatione_create',
            ],
            [
                'id'    => 144,
                'title' => 'spouse_informatione_edit',
            ],
            [
                'id'    => 145,
                'title' => 'spouse_informatione_show',
            ],
            [
                'id'    => 146,
                'title' => 'spouse_informatione_delete',
            ],
            [
                'id'    => 147,
                'title' => 'spouse_informatione_access',
            ],
            [
                'id'    => 148,
                'title' => 'child_create',
            ],
            [
                'id'    => 149,
                'title' => 'child_edit',
            ],
            [
                'id'    => 150,
                'title' => 'child_show',
            ],
            [
                'id'    => 151,
                'title' => 'child_delete',
            ],
            [
                'id'    => 152,
                'title' => 'child_access',
            ],
            [
                'id'    => 153,
                'title' => 'job_history_create',
            ],
            [
                'id'    => 154,
                'title' => 'job_history_edit',
            ],
            [
                'id'    => 155,
                'title' => 'job_history_show',
            ],
            [
                'id'    => 156,
                'title' => 'job_history_delete',
            ],
            [
                'id'    => 157,
                'title' => 'job_history_access',
            ],
            [
                'id'    => 158,
                'title' => 'employee_promotion_create',
            ],
            [
                'id'    => 159,
                'title' => 'employee_promotion_edit',
            ],
            [
                'id'    => 160,
                'title' => 'employee_promotion_show',
            ],
            [
                'id'    => 161,
                'title' => 'employee_promotion_delete',
            ],
            [
                'id'    => 162,
                'title' => 'employee_promotion_access',
            ],
            [
                'id'    => 163,
                'title' => 'leave_record_create',
            ],
            [
                'id'    => 164,
                'title' => 'leave_record_edit',
            ],
            [
                'id'    => 165,
                'title' => 'leave_record_show',
            ],
            [
                'id'    => 166,
                'title' => 'leave_record_delete',
            ],
            [
                'id'    => 167,
                'title' => 'leave_record_access',
            ],
            [
                'id'    => 168,
                'title' => 'training_create',
            ],
            [
                'id'    => 169,
                'title' => 'training_edit',
            ],
            [
                'id'    => 170,
                'title' => 'training_show',
            ],
            [
                'id'    => 171,
                'title' => 'training_delete',
            ],
            [
                'id'    => 172,
                'title' => 'training_access',
            ],
            [
                'id'    => 173,
                'title' => 'traveltype_create',
            ],
            [
                'id'    => 174,
                'title' => 'traveltype_edit',
            ],
            [
                'id'    => 175,
                'title' => 'traveltype_show',
            ],
            [
                'id'    => 176,
                'title' => 'traveltype_delete',
            ],
            [
                'id'    => 177,
                'title' => 'traveltype_access',
            ],
            [
                'id'    => 178,
                'title' => 'travel_record_create',
            ],
            [
                'id'    => 179,
                'title' => 'travel_record_edit',
            ],
            [
                'id'    => 180,
                'title' => 'travel_record_show',
            ],
            [
                'id'    => 181,
                'title' => 'travel_record_delete',
            ],
            [
                'id'    => 182,
                'title' => 'travel_record_access',
            ],
            [
                'id'    => 183,
                'title' => 'extracurriculam_create',
            ],
            [
                'id'    => 184,
                'title' => 'extracurriculam_edit',
            ],
            [
                'id'    => 185,
                'title' => 'extracurriculam_show',
            ],
            [
                'id'    => 186,
                'title' => 'extracurriculam_delete',
            ],
            [
                'id'    => 187,
                'title' => 'extracurriculam_access',
            ],
            [
                'id'    => 188,
                'title' => 'publication_create',
            ],
            [
                'id'    => 189,
                'title' => 'publication_edit',
            ],
            [
                'id'    => 190,
                'title' => 'publication_show',
            ],
            [
                'id'    => 191,
                'title' => 'publication_delete',
            ],
            [
                'id'    => 192,
                'title' => 'publication_access',
            ],
            [
                'id'    => 193,
                'title' => 'language_create',
            ],
            [
                'id'    => 194,
                'title' => 'language_edit',
            ],
            [
                'id'    => 195,
                'title' => 'language_show',
            ],
            [
                'id'    => 196,
                'title' => 'language_delete',
            ],
            [
                'id'    => 197,
                'title' => 'language_access',
            ],
            [
                'id'    => 198,
                'title' => 'criminal_prosecutione_create',
            ],
            [
                'id'    => 199,
                'title' => 'criminal_prosecutione_edit',
            ],
            [
                'id'    => 200,
                'title' => 'criminal_prosecutione_show',
            ],
            [
                'id'    => 201,
                'title' => 'criminal_prosecutione_delete',
            ],
            [
                'id'    => 202,
                'title' => 'criminal_prosecutione_access',
            ],
            [
                'id'    => 203,
                'title' => 'criminalpro_disciplinary_create',
            ],
            [
                'id'    => 204,
                'title' => 'criminalpro_disciplinary_edit',
            ],
            [
                'id'    => 205,
                'title' => 'criminalpro_disciplinary_show',
            ],
            [
                'id'    => 206,
                'title' => 'criminalpro_disciplinary_delete',
            ],
            [
                'id'    => 207,
                'title' => 'criminalpro_disciplinary_access',
            ],
            [
                'id'    => 208,
                'title' => 'acr_monitoring_create',
            ],
            [
                'id'    => 209,
                'title' => 'acr_monitoring_edit',
            ],
            [
                'id'    => 210,
                'title' => 'acr_monitoring_show',
            ],
            [
                'id'    => 211,
                'title' => 'acr_monitoring_delete',
            ],
            [
                'id'    => 212,
                'title' => 'acr_monitoring_access',
            ],
            [
                'id'    => 213,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 214,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 215,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 216,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 217,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 218,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 219,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 220,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 221,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 222,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 223,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 224,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 225,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 226,
                'title' => 'edu_config_access',
            ],
            [
                'id'    => 227,
                'title' => 'office_config_access',
            ],
            [
                'id'    => 228,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
