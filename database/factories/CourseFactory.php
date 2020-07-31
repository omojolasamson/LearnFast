
<?php

use Illuminate\Support\Facades\Auth;

use App\Models\Course;

use Faker\Generator as Faker;

$factory->define(\App\Models\Course::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 4),
        'category_id' => 1,
        'title' => 'Javascript',
        'sub_title' => 'Introduction to Javascript',
        'description' => $faker->paragraphs(rand(2, 10), true),
        'about_instructor' => $faker->paragraphs(rand(2, 5), true),
        'playlist_url' => 'PL55RiY5tL51qIb5VW2ywbT12UZeqmzBAu',
        'tags' => $faker->sentence,
        'photo' => 'http://lorempixel.com/400/200',
        'promo_video_url' => 'https://www.youtube.com/watch?v=NvQmi_ciL1k',
        'creator_status' => 1,
        'admin_status' => 0,
        'what_will_students_learn' => $faker->paragraphs(rand(2, 10), true),
        'target_students' => $faker->paragraphs(rand(2, 10), true),
        'requirements' => $faker->paragraphs(rand(2, 10), true),
        'faq' => $faker->paragraphs(rand(2, 10), true),
        'discount_price' => 20000,
        'actual_price' => 20000,
        'view_count' => 0,
        'subscriber_count' => 0,
        'main_course_id' => 1,
        'summary_course_id' => 1,
    ];
});
