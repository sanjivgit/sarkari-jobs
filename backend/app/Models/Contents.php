<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    use HasFactory;

    /**
     * | Store Content
     */
    public function storeContent($content)
    {
        $mContent = new Contents();

        $mContent->content = $content;
        $mContent->save();

        return $mContent->id;
    }


    public function updateContent($content)
    {
        $mContent = new Contents();

        $data = $mContent->where('id', $content['id'])->first();
        $data->content = $content['content'];
        $data->update();

        return $data->id;
    }
}
