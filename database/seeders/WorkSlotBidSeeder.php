<?php

namespace Database\Seeders;

use App\Models\WorkSlotBid;
use Illuminate\Database\Seeder;

class WorkSlotBidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    

    public function run()
    {
        // Create Workslot
        $workslot = WorkSlotBid::create([
            'work_slot_id'=> 1,
            'user_id' => 4,
            'status' => 0,
        ]);
        $workslot = WorkSlotBid::create([
            'work_slot_id'=> 2,
            'user_id' => 5,
            'status' => 0,
        ]);
        $workslot = WorkSlotBid::create([
            'work_slot_id'=> 3,
            'user_id' => 6,
            'status' => 0,
        ]);
        $workslot = WorkSlotBid::create([
            'work_slot_id'=> 4,
            'user_id' => 4,
            'status' => 0,
        ]);
        $workslot = WorkSlotBid::create([
            'work_slot_id'=> 5,
            'user_id' => 5,
            'status' => 0,
        ]);
        $workslot = WorkSlotBid::create([
            'work_slot_id'=> 6,
            'user_id' => 6,
            'status' => 0,
        ]);
    }
}
