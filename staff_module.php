
        <section class="steering">
            <div class="staff__inner">

<?php


//Include database connection file
require 'functions/db_connect.php';

try {
    $stmt = $pdo->query('SELECT * FROM staff');

    while ($row = $stmt->fetch()) {
        // echo $row['first_name'] . "<br>";

         echo "<div class='staff__inner__staffer'>";
                    echo "<a href='/about/who_we_are/our_staff/janeelyceglasgowphd.html'>";
                        echo "<div class='staff__inner__staffer-img' style='background: url(". $row['img'] ."); margin-left: auto; margin-right:auto; background-size:cover !important;' alt='". $row['first_name'] . "'>";
                        echo '</div>';
                        //staff__inner__staffer-img ends

                        echo "<p class='staff__inner__staffer-name'>" . $row['first_name'] . " " . $row['last_name'] . "</p>";
                        echo "<p class='staff__inner__staffer-pos'>" . $row['title'] . "</p>";
                    echo "</a>";
                    echo "<div class='staff__inner__staffer-bg'></div>";
                    //steering__inner__staffer-bg ends
                echo "</div>";
                //staff__inner__staffer ends



    }
} catch (PDOException $e) {
    echo 'Query failed: ' . $e->getMessage();
}
?>




            </div><!--staff__inner ends-->
        </section><!--staff ends-->

