<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeederlist extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['name_en' => 'Afghanistan', 'name_bn' => 'আফগানিস্তান'],
            ['name_en' => 'Albania', 'name_bn' => 'আলবেনিয়া'],
            ['name_en' => 'Algeria', 'name_bn' => 'আলজেরিয়া'],
            ['name_en' => 'Andorra', 'name_bn' => 'আন্ডোরা'],
            ['name_en' => 'Angola', 'name_bn' => 'অ্যাঙ্গোলা'],
            ['name_en' => 'Antigua and Barbuda', 'name_bn' => 'অ্যান্টিগুয়া ও বারবুডা'],
            ['name_en' => 'Argentina', 'name_bn' => 'আর্জেন্টিনা'],
            ['name_en' => 'Armenia', 'name_bn' => 'আর্মেনিয়া'],
            ['name_en' => 'Australia', 'name_bn' => 'অস্ট্রেলিয়া'],
            ['name_en' => 'Austria', 'name_bn' => 'অস্ট্রিয়া'],
            ['name_en' => 'Azerbaijan', 'name_bn' => 'আজারবাইজান'],
            ['name_en' => 'Bahamas', 'name_bn' => 'বাহামা'],
            ['name_en' => 'Bahrain', 'name_bn' => 'বাহরাইন'],
            ['name_en' => 'Bangladesh', 'name_bn' => 'বাংলাদেশ'],
            ['name_en' => 'Barbados', 'name_bn' => 'বার্বাডোস'],
            ['name_en' => 'Belarus', 'name_bn' => 'বেলারুশ'],
            ['name_en' => 'Belgium', 'name_bn' => 'বেলজিয়াম'],
            ['name_en' => 'Belize', 'name_bn' => 'বেলিজ'],
            ['name_en' => 'Benin', 'name_bn' => 'বেনিন'],
            ['name_en' => 'Bhutan', 'name_bn' => 'ভুটান'],
            ['name_en' => 'Bolivia', 'name_bn' => 'বলিভিয়া'],
            ['name_en' => 'Bosnia and Herzegovina', 'name_bn' => 'বসনিয়া ও হার্জেগোভিনা'],
            ['name_en' => 'Botswana', 'name_bn' => 'বটসোয়ানা'],
            ['name_en' => 'Brazil', 'name_bn' => 'ব্রাজিল'],
            ['name_en' => 'Brunei', 'name_bn' => 'ব্রুনেই'],
            ['name_en' => 'Bulgaria', 'name_bn' => 'বুলগেরিয়া'],
            ['name_en' => 'Burkina Faso', 'name_bn' => 'বুর্কিনা ফাসো'],
            ['name_en' => 'Burundi', 'name_bn' => 'বুরুন্ডি'],
            ['name_en' => 'Cabo Verde', 'name_bn' => 'কেপ ভার্দে'],
            ['name_en' => 'Cambodia', 'name_bn' => 'কম্বোডিয়া'],
            ['name_en' => 'Cameroon', 'name_bn' => 'ক্যামেরুন'],
            ['name_en' => 'Canada', 'name_bn' => 'কানাডা'],
            ['name_en' => 'Central African Republic', 'name_bn' => 'মধ্য আফ্রিকান প্রজাতন্ত্র'],
            ['name_en' => 'Chad', 'name_bn' => 'চাদ'],
            ['name_en' => 'Chile', 'name_bn' => 'চিলি'],
            ['name_en' => 'China', 'name_bn' => 'চীন'],
            ['name_en' => 'Colombia', 'name_bn' => 'কলম্বিয়া'],
            ['name_en' => 'Comoros', 'name_bn' => 'কমোরোস'],
            ['name_en' => 'Congo (Congo-Brazzaville)', 'name_bn' => 'কঙ্গো (কঙ্গো-ব্রাজাভিল)'],
            ['name_en' => 'Costa Rica', 'name_bn' => 'কোস্টা রিকা'],
            ['name_en' => 'Croatia', 'name_bn' => 'ক্রোয়েশিয়া'],
            ['name_en' => 'Cuba', 'name_bn' => 'কিউবা'],
            ['name_en' => 'Cyprus', 'name_bn' => 'সাইপ্রাস'],
            ['name_en' => 'Czechia (Czech Republic)', 'name_bn' => 'চেকিয়া (চেক প্রজাতন্ত্র)'],
            ['name_en' => 'Denmark', 'name_bn' => 'ডেনমার্ক'],
            ['name_en' => 'Djibouti', 'name_bn' => 'জিবুতি'],
            ['name_en' => 'Dominica', 'name_bn' => 'ডোমিনিকা'],
            ['name_en' => 'Dominican Republic', 'name_bn' => 'ডোমিনিকান প্রজাতন্ত্র'],
            ['name_en' => 'Ecuador', 'name_bn' => 'ইকুয়েডর'],
            ['name_en' => 'Egypt', 'name_bn' => 'মিশর'],
            ['name_en' => 'El Salvador', 'name_bn' => 'এল সালভাদোর'],
            ['name_en' => 'Equatorial Guinea', 'name_bn' => 'নিরক্ষীয় গিনি'],
            ['name_en' => 'Eritrea', 'name_bn' => 'ইরিত্রিয়া'],
            ['name_en' => 'Estonia', 'name_bn' => 'এস্তোনিয়া'],
            ['name_en' => 'Eswatini (fmr. "Swaziland")', 'name_bn' => 'ইসওয়াতিনি (প্রাক্ত "সোয়াজিল্যান্ড")'],
            ['name_en' => 'Ethiopia', 'name_bn' => 'ইথিওপিয়া'],
            ['name_en' => 'Fiji', 'name_bn' => 'ফিজি'],
            ['name_en' => 'Finland', 'name_bn' => 'ফিনল্যান্ড'],
            ['name_en' => 'France', 'name_bn' => 'ফ্রান্স'],
            ['name_en' => 'Gabon', 'name_bn' => 'গাবন'],
            ['name_en' => 'Gambia', 'name_bn' => 'গাম্বিয়া'],
            ['name_en' => 'Georgia', 'name_bn' => 'জর্জিয়া'],
            ['name_en' => 'Germany', 'name_bn' => 'জার্মানি'],
            ['name_en' => 'Ghana', 'name_bn' => 'ঘানা'],
            ['name_en' => 'Greece', 'name_bn' => 'গ্রীস'],
            ['name_en' => 'Grenada', 'name_bn' => 'গ্রেনাডা'],
            ['name_en' => 'Guatemala', 'name_bn' => 'গুয়াতেমালা'],
            ['name_en' => 'Guinea', 'name_bn' => 'গিনি'],
            ['name_en' => 'Guinea-Bissau', 'name_bn' => 'গিনি-বিসাউ'],
            ['name_en' => 'Guyana', 'name_bn' => 'গায়ানা'],
            ['name_en' => 'Haiti', 'name_bn' => 'হাইতি'],
            ['name_en' => 'Holy See', 'name_bn' => 'পবিত্র দর্শন'],
            ['name_en' => 'Honduras', 'name_bn' => 'হন্ডুরাস'],
            ['name_en' => 'Hungary', 'name_bn' => 'হাঙ্গেরি'],
            ['name_en' => 'Iceland', 'name_bn' => 'আইসল্যান্ড'],
            ['name_en' => 'India', 'name_bn' => 'ভারত'],
            ['name_en' => 'Indonesia', 'name_bn' => 'ইন্দোনেশিয়া'],
            ['name_en' => 'Iran', 'name_bn' => 'ইরান'],
            ['name_en' => 'Iraq', 'name_bn' => 'ইরাক'],
            ['name_en' => 'Ireland', 'name_bn' => 'আয়ারল্যান্ড'],
            ['name_en' => 'Israel', 'name_bn' => 'ইসরায়েল'],
            ['name_en' => 'Italy', 'name_bn' => 'ইতালি'],
            ['name_en' => 'Jamaica', 'name_bn' => 'জামাইকা'],
            ['name_en' => 'Japan', 'name_bn' => 'জাপান'],
            ['name_en' => 'Jordan', 'name_bn' => 'জর্ডান'],
            ['name_en' => 'Kazakhstan', 'name_bn' => 'কাজাখস্তান'],
            ['name_en' => 'Kenya', 'name_bn' => 'কেনিয়া'],
            ['name_en' => 'Kiribati', 'name_bn' => 'কিরিবাতি'],
            ['name_en' => 'Korea, North', 'name_bn' => 'উত্তর কোরিয়া'],
            ['name_en' => 'Korea, South', 'name_bn' => 'দক্ষিণ কোরিয়া'],
            ['name_en' => 'Kosovo', 'name_bn' => 'কসোভো'],
            ['name_en' => 'Kuwait', 'name_bn' => 'কুয়েত'],
            ['name_en' => 'Kyrgyzstan', 'name_bn' => 'কিরগিজিস্তান'],
            ['name_en' => 'Laos', 'name_bn' => 'লাওস'],
            ['name_en' => 'Latvia', 'name_bn' => 'লাটভিয়া'],
            ['name_en' => 'Lebanon', 'name_bn' => 'লেবানন'],
            ['name_en' => 'Lesotho', 'name_bn' => 'লেসোথো'],
            ['name_en' => 'Liberia', 'name_bn' => 'লাইবেরিয়া'],
            ['name_en' => 'Libya', 'name_bn' => 'লিবিয়া'],
            ['name_en' => 'Liechtenstein', 'name_bn' => 'লিচেনস্টেইন'],
            ['name_en' => 'Lithuania', 'name_bn' => 'লিথুয়ানিয়া'],
            ['name_en' => 'Luxembourg', 'name_bn' => 'লাক্সেমবার্গ'],
            ['name_en' => 'Madagascar', 'name_bn' => 'মাদাগাস্কার'],
            ['name_en' => 'Malawi', 'name_bn' => 'মালাউই'],
            ['name_en' => 'Malaysia', 'name_bn' => 'মালয়েশিয়া'],
            ['name_en' => 'Maldives', 'name_bn' => 'মালদ্বীপ'],
            ['name_en' => 'Mali', 'name_bn' => 'মালি'],
            ['name_en' => 'Malta', 'name_bn' => 'মাল্টা'],
            ['name_en' => 'Marshall Islands', 'name_bn' => 'মার্শাল দ্বীপপুঞ্জ'],
            ['name_en' => 'Mauritania', 'name_bn' => 'মরিতানিয়া'],
            ['name_en' => 'Mauritius', 'name_bn' => 'মরিশাস'],
            ['name_en' => 'Mexico', 'name_bn' => 'মেক্সিকো'],
            ['name_en' => 'Micronesia', 'name_bn' => 'মাইক্রোনেশিয়া'],
            ['name_en' => 'Moldova', 'name_bn' => 'মল্দোভা'],
            ['name_en' => 'Monaco', 'name_bn' => 'মোনাকো'],
            ['name_en' => 'Mongolia', 'name_bn' => 'মঙ্গোলিয়া'],
            ['name_en' => 'Montenegro', 'name_bn' => 'মন্টেনিগ্রো'],
            ['name_en' => 'Morocco', 'name_bn' => 'মরক্কো'],
            ['name_en' => 'Mozambique', 'name_bn' => 'মোজাম্বিক'],
            ['name_en' => 'Myanmar (formerly Burma)', 'name_bn' => 'মায়ানমার (পূর্ববর্তী বর্মা)'],
            ['name_en' => 'Namibia', 'name_bn' => 'নামিবিয়া'],
            ['name_en' => 'Nauru', 'name_bn' => 'নাউরু'],
            ['name_en' => 'Nepal', 'name_bn' => 'নেপাল'],
            ['name_en' => 'Netherlands', 'name_bn' => 'নেদারল্যান্ডস'],
            ['name_en' => 'New Zealand', 'name_bn' => 'নিউজিল্যান্ড'],
            ['name_en' => 'Nicaragua', 'name_bn' => 'নিকারাগুয়া'],
            ['name_en' => 'Niger', 'name_bn' => 'নাইজার'],
            ['name_en' => 'Nigeria', 'name_bn' => 'নাইজেরিয়া'],
            ['name_en' => 'North Macedonia', 'name_bn' => 'উত্তর ম্যাসেডোনিয়া'],
            ['name_en' => 'Norway', 'name_bn' => 'নরওয়ে'],
            ['name_en' => 'Oman', 'name_bn' => 'ওমান'],
            ['name_en' => 'Pakistan', 'name_bn' => 'পাকিস্তান'],
            ['name_en' => 'Palau', 'name_bn' => 'পালাউ'],
            ['name_en' => 'Palestine State', 'name_bn' => 'প্যালেস্টাইন রাষ্ট্র'],
            ['name_en' => 'Panama', 'name_bn' => 'পানামা'],
            ['name_en' => 'Papua New Guinea', 'name_bn' => 'পাপুয়া নিউ গিনি'],
            ['name_en' => 'Paraguay', 'name_bn' => 'প্যারাগুয়ে'],
            ['name_en' => 'Peru', 'name_bn' => 'পেরু'],
            ['name_en' => 'Philippines', 'name_bn' => 'ফিলিপাইন্স'],
            ['name_en' => 'Poland', 'name_bn' => 'পোল্যান্ড'],
            ['name_en' => 'Portugal', 'name_bn' => 'পর্তুগাল'],
            ['name_en' => 'Qatar', 'name_bn' => 'কাতার'],
            ['name_en' => 'Romania', 'name_bn' => 'রুমানিয়া'],
            ['name_en' => 'Russia', 'name_bn' => 'রাশিয়া'],
            ['name_en' => 'Rwanda', 'name_bn' => 'রুয়ান্ডা'],
            ['name_en' => 'Saint Kitts and Nevis', 'name_bn' => 'সেন্ট কিটস ও নেভিস'],
            ['name_en' => 'Saint Lucia', 'name_bn' => 'সেন্ট লুসিয়া'],
            ['name_en' => 'Saint Vincent and the Grenadines', 'name_bn' => 'সেন্ট ভিনসেন্ট এবং গ্রেনাডিনস'],
            ['name_en' => 'Samoa', 'name_bn' => 'সামোয়া'],
            ['name_en' => 'San Marino', 'name_bn' => 'সান মারিনো'],
            ['name_en' => 'Sao Tome and Principe', 'name_bn' => 'সাও টোমি ও প্রিন্সিপি'],
            ['name_en' => 'Saudi Arabia', 'name_bn' => 'সৌদি আরব'],
            ['name_en' => 'Senegal', 'name_bn' => 'সেনেগাল'],
            ['name_en' => 'Serbia', 'name_bn' => 'সার্বিয়া'],
            ['name_en' => 'Seychelles', 'name_bn' => 'সিসিলি'],
            ['name_en' => 'Sierra Leone', 'name_bn' => 'সিয়েরা লিওন'],
            ['name_en' => 'Singapore', 'name_bn' => 'সিঙ্গাপুর'],
            ['name_en' => 'Slovakia', 'name_bn' => 'স্লোভাকিয়া'],
            ['name_en' => 'Slovenia', 'name_bn' => 'স্লোভেনিয়া'],
            ['name_en' => 'Solomon Islands', 'name_bn' => 'সলোমন দ্বীপপুঞ্জ'],
            ['name_en' => 'Somalia', 'name_bn' => 'সোমালিয়া'],
            ['name_en' => 'South Africa', 'name_bn' => 'দক্ষিণ আফ্রিকা'],
            ['name_en' => 'South Sudan', 'name_bn' => 'দক্ষিণ সুদান'],
            ['name_en' => 'Spain', 'name_bn' => 'স্পেন'],
            ['name_en' => 'Sri Lanka', 'name_bn' => 'শ্রীলঙ্কা'],
            ['name_en' => 'Sudan', 'name_bn' => 'সুদান'],
            ['name_en' => 'Suriname', 'name_bn' => 'সুরিনাম'],
            ['name_en' => 'Sweden', 'name_bn' => 'সুইডেন'],
            ['name_en' => 'Switzerland', 'name_bn' => 'সুইজারল্যান্ড'],
            ['name_en' => 'Syria', 'name_bn' => 'সিরিয়া'],
            ['name_en' => 'Tajikistan', 'name_bn' => 'তাজিকিস্তান'],
            ['name_en' => 'Tanzania', 'name_bn' => 'তাঞ্জানিয়া'],
            ['name_en' => 'Thailand', 'name_bn' => 'থাইল্যান্ড'],
            ['name_en' => 'Timor-Leste', 'name_bn' => 'তিমুর-লেস্তে'],
            ['name_en' => 'Togo', 'name_bn' => 'টোগো'],
            ['name_en' => 'Tonga', 'name_bn' => 'টঙ্গা'],
            ['name_en' => 'Trinidad and Tobago', 'name_bn' => 'ট্রিনিডাড ও টোবাগো'],
            ['name_en' => 'Tunisia', 'name_bn' => 'তিউনিসিয়া'],
            ['name_en' => 'Turkey', 'name_bn' => 'তুরস্ক'],
            ['name_en' => 'Turkmenistan', 'name_bn' => 'তুর্কমেনিস্তান'],
            ['name_en' => 'Tuvalu', 'name_bn' => 'টুভালু'],
            ['name_en' => 'Uganda', 'name_bn' => 'উগান্ডা'],
            ['name_en' => 'Ukraine', 'name_bn' => 'ইউক্রেন'],
            ['name_en' => 'United Arab Emirates', 'name_bn' => 'সংযুক্ত আরব আমিরাত'],
            ['name_en' => 'United Kingdom', 'name_bn' => 'যুক্তরাজ্য'],
            ['name_en' => 'United States of America', 'name_bn' => 'মার্কিন যুক্তরাষ্ট্র'],
            ['name_en' => 'Uruguay', 'name_bn' => 'উরুগুয়ে'],
            ['name_en' => 'Uzbekistan', 'name_bn' => 'উজবেকিস্তান'],
            ['name_en' => 'Vanuatu', 'name_bn' => 'ভানুয়াটু'],
            ['name_en' => 'Venezuela', 'name_bn' => 'ভেনেজুয়েলা'],
            ['name_en' => 'Vietnam', 'name_bn' => 'ভিয়েতনাম'],
            ['name_en' => 'Yemen', 'name_bn' => 'ইয়েমেন'],
            ['name_en' => 'Zambia', 'name_bn' => 'জাম্বিয়া'],
            ['name_en' => 'Zimbabwe', 'name_bn' => 'জিম্বাবুয়ে'],
        ];

        foreach ($countries as $country) {
            Country::create([
                'name_en' => $country['name_en'],
                'name_bn' => $country['name_bn']
            ]);
        }
    }
}
