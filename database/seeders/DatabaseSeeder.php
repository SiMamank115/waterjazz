<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            "image_path" => "/",
            "title" => "Ada yang bawa bom ?!?!?",
            "description" => "<script>console.log(1)</script><strong>Pellentesque lacus felis</strong>, egestas dignissim consequat id, vulputate nec elit. Sed sapien ligula, placerat sit amet arcu sed, interdum pretium nunc. Nulla facilisi. Duis scelerisque, sapien eget venenatis volutpat, erat nulla auctor quam, quis fringilla mi orci et est.",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, leo quis pulvinar viverra, justo massa pretium purus, gravida posuere odio erat ut diam. Phasellus neque neque, vehicula eget ultrices id, ultrices in massa. Morbi in neque ac magna rutrum sodales ut pharetra risus. Morbi nec justo non leo porta mollis. Aenean vel gravida erat. Aliquam fringilla sapien eu magna suscipit, vel posuere magna vulputate. Pellentesque lacus felis, egestas dignissim consequat id, vulputate nec elit. Sed sapien ligula, placerat sit amet arcu sed, interdum pretium nunc. Nulla facilisi. Duis scelerisque, sapien eget venenatis volutpat, erat nulla auctor quam, quis fringilla mi orci et est. Ut enim augue, accumsan eu nulla at, eleifend scelerisque mauris. Vivamus leo sem, accumsan a quam quis, mollis viverra nibh."
        ]);
        News::create([
            "image_path" => "/",
            "title" => "Ada yang bawa bom ?!?!? #2",
            "description" => "Pellentesque lacus felis, egestas dignissim consequat id, vulputate nec elit. Sed sapien ligula, placerat sit amet arcu sed, interdum pretium nunc. Nulla facilisi. Duis scelerisque, sapien eget venenatis volutpat, erat nulla auctor quam, quis fringilla mi orci et est.",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, leo quis pulvinar viverra, justo massa pretium purus, gravida posuere odio erat ut diam. Phasellus neque neque, vehicula eget ultrices id, ultrices in massa. Morbi in neque ac magna rutrum sodales ut pharetra risus. Morbi nec justo non leo porta mollis. Aenean vel gravida erat. Aliquam fringilla sapien eu magna suscipit, vel posuere magna vulputate. Pellentesque lacus felis, egestas dignissim consequat id, vulputate nec elit. Sed sapien ligula, placerat sit amet arcu sed, interdum pretium nunc. Nulla facilisi. Duis scelerisque, sapien eget venenatis volutpat, erat nulla auctor quam, quis fringilla mi orci et est. Ut enim augue, accumsan eu nulla at, eleifend scelerisque mauris. Vivamus leo sem, accumsan a quam quis, mollis viverra nibh."
        ]);
        News::create([
            "image_path" => "/",
            "title" => "Ada yang bawa bom ?!?!? #3",
            "description" => "Pellentesque lacus felis, egestas dignissim consequat id, vulputate nec elit. Sed sapien ligula, placerat sit amet arcu sed, interdum pretium nunc. Nulla facilisi. Duis scelerisque, sapien eget venenatis volutpat, erat nulla auctor quam, quis fringilla mi orci et est.",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus, leo quis pulvinar viverra, justo massa pretium purus, gravida posuere odio erat ut diam. Phasellus neque neque, vehicula eget ultrices id, ultrices in massa. Morbi in neque ac magna rutrum sodales ut pharetra risus. Morbi nec justo non leo porta mollis. Aenean vel gravida erat. Aliquam fringilla sapien eu magna suscipit, vel posuere magna vulputate. Pellentesque lacus felis, egestas dignissim consequat id, vulputate nec elit. Sed sapien ligula, placerat sit amet arcu sed, interdum pretium nunc. Nulla facilisi. Duis scelerisque, sapien eget venenatis volutpat, erat nulla auctor quam, quis fringilla mi orci et est. Ut enim augue, accumsan eu nulla at, eleifend scelerisque mauris. Vivamus leo sem, accumsan a quam quis, mollis viverra nibh."
        ]);
    }
}
