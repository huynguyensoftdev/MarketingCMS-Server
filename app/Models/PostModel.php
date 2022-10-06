<?php
namespace App\Models;
use CodeIgniter\Model;
class PostModel extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'post_id';

    protected $allowedFields = ['post_id','post_title','post_slug','post_category_id','post_description','post_keywords','post_detail','post_avata','post_album_id','post_user_id','product_status','post_created_at'];
    
}
