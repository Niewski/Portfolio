<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Skills;

class AddSkillTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testAddSkillTest()
    {

        factory(Skills::class)->create([
            'skill' => 'Web Development'
        ]);


        $response = $this->get('/skills');

        $response->assertSee('Web Development');
    }

}