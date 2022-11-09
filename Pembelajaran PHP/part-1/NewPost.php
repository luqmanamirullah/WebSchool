<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/blog.css">
    <title>Blog</title>
</head>
<body>
    <form action="ViewPost.php" method="post" class="blog-input">
        <div class="edit-text">
            <input type="text" name="title" class="input-title" id="title" required >
            <label for="title" class="title-label">Title</label>
            <textarea type="text" name="content" class="content" rows="50" placeholder="type your content here..." required></textarea>
        </div>
        <div class="bar-tab">
            <input type="submit" class="publish-btn" value="Publish">
            <div class="option-author">
                <div class="writer">
                    <input type="text" name="name-author" class="name-author" id="author" required>
                    <label for="author" class="title-author">Writer</label>
                </div>
                <div class="publishedOn">
                    <h4 class="h1-published">Published On:</h4>
                    <label for="time">Time:</label>
                    <input type="time" name="time" id="time" class="input-time" required> <br><br>
                    <label for="date">Date:</label>
                    <input type="date" name="date" id="date" class="input-time" required>   
                </div>
            </div>
        </div>
    </form>
</body>
</html>