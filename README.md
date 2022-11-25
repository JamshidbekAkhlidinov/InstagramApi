# Instagram api


    <?php
    include_once "../src/InstagramApi.php";

    use jamshidbekakhlidinov\InstagramApi;
    $video = new InstagramApi("https://www.instagram.com/p/CZy9LthA6q1/");
    $video = $video->run();
    print_r($video); 

    ?>