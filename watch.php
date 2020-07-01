<?php
require_once("includes/header.php"); 
require_once("includes/classes/VideoPlayer.php");
require_once("includes/classes/VideoInfoSection.php");  

if(!isset($_GET["id"])) {
    echo "URL is not found";
    exit();
}

$video = new Video($con, $_GET["id"], $userLoggedInObj);
$video->incrementViews();
?>



<div class="watchLeftColumn" style="flex: 1;">


<?php
    $videoPlayer = new VideoPlayer($video);
    echo $videoPlayer->create(true);

    $videoPlayer = new VideoInfoSection($con, $video, $userLoggedInObj);
    echo $videoPlayer->create();
?>


</div>

<div class="suggestions" style="max-width: 425px; flex-grow: 1; height: 100%; padding-left: 24px;">

</div>



<?php require_once("includes/footer.php"); ?>
                