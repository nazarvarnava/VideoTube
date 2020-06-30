<?php require_once("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VideoTube</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="assets/js/commonActions.js"></script>
</head>
<body>
    
    <div id="pageContainer" class="pageContainer">
        <div id="mastHeadContainer" class="mastHeadContainer">
            <button class="navShowHide">
                <img src="assets/images/icons/menu.png" alt="">
            </button>
            <a class="logoContainer" href="index.php">
                <img src="assets/images/icons/VideoTubeLogo.png" alt="" title="logo">
            </a>
            <div class="searchBarContainer">
                <form class="formBarContainer" action="search.php" method="GET">
                    <input type="text" class="searchBar" name="term" placeholder="Szukaj...">
                    <button class="searchButton">
                        <img src="assets/images/icons/search.png" alt="">
                    </button>
                </form>
            </div>
            <div class="rightIcons">
                <a href="upload.php">
                    <img class="upload" src="assets/images/icons/upload.png" alt="">
                </a>
                <a href="#">
                    <img class="upload" src="assets/images/profilePictures/default.png" alt="">
                </a>
            </div>
        </div>
        <div id="sideNavContainer" class="sideNavContainer" style="display:none">
        
        </div>

        <div id="mainSectionContainer" class="mainSectionContainer">
            <div id="mainContentContainer" class="mainContentContainer">