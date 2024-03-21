<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<h1>Create new post</h1>

<form method="POST">
    <label>
        <span>Title:</span>
        <input name="title"/>
    </label>
    <label>
        <span>Category ID:</span>
        <select name="category_id">
        <option value="1">Sport</option>
        <option value="2">Food</option>
        <option value="3">Music</option>
        </select>
    </label>
    <button>Save</button>
</form>

<?php require "components/footer.php" ?>