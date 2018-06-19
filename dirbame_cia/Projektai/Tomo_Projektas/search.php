<?php
include 'header.php';
 ?>

<h1>Paieškos Rezultatai</h1>

<div class=" respo container">
<?php
if (isset($_POST['submit-search'])) {
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $sql = "SELECT * FROM atsiliepimai WHERE tekstas LIKE '%$search%' OR autorius LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

    echo "Surastas" . $queryResult . "rezultatas";
    if ($queryResult > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='atsiliepimai-box'>
                <h3>" . $row['autorius'] . "</h3>
                <p>" . $row['tekstas'] . "</p>
            </div>";
        }
    }else {
        echo "Nerasta!";
    }
}
 ?>
</div>

<?php
include 'footer.php';
 ?>
