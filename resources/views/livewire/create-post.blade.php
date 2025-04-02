<div>
    <h1>Create a New Post</h1>

    <!-- Simple HTML Form -->
    <form action="/posts" method="POST">
        @csrf

        <!-- Title Input -->
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" placeholder="Enter post title" />
        </div>

        <!-- Content Input -->
        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content" placeholder="Enter post content"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit">Create Post</button>
    </form>
</div>
