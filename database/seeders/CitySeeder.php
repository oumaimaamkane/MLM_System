<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'region_id'          => '1',
                'city_name'        => "Abdelghaya Souahel",
                'city_name_ar'       => "عبدالغاية السواهل",
                // 'status'           => true
                // 'tarif'           => 0 
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Ain Beida",
                'city_name_ar'       => "عين بيضاء",
                // 'status'           => true
                // 'tarif'           => 0
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Ain Lahsan",
                'city_name_ar'       => "عين لحسن",
                // 'status'           => true
                // 'tarif'           => 0   
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Ait Kamra",
                'city_name_ar'       => "أيت قمرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Ait Youssef Ou Ali",
                'city_name_ar'       => "آيت يوسف أوعلي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Al Bahraoyine",
                'city_name_ar'       => "البحراويين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Al Hamra",
                'city_name_ar'       => "الحمرا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Al Hoceima",
                'city_name_ar'       => "الحسيمة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Al Khrroub",
                'city_name_ar'       => "الخروب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Al Manzla",
                'city_name_ar'       => "المنزلة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Al Oued",
                'city_name_ar'       => "الواد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Allyene",
                'city_name_ar'       => "عليين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Amtar",
                'city_name_ar'       => "أمتار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Anjra",
                'city_name_ar'       => "أنجرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Aquouass Briech",
                'city_name_ar'       => "أقواس بريش",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Arbaa Taourirt",
                'city_name_ar'       => "أربعاء تاوريرت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Asilah",
                'city_name_ar'       => "أصيلة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Asjen",
                'city_name_ar'       => "أسجن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Ayacha",
                'city_name_ar'       => "عياشة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Azla",
                'city_name_ar'       => "أزلا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Azzinate",
                'city_name_ar'        => "الزينات",
              // 'status'           => true
              // 'tarif'           => 0

            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bab Berred",
                'city_name_ar'       => "باب برد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bab Taza",
                'city_name_ar'       => "باب تازة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bghaghza",
                'city_name_ar'       => "البغاغزة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Abdallah",
                'city_name_ar'       => "بني عبدالله",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Ahmed Cherqia",
                'city_name_ar'       => "بني أحمد الشرقية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Ahmed Gharbia",
                'city_name_ar'       => "بني أحمد الغربية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Ahmed Imoukzan",
                'city_name_ar'       => "بني أحمد اموكزان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Ammart",
                'city_name_ar'       => "بني عمارت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Arouss",
                'city_name_ar'       => "بني عروس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Bchir",
                'city_name_ar'       => "بني بشير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Bouayach",
                'city_name_ar'       => "بني بو عياش",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Bouchibet",
                'city_name_ar'       => "بني بوشبت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Boufrah",
                'city_name_ar'       => "بني بوفراح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Bounsar",
                'city_name_ar'       => "بني  بونصر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Bouzra",
                'city_name_ar'       => "بني  بوزرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Darkoul",
                'city_name_ar'       => "بني دركول",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Faghloum",
                'city_name_ar'       => "بني فغلوم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Garfett",
                'city_name_ar'       => "بني ڭرفط",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Gmil",
                'city_name_ar'       => "بني جميل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Gmil Maksouline",
                'city_name_ar'       => "بني  جميل مكسولين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Hadifa",
                'city_name_ar'       => "بني حذيفة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Harchen",
                'city_name_ar'       => "بني  حرشان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Idder",
                'city_name_ar'       => "بني  يدر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Leit",
                'city_name_ar'       => "بني ليت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Mansour",
                'city_name_ar'       => "بني منصور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Rzine",
                'city_name_ar'       => "بني رزين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Said",
                'city_name_ar'       => "بني سعيد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Salah",
                'city_name_ar'       => "بني صالح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Selmane",
                'city_name_ar'       => "بني سلمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bni Smih",
                'city_name_ar'       => "بني سميح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Bou Jedyane",
                'city_name_ar'       => "بو جديان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Boukhalef",
                'city_name_ar'       => " بوخالف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Brikcha",
                'city_name_ar'       => "بريكشة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Cabo Negro",
                'city_name_ar'       => "كابو نيغرو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Chakrane",
                'city_name_ar'       => "شكران",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Chefchaouen",
                'city_name_ar'       => "شفشاون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Dar Bni Karrich",
                'city_name_ar'       => "دار بن كريش",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Dar Chaoui",
                'city_name_ar'       => " دار شاوي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Derdara",
                'city_name_ar'       => "الدردارة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Fifi",
                'city_name_ar'       => "فيفي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Fnideq",
                'city_name_ar'       => "فنيدق",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Gueznaia",
                'city_name_ar'       => "ڭزناية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Imrabten",
                'city_name_ar'       => "امرابطن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Imzouren",
                'city_name_ar'       => "إمزورن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Iounane",
                'city_name_ar'       => "إيونان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Issaguen",
                'city_name_ar'       => "اساݣن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Izemmouren",
                'city_name_ar'       => "ازمورن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Jbel Lahbib",
                'city_name_ar'       => "جبل الحبيب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Jouamaa",
                'city_name_ar'       => "جوامعة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Kalaat Bouqorra",
                'city_name_ar'       => "قلعة بوقرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Ketama",
                'city_name_ar'       => "كتامة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Ksar Bjir",
                'city_name_ar'       => "قصر بجير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Ksar El Majaz",
                'city_name_ar'       => "قصر المجاز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Ksar Sghir",
                'city_name_ar'       => "القصر الصغير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Ksar el-Kébir",
                'city_name_ar'       => "القصر الكبير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Laaouama",
                'city_name_ar'       => "العوامة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Laghdir",
                'city_name_ar'       => "لغدير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Laouamra",
                'city_name_ar'       => "العوامرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Larache",
                'city_name_ar'       => "العرائش",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Lkhaloua",
                'city_name_ar'       => "الخلوة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Louta",
                'city_name_ar'       => "لوطا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "M'Diq",
                'city_name_ar'       => "مضيق",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "M'sick",
                'city_name_ar'       => "مسيك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "M'tioua",
                'city_name_ar'       => " مثيوة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Mallalienne",
                'city_name_ar'       => "ملاليين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Malloussa",
                'city_name_ar'       => "ملوسة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Mansoura",
                'city_name_ar'       => "منصوره",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Martil",
                'city_name_ar'       => "مرتيل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Moqrisset",
                'city_name_ar'       => "مقريسات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Moulay Ahmed Cherif",
                'city_name_ar'       => "مولاي أحمد الشريف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Nekkour",
                'city_name_ar'       => "نكور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Ouaouzgane",
                'city_name_ar'       => "ووزڭان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Ouazzane",
                'city_name_ar'       => "وزان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Oued Laou",
                'city_name_ar'       => "واد لاو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Oued Malha",
                'city_name_ar'       => "واد ملحة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Oulad Ali Mansour",
                'city_name_ar'       => "أولاد علي منصور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Oulad Ouchih",
                'city_name_ar'       => "أولاد أوشيح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Rissana Chamalia",
                'city_name_ar'       => "ريصانة الشمالية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Rissana Janoubia",
                'city_name_ar'       => "ريصانة لجنوبية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Rouadi",
                'city_name_ar'       => "رواضي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Saddina",
                'city_name_ar'       => "صدينة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Sahel",
                'city_name_ar'       => "ساحل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Sahel Chamali",
                'city_name_ar'       => "ساحل شمالي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Sahtryine",
                'city_name_ar'       => "سحتريين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Senada",
                'city_name_ar'       => "سندا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Sidi Boutmim",
                'city_name_ar'       => "سيدي بوتميم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Sidi Bouzineb",
                'city_name_ar'       => "سيدي بوزينب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Sidi Lyamani",
                'city_name_ar'       => "سيدي اليماني",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Souaken",
                'city_name_ar'       => "سواكن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Souk Kdim",
                'city_name_ar'       => "سوق قديم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Souk L'qolla",
                'city_name_ar'       => "سوق لقلة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Souk Tolba",
                'city_name_ar'       => " سوق الطلبة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Steha",
                'city_name_ar'       => "سطيحة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Taghramt",
                'city_name_ar'       => "تاغرامت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Talambote",
                'city_name_ar'       => "تالامبوت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Tamassint",
                'city_name_ar'       => "تاماسينت",
                // 'status'           => true
                // 'tarif'           => 0
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Tamorot",
                'city_name_ar'       => "تمروت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Tamsaout",
                'city_name_ar'       => "تمزاوت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Tanaqoub",
                'city_name_ar'       => "تانقوب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Tanger",
                'city_name_ar'       => "طنجة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Targuist",
                'city_name_ar'       => "تارجيست",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Tassift",
                'city_name_ar'       => "تاسيفت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Tatoft",
                'city_name_ar'       => "تطفت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Tazroute",
                'city_name_ar'       => "تازروت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Tifarouine",
                'city_name_ar'       => "تيفروين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Tizgane",
                'city_name_ar'       => "تيزگان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Tétouan",
                'city_name_ar'       => "",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Zaaroura",
                'city_name_ar'       => "تطوان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Zaitoune",
                'city_name_ar'       => "زيتون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Zaouiat Sidi Abdelkader",
                'city_name_ar'       => "زاوية سيدي عبد القادر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Zaouiat Sidi Kacem",
                'city_name_ar'       => "زاوية سيدي قاسم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Zarkt",
                'city_name_ar'       => "زرقات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Zinat",
                'city_name_ar'       => "زينات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Zouada",
                'city_name_ar'       => "زوادة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '1',
                'city_name'        => "Zoumi",
                'city_name_ar'       => "زومي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Abbou Lakhal",
                'city_name_ar'       => "عبو لكحل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Afsou",
                'city_name_ar'       => "أفسو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Aghbal",
                'city_name_ar'       => "أغبال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Ahfir",
                'city_name_ar'       => "احفير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Ahl Angad",
                'city_name_ar'       => "أهل أنجاد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Ahl Oued Za",
                'city_name_ar'       => "أهل وادزا ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Ain Bni Mathar",
                'city_name_ar'       => "عين بني مطهر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Ain Chouater",
                'city_name_ar'       => "عين الشواطر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Ain Erreggada",
                'city_name_ar'       => "عين الرݣادة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Ain Lehjer",
                'city_name_ar'       => "عين لحجر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Ain Sfa",
                'city_name_ar'       => "عين صفا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Ain Zohra",
                'city_name_ar'       => " عين زهرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Ait Mait",
                'city_name_ar'       => "آيت مايت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Aklim",
                'city_name_ar'       => "أكليم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Al Aaroui",
                'city_name_ar'       => "العروي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Al Barkanyene",
                'city_name_ar'       => "البركانيين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Al Oioun Sidi Mellouk",
                'city_name_ar'       => "العيون سيدي ملوك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Amejjaou",
                'city_name_ar'       => "ا مجو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Arekmane",
                'city_name_ar'       => "أركمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Assebbab",
                'city_name_ar'       => "الصباب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Azlaf",
                'city_name_ar'       => "ازلاف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Barkine",
                'city_name_ar'       => "بركين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Ben Taieb",
                'city_name_ar'       => "بن الطيب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Berkane",
                'city_name_ar'       => "بَركان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bni Ansar",
                'city_name_ar'       => "بني أنصار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bni Bouifrour",
                'city_name_ar'       => "بني بويفرور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bni Chiker",
                'city_name_ar'       => "بني شيكر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bni Drar",
                'city_name_ar'       => "بني درار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bni Guil",
                'city_name_ar'       => "بني كيل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bni Khaled",
                'city_name_ar'       => "بني خلاد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bni Marghnine",
                'city_name_ar'       => " بني مرغنين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bni Mathar",
                'city_name_ar'       => " بني مطهر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bni Oukil Oulad M'hand",
                'city_name_ar'       => "بني وكيل أولاد امحند",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bni Sidel Jbel",
                'city_name_ar'       => "بني سيدال جبل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bni Sidel Louta",
                'city_name_ar'       => "بني سيدال لوطا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bni Tadjite",
                'city_name_ar'       => "بني تادجيت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bouanane",
                'city_name_ar'       => "بوعنان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bouarfa",
                'city_name_ar'       => " بوعرفة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bouarg",
                'city_name_ar'       => "بوعرك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bouchaouene",
                'city_name_ar'       => "بوشاون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Boudinar",
                'city_name_ar'       => "بودينار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Boughriba",
                'city_name_ar'       => "بوغريبة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bouhdila",
                'city_name_ar'       => "بوهديله",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Boumerieme",
                'city_name_ar'       => "بومريم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Bsara",
                'city_name_ar'       => "بصرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Chouihia",
                'city_name_ar'       => "شويحية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Dar El Kebdani",
                'city_name_ar'       => "دار الكبداني",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Debdou",
                'city_name_ar'       => "دبدو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Driouch",
                'city_name_ar'       => "دريوش",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "El Atef",
                'city_name_ar'       => "العطف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Farkhana",
                'city_name_ar'       => "فرخانة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Fezouane",
                'city_name_ar'       => " فزوان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Figuig",
                'city_name_ar'       => "فݣيݣ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Gafait",
                'city_name_ar'       => "كفايت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Gteter",
                'city_name_ar'       => "قطيطير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Guenfouda",
                'city_name_ar'       => " كنفوذة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Guercif",
                'city_name_ar'       => "جرسيف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Hassi Berkane",
                'city_name_ar'       => "حاسي بركان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Houara Oulad Raho",
                'city_name_ar'       => "هوارة أولاد رحو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Iaazzanene",
                'city_name_ar'       => "إعزانن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Iferni",
                'city_name_ar'       => "افرني",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Ihaddadene",
                'city_name_ar'       => "إيحدادن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Ijermaouas",
                'city_name_ar'       => "إجرماواس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Iksane",
                'city_name_ar'       => "إيكسان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Isly",
                'city_name_ar'       => "إسلي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Jaadar",
                'city_name_ar'       => "جعدار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Jerada",
                'city_name_ar'       => "جْرادة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Kassita",
                'city_name_ar'       => "كاسيطا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Kerouna",
                'city_name_ar'       => "كرونة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Laaouinate",
                'city_name_ar'       => "لعوينات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Laatamna",
                'city_name_ar'       => "العثامنة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Lamrija",
                'city_name_ar'       => "لمريجة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Lebkhata",
                'city_name_ar'       => "لبخاتة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "M'hajer",
                'city_name_ar'       => "مهاجر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Maatarka",
                'city_name_ar'       => "معتركة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Madagh",
                'city_name_ar'       => "مداغ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Mazguitam",
                'city_name_ar'       => "مزكيتام",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Mechraa Hammadi",
                'city_name_ar'       => "مشرع حمادي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Melg El Ouidane",
                'city_name_ar'       => "ملك الويدان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Mestegmer",
                'city_name_ar'       => "مستغمر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Mestferki",
                'city_name_ar'       => "مستفركي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Midar",
                'city_name_ar'       => "ميضار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Mrija",
                'city_name_ar'       => "مريجة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Nador",
                'city_name_ar'       => "ناظور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Naima",
                'city_name_ar'       => "نعيمة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Ouardana",
                'city_name_ar'       => "وردانة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Oued Heimer",
                'city_name_ar'       => "واد حيمر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Oujda",
                'city_name_ar'       => "وجدة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Oulad Amghar",
                'city_name_ar'       => "أولاد أمغار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Oulad Boubker",
                'city_name_ar'       => "اولاد بوبكر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Oulad Bourima",
                'city_name_ar'       => "أولاد بوريمة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Oulad Daoud Zkhanine",
                'city_name_ar'       => "اولاد داوود زخانين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Oulad Ghziyel",
                'city_name_ar'       => "ولاد غزيل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Oulad M'hammed",
                'city_name_ar'       => "ولاد محمد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Oulad Settout",
                'city_name_ar'       => "اولاد ستوت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Oulad Sidi Abdelhakem",
                'city_name_ar'       => "أولاد سيدي عبد الحاكم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Ras Asfour",
                'city_name_ar'       => " رأس عصفور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Ras el Ma",
                'city_name_ar'       => "رأس الماء",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Rislane",
                'city_name_ar'       => "رسلان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Saka",
                'city_name_ar'       => "ساكا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Saïdia",
                'city_name_ar'       => "سعيدية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Selouane",
                'city_name_ar'       => "سلوان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Sidi Ali Belkassem",
                'city_name_ar'       => "سيدي علي بلقاسم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Sidi Bouhria",
                'city_name_ar'       => "سيدي بوهرية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Sidi Boulenouar",
                'city_name_ar'       => "سيدي بولنوار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Sidi Lahsen",
                'city_name_ar'       => "سيدي لحسن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Sidi Moussa Lemhaya",
                'city_name_ar'       => "سيدي موسى لمهاية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Sidi Slimane Echcharraa",
                'city_name_ar'       => "سيدي سليمان الشراعة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Taddart",
                'city_name_ar'       => "تادرت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Tafersit",
                'city_name_ar'       => "تفرسيت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Tafoughalt",
                'city_name_ar'       => "تافوغالت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Talilit",
                'city_name_ar'       => "تليليت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Talsint",
                'city_name_ar'       => "تالسينت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Tancherfi",
                'city_name_ar'       => "تنشرفي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Taourirt",
                'city_name_ar'       => "تاوريرت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Tazaghine",
                'city_name_ar'       => "تزغين ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Temsamane",
                'city_name_ar'       => "تمسمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Tendrara",
                'city_name_ar'       => "تندرارة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Tiouli",
                'city_name_ar'       => "تيولي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Tiztoutine",
                'city_name_ar'       => "تيزطوتين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Touima",
                'city_name_ar'       => "تويمة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Touissit",
                'city_name_ar'       => "تويسيت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Trougout",
                'city_name_ar'       => "تروكوت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Tsaft",
                'city_name_ar'       => "تسافت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Zaïo",
                'city_name_ar'       => "زايو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Zeghanghane",
                'city_name_ar'       => "زغنغان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '2',
                'city_name'        => "Zegzel",
                'city_name_ar'       => "زكرل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Adrej",
                'city_name_ar'       => "أدرج",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Aghbalou Aqorar",
                'city_name_ar'       => "أغبالو أقرار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Agourai",
                'city_name_ar'       => "أكوراي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ahl Sidi Lahcen",
                'city_name_ar'       => "أهل سيدي لحسن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ain Aicha",
                'city_name_ar'       => "عين عائشة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ain Bida",
                'city_name_ar'       => "ﻋﻴﻦ ﺒﻴﻀﺎء",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ain Cheggag",
                'city_name_ar'       => "عين شݣاݣ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ain Jemaa",
                'city_name_ar'       => " عين جمعة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ain Karma",
                'city_name_ar'       => "عين كرمة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ain Legdah",
                'city_name_ar'       => " عين لگدح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ain Leuh",
                'city_name_ar'       => "عين اللوح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ain Maatouf",
                'city_name_ar'       => "عين معطوف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ain Mediouna",
                'city_name_ar'       => "عين مديونة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ain Orma",
                'city_name_ar'       => " عين عرمة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ain Taoujdate",
                'city_name_ar'       => "عين تاوجطات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ain Timguenai",
                'city_name_ar'       => " عين تيمكناي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ait Bazza",
                'city_name_ar'       => "آيت بازا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ait Boubidmane",
                'city_name_ar'       => " آيت بوبيدمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ait Bourzouine",
                'city_name_ar'       => "أيت بورزوين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ait El Mane",
                'city_name_ar'       => "آيت المان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ait Harz Allah",
                'city_name_ar'       => "أيت حرز الله",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ait Makhlouf",
                'city_name_ar'       => "أيت مخلوف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ait Naamane",
                'city_name_ar'       => "آيت نعمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ait Ouikhalfen",
                'city_name_ar'       => "أيت ويخلفن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ait Saghrouchen",
                'city_name_ar'       => "آيت سغروشن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ait Sebaa Lajrouf",
                'city_name_ar'       => "أيت السبع لجرف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ait Yaazem",
                'city_name_ar'       => " آيت يعزم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ajdir",
                'city_name_ar'       => "أجدير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Aknoul",
                'city_name_ar'       => "أكنول",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Al Machouar - Stinia",
                'city_name_ar'       => "المشور الستينية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Almis Marmoucha",
                'city_name_ar'       => "الميس مرموشة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Azrou",
                'city_name_ar'       => "أزرو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Azzaba",
                'city_name_ar'       => "عزابة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bab Boudir",
                'city_name_ar'       => "باب بودير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bab Marzouka",
                'city_name_ar'       => "باب مرزوقة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ben Smim",
                'city_name_ar'       => "بن صميم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bhalil",
                'city_name_ar'       => "بهاليل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bir Tam Tam",
                'city_name_ar'       => "بئر طمطم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bitit",
                'city_name_ar'       => "بطيط",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bni Frassen",
                'city_name_ar'       => "بني فراسن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bni Ftah",
                'city_name_ar'       => "بني فتاح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bni Lent",
                'city_name_ar'       => "بني لنت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bni Oulid",
                'city_name_ar'       => "بني وليد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bni Ounjel Tafraout",
                'city_name_ar'       => "بني ونجل تافراوت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bni Snous",
                'city_name_ar'       => " بني سنوس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bouadel",
                'city_name_ar'       => "بوعادل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bouarouss",
                'city_name_ar'       => "بوعروس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bouchabel",
                'city_name_ar'       => "بوشابل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bouchfaa",
                'city_name_ar'       => "بوشفاعة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Boufkrane",
                'city_name_ar'       => "بوفكران",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bouhlou",
                'city_name_ar'       => "بوحلو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bouhouda",
                'city_name_ar'       => " بوهودة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Boulemane",
                'city_name_ar'       => "بولمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bourd",
                'city_name_ar'       => "بورد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Bouyablane",
                'city_name_ar'       => "بويبلان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Brarha",
                'city_name_ar'       => "برارحة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Charqaoua",
                'city_name_ar'       => "شرقاوة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Dar El Hamra",
                'city_name_ar'       => "دار لحمرا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Dar Oum Soltane",
                'city_name_ar'       => " دار أم السلطان ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Dayat Aoua",
                'city_name_ar'       => "ضاية عوا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Dkhissa",
                'city_name_ar'       => " دخيسة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "El Bibane",
                'city_name_ar'       => "البيبان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "El Bsabsa",
                'city_name_ar'       => "البسابسة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "El Gouzate",
                'city_name_ar'       => "الڭوزات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "El Menzel",
                'city_name_ar'       => "لمنزل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "El Mers",
                'city_name_ar'       => "المرس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "El Orjane",
                'city_name_ar'       => "العرجان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "El hajeb",
                'city_name_ar'       => " الحاجب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Enjil",
                'city_name_ar'       => "أنجيل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ermila",
                'city_name_ar'       => "رميلة ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Fennassa Bab El Hit",
                'city_name_ar'       => "فناسة باب الحيط",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Fritissa",
                'city_name_ar'       => "فرتيسة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Fès",
                'city_name_ar'       => "فاس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Galaz",
                'city_name_ar'       => "كلاز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Galdamane",
                'city_name_ar'       => "كلدمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ghafsai",
                'city_name_ar'       => "غفساي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ghiata Al Gharbia",
                'city_name_ar'       => "غياتة الغربية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ghouazi",
                'city_name_ar'       => "اغوازي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Guigou",
                'city_name_ar'       => "كيكو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Gzenaya Al Janoubia",
                'city_name_ar'       => "كزناية الجنوبية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Haj Kaddour",
                'city_name_ar'       => "الحاج قدور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ifrane",
                'city_name_ar'       => "إفران",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ighzrane",
                'city_name_ar'       => "إغزران",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Imouzzer Marmoucha",
                'city_name_ar'       => "إموزار مرموشة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Imouzzer-Kendar",
                'city_name_ar'       => "إيموزار كندر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Iqaddar",
                'city_name_ar'       => "إقدار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Jahjouh",
                'city_name_ar'       => "جحجوح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Jbabra",
                'city_name_ar'       => "جبابرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Jbarna",
                'city_name_ar'       => "جبارنا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Kaf El Ghar",
                'city_name_ar'       => "كاف الغار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Kandar Sidi Khiar",
                'city_name_ar'       => "كندر سيدي خيار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Karia",
                'city_name_ar'       => "قرية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Karia Ba Mohamed",
                'city_name_ar'       => " قرية با محمد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Karmet Ben Salem",
                'city_name_ar'       => "كرمة بن سالم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Khlalfa",
                'city_name_ar'       => "خلالفة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Kissane",
                'city_name_ar'       => "كيسان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ksabi Moulouya",
                'city_name_ar'       => "قصابي ملوية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Laanoussar",
                'city_name_ar'       => "لعنوصار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Laqsir",
                'city_name_ar'       => "لقصير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Loulja",
                'city_name_ar'       => "لولجة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "M'haya",
                'city_name_ar'       => "مهاية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Maghraoua",
                'city_name_ar'       => " مغراوة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Majjate",
                'city_name_ar'       => "مجاط",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Matmata",
                'city_name_ar'       => "مطماطة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Meknassa Acharqia",
                'city_name_ar'       => "مكناسة الشرقية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Meknassa Al Gharbia",
                'city_name_ar'       => "مكناسة الغربية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Meknes",
                'city_name_ar'       => "مكناس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Messassa",
                'city_name_ar'       => "مساسة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Mezraoua",
                'city_name_ar'       => " مزراوة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Missour",
                'city_name_ar'       => "ميسور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Mkansa",
                'city_name_ar'       => "مكانسة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Moulay Abdelkrim",
                'city_name_ar'       => "مولاي عبد لكريم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Moulay Bouchta",
                'city_name_ar'       => "مولاي بوشتى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Moulay Driss Zerhoun",
                'city_name_ar'       => "مولاي دريس زرهون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Moulay Yaâcoub",
                'city_name_ar'       => "مولاي يعقوب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Mrhassiyine",
                'city_name_ar'       => "مغاصيين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Msila",
                'city_name_ar'       => "مسيلة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Mtarnagha",
                'city_name_ar'       => "مطرناغة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Méchouar Fès Jdid",
                'city_name_ar'       => "مشور فاس الجديد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "N'zalat Bni Amar",
                'city_name_ar'       => "نزالة بني عمار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Oualili",
                'city_name_ar'       => "وليلي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Oudka",
                'city_name_ar'       => "ودكة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Oued Amlil",
                'city_name_ar'       => "واد أمليل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Oued Ifrane",
                'city_name_ar'       => "واد إيفران",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Oued Jdida",
                'city_name_ar'       => "واد جديدة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Oued Jemaa",
                'city_name_ar'       => "واد جمعة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Oued Rommane",
                'city_name_ar'       => "واد رمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ouislane",
                'city_name_ar'       => "ويسلان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ouizeght",
                'city_name_ar'       => "ويزغت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Oulad Ali Youssef",
                'city_name_ar'       => "أولاد علي يوسف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Oulad Ayyad",
                'city_name_ar'       => "اولاد عياد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Oulad Chrif",
                'city_name_ar'       => "أولاد الشريف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Oulad Daoud",
                'city_name_ar'       => "اولاد داوود",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Oulad Mkoudou",
                'city_name_ar'       => "أولاد مكودو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Oulad Tayeb",
                'city_name_ar'       => "أولاد طيب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Oulad Zbair",
                'city_name_ar'       => "أولاد زباير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ourtzagh",
                'city_name_ar'       => "اورتزاغ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Outabouabane",
                'city_name_ar'       => "أوتاباوبان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Outat El Haj",
                'city_name_ar'       => "اوطاط الحاج",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ras Ijerri",
                'city_name_ar'       => "رأس اجري",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ras Laksar",
                'city_name_ar'       => "راس القصر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ras Tabouda",
                'city_name_ar'       => "راس تابودة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ratba",
                'city_name_ar'       => "رتبة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Rbaa El Fouki",
                'city_name_ar'       => "ربع الفوقي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Rghioua",
                'city_name_ar'       => "رغيوة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Ribat el Kheir",
                'city_name_ar'       => " رباط الخير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Sabaa Aiyoun",
                'city_name_ar'       => "سبع عيون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Sefrou",
                'city_name_ar'       => "صفرو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Serghina",
                'city_name_ar'       => "سرغينة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Sidi Abdallah Al Khayat",
                'city_name_ar'       => "سيدي عبد الله الخياط",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Sidi Ahmed",
                'city_name_ar'       => " سيدي أحمد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Sidi Ali Bourakba",
                'city_name_ar'       => "سيدي علي بورقبة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Sidi Boutayeb",
                'city_name_ar'       => "سيدي بوطيب ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Sidi El Abed",
                'city_name_ar'       => "سيدي العابد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Sidi El Makhfi",
                'city_name_ar'       => " سيدي المخفي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Sidi Haj M'hamed",
                'city_name_ar'       => "سيدي حاج محمد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Sidi Harazem",
                'city_name_ar'       => "سيدي حرازم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Sidi M'hamed Ben Lahcen",
                'city_name_ar'       => "سيدي محمد بن الحسن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Sidi Mokhfi",
                'city_name_ar'       => "سيدي مخفي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Sidi Slimane Moul Al Kifane",
                'city_name_ar'       => "سيدي سليمان مول الكيفان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Sidi Yahya Bni Zeroual",
                'city_name_ar'       => "سيدي يحيى بني زروال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Sidi Youssef Ben Ahmed",
                'city_name_ar'       => "سيدي يوسف بن أحمد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Skhinate",
                'city_name_ar'       => "صخينات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Skoura M'daz",
                'city_name_ar'       => "سكورة مداز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Smia",
                'city_name_ar'       => "صميعة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Tabouda",
                'city_name_ar'       => "تابودة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Tafajight",
                'city_name_ar'       => "تافاجایت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Tafrant",
                'city_name_ar'       => "تافرانت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Tahla",
                'city_name_ar'       => " تاهلة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Taifa",
                'city_name_ar'       => " طايفة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Tainaste",
                'city_name_ar'       => "تاينست",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Talzemt",
                'city_name_ar'       => "تالزمت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Tamchachate",
                'city_name_ar'       => "تامشاشاط",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Tamedit",
                'city_name_ar'       => "تامضيت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Taounate",
                'city_name_ar'       => "تاونات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Taza",
                'city_name_ar'       => "تازا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Tazouta",
                'city_name_ar'       => "تازوطة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Thar Es-Souk",
                'city_name_ar'       => "ظهر السوق",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Tigrigra",
                'city_name_ar'       => "تيكريكرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Timahdite",
                'city_name_ar'       => "تمحضيت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Timezgana",
                'city_name_ar'       => "تيمزݣانا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Tissa",
                'city_name_ar'       => "تيسة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Tissaf",
                'city_name_ar'       => "تيساف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Tizguite",
                'city_name_ar'       => "تيزكيت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Tizi Ouasli",
                'city_name_ar'       => "تيزي وسلي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Traiba",
                'city_name_ar'       => "ترايبة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Zaouiat Bougrine",
                'city_name_ar'       => "زاوية بوغرين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Zrarda",
                'city_name_ar'       => "زراردة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '3',
                'city_name'        => "Zrizer",
                'city_name_ar'       => "زريزر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Ain Aouda",
                'city_name_ar'       => "عين عودة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Ain Attig",
                'city_name_ar'       => "عين عتيق",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Ain Johra",
                'city_name_ar'       => "عين جوهرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Ain Sbit",
                'city_name_ar'       => "عين سبيت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Ait Belkacem",
                'city_name_ar'       => "آيت بلقاسم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Ait Bouyahya El Hajjama",
                'city_name_ar'       => "أيت بويحيى الحجامة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Ait Ichou",
                'city_name_ar'       => "آيت إيشو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Ait Ikkou",
                'city_name_ar'       => "أيت إيكو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Ait Malek",
                'city_name_ar'       => "أيت مالك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Ait Mimoun",
                'city_name_ar'       => "آيت ميمون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Ait Ouribel",
                'city_name_ar'       => "آيت أوريبل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Ait Siberne",
                'city_name_ar'       => "آيت سيبرن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Ait Yadine",
                'city_name_ar'       => "آيت يادين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Ameur Seflia",
                'city_name_ar'       => "عامرسفلية.",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Arbaoua",
                'city_name_ar'       => "عرباوة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Azghar",
                'city_name_ar'       => "أزغار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Bahhara Oulad Ayad",
                'city_name_ar'       => "بحارة أولاد عياد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Ben Mansour",
                'city_name_ar'       => "بن منصور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Beni Malek",
                'city_name_ar'       => " بني مالك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Boumaiz",
                'city_name_ar'       => "بومعيز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Bouqachmir",
                'city_name_ar'       => "بوقشمير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Brachoua",
                'city_name_ar'       => " براشوة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Chouafaa",
                'city_name_ar'       => "شوافعة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Dar Bel Amri",
                'city_name_ar'       => "دار بالعامري",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Dar Gueddari",
                'city_name_ar'       => "دار الݣداري",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "El Ganzra",
                'city_name_ar'       => " الكنزرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "El Menzeh",
                'city_name_ar'       => " المنزه",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Ezzhiliga",
                'city_name_ar'       => "ازحيليكة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Had Kourt",
                'city_name_ar'       => "حد كورت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Haddada",
                'city_name_ar'       => " حدادة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Harhoura",
                'city_name_ar'       => " هرهورة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Houderrane",
                'city_name_ar'       => "حودران",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Jemaat Moul Blad",
                'city_name_ar'       => "جمعة مول البلاد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Jorf El Melha",
                'city_name_ar'       => "جرف الملحة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Kariat Ben Aouda",
                'city_name_ar'       => "قرية بن عودة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Kceibya",
                'city_name_ar'       => "قصيبية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Khemis Sidi Yahya",
                'city_name_ar'       => " خميس سيدي يحيى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Khémisset",
                'city_name_ar'       => "خميسات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Kénitra",
                'city_name_ar'       => "قنيطرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Laghoualem",
                'city_name_ar'       => "الغوالم;",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Lalla Mimouna",
                'city_name_ar'       => "للا ميمونة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            // m'qam tobla=m'qam tolba
            [
                'region_id'          => '4',
                'city_name'        => "M'qam Tolba",
                'city_name_ar'       => "مقام الطلبة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "M'saada",
                'city_name_ar'       => " مساعدة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Maaziz",
                'city_name_ar'       => "معازيز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Majmaa Tolba",
                'city_name_ar'       => "مجمع طلبة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Marchouch",
                'city_name_ar'       => "مرشوش",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Mechra Bel Ksiri",
                'city_name_ar'       => " مشرع بلقصيري",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Mehdia",
                'city_name_ar'       => "مهدية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Mers El Kheir",
                'city_name_ar'       => "مرس الخير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Mnasra",
                'city_name_ar'       => " مناصرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Mograne",
                'city_name_ar'       => "مقران",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Moulay Bousselham",
                'city_name_ar'       => "مولاي بو سلهام",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Moulay Driss Aghbal",
                'city_name_ar'       => "مولاي دريس أغبال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Oued El Makhazine",
                'city_name_ar'       => "وادي المخازن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Oulad Ben Hammadi",
                'city_name_ar'       => "اولاد بن حمادي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Oulad H'cine",
                'city_name_ar'       => "أولاد حسين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Oulad Slama",
                'city_name_ar'       => "أولاد سلامة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Oulmes",
                'city_name_ar'       => "ولماس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Oumazza",
                'city_name_ar'       => "أم عزة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Rabat",
                'city_name_ar'       => "رباط",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Rommani",
                'city_name_ar'       => "رماني",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sabbah",
                'city_name_ar'       => "صباح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Salé",
                'city_name_ar'       => " سلا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sfafaa",
                'city_name_ar'       => "صفافعة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sfassif",
                'city_name_ar'       => "صفاصيف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sidi Abderrazak",
                'city_name_ar'       => "سيدي عبد الرزاق",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sidi Allal El Bahraoui",
                'city_name_ar'       => "سيدي علال البحراوي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sidi Allal Lamsadder",
                'city_name_ar'       => "سيدي علال المصدر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sidi Allal Tazi",
                'city_name_ar'       => "سيدي علال التازي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sidi Boubker El Haj",
                'city_name_ar'       => "سيدي بوبكر الحاج",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sidi Boukhalkhal",
                'city_name_ar'       => "سيدي بوخلخال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sidi Bouknadel",
                'city_name_ar'       => "سيدي بوقنادل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sidi El Ghandour",
                'city_name_ar'       => "سيدي الغندور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sidi Kacem",
                'city_name_ar'       => "سيدي قاسم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sidi Mohamed Lahmar",
                'city_name_ar'       => "سيدي محمد لحمر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sidi Slimane",
                'city_name_ar'       => "سيدي سليمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sidi Taibi",
                'city_name_ar'       => "سيدي طيبي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sidi Yahya",
                'city_name_ar'       => "سيدي يحيى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Sidi Yahya Zaer",
                'city_name_ar'       => "سيدي يحيى زعير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Skhirat",
                'city_name_ar'       => "صخيرات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Souk Tlet El Gharb",
                'city_name_ar'       => "سوق ثلاثاء الغرب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Tamesna",
                'city_name_ar'       => " تامسنا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Temara",
                'city_name_ar'       => "تمارة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Tiddas",
                'city_name_ar'       => " تيداس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '4',
                'city_name'        => "Tifelt",
                'city_name_ar'       => "تيفلت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Afourar",
                'city_name_ar'       => "افورار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Aghbala",
                'city_name_ar'       => "اغبالة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Agoudi N'lkhair",
                'city_name_ar'       => "أكودي نالخير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Aguelmam Azegza",
                'city_name_ar'       => " أڭلمام أزڭزا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Aguelmous",
                'city_name_ar'       => " اڭلموس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ain Kaicher",
                'city_name_ar'       => "عين قيشر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ait Abbas",
                'city_name_ar'       => "آيت عباس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ait Ammar",
                'city_name_ar'       => "آيت عمار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ait Blal",
                'city_name_ar'       => "ايت بلال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ait Bou Oulli",
                'city_name_ar'       => "آيت بو علي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ait Ishaq",
                'city_name_ar'       => "آيت إسحاق",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ait M'hamed",
                'city_name_ar'       => "أيت محمد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ait Majden",
                'city_name_ar'       => "آيت ماجدن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ait Mazigh",
                'city_name_ar'       => "آيت مزيغ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ait Ouaarda",
                'city_name_ar'       => "آيت واوردا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ait Oum El Bekht",
                'city_name_ar'       => "آيت أم البخث",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ait Oumdis",
                'city_name_ar'       => "آيت أومديس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ait Ouqabli",
                'city_name_ar'       => "آيت أوقبلي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ait Saadelli",
                'city_name_ar'       => "آيت سعدلي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ait Taguella",
                'city_name_ar'       => "آيت تݣلا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ait Tamlil",
                'city_name_ar'       => "آيت تامليل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Al Khalfia",
                'city_name_ar'       => " آل خليفة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Anergui",
                'city_name_ar'       => "آنرگي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Anzou",
                'city_name_ar'       => "أنزو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Azilal",
                'city_name_ar'       => "أزِيلال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Bejaad",
                'city_name_ar'       => "بي جعد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Bin El Ouidane",
                'city_name_ar'       => "بين الويدان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Bir Mezoui",
                'city_name_ar'       => "بئر مزوي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Bni Ayat",
                'city_name_ar'       => " بني عياط",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Bni Bataou",
                'city_name_ar'       => "بني بتاو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Bni Chegdale",
                'city_name_ar'       => "بني شكدال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Bni Hassane",
                'city_name_ar'       => "بني حسن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Bni Oukil",
                'city_name_ar'       => "بني وكيل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Bni Smir",
                'city_name_ar'       => "بني سمير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Bni Ykhlef",
                'city_name_ar'       => "بن يخلف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Bni Zrantel",
                'city_name_ar'       => "بني زرنتل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Boujniba",
                'city_name_ar'       => "بو جنيبة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            // boukhrsse=boukhrisse
            [
                'region_id'          => '5',
                'city_name'        => "Boukhrisse",
                'city_name_ar'       => "بوخريص",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Boulanouare",
                'city_name_ar'       => "بو لنوار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Boutferda",
                'city_name_ar'       => "بوتفردة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Bradia",
                'city_name_ar'       => "برادية ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Braksa",
                'city_name_ar'       => "براكسة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Bzou",
                'city_name_ar'       => "بزو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Béni Mellal",
                'city_name_ar'       => "بني ملال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Chougrane",
                'city_name_ar'       => "شڭران",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Dar Ould Zidouh",
                'city_name_ar'       => "دار ولد زيدوح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Demnate",
                'city_name_ar'       => "دمنات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Dir El Ksiba",
                'city_name_ar'       => "دير القصيبة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "El Borj",
                'city_name_ar'       => "البرج",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "El Foqra",
                'city_name_ar'       => "الفقراء",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "El Hammam",
                'city_name_ar'       => "الحمام",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "El Kbab",
                'city_name_ar'       => "القباب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "El Ksiba",
                'city_name_ar'       => "القصيبة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Foum El Anceur",
                'city_name_ar'       => "فم لعنصر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Foum Jemaa",
                'city_name_ar'       => "فم جمعة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Foum Oudi",
                'city_name_ar'       => " فم اودي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Fquih ben Saleh",
                'city_name_ar'       => "فقيه بن صالح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Guettaya",
                'city_name_ar'       => "كطاية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Had Bouhssoussen",
                'city_name_ar'       => "حد بوحسوسن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Had Boumoussa",
                'city_name_ar'       => "حد بوموسى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Hattane",
                'city_name_ar'       => "حطّان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Hel Merbaa",
                'city_name_ar'       => "هل مربع",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Imlil",
                'city_name_ar'       => "امليل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Isseksi",
                'city_name_ar'       => " إسكسي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Kasba Tadla",
                'city_name_ar'       => " قصبة تادلة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Kasbat Troch",
                'city_name_ar'       => "قصبة طرش",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Kerrouchen",
                'city_name_ar'       => "كرّوشن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Khouribga",
                'city_name_ar'       => "خريبكة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Khénifra",
                'city_name_ar'       => "خنيفرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Krifate",
                'city_name_ar'       => "كريفات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Lagfaf",
                'city_name_ar'       => "لڭفاف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Lagnadiz",
                'city_name_ar'       => "لكناديز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Lehri",
                'city_name_ar'       => "الهري",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "M'fassis",
                'city_name_ar'       => "مفاسيس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Maadna",
                'city_name_ar'       => "معادنة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Moha Ou Hammou Zayani",
                'city_name_ar'       => "موحى أوحمو الزياني",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Moulay Aissa Ben Driss",
                'city_name_ar'       => "مولاي عيسى بن إدريس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Moulay Bouazza",
                'city_name_ar'       => " مولاي بوعزة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Mrir't",
                'city_name_ar'       => "مريرت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Naour",
                'city_name_ar'       => "ناوور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ouaouizeght",
                'city_name_ar'       => "واويزغت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ouaoula",
                'city_name_ar'       => "واولى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ouaoumana",
                'city_name_ar'       => "واومانا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oued zem",
                'city_name_ar'       => "واد زم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oulad Abdoune",
                'city_name_ar'       => "أولاد عبدون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oulad Azzouz",
                'city_name_ar'       => "أولاد عزوز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oulad Boughadi",
                'city_name_ar'       => "أولاد بوغادي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oulad Bourahmoune",
                'city_name_ar'       => "أولاد بورحمون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oulad Fennane",
                'city_name_ar'       => "أولاد فنان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oulad Ftata",
                'city_name_ar'       => "أولاد فتاتة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oulad Gnaou",
                'city_name_ar'       => "أولاد كناو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oulad Gouaouch",
                'city_name_ar'       => "أولاد كواوش",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oulad M'barek",
                'city_name_ar'       => "أولاد مبارك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oulad M'rah",
                'city_name_ar'       => "أولاد مراح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oulad Nacer",
                'city_name_ar'       => "أولاد ناصر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oulad Said L'oued",
                'city_name_ar'       => "أولاد سعيد الواد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oulad Yaich",
                'city_name_ar'       => "أولاد يعيش",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oulad Youssef",
                'city_name_ar'       => "أولاد يوسف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oulad Zmam",
                'city_name_ar'       => "ولاد زمام",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Ouled Ayad",
                'city_name_ar'       => "اولاد عياد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Oum Rabia",
                'city_name_ar'       => "أم ربيع",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Rfala",
                'city_name_ar'       => "رفالة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Rouached",
                'city_name_ar'       => "رواشد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Sebt Ait Rahou",
                'city_name_ar'       => "سبت آيت رحو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Semguet",
                'city_name_ar'       => "سمكت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Sidi Aissa Ben Ali",
                'city_name_ar'       => "سيدي عيسى بن علي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Sidi Amar",
                'city_name_ar'       => "سيدي عمار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Sidi Boulkhalf",
                'city_name_ar'       => "سيدي بوخالف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Sidi Hammadi",
                'city_name_ar'       => "سيدي حمادي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Sidi Hcine",
                'city_name_ar'       => "سيدي حسين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Sidi Jaber",
                'city_name_ar'       => "سيدي جابر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Sidi Lamine",
                'city_name_ar'       => "سيدي لامين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Sidi Yacoub",
                'city_name_ar'       => "سيدي يعقوب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Sidi Yahya Ou Saad",
                'city_name_ar'       => "سيدي يحيى أو ساعد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Souk Sebt Ouled Nemma",
                'city_name_ar'       => "سوق السبت اولاد النمة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Tabant",
                'city_name_ar'       => "تابانت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Tabaroucht",
                'city_name_ar'       => "تاباروشت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Tachrafat",
                'city_name_ar'       => "تشرافت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Taghzirt",
                'city_name_ar'       => "تاغزيرت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Tagleft",
                'city_name_ar'       => "تاكلفت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Tamda Noumercid",
                'city_name_ar'       => " تامدا نومرسيد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Tanant",
                'city_name_ar'       => "تانانت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Tanougha",
                'city_name_ar'       => "تانوغا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Taounza",
                'city_name_ar'       => "تاونزا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Tidili Fetouaka",
                'city_name_ar'       => "تيديلي فطواكة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Tiffert N'ait Hamza",
                'city_name_ar'       => "تيفرت نآيت حمزة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Tifni",
                'city_name_ar'       => "تيفني",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Tighassaline",
                'city_name_ar'       => "تغسالين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Tighza",
                'city_name_ar'       => "تيغزة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Tilougguite",
                'city_name_ar'       => "تيلوݣيت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Timoulilt",
                'city_name_ar'       => "تيموليلت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Tisqi",
                'city_name_ar'       => "تسقي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Tizi N'isly",
                'city_name_ar'       => "تيزي نيسلي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Zaouiat Ahansal",
                'city_name_ar'       => "زاوية أحنصال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '5',
                'city_name'        => "Zaouïat Cheikh",
                'city_name_ar'       => "زاوية شيخ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Ahlaf",
                'city_name_ar'       => "أحلاف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Ain Blal",
                'city_name_ar'       => "عين بلال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Ain Dorbane",
                'city_name_ar'       => "عين ضربان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Ain Nzagh",
                'city_name_ar'       => "عين نزاغ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Ain Tizgha",
                'city_name_ar'       => "عين تيزغة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Azemmour",
                'city_name_ar'       => "أزمّور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Aïn Harrouda",
                'city_name_ar'       => "ﻋﻴﻦ ﺣﺮﻭﺩﺓ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Ben Maachou",
                'city_name_ar'       => "بن معاشو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Benslimane",
                'city_name_ar'       => "بن سليمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Berrechid",
                'city_name_ar'       => "برشيد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Bir Ennasr",
                'city_name_ar'       => "بير النصر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Bir Jdid",
                'city_name_ar'       => "بير الجديد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Bni Hilal",
                'city_name_ar'       => "بنو هلال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Bni Khloug",
                'city_name_ar'       => "بني خلوڭ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Bni Tsiriss",
                'city_name_ar'       => "بني تسيريس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Bni Yagrine",
                'city_name_ar'       => "بني ياڭرين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Bouguargouh",
                'city_name_ar'       => "بوڭرڭوح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Bouhmame",
                'city_name_ar'       => "بوحمام",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Boulaouane",
                'city_name_ar'       => "بو الأعوان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Bouskoura",
                'city_name_ar'       => "بوسكورة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Bouznika",
                'city_name_ar'       => "بوزنيقة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Béni Yakhlef",
                'city_name_ar'       => "بن يخلف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Casablanca",
                'city_name_ar'       => "دار البيضاء",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Chaibate",
                'city_name_ar'       => "شعيبات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Chellalate",
                'city_name_ar'       => "شلالات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Cherrat",
                'city_name_ar'       => "شراط",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Chtouka",
                'city_name_ar'       => "شتوكة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Dar Bouazza",
                'city_name_ar'       => " دار بوعزة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Dar Chaffai",
                'city_name_ar'       => "دار الشافعي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Deroua",
                'city_name_ar'       => "دروة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "El Borouj",
                'city_name_ar'       => "البروج",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "El Gara",
                'city_name_ar'       => "الݣارة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "El Jadida",
                'city_name_ar'       => "الجديدة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "El Majjatia Ouled Taleb",
                'city_name_ar'       => "المجاطية أولاد الطالب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "El Mansouria",
                'city_name_ar'       => "المنصورية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Errahma",
                'city_name_ar'       => "رحمة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Fdalate",
                'city_name_ar'       => "فضالة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Foqra Oulad Aameur",
                'city_name_ar'       => "فقراء أولاد عامر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Gdana",
                'city_name_ar'       => "كدانة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Guisser",
                'city_name_ar'       => "ݣيسر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Had Soualem",
                'city_name_ar'       => "حد السوالم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Haouzia",
                'city_name_ar'       => "حوزية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Jabria",
                'city_name_ar'       => "جبرية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Jaqma",
                'city_name_ar'       => "جاقمة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Kasbat Ben Mchich",
                'city_name_ar'       => "قصبة بن مشيش",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Khemisset Chaouia",
                'city_name_ar'       => "خميسات شاوية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Khmis Ksiba",
                'city_name_ar'       => "خميس قصيبة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Koudiat Bni Dghough",
                'city_name_ar'       => "كدية بني دغوغ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Kridid",
                'city_name_ar'       => "كريديد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Laagagcha",
                'city_name_ar'       => "لعڭاڭشة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Laamria",
                'city_name_ar'       => "",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Laaounate",
                'city_name_ar'       => "لعامرية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Laatatra",
                'city_name_ar'       => "لعطاطرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Laghdira",
                'city_name_ar'       => "لغديرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Laghnadra",
                'city_name_ar'       => "لغنادرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Laghnimyine",
                'city_name_ar'       => "لغنيميين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Lahlaf M'zab",
                'city_name_ar'       => "لحلاف مزاب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Lahouaza",
                'city_name_ar'       => "لحوازة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Lahraouyine",
                'city_name_ar'       => "لهراويين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Lahsasna",
                'city_name_ar'       => "لحساسنة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Lakhiaita",
                'city_name_ar'       => "لخيايطة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Lakhzazra",
                'city_name_ar'       => "لخزازرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Lambarkiyine",
                'city_name_ar'       => "لمباركيين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Lamharza Essahel",
                'city_name_ar'       => "لمحارزة سّاحل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Lamkansa",
                'city_name_ar'       => "لمكانسة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Laqraqra",
                'city_name_ar'       => "لقراقرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Larbaa Ouled Amrane",
                'city_name_ar'       => "لربعاء اولاد عمران",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Lgharbia",
                'city_name_ar'       => "لغربية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Lmechrek",
                'city_name_ar'       => "لمشرك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Loulad",
                'city_name_ar'       => "الاولاد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "M'garto",
                'city_name_ar'       => "مگارطو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "M'tal",
                'city_name_ar'       => "مطل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Machraa Ben Abbou",
                'city_name_ar'       => "مشرع بن عبو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Mellila",
                'city_name_ar'       => "مليلية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Meskoura",
                'city_name_ar'       => "مسكورة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Metrane",
                'city_name_ar'       => "مطران",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Mettouh",
                'city_name_ar'       => "متوح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Mniaa",
                'city_name_ar'       => "منيعة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Mogress",
                'city_name_ar'       => "مڭرس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Mohammedia",
                'city_name_ar'       => "محمدية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Moualine El Ghaba",
                'city_name_ar'       => "موالين الغابة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Moualine El Oued",
                'city_name_ar'       => "موالين الواد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Moulay Abdallah",
                'city_name_ar'       => "مولاي عبدالله",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Mrizigue",
                'city_name_ar'       => "مريزيڭ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Mzoura",
                'city_name_ar'       => "مزورة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Médiouna",
                'city_name_ar'       => " مديونة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "N'khila",
                'city_name_ar'       => "نخيلة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Nouaceur",
                'city_name_ar'       => "نواصر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oualidia",
                'city_name_ar'       => "والدية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oued Naanaa",
                'city_name_ar'       => "واد النعناع",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Aafif",
                'city_name_ar'       => "أولاد عفيف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Aamran",
                'city_name_ar'       => "أولاد عمران",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Abbou",
                'city_name_ar'       => "أولاد عبو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Aissa",
                'city_name_ar'       => "أولاد عيسى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            // Oulad Al Toualaa=Oulad Ali Toualaa
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Ali Toualaa",
                'city_name_ar'       => " أولاد علي الطوالع",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Amer",
                'city_name_ar'       => "أولاد عامر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Bouali Nouaja",
                'city_name_ar'       => "أولاد بوعلي نواجة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Boussaken",
                'city_name_ar'       => "أولاد بوساكن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Cebbah",
                'city_name_ar'       => "أولاد صباح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Chbana",
                'city_name_ar'       => " أولاد شبانة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Fares",
                'city_name_ar'       => "أولاد فارس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Fares El Halla",
                'city_name_ar'       => " أولاد فارس الحلة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Freiha",
                'city_name_ar'       => "أولاد فريحة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Frej",
                'city_name_ar'       => "أولاد فرج",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Ghadbane",
                'city_name_ar'       => "اولاد غدبان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Ghanem",
                'city_name_ar'       => "أولاد غانم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Hamdane",
                'city_name_ar'       => "ولاد حمدان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Hcine",
                'city_name_ar'       => "أولاد حسين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad M'hamed",
                'city_name_ar'       => "أولاد محمد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Rahmoune",
                'city_name_ar'       => "أولاد رحمون;",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Said",
                'city_name_ar'       => "اولاد سعيد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Salah",
                'city_name_ar'       => "أولاد صالح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Sbaita",
                'city_name_ar'       => "أولاد سبيطة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Sghir",
                'city_name_ar'       => "أولاد صغير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Si Bouhya",
                'city_name_ar'       => "أولاد سي بوحيى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Sidi Ali Ben Youssef",
                'city_name_ar'       => "أولاد سيدي علي بن يوسف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Yahya Louta",
                'city_name_ar'       => "ولاد يحيى لوطا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Oulad Zidane",
                'city_name_ar'       => "أولاد زيدان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Ras El Ain Chaouia",
                'city_name_ar'       => "رأس العين الشاوية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Rdadna Oulad Malek",
                'city_name_ar'       => "رداندة أولاد مالك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Riah",
                'city_name_ar'       => "رياح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Rima",
                'city_name_ar'       => "ريما",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sahel Oulad H'riz",
                'city_name_ar'       => "اولاد حريز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Saniat Berguig",
                'city_name_ar'       => "سانية برگيگ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sebt Saiss",
                'city_name_ar'       => "سبت سايس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Settat",
                'city_name_ar'       => "سطات ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sgamna",
                'city_name_ar'       => "سڭامنة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Si Hsaien Ben Abderrahmane",
                'city_name_ar'       => "سي احساين بن عبد الرحمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Abdelkhalq",
                'city_name_ar'       => "سيدي عبد الخالق",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Abdelkrim",
                'city_name_ar'       => "سيدي عبدالكريم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Abed",
                'city_name_ar'       => "سيدي عابد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Ahmed El Khadir",
                'city_name_ar'       => "سيدي أحمد الخدير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Ali Ben Hamdouche",
                'city_name_ar'       => " سيدي علي بن حمدوش",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Bennour",
                'city_name_ar'       => "سيدي بنور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Bettache",
                'city_name_ar'       => "سيدي بطاش",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Boumehdi",
                'city_name_ar'       => "سيدي بومهدي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Bouzid",
                'city_name_ar'       => " سيدي بوزيد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Dahbi",
                'city_name_ar'       => "سيدي ذهبي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi El Aidi",
                'city_name_ar'       => "سيدي العايدي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi El Mekki",
                'city_name_ar'       => "سيدي المكي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Hajjaj",
                'city_name_ar'       => "سيدي حجاج",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Hajjaj Oued Hassar",
                'city_name_ar'       => "سيدي حجاج واد حصار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi M'hamed Akhdim",
                'city_name_ar'       => "سيدي امحمد اخديم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Mohamed Ben Rahal",
                'city_name_ar'       => "سيدي محمد بن رحال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Moussa Ben Ali",
                'city_name_ar'       => "سيدي موسى بن علي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Moussa El Majdoub",
                'city_name_ar'       => "سيدي موسى المجدوب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Rahal",
                'city_name_ar'       => "سيدي رحال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Rahal Chatai",
                'city_name_ar'       => " سيدي رحال الشاطئ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Sidi Smail",
                'city_name_ar'       => "سيدي سماعيل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Tamadroust",
                'city_name_ar'       => "تامدروست",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Tamda",
                'city_name_ar'       => "تامدة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Tit Mellil",
                'city_name_ar'       => "تيط مليل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Toualet",
                'city_name_ar'       => "توالت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Zaouiat Lakouacem",
                'city_name_ar'       => "زاوية لقواسم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Zaouiat Saiss",
                'city_name_ar'       => "زاوية سايس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Zaouiat Sidi Ben Hamdoun",
                'city_name_ar'       => "زاوية سيدي بنحمدون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Zemamra",
                'city_name_ar'       => "زمامرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Zenata",
                'city_name_ar'       => "زناتة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '6',
                'city_name'        => "Ziaida",
                'city_name_ar'       => " زايدة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Abadou",
                'city_name_ar'       => "أبادو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Adaghas",
                'city_name_ar'       => "أدغاس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Adassil",
                'city_name_ar'       => "أداسيل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Afalla Issen",
                'city_name_ar'       => "أفلا يسن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Agafay",
                'city_name_ar'       => "أڭفاي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Aghbar",
                'city_name_ar'       => "اغبار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Aglif",
                'city_name_ar'       => "أجليف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Aguerd",
                'city_name_ar'       => "أكرد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ahdil",
                'city_name_ar'       => "اهديل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ain Tazitounte",
                'city_name_ar'       => "عين تزيتونت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ait Aadel",
                'city_name_ar'       => "آيت عادل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ait Aissi Ihahane",
                'city_name_ar'       => "آيت عيسى إححان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ait Daoud",
                'city_name_ar'       => "آيت داود",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ait Faska",
                'city_name_ar'       => "آيت فاسكا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ait Haddou Youssef",
                'city_name_ar'       => ": آيت حدو يوسف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ait Hadi",
                'city_name_ar'       => "آيت هادي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ait Hammou",
                'city_name_ar'       => "أيت حمو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ait Hkim Ait Yzid",
                'city_name_ar'       => "آيت حكيم آيت يزيد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ait Imour",
                'city_name_ar'       => "أيت إيمور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ait Ourir",
                'city_name_ar'       => "آيت ورير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ait Said",
                'city_name_ar'       => "آيت سعيد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ait Sidi Daoud",
                'city_name_ar'       => "آيت سيدي داود",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ait Taleb",
                'city_name_ar'       => "آيت طالب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Akarma",
                'city_name_ar'       => "عكرمة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Alouidane",
                'city_name_ar'       => "الويدان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Amghras",
                'city_name_ar'       => "أمغراس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Amizmiz",
                'city_name_ar'       => "أمزميز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Anougal",
                'city_name_ar'       => "أنوڭال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Aquermoud",
                'city_name_ar'       => "أقرمود",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Asni",
                'city_name_ar'       => "أسني",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Assahrij",
                'city_name_ar'       => "السهريج",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Assais",
                'city_name_ar'       => "أسايس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Assif El Mal",
                'city_name_ar'       => "أسيف المال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Atiamim",
                'city_name_ar'       => "الطياميم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Atouabet",
                'city_name_ar'       => "اتوابت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ayir",
                'city_name_ar'       => "أيير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Azgour",
                'city_name_ar'       => "أزكور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ben Guerir",
                'city_name_ar'       => "بن جرير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Bizdad",
                'city_name_ar'       => "بيزضاض",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Bouabout",
                'city_name_ar'       => "بوعبوط",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Bouabout Amdlane",
                'city_name_ar'       => "وعبوط أمدلان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Bouchane",
                'city_name_ar'       => "بوشان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Bouguedra",
                'city_name_ar'       => "بوݣدرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Bourrous",
                'city_name_ar'       => "بوروس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Bouya Omar",
                'city_name_ar'       => "بويا عمر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Bouzemmour",
                'city_name_ar'       => "بوزمور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Chichaoua",
                'city_name_ar'       => "شيشاوة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Choara",
                'city_name_ar'       => "شعراء",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Chtaiba",
                'city_name_ar'       => "شطيبة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Dar Jamaa",
                'city_name_ar'       => "دار جامع",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Dar Si Aissa",
                'city_name_ar'       => "دار سي عيسى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Douirane",
                'city_name_ar'       => "دويران",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Dzouz",
                'city_name_ar'       => "دزوز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Echemmaia",
                'city_name_ar'       => "شماعية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Eddachra",
                'city_name_ar'       => "دشرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "El Aamria",
                'city_name_ar'       => "العامرية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "El Beddouza",
                'city_name_ar'       => "البدوزة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "El Gantour",
                'city_name_ar'       => "الكنتور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "El Ghiate",
                'city_name_ar'       => "الغيات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "El Gouraani",
                'city_name_ar'       => "الكرعاني",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "El Hanchane",
                'city_name_ar'       => "الحنشان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "El Kelâa des Sraghna",
                'city_name_ar'       => "قلعة السراغنة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "El Marbouh",
                'city_name_ar'       => "المربوح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Errafiaya",
                'city_name_ar'       => "الرافعية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Esbiaat",
                'city_name_ar'       => "",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Essaouira",
                'city_name_ar'       => "سبيعات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Fraita",
                'city_name_ar'       => "فرائطة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ghmate",
                'city_name_ar'       => "غمات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Gmassa",
                'city_name_ar'       => "كماسة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Had Dra",
                'city_name_ar'       => "حد درى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Harbil",
                'city_name_ar'       => "حربيل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Hiadna",
                'city_name_ar'       => "هيادنة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Hrara",
                'city_name_ar'       => "حرارة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ichamraren",
                'city_name_ar'       => "إشمرارن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ighil",
                'city_name_ar'       => "إغيل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ighoud",
                'city_name_ar'       => "إيغود",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Iguerferouane",
                'city_name_ar'       => "إكرفروان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ijoukak",
                'city_name_ar'       => "إجوكاك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Imgdal",
                'city_name_ar'       => "إمكدال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Imindounit",
                'city_name_ar'       => "إيمندونيت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Imintanoute",
                'city_name_ar'       => "إيمنتانوت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Irohalen",
                'city_name_ar'       => "إرحالن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Issen",
                'city_name_ar'       => "إسن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Jaafra",
                'city_name_ar'       => "جعافرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Jaidate",
                'city_name_ar'       => "جعيدات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Jbiel",
                'city_name_ar'       => "جبيل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Jdour",
                'city_name_ar'       => "جدور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Jemaa Shaim",
                'city_name_ar'       => " جمعة سحيم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Jnane Bouih",
                'city_name_ar'       => "جنان بويه",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Jouala",
                'city_name_ar'       => "جوالة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Kattara",
                'city_name_ar'       => "قطارة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Kechoula",
                'city_name_ar'       => "كشولة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Khatazakane",
                'city_name_ar'       => "خط أزكان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Korimate",
                'city_name_ar'       => "كريمات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Kouzemt",
                'city_name_ar'       => " كوزمت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Laamamra",
                'city_name_ar'       => "العمامرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Laattaouia",
                'city_name_ar'       => "العطاوية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Laattaouia Ech-Chaybia",
                'city_name_ar'       => "العطاوية الشعيبية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Labkhati",
                'city_name_ar'       => "لبخاتي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Labrikiyne",
                'city_name_ar'       => "لبريكيين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Lagdadra",
                'city_name_ar'       => "لغدادرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Lahdar",
                'city_name_ar'       => "لحدار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Lahsinate",
                'city_name_ar'       => "لحسينات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Lakhoualqa",
                'city_name_ar'       => "لخوالقة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Lalla Aaziza",
                'city_name_ar'       => "للا عزيزة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Lalla Takarkoust",
                'city_name_ar'       => " للا تاكركوست",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Lamaachate",
                'city_name_ar'       => "لمعاشات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Lamharra",
                'city_name_ar'       => "لمحرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Lamrasla",
                'city_name_ar'       => "المراسلة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Lamsabih",
                'city_name_ar'       => "لمصابح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Lamzoudia",
                'city_name_ar'       => "المزودية ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Laâkarta",
                'city_name_ar'       => "العكارطة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Loudaya",
                'city_name_ar'       => "لوداية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Loued Lakhdar",
                'city_name_ar'       => "الواد الأخضر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Lounasda",
                'city_name_ar'       => "لوناسدة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "M'khalif",
                'city_name_ar'       => "مخاليف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "M'nabha",
                'city_name_ar'       => "منابهة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "M'ramer",
                'city_name_ar'       => "مرامر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "M'zem Sanhaja",
                'city_name_ar'       => "مزم صنهاجة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "M'zouda",
                'city_name_ar'       => "مزوضة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Majjat",
                'city_name_ar'       => "مجاط",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Marrakech",
                'city_name_ar'       => "مُرَاكُش",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Mayate",
                'city_name_ar'       => "ميات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Mejji",
                'city_name_ar'       => "ميجي ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Meskala",
                'city_name_ar'       => "مسكالة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Mouarid",
                'city_name_ar'       => "مواريد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Moul El Bergui",
                'city_name_ar'       => "مول البركي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Moulay Bouzarqtoune",
                'city_name_ar'       => "مولاي بوزرقطون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Moulay Brahim",
                'city_name_ar'       => "مولاي إبراهيم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Mzilate",
                'city_name_ar'       => "مزيلات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Méchouar Kasba",
                'city_name_ar'       => "مشور القصبة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Nagga",
                'city_name_ar'       => "ناڭا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Nfifa",
                'city_name_ar'       => "نفيفة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Nzalat Laadam",
                'city_name_ar'       => "نزالة العظم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ouahat Sidi Brahim",
                'city_name_ar'       => "واحة سيدي براهيم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ouargui",
                'city_name_ar'       => "واركي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ouazguita",
                'city_name_ar'       => " وزكيتة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oued L'bour",
                'city_name_ar'       => "واد البور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ouirgane",
                'city_name_ar'       => "ويرڭان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oukaimden",
                'city_name_ar'       => "أوكايمدن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Aamer",
                'city_name_ar'       => "أولاد عامر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Aamer Tizmarine",
                'city_name_ar'       => "أولاد عامر تزمرين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Aarrad",
                'city_name_ar'       => "أولاد عراض",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Bouali Loued",
                'city_name_ar'       => "أولاد بو علي الواد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Cherki",
                'city_name_ar'       => "أولاد الشرقي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad El Garne",
                'city_name_ar'       => "أولاد الكرن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Hassoune",
                'city_name_ar'       => "أولاد حسّون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Hassoune Hamri",
                'city_name_ar'       => "أولاد حسون حمري",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Imloul",
                'city_name_ar'       => "أولاد املول",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Khallouf",
                'city_name_ar'       => "أولاد خلوف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad M'rabet",
                'city_name_ar'       => "أولاد مرابط",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Massaoud",
                'city_name_ar'       => "أولاد مسعود",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Moumna",
                'city_name_ar'       => "أولاد مومنة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Msabbel",
                'city_name_ar'       => "أولاد امسبل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Mtaa",
                'city_name_ar'       => "أولاد مطاع",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Salmane",
                'city_name_ar'       => "أولاد سلمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Sbih",
                'city_name_ar'       => " أولاد اصبيح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Yaacoub",
                'city_name_ar'       => "أولاد يعقوب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Oulad Zarrad",
                'city_name_ar'       => "أولاد زراد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ouled Dlim",
                'city_name_ar'       => " أولاد دليم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ounagha",
                'city_name_ar'       => "اوناغا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ourika",
                'city_name_ar'       => "أوريكا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Rahhala",
                'city_name_ar'       => "رحالة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ras Ain Rhamna",
                'city_name_ar'       => "رأس العين الرحامنة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Ras El Ain",
                'city_name_ar'       => "رأس العين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Saada",
                'city_name_ar'       => "صَعْدَة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Saadla",
                'city_name_ar'       => "صعادلا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Safi",
                'city_name_ar'       => "آسَفي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Saidate",
                'city_name_ar'       => "سعيدات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sebt Gzoula",
                'city_name_ar'       => " سبت ݣزولة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sid L'mokhtar",
                'city_name_ar'       => " سيد المختار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sid Zouine",
                'city_name_ar'       => "سيدي الزوين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Abdallah",
                'city_name_ar'       => "سيدي عبد الله ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Abdallah Ghiat",
                'city_name_ar'       => "سيدي عبد الله غيات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Abdeljalil",
                'city_name_ar'       => "سيدي عبد الجليل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Abdelmoumen",
                'city_name_ar'       => "سيدي عبد المومن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Aissa",
                'city_name_ar'       => "سيدي عيسى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Aissa Ben Slimane",
                'city_name_ar'       => "سيدي عيسى بن سليمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Aissa Regragui",
                'city_name_ar'       => "سيدي عيسى الركراكي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Ali El Korati",
                'city_name_ar'       => "سيدي علي الكراتي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Ali Labrahla",
                'city_name_ar'       => "سيدي علي لبراحلة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Badhaj",
                'city_name_ar'       => "سيدي بدهاج",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Bou Othmane",
                'city_name_ar'       => "سيدي بو عثمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Boubker",
                'city_name_ar'       => "سيدي بوبكر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Boulaalam",
                'city_name_ar'       => "سيدي بولعلام",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Bouzid Arragragui",
                'city_name_ar'       => "سيدي بوزيد الركراكي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Chiker",
                'city_name_ar'       => "سيدي شيكر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi El Hattab",
                'city_name_ar'       => "سيدي الحطاب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Ettiji",
                'city_name_ar'       => "سيدي أتيجي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Ghanem",
                'city_name_ar'       => "سيدي غانم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Ishaq",
                'city_name_ar'       => "سيدي إسحاق",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Laaroussi",
                'city_name_ar'       => "سيدي لعروسي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi M'hamed Dalil",
                'city_name_ar'       => "سيدي محمد دليل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi M'hamed Ou Marzouq",
                'city_name_ar'       => "سيدي محمد أومرزوق",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Mansour",
                'city_name_ar'       => " سيدي منصور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Moussa",
                'city_name_ar'       => "سيدي موسى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sidi Rahhal",
                'city_name_ar'       => "سيدي رحال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Skhour Rhamna",
                'city_name_ar'       => "صخور رحمنا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Skoura Lhadra",
                'city_name_ar'       => "سكورة الحدرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Souihla",
                'city_name_ar'       => "سويهلة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sour El Aaz",
                'city_name_ar'       => "سور العز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Sti Fadma",
                'city_name_ar'       => "ستي فاطمة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Tafetachte",
                'city_name_ar'       => "تفتاشت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Tahannaout",
                'city_name_ar'       => "تحناوت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Takate",
                'city_name_ar'       => "تكاط",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Talat N'yaaqoub",
                'city_name_ar'       => "تلات نيعقوب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Talmest",
                'city_name_ar'       => "تالمست",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Tamaguert",
                'city_name_ar'       => "تمݣرت ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Tamallalt",
                'city_name_ar'       => "تاملالت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Tamanar",
                'city_name_ar'       => "تمنار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Tamazouzte",
                'city_name_ar'       => "تمزوزت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Tameslohte",
                'city_name_ar'       => "تامصلوحت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Taouloukoult",
                'city_name_ar'       => "تاولوكلت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Taouzint",
                'city_name_ar'       => "توزينت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Tassoultante",
                'city_name_ar'       => "تاسلطانت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Tazart",
                'city_name_ar'       => "تزارت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Tidili Mesfioua",
                'city_name_ar'       => "تيدلي مسفيوة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Tighedouine",
                'city_name_ar'       => "تيغدوين ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Timezgadiouine",
                'city_name_ar'       => "تمزگديوين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Timlilt",
                'city_name_ar'       => "تيمليلت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Tizguine",
                'city_name_ar'       => "تزكين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Tlauh",
                'city_name_ar'       => "الطلوح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Touama",
                'city_name_ar'       => "توامة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Youssoufia",
                'city_name_ar'       =>"يوسفية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Zaouia Annahlia",
                'city_name_ar'       => "زاوية النحلية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Zaouiat Ben Hmida",
                'city_name_ar'       => "زاوية بن حميدة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Zemrane",
                'city_name_ar'       => "زمران",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Zemrane Charqia",
                'city_name_ar'       => "زمران الشرقيه",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Zerkten",
                'city_name_ar'       => "زرقطن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id' => '7',
                'city_name' => "Znada",
                'city_name_ar'       => "زنادة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Aarab Sebbah Gheris",
                'city_name_ar'       => "عرب صباح اغريس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Aarab Sebbah Ziz",
                'city_name_ar'       => " عرب صباح زيز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Afella N'dra",
                'city_name_ar'       => "أفلاندرا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Afra",
                'city_name_ar'       => "عفراء",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Agdz",
                'city_name_ar'       => "اڭدز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Aghbalou",
                'city_name_ar'       => "اغبالو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Aghbalou N'kerdous",
                'city_name_ar'       => "أغبالو نكردوس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Agoudim",
                'city_name_ar'       => "أكوديم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ait Ayach",
                'city_name_ar'       => "ايت عياش",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ait Ben Yacoub",
                'city_name_ar'       => "آيت بن يعقوب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ait Boudaoud",
                'city_name_ar'       => "أيت بوداود",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ait El Farsi",
                'city_name_ar'       => "آيت الفرسي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ait Hani",
                'city_name_ar'       => "آيت هاني",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ait Izdeg",
                'city_name_ar'       => "آيت إزدك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ait Ouallal",
                'city_name_ar'       => "أيت ولال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ait Ouassif",
                'city_name_ar'       => "آيت واسيف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ait Sedrate Jbel El Oulia",
                'city_name_ar'       => "يت سدرات جبل العليا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ait Sedrate Jbel El Soufla",
                'city_name_ar'       => "سدرات الجبل السفلى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ait Sedrate Sahl Charkia",
                'city_name_ar'       => "آيت سدرات السهل الشرقية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ait Sedrate Sahl El Gharbia",
                'city_name_ar'       => " أيت سدرات السهل الغربية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ait Yahya",
                'city_name_ar'       => "آيت يحيى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ait Youl",
                'city_name_ar'       => "آيت يول",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ait Zineb",
                'city_name_ar'       => "آيت زينب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Alnif",
                'city_name_ar'       => "ألنيف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Amellagou",
                'city_name_ar'       => "أملاكو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Amersid",
                'city_name_ar'       => "أمرصيد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Amerzgane",
                'city_name_ar'       => "أمرزكان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Amouguer",
                'city_name_ar'       => "أموڭر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Anemzi",
                'city_name_ar'       => "أنمزي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Aoufous",
                'city_name_ar'       => "أوفوس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Arfoud",
                'city_name_ar'       => "أرفود",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Assoul",
                'city_name_ar'       => "أسول",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Aznaguen",
                'city_name_ar'       => "أزناڭن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Bleida",
                'city_name_ar'       => "بليدة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Bni M'hamed Sijelmassa",
                'city_name_ar'       => "بني محمد سجلماسة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Bni Zoli",
                'city_name_ar'       => "بني زولي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Bou Azmou",
                'city_name_ar'       => "بوزمو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Boudnib",
                'city_name_ar'       => "بودنيب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Boumalne-Dadès",
                'city_name_ar'       => "بومالن دادس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Boumia",
                'city_name_ar'       => "بومية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Bouzeroual",
                'city_name_ar'       => "بوزروال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Chorfa M'daghra",
                'city_name_ar'       => "شرفاء مدغرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "En-Nzala",
                'city_name_ar'       => "النزالة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Er-Rich",
                'city_name_ar'       => "الريش",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Er-Rissani",
                'city_name_ar'       => "الريصاني ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Er-Rteb",
                'city_name_ar'       => "الرتب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Errachidia",
                'city_name_ar'       => "رشيدية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Errouha",
                'city_name_ar'       => "روحا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Es-Sfalat",
                'city_name_ar'       => "سفلات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Es-Sifa",
                'city_name_ar'       => "سيفة ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Et-Taous",
                'city_name_ar'       => "الطاوس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ferkla El Oulia",
                'city_name_ar'       => "فركلة العليا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ferkla Es-Soufla",
                'city_name_ar'       => "فركلة السفلى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Fezna",
                'city_name_ar'       => "فزنة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Fezouata",
                'city_name_ar'       => "فزواطة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ghassate",
                'city_name_ar'       => "غسات ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Gheris El Ouloui",
                'city_name_ar'        => "غريس لعلوي
              // 'status'           => true
              // 'tarif'           => 0    
                   ",

            ],
            [
                'region_id'          => '8',
                'city_name'        => "Gheris Es-Soufli",
                'city_name_ar'       => "غريس السفلي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Goulmima",
                'city_name_ar'       => "كلميمة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Gourrama",
                'city_name_ar'       => "ݣرامة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Guers Tiaallaline",
                'city_name_ar'       => "غرس تعلالين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Guir",
                'city_name_ar'       => "جير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "H'ssyia",
                'city_name_ar'       => "حصيا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Idelsane",
                'city_name_ar'       => "إدلسان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ighil N'oumgoun",
                'city_name_ar'       => "إغيل ن أومݣون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ighrem N'ougdal",
                'city_name_ar'       => "إغرم نوݣدال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ikniouen",
                'city_name_ar'       => "إكنيون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Imi N'oulaoune",
                'city_name_ar'       => "إمي نولاون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Imider",
                'city_name_ar'       => "إيميضر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Imilchil",
                'city_name_ar'       => "إملشيل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Itzer",
                'city_name_ar'       => "إيتزر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Jorf",
                'city_name_ar'       => "جرف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Kalaat M'gouna",
                'city_name_ar'       => "قلعة مݣونة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Khouzama",
                'city_name_ar'       => "خوزامة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ktaoua",
                'city_name_ar'       => "كتاوة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Lkheng",
                'city_name_ar'       => "الخنك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "M'hamid El Ghizlane",
                'city_name_ar'       => "محاميد الغزلان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "M'semrir",
                'city_name_ar'       => "مسمرير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "M'ssici",
                'city_name_ar'       => "مصيسي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "M'zizel",
                'city_name_ar'       => "مزيزل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Melaab",
                'city_name_ar'       => "ملعب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Mezguita",
                'city_name_ar'       => "مزكيطة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Mibladen",
                'city_name_ar'       => "ميبلادن ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Midelt",
                'city_name_ar'       => "ميدلت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Moulay Ali Chérif",
                'city_name_ar'       => "مولاي عالي الشريف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "N'kob",
                'city_name_ar'       => "نقوب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ouaklim",
                'city_name_ar'       => "واكليم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ouarzazate",
                'city_name_ar'       => "ورزازات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Oued Naam",
                'city_name_ar'       => "واد النعام",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ouisselsate",
                'city_name_ar'       => "وسلسات ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Oulad Yahia Lagraire",
                'city_name_ar'       => "أولاد يحيى لكراير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Outerbat",
                'city_name_ar'       => "أوتربات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Sidi Aayad",
                'city_name_ar'       => "سِيْدِي عَيَّاد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Sidi Ali",
                'city_name_ar'       => "سيدي علي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Sidi Yahya Ou Youssef",
                'city_name_ar'       => "سيدي يحيى أو يوسف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Siroua",
                'city_name_ar'       => "سيروا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Skoura Ahl El Oust",
                'city_name_ar'       => "سكورة أهل الوسط",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Souk Lakhmis Dades",
                'city_name_ar'       => "سوق الخميس دادس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Tadighoust",
                'city_name_ar'       => "تاديغوست",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Taftechna",
                'city_name_ar'       => "تافتشنا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Taghbalte",
                'city_name_ar'       => "تغبالت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Taghzoute N'ait Atta",
                'city_name_ar'       => "تغزوت نايت عطى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Tagounite",
                'city_name_ar'       => "تاكنيت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Tamegroute",
                'city_name_ar'       => "تامكروت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Tamezmoute",
                'city_name_ar'       => "تامزموت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Tanourdi",
                'city_name_ar'       => "تنوردي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Tansifte",
                'city_name_ar'       => "تانسيفت ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Tarmigt",
                'city_name_ar'       => "ترميكت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Taznakht",
                'city_name_ar'       => "تازناخت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Telouet",
                'city_name_ar'       => "تلوات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Ternata",
                'city_name_ar'       => "ترناتة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Tidli",
                'city_name_ar'       => "تيدلي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Tilmi",
                'city_name_ar'       => "تلمي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Tinejdad",
                'city_name_ar'       => "تنجداد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Tinghir",
                'city_name_ar'       => "تنغير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Tinzouline",
                'city_name_ar'       => "تينزولين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Tizi N'ghachou",
                'city_name_ar'       => "تيزي نغشو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Toudgha El Oulia",
                'city_name_ar'       => "تودغى العليا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Toudgha Essoufla",
                'city_name_ar'       => "تودغة السفلى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Toulal",
                'city_name_ar'       => "تولال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Toundoute",
                'city_name_ar'       => "توندوت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Tounfite",
                'city_name_ar'       => "تونفيت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Zagora",
                'city_name_ar'       => "زاݣورة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Zaida",
                'city_name_ar'       => "زايدة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '8',
                'city_name'        => "Zaouiat Sidi Hamza",
                'city_name_ar'       => " زاوية سيدي حمزة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Adar",
                'city_name_ar'       => "أضار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Adis",
                'city_name_ar'       => "أديس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Afella Ighir",
                'city_name_ar'       => "أفلا اغير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Agadir",
                'city_name_ar'       => "أݣادير ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Agadir Melloul",
                'city_name_ar'       => "أڭادير ملول",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Aguinane",
                'city_name_ar'       => "أڭينان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ahl Ramel",
                'city_name_ar'       => "أهل رمل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ahl Tifnoute",
                'city_name_ar'       => "أهل تفنوت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ahmar Laglalcha",
                'city_name_ar'       => "أحمر لڭلالشة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ait Abdallah",
                'city_name_ar'       => "آيت عبد الله",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ait Amira",
                'city_name_ar'       => "آيت عميرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ait Igas",
                'city_name_ar'       => "أيت إڭاس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ait Issafen",
                'city_name_ar'       => "آيت إيسافن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ait Melloul",
                'city_name_ar'       => "أيت ملول",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ait Milk",
                'city_name_ar'       => "آيت ميلك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ait Mzal",
                'city_name_ar'       => "آيت مزال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ait Ouabelli",
                'city_name_ar'       => "أيت وابلي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ait Ouadrim",
                'city_name_ar'       => "أيت وادريم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ait Ouafqa",
                'city_name_ar'       => "آيت أوفقا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ait baha",
                'city_name_ar'       => "آيت باها",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Akka",
                'city_name_ar'       => "أقّا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Akka Ighane",
                'city_name_ar'       => "أقا إيغان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Allougoum",
                'city_name_ar'       => "الوڭوم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Amalou",
                'city_name_ar'       => "أمالو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ammelne",
                'city_name_ar'       => "أملن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Amskroud",
                'city_name_ar'       => "أمسكرود",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Anzi",
                'city_name_ar'       => "أنزي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Aouguenz",
                'city_name_ar'       => "آوڭنز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Aoulouz",
                'city_name_ar'       => "أولوز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Aourir",
                'city_name_ar'       => "اورير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Aqesri",
                'city_name_ar'       => "أقصري",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Arazane",
                'city_name_ar'       => "ارزان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Arbaa Ait Ahmed",
                'city_name_ar'       => "أربعاء آيت احمد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Arbaa Rasmouka",
                'city_name_ar'       => "أربعاء رسموكة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Arbaa Sahel",
                'city_name_ar'       => "أربعاء الساحل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Argana",
                'city_name_ar'       => "أرݣانة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Askaouen",
                'city_name_ar'       => "أسكاون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Assads",
                'city_name_ar'       => "اساضس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Assaisse",
                'city_name_ar'       => "أسايس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Assaki",
                'city_name_ar'       => "أساكي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Azaghar N'irs",
                'city_name_ar'       => "أزغار نيرس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Aziar",
                'city_name_ar'       => "أزيار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Azrar",
                'city_name_ar'       => "ازرار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Aït Iaaza",
                'city_name_ar'       => "آيت يعزا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Belfaa",
                'city_name_ar'       => "بلفاع",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Bigoudine",
                'city_name_ar'       => "بيڭودين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Biougra",
                'city_name_ar'       => "بيوݣرى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Bounaamane",
                'city_name_ar'       => "بونعمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Bounrar",
                'city_name_ar'       => "بونرار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Dcheïra El Jihadia",
                'city_name_ar'       => "دشيرة الجهادية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Drargua",
                'city_name_ar'       => "درارݣة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Eddir",
                'city_name_ar'       => "ادير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "El Faid",
                'city_name_ar'       => "الفايض",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "El Guerdane",
                'city_name_ar'       => "الݣردان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "El Koudia El Beida",
                'city_name_ar'       => "الكدية البيضاء",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "El Maader El Kabir",
                'city_name_ar'       => "المعدر الكبير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Fam el Hisn",
                'city_name_ar'       => "فم الحصن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Foum zguid",
                'city_name_ar'       => "فم زݣيد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Freija",
                'city_name_ar'       => "فريجة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Hilala",
                'city_name_ar'       => "هلال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ibn Yacoub",
                'city_name_ar'       => " ابن يعقوب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ida Ou Gailal",
                'city_name_ar'       => "إدا وڭيلال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ida Ou Gougmar",
                'city_name_ar'       => "إد أو ڭوڭمار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ida Ou Moumen",
                'city_name_ar'       => "إداومومن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ida Ougnidif",
                'city_name_ar'       => "إداوكنظيف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ida Ougoummad",
                'city_name_ar'       => "إدا وڭماض",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Idmine",
                'city_name_ar'       => "إضمين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Igli",
                'city_name_ar'       => "إڭلي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Igoudar Mnabha",
                'city_name_ar'       => "إيڭودار امنابها",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Iguidi",
                'city_name_ar'       => "إكيدي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Imaouen",
                'city_name_ar'       => "إيماون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Imi Mqourn",
                'city_name_ar'       => "إمي مقورن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Imi N'tayart",
                'city_name_ar'       => "إمي نتيارت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Imilmaiss",
                'city_name_ar'       => "إيملمايس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Imoulass",
                'city_name_ar'       => "إيمولاس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Imouzzer",
                'city_name_ar'       => "إيموزار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Imsouane",
                'city_name_ar'       => "امسوان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Inchaden",
                'city_name_ar'       => "إنشادن ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Inzegan",
                'city_name_ar'       => "إنزݣان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Irherm",
                'city_name_ar'       => "إغرم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Irigh N'tahala",
                'city_name_ar'       => "إيريغ نتاهلة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Issafen",
                'city_name_ar'       => "إيسافن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Kasbat Sidi Abdellah Ben M'barek",
                'city_name_ar'       => "قصبة سيدي عبد الله بن مبارك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Lagfifat",
                'city_name_ar'       => "لكفيفات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Lakhnafif",
                'city_name_ar'       => "الخنانيف",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Lamhadi",
                'city_name_ar'       => "لمهادي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Lamhara",
                'city_name_ar'       => "لمهارة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Lamnizla",
                'city_name_ar'       => "لمنيزلة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Lqliaa",
                'city_name_ar'       => "لقليعة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Machraa El Ain",
                'city_name_ar'       => "مشرع العين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Massa",
                'city_name_ar'       => "ماسة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Nihit",
                'city_name_ar'       => "نحيت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ouad Essafa",
                'city_name_ar'       => "واد صفاء",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Oualqadi",
                'city_name_ar'       => "والقاضي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ouijjane",
                'city_name_ar'       => "ويجان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Oulad Dahou",
                'city_name_ar'       => "أولاد داحو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ouled Berhil",
                'city_name_ar'       => "اولاد برحيل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ouled Teïma",
                'city_name_ar'       => "أولاد تايمة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Oum El Guerdane",
                'city_name_ar'       => "أم الكردان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ouneine",
                'city_name_ar'       => "اوناين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Ouzioua",
                'city_name_ar'       => "أوزيوة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Reggada",
                'city_name_ar'       => "رڭادة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Abdallah El Bouchouari",
                'city_name_ar'       => "سيدي عبد الله البوشواري",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Abdellah Ou Said",
                'city_name_ar'       => " سيدي عبد الله أو سعيد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Ahmed Ou Abdallah",
                'city_name_ar'       => "يدي أحمد أو عبد الله",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Ahmed Ou Amar",
                'city_name_ar'       => "سيدي أحمد أو عمر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Ahmed Ou Moussa",
                'city_name_ar'       => "سيدي احمد أو موسى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Bibi",
                'city_name_ar'       => "سيدي بيبي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Boaal",
                'city_name_ar'       => "سيدي بوعل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Borja",
                'city_name_ar'       => "سيدي بورجا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Bouabdelli",
                'city_name_ar'       => "سيدي بو عبد اللي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Boumoussa",
                'city_name_ar'       => "سيدي بوموسى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Boushab",
                'city_name_ar'       => "سيدي بوسحاب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Dahmane",
                'city_name_ar'       => "سيدي دحمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Hsaine",
                'city_name_ar'       => "سيدي حساين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Moussa Lhamri",
                'city_name_ar'       => "سيدي موسى الحمري",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Mzal",
                'city_name_ar'       => "سيدي مزال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Ouaaziz",
                'city_name_ar'       => "سيدي واعزيز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Sidi Ouassay",
                'city_name_ar'       => "سيدي وساي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Souk El Arbaa",
                'city_name_ar'       => "سوق الاربعاء",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tabia",
                'city_name_ar'       => "تابية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tadrart",
                'city_name_ar'       => "تادرارت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tafingoult",
                'city_name_ar'       => "تافنڭولت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tafraout",
                'city_name_ar'       => "تفراوت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tafraout El Mouloud",
                'city_name_ar'       => "تفراوت المولود",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tafraouten",
                'city_name_ar'       => "تافراوتن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Taghazout",
                'city_name_ar'       => "تغازوت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Taghzout",
                'city_name_ar'       => "تغزوت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Talgjount",
                'city_name_ar'       => "تالكجونت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Taliouine",
                'city_name_ar'       => "تاليوين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Talmakante",
                'city_name_ar'       => "تلمكانت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tamaloukte",
                'city_name_ar'       => "تمالوكت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tamanarte",
                'city_name_ar'       => "تمنأرت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tamri",
                'city_name_ar'       => "تامري",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tanalt",
                'city_name_ar'       => "تنالت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Taouyalte",
                'city_name_ar'       => "تاويالت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Targua Ntouchka",
                'city_name_ar'       => "تاركة نتوشكة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Taroudant",
                'city_name_ar'       => "تارودانت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tarsouat",
                'city_name_ar'       => "تارسوات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tassegdelt",
                'city_name_ar'       => "تسكدلت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tassousfi",
                'city_name_ar'       => "تاسوسفي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tassrirt",
                'city_name_ar'       => "تاسريرت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tata",
                'city_name_ar'       => "طاطا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tataoute",
                'city_name_ar'       => "تتاوت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tazarine",
                'city_name_ar'       => "تازارين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tazemmourt",
                'city_name_ar'       => "تزمورت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Temsia",
                'city_name_ar'       => "تمسية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tidsi Nissendalene",
                'city_name_ar'       => "تدسي نيسدلان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tighmi",
                'city_name_ar'       => "تيغمي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tigouga",
                'city_name_ar'       => "تڭوڭة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tigzmerte",
                'city_name_ar'       => "تيڭزمرت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tindine",
                'city_name_ar'       => "تيندين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tinzart",
                'city_name_ar'       => "تينزرت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tiout",
                'city_name_ar'       => "تيوت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tiqqi",
                'city_name_ar'       => "تقي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tisfane",
                'city_name_ar'       => "تيسفان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tisrasse",
                'city_name_ar'       => "تيسراس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tissint",
                'city_name_ar'       => "تيسينت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tizaghte",
                'city_name_ar'       => "تيزغت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tizgzaouine",
                'city_name_ar'       => "تيزڭزاوين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tizi N'test",
                'city_name_ar'       => "تيزي نتيست",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tizi Ntakoucht",
                'city_name_ar'       => "تيزي نتاكوشت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tiznit",
                'city_name_ar'       => "تزنيت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tizoughrane",
                'city_name_ar'       => "تيزغران",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tizounine",
                'city_name_ar'       => "تزونين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tlite",
                'city_name_ar'       => "تليت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tnine Aday",
                'city_name_ar'       => "ثنين أداي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Tnine Aglou",
                'city_name_ar'       => "ثنين أغلو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Toubkal",
                'city_name_ar'       => "توبقال",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Toufelaazt",
                'city_name_ar'       => "توفلعزت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Toughmart",
                'city_name_ar'       => "توغمرت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Toumliline",
                'city_name_ar'       => "تومليلين",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Zagmouzen",
                'city_name_ar'       => "زگموزن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '9',
                'city_name'        => "Zaouia Sidi Tahar",
                'city_name_ar'       => "زاوية سيدي الطاهر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Abaynou",
                'city_name_ar'       => "أباينو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Abteh",
                'city_name_ar'       => "أبطيح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Aday",
                'city_name_ar'       => "أداي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Aferkat",
                'city_name_ar'       => "أفركات ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Ait Boufoulen",
                'city_name_ar'       => "آيت بوفلن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Ait Erkha",
                'city_name_ar'       => "آيت الرخا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Al Mahbass",
                'city_name_ar'       => "المحبس",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Amtdi",
                'city_name_ar'       => "امتدي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Anfeg",
                'city_name_ar'       => "أنفك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Aouint Lahna",
                'city_name_ar'       => "عوينة لهنا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Aouint Yghomane",
                'city_name_ar'       => "عوينة يغمان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Arbaa Ait Abdellah",
                'city_name_ar'       => "أربعاء آيت عبد الله",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Asrir",
                'city_name_ar'       => "أسرير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Assa",
                'city_name_ar'       => "اسا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Ben Khlil",
                'city_name_ar'       => "بن خليل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Bouizakarne",
                'city_name_ar'       => "بو يزكارن",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Boutrouch",
                'city_name_ar'       => "بوطروش",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Chbika",
                'city_name_ar'       => "شبيكة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Echatea El Abied",
                'city_name_ar'       => " الشاطئ الأبيض",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "El Outia",
                'city_name_ar'       => "الوطية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Fask",
                'city_name_ar'       => "فاصك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Guelmim",
                'city_name_ar'       => "ݣلميم",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Ibdar",
                'city_name_ar'       => "إبضر",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Ifrane Atlas Saghir",
                'city_name_ar'       => "إفران الأطلس الصغير",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Imi N'fast",
                'city_name_ar'       => "إمي نفاست ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Labouirat",
                'city_name_ar'       => "البيرات",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Labyar",
                'city_name_ar'       => "لبيار",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Lakhssas",
                'city_name_ar'       => "لخصاص",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Laqsabi Tagoust",
                'city_name_ar'       => "لقصابي تاكوست",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Mesti",
                'city_name_ar'       => "مستي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Mirleft",
                'city_name_ar'       => " مير لفت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Msied",
                'city_name_ar'       => "مسيد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Rass Oumlil",
                'city_name_ar'       => "رأس اومليل",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Sbouya",
                'city_name_ar'       => "صبويا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Sebt Ennabour",
                'city_name_ar'       => "سبت النابور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Sidi Abdallah Ou Belaid",
                'city_name_ar'       => "سيدي عبدالله أوبلعيد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Sidi H'saine Ou Ali",
                'city_name_ar'       => " سيدي حساين أو علي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Sidi Ifni",
                'city_name_ar'       => "سيدي إفني",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Sidi M'bark",
                'city_name_ar'       => "سيدي مبارك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Tagante",
                'city_name_ar'       => "تكانت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Taghjijt",
                'city_name_ar'       => "تغجيجت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Tagmout",
                'city_name_ar'       => "تكموت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Taliouine Assaka",
                'city_name_ar'       => "تلوين أساكا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Tan Tan",
                'city_name_ar'       => "طانطان",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Tangarfa",
                'city_name_ar'       => "تنڭرفا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Targa Wassay",
                'city_name_ar'       => "تارگة واساي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Tighirt",
                'city_name_ar'       => "تيغيرت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Tiglit",
                'city_name_ar'       => "تڭليت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Tilemzoun",
                'city_name_ar'       => "تيلمزون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Timoulay",
                'city_name_ar'       => "تمولاي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Tioughza",
                'city_name_ar'       => "تيوغزة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Tnine Amellou",
                'city_name_ar'       => "تنين أملو",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Touizgui",
                'city_name_ar'       => "تويزݣي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '10',
                'city_name'        => "Zag",
                'city_name_ar'       => "زاك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "Akhfennir",
                'city_name_ar'       => "أخفنير ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "Amgala",
                'city_name_ar'       => "امكالة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "Boujdour",
                'city_name_ar'       => "بوجدور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "Boukraa",
                'city_name_ar'       => "بوكراع",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "C.R. El Hagounia",
                'city_name_ar'       => " اﻟﺣﮐوﻧﯾﺔ",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "C.R. Tah",
                'city_name_ar'       => "طاح",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "C.R. Tifariti",
                'city_name_ar'       => "تيفاريتي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "Daoura",
                'city_name_ar'       => "دوره",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "Dcheira",
                'city_name_ar'       => "دشيرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "El Marsa",
                'city_name_ar'       => " المرسى",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "Es-Semara",
                'city_name_ar'       => "سمارة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "Foum El Oued",
                'city_name_ar'       => "فم الواد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "Gueltat Zemmour",
                'city_name_ar'       => "كلتة زمور",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "Haouza",
                'city_name_ar'       => " حوزة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "Jdiriya",
                'city_name_ar'       => "جديرية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "Jraifia",
                'city_name_ar'       => "جريفية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "Lamssid",
                'city_name_ar'       => "لمسيد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "Laäyoune",
                'city_name_ar'       => "العيون",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "Sidi Ahmed Laaroussi",
                'city_name_ar'       => "سيدي أحمد العروسي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '11',
                'city_name'        => "Tarfaya",
                'city_name_ar'       => "طرفاية",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '12',
                'city_name'        => "Aghouinite",
                'city_name_ar'       => "أغوانيت",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '12',
                'city_name'        => "Aousserd",
                'city_name_ar'       => "أوسرد",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '12',
                'city_name'        => "Bir Anzarane",
                'city_name_ar'       => "بيرانزاران",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '12',
                'city_name'        => "Bir Gandouz",
                'city_name_ar'       => "بير گندوز",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '12',
                'city_name'        => "Dakhla",
                'city_name_ar'       => " داخلة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '12',
                'city_name'        => "El Argoub",
                'city_name_ar'       => "العركوب",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '12',
                'city_name'        => "Gleibat El Foula",
                'city_name_ar'       => "اكليبات الفولة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '12',
                'city_name'        => "Imlili",
                'city_name_ar'       => "إمليلي",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '12',
                'city_name'        => "Lagouira",
                'city_name_ar'       => "لكويرة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            // mijik=mijek
            [
                'region_id'          => '12',
                'city_name'        => "Mijek",
                'city_name_ar'       => "ميجك",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '12',
                'city_name'        => "Oum Dreyga",
                'city_name_ar'       => "أم دريكة",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '12',
                'city_name'        => "Tichla",
                'city_name_ar'       => "تيشلا",
                // 'status'           => true
                // 'tarif'           => 0    
            ],
            [
                'region_id'          => '12',
                'city_name'        => "Zoug",
                'city_name_ar'        => "زوك",
                // 'status'           => true
                // 'tarif'           => 0       
            ]
        ];
        City::insert($cities);
    }
}