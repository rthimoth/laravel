<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Http\Requests\ThreadStoreRequest;
use App\Jobs\CreateThread;
use App\Models\Tag;
use App\Models\Thread;
use App\Policies\ThreadPolicy;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Support\Str;
use Mews\Purifier\Facades\Purifier;
use App\Jobs\UpdateThread;


class ThreadController extends Controller
{
    public function __construct()
    {
        return $this->middleware([Authenticate::class, EnsureEmailIsVerified::class])->except(['index', 'show']);
    }

    public function index()
    {
        return view('pages.threads.index', [
            'threads'  => Thread::orderBy('id', 'desc')->paginate(10),
        ]);
    }

    public function create()
    {
        return view('pages.threads.create', [
            'categories' => Category::all(),
            'tags'        => Tag::all(),
            ]);
    }

    public function store(ThreadStoreRequest $request)
    {
        $this->dispatchSync(CreateThread::fromRequest($request));

        return redirect()->route('threads.index')->with('success', 'Thread created!');
    }

    public function show(Category $category, Thread $thread)
    {
        return view('pages.threads.show', compact('thread', 'category'));
    }


    public function edit(Thread $thread)
    {
//        return $thread;

        $this->authorize(ThreadPolicy::UPDATE, $thread);

        $oldTags = $thread->tags()->pluck('id')->toArray();
        $selectedCategory = $thread->category;

//        return $oldTags;

        return view('pages.threads.edit', [
            'thread'            => $thread,
            'tags'              => Tag::all(),
            'oldTags'           => $oldTags,
            'categories'        => Category::all(),
            'selectedCategory'  => $selectedCategory,
        ]);
    }


    public function update(ThreadStoreRequest $request, Thread $thread)
    {
        $this->authorize(ThreadPolicy::UPDATE, $thread);

        // Make sure to pass the $thread and $request in the correct order
        // Also, ensure that $request is an instance of ThreadStoreRequest
        $updateThreadJob = UpdateThread::fromRequest($thread, $request);

        // Dispatch the job synchronously or push it to the queue
        dispatch($updateThreadJob);

        return redirect()->route('threads.index')->with('success', 'Thread Updated!');
    }



//    public function destroy(Thread $thread)
//    {
//        //
//    }
}
