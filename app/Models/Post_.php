<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    // use HasFactory;

    private static $blog_posts = [
        [
            "title" => "Post pertama",
            "slug" => 'post-pertama',
            "author" => "Jajang Nurjaman",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. At est fuga eos tenetur quisquam, ex recusandae dolorem nulla
            doloribus vitae fugit? Iste quibusdam eum cupiditate dignissimos ut, a possimus ratione placeat hic vitae quaerat
            consectetur obcaecati modi aliquid, magnam odit quae, veniam doloribus labore est maiores quo. Fugiat, expedita, eum
            magni est dolorum corporis ea laborum dolor incidunt modi facere quam iusto eveniet, libero qui? Assumenda, qui.
            Voluptatibus recusandae adipisci corporis laboriosam, amet commodi placeat ea quisquam ad ut harum ipsam natus.
            Voluptatum qui excepturi ullam laboriosam ipsam inventore, ratione saepe omnis! Sapiente quasi a sint, dolores dolor
            molestiae nam?",
        ],
        [
            "title" => "Post kedua",
            "slug" => 'post-kedua',
            "author" => "Nigaregar",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, facere provident. Totam dolores accusamus architecto
            reiciendis consequatur expedita dolor rerum commodi sunt, similique obcaecati illo quae mollitia, necessitatibus porro
            saepe qui a deleniti. Tenetur deserunt tempora quae, eaque animi laboriosam ipsam, in error dolores, temporibus ea
            blanditiis magni minus hic dolorum iste dignissimos libero modi incidunt sequi repudiandae placeat nobis nostrum. Ut
            amet hic, ratione commodi ullam eligendi aperiam quae porro, accusamus soluta aspernatur quidem! Expedita perspiciatis,
            quasi rerum similique nostrum deserunt amet omnis porro dignissimos. Tenetur magnam est voluptas. Fugit totam ullam
            ducimus nobis eveniet delectus consectetur quidem reiciendis illum, autem in voluptatibus itaque possimus eos labore sed
            dignissimos vero. Nisi blanditiis, hic cum doloribus illo consequuntur amet laborum fugiat voluptatum, rerum ducimus
            sunt eaque, labore quis beatae nemo commodi laudantium provident veniam? Fugit tenetur odio autem expedita dolor facilis
            beatae in, tempore impedit amet saepe asperiores, delectus, accusantium incidunt itaque ullam doloribus. Laboriosam
            voluptatibus, ducimus dolorum corrupti blanditiis natus fuga alias aliquam a! Ut accusantium dolore possimus, nemo iure
            voluptatibus necessitatibus sint a praesentium, iusto, natus ad exercitationem perferendis tempora esse voluptates ipsam
            quam. Illum, soluta officia atque fugiat dignissimos culpa veritatis hic recusandae, libero rerum cupiditate non!",
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
