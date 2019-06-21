<?php

use Illuminate\Database\Seeder;

class lectureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\lecture::create([
           'title'=>'디지털 상상력과 글쓰기',
            'content'=>'디지털 환경 매체에 익숙한 학생에게 창의적이고 논리적인 사고를 표현 할 수 있는 글쓰기 능력을 키우는데 목적이 있다.
                      글쓰기가 경쟁력인 시대,글쓰기 기본과 글을 잘 쓰는 방법을 익히게 해 사회 경쟁력을 갖추게 한다.',
           'professor' => '강영기',
        ]);
    }
}
