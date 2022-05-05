<form action="/admin/posts" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">Title</label>
        <input type="text" name="title" id="title" class="border border-gray-400 p-2 w-full" value="{{old('title')}}" required>

        @error('title')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">Excerpt</label>
        <textarea name="excerpt" id="excerpt" class="border border-gray-400 p-2 w-full" required>{{old('excerpt')}}</textarea>


        @error('excerpt')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-gray-700">Thumbnail</label>
        <input name="thumbnail" id="thumbnail" type="file" class="border border-gray-400 p-2 w-full" required>


        @error('thumbnail')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">Body</label>
        <textarea name="body" id="body" class="border border-gray-400 p-2 w-full" required>{{old('body')}}</textarea>


        @error('body')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">category</label>
        <select name="category_id" id="category_id" class="border border-gray-400 p-2 w-full" required>
            <option value="">Select Category</option>
            <?php
            $categories = \App\Models\Category::all();
            ?>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{ucwords($category->name)}}</option>
            @endforeach
        </select>

        @error('category')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blur-500">
        Submit
    </button>
</form>
