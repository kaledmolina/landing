<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Url;

class ShowBlog extends Component
{
    #[Url]
    public  $categoySlug = null;
    public function render()
    {  
        
        $categories = Category::all();
        $paginate = 4;
        if (!empty($this->categoySlug)){
            $category = Category::where('slug',$this->categoySlug)->first();
            if (empty($category)) {
                abort(404);
            }
            $articles = Article::orderBy('created_at','DESC')
            ->where('status', 1)
            ->where('category_id',$category->id)          
            ->paginate($paginate);
        }else{
            $articles = Article::orderBy('created_at','DESC')
            ->where('status', 1)
            ->paginate($paginate);
        }
        $latestearticles = Article::orderBy('created_at','DESC')
            ->where('status', 1)
            ->get()
            ->take(5);
        return view('livewire.show-blog',
        [
            'articles' => $articles,
            'categories'=> $categories,
            'latestearticles'=> $latestearticles
        ]);
    }
}
