<?php
    include 'header.php';
?>
<h1>
    Search Page
</h1>
<div class="article-container"> 
    <?php
        if (isset($_POST['submit_search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            // $sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%' OR a_author LIKE '%$search%' a_date LIKE '%$search%'";
            $sql = "SELECT * FROM article where a_title LIKE '%$search%' OR a_text LIKE '%$search%' OR a_author LIKE '%$search%' OR a_date LIKE '%$search%'";
            
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<a href='article.php?title=" . $row['a_title']. "&date=<p>" . $row['a_date']. "</p>'><div class='artical-box'>
                    <h3>" . $row['a_title']. "</h3>
                    <p>" . $row['a_text']. "</p>
                    <p>" . $row['a_author']. "</p>
                    <p>" . $row['a_date']. "</p>
                    </div></a>";
                }
            }else{
                echo "There are no results in your search";
            }
        }
    ?>
</div>