<?php
require_once("includes/classes/VideoInfoControls.php");
    class VideoInfoSection {


        private $con, $video, $userLoggedInObj;

        public function __construct($con, $video, $userLoggedInObj) {
            $this->con = $con;
            $this->video = $video;
            $this->userLoggedInObj = $userLoggedInObj;
        }

        public function create() {
            return $this->createPrimaryInfo() . $this->createSecondaryInfo();
        }

        private function createPrimaryInfo() {
            $title = $this->video->getTitle();
            $views = $this->video->getViews();

            $videoInfoControls = new VideoInfoControls($this->video, $this->userLoggedInObj);
            $controls = $videoInfoControls->create();

            return "<div class='videoInfo' style='width: 100%; padding: 20px 0 8px 0;'>
                        <h1 style='display: block; overflow: hidden; font-size: 18px; font-weight: 400; line-height: 24px;'>$title</h1>

                        <div class='bottomSection' style='display: flex;'>
                            <span class='viewCount' style='color: rgba(17, 17, 17, 0.6); font-size: 16px; flex: 1;'>$views views</span>
                            $controls
                        </div>
                    </div>";
        } 

        private function createSecondaryInfo() {

            $description = $this->video->getDescription();
            $uploadDate = $this->video->getUploadDate();
            $uploadedBy = $this->video->getUploadedBy();
            $profileButton = ButtonProvider::createUserProfileButton($this->con, $uploadedBy);

            if($uploadedBy == $this->userLoggedInObj->getUsername()) {
                $actionButton = ButtonProvider::createEditVideoButton($this->video->getId());
            }
            else {
                $userToObject = new User($this->con, $uploadedBy);
                $actionButton = ButtonProvider::createSubscriberButton($this->con, $userToObject, $this->userLoggedInObj);
            }

            return "<div class='secondaryInfo'>
                        <div class='topRow'>
                            $profileButton
                            <div class='uploadInfo'>
                                <span class='owner'>
                                    <a href='profile.php?username=$uploadedBy'>
                                        $uploadedBy
                                    </a>
                                </span>
                                <span class='date'>Published on $uploadDate</span>
                            </div>
                            $actionButton
                        </div>
                        <div class='descriptionContainer'>
                            $description
                        </div>
                    </div>";
        } 
    }
?>