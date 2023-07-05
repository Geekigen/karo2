<?php

namespace App\Http\Livewire;

use App\Models\Post;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;

class BlogPostComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $content;
    public $image;

    public function render()
    {
        $posts = Post::all();

        return view('livewire.blog-post-component', compact('posts'));
    }

    public function createPost()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|max:1024', // Assuming maximum image size of 1MB
        ]);

        $imagePath = null;

        if ($this->image) {
            $uploadedResponse = Cloudinary::upload($this->image->getRealPath(), [
                'folder' => 'images',
            ]);

            $imagePath = $uploadedResponse->getSecurePath();
        }

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'image' => $imagePath,
            'user_id' => auth()->id(),
        ]);

        $this->resetFields();
    }

    public function deletePost($postId)
    {
        $post = Post::find($postId);

        if ($post) {
            // Delete the image from Cloudinary if it exists
            if ($post->image) {
                Cloudinary::destroy($post->image);
            }

            $post->delete();
        }
    }

    private function resetFields()
    {
        $this->title = '';
        $this->content = '';
        $this->image = null;
    }
}
