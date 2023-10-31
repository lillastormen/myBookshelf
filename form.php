<form method="post"> 

    <select name="sortBy">
        <option value="title">
            Title
        </option>
        <option value="authors_last_name"
        <?php if(isset($_POST["sortBy"]) && $_POST["sortBy"] == "authors_last_name"){
            echo 'Selected';} ?> >
            Author
        </option>
        <option value="title">
            Title
        </option>
        <option value="color">
            Color
        </option>
        <option value="genre">
            Genre
        </option>
    </select>
    
    <input type="submit">
    
    </submit>

</form>

<?php

