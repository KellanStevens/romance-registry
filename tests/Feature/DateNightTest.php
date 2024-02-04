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
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test if DateNight can be created.
     */
    public function test_can_create_date_night(): void
    {
        $DateNight = DateNight::factory()->create();

        $this->assertDatabaseHas('date_nights', ['id' => $DateNight->id]);

        // Delete the DateNight
        $DateNight->delete();
    }

    /**
     * Test if DateNight can be updated.
     */
    public function test_can_update_date_night(): void
    {
        $DateNight = DateNight::factory()->create();

        $this->assertDatabaseHas('date_nights', ['id' => $DateNight->id]);

        $DateNight->Location = 'Updated DateNight Name';
        $DateNight->save();

        $this->assertDatabaseHas('date_nights', ['Location' => 'Updated DateNight Name']);

        // Delete the DateNight
        $DateNight->delete();
    }

    /**
     * Test if DateNight can be deleted.
     */
    public function test_can_delete_date_night(): void
    {
        $DateNight = DateNight::factory()->create();

        $DateNight->delete();

        $this->assertDatabaseMissing('date_nights', ['id' => $DateNight->id]);

    }
}
