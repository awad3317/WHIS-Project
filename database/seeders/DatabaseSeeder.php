<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $services = [
            [
                'name' => 'تطوير الويب',
                'description' => 'نقدم حلولاً متكاملة لتطوير المواقع.',
                'icon_service' => 'web icon.svg',
            ],
            [
                'name' => 'تطوير التطبيقات',
                'description' => 'نساعدك في بناء تطبيقات مخصصة للهواتف الذكية والأجهزة المحمولة.',
                'icon_service' => 'mobile dev. icon.svg',
            ],

            [
                'name' => 'تصميم واجهة المستخدم',
                'description' => 'نحن نقدم حلولاً متكاملة في تصميم واجهة المستخدم (UI/UX) لتطبيقات الويب والأجهزة المحمولة.',
                'icon_service' => 'system dev icon.svg',
            ],

            [
                'name' => 'تسويق الرقمي',
                'description' => 'نحن نقدم خدمات تسويق رقمي متكاملة لزيادة حضورك على الإنترنت وتصل إلى جمهورك المستهدف.',
                'icon_service' => 'support icon.svg',
            ],

          

        ];
        Service::insert($services);
        $projects = [
            [
                'title' => 'مشروع 1',
                'type' => 'تطوير الويب',
                'description' => 'مشروع تطوير موقع ويب للشركة XYZ.',
                'link' => 'https://www.xyz.com',
                'image' => 'baytat.png',
                'service_id' => 1,
                'start_date' => '2023-01-01',
                'delivery_date' => '2023-03-01',
                'price' => 50000,
                'status' => 'مكتمل',
            ],
            [
                'title' => 'مشروع 2',
                'type' => 'تطوير التطبيقات',
                'description' => 'مشروع تطوير تطبيق للهواتف الذكية للشركة ABC.',
                'link' => 'https://www.abc.com',
                'image' => 'baytat.png',
                'service_id' => 2,
                'start_date' => '2023-02-01',
                'delivery_date' => '2023-04-01',
                'price' => 80000,
                'status' => 'مكتمل',
            ],
            [
                'title' => 'مشروع 3',
                'type' => 'تصميم واجهة المستخدم',
                'description' => 'مشروع تصميم واجهة المستخدم (UI/UX) للبرنامج XYZ.',
                'link' => 'https://www.xyz.com',
                'image' => 'baytat.png',
                'service_id' => 3,
                'start_date' => '2023-03-01',
                'delivery_date' => '2023-05-01',
                'price' => 120000,
                'status' => 'مكتمل',
            ],
            [
                'title' => 'مشروع 4',
                'type' => 'تسويق الرقمي',
                'description' => 'مشروع تسويق رقمي للشركة XYZ.',
                'link' => 'https://www.xyz.com',
                'image' => 'baytat.png',
                'service_id' => 4,
                'start_date' => '2023-04-01',
                'delivery_date' => '2023-06-01',
                'price' => 60000,
                'status' => 'مكتمل',
            ],
        ];
        Project::insert($projects);
    }
}