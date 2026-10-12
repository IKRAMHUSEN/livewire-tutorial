<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;
    public $title;
    public $body;
    public $postAdd = false;
    public $postUpdate = false;
    public  $postId;
    public $search;

    public function render()
    {
        return view('livewire.posts', [
            'posts' => Post::latest()
                ->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('body', 'like', '%' . $this->search . '%')
                ->paginate(5),
        ]);
    }


    public function createPost()
    {
        $this->postAdd = true;
        $this->postUpdate = false;
    }

    public function cancel()
    {

        $this->postAdd = false;
        $this->postUpdate = false;
    }


    public function savePost()
    {

        $this->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        Post::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);
        session()->flash('success', 'Post created successfully.');

        $this->postAdd = false;

        $this->resetInputFields();
    }

    public function editPost($id)
    {
        $post = Post::find($id);
        $this->title = $post->title;
        $this->body = $post->body;
        $this->postId = $post->id;
        $this->postUpdate = true;
        $this->postAdd = false;
    }

    public function resetInputFields()
    {
        $this->title = '';
        $this->body = '';
    }

    public function updatePost()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $post = Post::find($this->postId);
        $post->update([
            'title' => $this->title,
            'body' => $this->body,
        ]);

        session()->flash('success', 'Post updated successfully.');

        $this->postUpdate = false;

        $this->resetInputFields();
    }

    public function deletePost($id)
    {
        Post::find($id)->delete();
        session()->flash('success', 'Post deleted successfully.');
    }
}
