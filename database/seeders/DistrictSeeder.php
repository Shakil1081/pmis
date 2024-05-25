<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
            ['divisions_id' => 1, 'name_bn' => 'বরগুনা', 'name_en' => 'BARGUNA'],
            ['divisions_id' => 1, 'name_bn' => 'বরিশাল', 'name_en' => 'BARISAL'],
            ['divisions_id' => 1, 'name_bn' => 'ভোলা', 'name_en' => 'BHOLA'],
            ['divisions_id' => 1, 'name_bn' => 'ঝালকাঠি', 'name_en' => 'JHALOKATI'],
            ['divisions_id' => 1, 'name_bn' => 'পটুয়াখালী', 'name_en' => 'PATUAKHALI'],
            ['divisions_id' => 1, 'name_bn' => 'পিরোজপুর', 'name_en' => 'PIROJPUR'],
            ['divisions_id' => 2, 'name_bn' => 'বান্দরবান', 'name_en' => 'BANDARBAN'],
            ['divisions_id' => 2, 'name_bn' => 'ব্রাহ্মণবাড়িয়া', 'name_en' => 'BRAHMANBARIA'],
            ['divisions_id' => 2, 'name_bn' => 'চাঁদপুর', 'name_en' => 'CHANDPUR'],
            ['divisions_id' => 2, 'name_bn' => 'চট্টগ্রাম', 'name_en' => 'CHITTAGONG'],
            ['divisions_id' => 2, 'name_bn' => 'কুমিল্লা', 'name_en' => 'COMILLA'],
            ['divisions_id' => 2, 'name_bn' => 'কক্সবাজার', 'name_en' => 'COX\'S BAZAR'],
            ['divisions_id' => 2, 'name_bn' => 'ফেনী', 'name_en' => 'FENI'],
            ['divisions_id' => 2, 'name_bn' => 'খাগড়াছড়ি', 'name_en' => 'KHAGRACHHARI'],
            ['divisions_id' => 2, 'name_bn' => 'লক্ষ্মীপুর', 'name_en' => 'LAKSHMIPUR'],
            ['divisions_id' => 2, 'name_bn' => 'নোয়াখালী', 'name_en' => 'NOAKHALI'],
            ['divisions_id' => 2, 'name_bn' => 'রাঙ্গামাটি', 'name_en' => 'RANGAMATI'],
            ['divisions_id' => 3, 'name_bn' => 'ঢাকা', 'name_en' => 'DHAKA'],
            ['divisions_id' => 3, 'name_bn' => 'ফরিদপুর', 'name_en' => 'FARIDPUR'],
            ['divisions_id' => 3, 'name_bn' => 'গাজীপুর', 'name_en' => 'GAZIPUR'],
            ['divisions_id' => 3, 'name_bn' => 'গোপালগঞ্জ', 'name_en' => 'GOPALGANJ'],
            ['divisions_id' => 3, 'name_bn' => 'জামালপুর', 'name_en' => 'JAMALPUR'],
            ['divisions_id' => 3, 'name_bn' => 'কিশোরগঞ্জ', 'name_en' => 'KISHOREGONJ'],
            ['divisions_id' => 3, 'name_bn' => 'মাদারীপুর', 'name_en' => 'MADARIPUR'],
            ['divisions_id' => 3, 'name_bn' => 'মানিকগঞ্জ', 'name_en' => 'MANIKGANJ'],
            ['divisions_id' => 3, 'name_bn' => 'মুন্সিগঞ্জ', 'name_en' => 'MUNSHIGANJ'],
            ['divisions_id' => 3, 'name_bn' => 'ময়মনসিংহ', 'name_en' => 'MYMENSINGH'],
            ['divisions_id' => 3, 'name_bn' => 'নারায়ণগঞ্জ', 'name_en' => 'NARAYANGANJ'],
            ['divisions_id' => 3, 'name_bn' => 'নরসিংদী', 'name_en' => 'NARSINGDI'],
            ['divisions_id' => 3, 'name_bn' => 'নেত্রকোণা', 'name_en' => 'NETRAKONA'],
            ['divisions_id' => 3, 'name_bn' => 'রাজবাড়ী', 'name_en' => 'RAJBARI'],
            ['divisions_id' => 3, 'name_bn' => 'শরীয়তপুর', 'name_en' => 'SHARIATPUR'],
            ['divisions_id' => 3, 'name_bn' => 'শেরপুর', 'name_en' => 'SHERPUR'],
            ['divisions_id' => 3, 'name_bn' => 'টাঙ্গাইল', 'name_en' => 'TANGAIL'],
            ['divisions_id' => 4, 'name_bn' => 'বাগেরহাট', 'name_en' => 'BAGERHAT'],
            ['divisions_id' => 4, 'name_bn' => 'চুয়াডাঙ্গা', 'name_en' => 'CHUADANGA'],
            ['divisions_id' => 4, 'name_bn' => 'যশোর', 'name_en' => 'JESSORE'],
            ['divisions_id' => 4, 'name_bn' => 'ঝিনাইদহ', 'name_en' => 'JHENAIDAH'],
            ['divisions_id' => 4, 'name_bn' => 'খুলনা', 'name_en' => 'KHULNA'],
            ['divisions_id' => 4, 'name_bn' => 'কুষ্টিয়া', 'name_en' => 'KUSHTIA'],
            ['divisions_id' => 4, 'name_bn' => 'মাগুরা', 'name_en' => 'MAGURA'],
            ['divisions_id' => 4, 'name_bn' => 'মেহেরপুর', 'name_en' => 'MEHERPUR'],
            ['divisions_id' => 4, 'name_bn' => 'নড়াইল', 'name_en' => 'NARAIL'],
            ['divisions_id' => 4, 'name_bn' => 'সাতক্ষীরা', 'name_en' => 'SATKHIRA'],
            ['divisions_id' => 5, 'name_bn' => 'বগুড়া', 'name_en' => 'BOGRA'],
            ['divisions_id' => 5, 'name_bn' => 'জয়পুরহাট', 'name_en' => 'JOYPURHAT'],
            ['divisions_id' => 5, 'name_bn' => 'নওগাঁ', 'name_en' => 'NAOGAON'],
            ['divisions_id' => 5, 'name_bn' => 'নাটোর', 'name_en' => 'NATORE'],
            ['divisions_id' => 5, 'name_bn' => 'চাঁপাই নাবাবগঞ্জ', 'name_en' => 'CHAPAI NABABGANJ'],
            ['divisions_id' => 5, 'name_bn' => 'পাবনা', 'name_en' => 'PABNA'],
            ['divisions_id' => 5, 'name_bn' => 'রাজশাহী', 'name_en' => 'RAJSHAHI'],
            ['divisions_id' => 5, 'name_bn' => 'সিরাজগঞ্জ', 'name_en' => 'SIRAJGANJ'],
            ['divisions_id' => 6, 'name_bn' => 'দিনাজপুর', 'name_en' => 'DINAJPUR'],
            ['divisions_id' => 6, 'name_bn' => 'গাইবান্ধা', 'name_en' => 'GAIBANDHA'],
            ['divisions_id' => 6, 'name_bn' => 'কুড়িগ্রাম', 'name_en' => 'KURIGRAM'],
            ['divisions_id' => 6, 'name_bn' => 'লালমনিরহাট', 'name_en' => 'LALMONIRHAT'],
            ['divisions_id' => 6, 'name_bn' => 'নীলফামারী', 'name_en' => 'NILPHAMARI'],
            ['divisions_id' => 6, 'name_bn' => 'পঞ্চগড়', 'name_en' => 'PANCHAGARH'],
            ['divisions_id' => 6, 'name_bn' => 'রংপুর', 'name_en' => 'RANGPUR'],
            ['divisions_id' => 6, 'name_bn' => 'ঠাকুরগাঁও', 'name_en' => 'THAKURGAON'],
            ['divisions_id' => 7, 'name_bn' => 'হবিগঞ্জ', 'name_en' => 'HABIGANJ'],
            ['divisions_id' => 7, 'name_bn' => 'মৌলভীবাজার', 'name_en' => 'MAULVIBAZAR'],
            ['divisions_id' => 7, 'name_bn' => 'সুনামগঞ্জ', 'name_en' => 'SUNAMGANJ'],
            ['divisions_id' => 7, 'name_bn' => 'সিলেট', 'name_en' => 'SYLHET'],
        ];

        foreach ($districts as $district) {
            DB::table('districts')->insert($district);
        }
    }
}
