<?php

namespace Database\Factories;

use App\Models\Like;
use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Like::class;

    public function definition()
    {
        return [
            'user_id'   => function() {
                return User::factory()->create()->id;
            }
        ];
    }

    public function reply()
    {
        return $this->state(function () {
            return [
                'likeable_id' => function () {
                    Reply::factory()->create()->id;
                },
                'likeable_type' => 'replies',
            ];
        });
    }

    public function thread()
    {
        return $this->state(function () {
            return [
                'likeable_id' => function () {
                    Thread::factory()->create()->id;
                },
                'likeable_type' => 'replies',
            ];
        });
    }
}
