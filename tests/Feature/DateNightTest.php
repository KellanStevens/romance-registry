<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\DateNight;
use Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase; // Add this import statement

// Remove the duplicate import statement for InteractsWithDatabase
class DateNightTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testExample(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test if DateNight can be created.
     */
    public function testCanCreateDateNight(): void
    {
        $DateNight = DateNight::factory()->create();

        $this->assertDatabaseHas('date_nights', ['id' => $DateNight->id]);

        // Delete the DateNight
        $DateNight->delete();
    }

    /**
     * Test if DateNight can be updated.
     */
    public function testCanUpdateDateNight(): void
    {
        $DateNight = DateNight::factory()->create();

        $this->assertDatabaseHas('date_nights', ['id' => $DateNight->id]);

        $DateNight->Location = 'Updated DateNight Location';
        $DateNight->save();

        $this->assertDatabaseHas('date_nights', ['Location' => 'Updated DateNight Location']);

        // Delete the DateNight
        $DateNight->delete();
    }

    /**
     * Test if DateNight can be deleted.
     */
    public function testCanDeleteDateNight(): void
    {
        $DateNight = DateNight::factory()->create();

        $DateNight->delete();

        $this->assertDatabaseMissing('date_nights', ['id' => $DateNight->id]);
    }
}
