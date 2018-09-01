<?php

namespace Tests\Feature;

use Tests\Feature\Base\UserTest;

class ReservationTest extends UserTest
{
    public function testEditForm()
    {
        $this->login();
        $this->get('/reservation/edit')->assertStatus(200);
    }

//    public function testAdd()
//    {
//        $this->login();
//        $this->post('/reservation/add', [
//            'new_address' => '渋谷区',
//            'old_address' => '品川区',
//            'rent' => '~10万円',
//            'house_image_id' => '2',
//            'other' => '駅から徒歩10分以内'
//        ])->assertRedirect('/mypage/edit');
//    }
}