<link rel="stylesheet" href="styles.css">
<?php require __DIR__ . "/books.php"; ?>
<?php require __DIR__ . "/bookshelf.php"; ?> 

<head>
    <title>My bookshelf</title>
</head>

<body>

    <header>
        <h1>My bookshelf</h1>
    </header>

<?php require __DIR__ . "/form.php"; ?>

<?php
    if(isset($_POST['sortBy'])){
        $key_values = array_column($books, $_POST['sortBy']); //function to get values from a specifc key column in array, setting it to sortBy to search after a value enetered by the user in the form
        array_multisort($key_values, SORT_ASC, $books); //function to sort an array by the key value
    }
?>
    <main class=“container”> 
        
            <div class="shelf">
                <?php 
                    $book = 0;
                    for($shelf=0; $shelf<$bookshelf["rows"]; $shelf++){ ?>
                        <tr>
                            <?php for($bookSide=0; $bookSide<$bookshelf["columns"]; $bookSide++){ ?>
                                <td>
                                    <div class="bookCover <?= $books[$book]['color']; ?>">
                                        <div class="popup">
                                            <?= $books[$book]["genre"]?> <br> 
                                            <?= $books[$book]["rating"]?> <br> 
                                            <?= $books[$book]["publication_date"]?>
                                        </div>
                                        <div class="bookTitle"> <?= $books[$book]["title"]; ?></div>
                                            <div class = "author">
                                                <?= $books[$book]["authors_first_name"]; ?> <br>
                                                <?= $books[$book]["authors_last_name"]; ?>
                                            </div>
                                    </div> 
                                </td>  
                            <?php 
                            $book++;
                            } ?>
                        </tr>
                <?php } ?>
            </div>
            
       
    </main>

</body>


