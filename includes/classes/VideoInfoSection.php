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

            return "<div class='videoInfo' style='width: 90%; padding: 20px 0 8px 0;'>
                        <h1 style='display: block; overflow: hidden; font-size: 18px; font-weight: 400; line-height: 24px;'>$title</h1>

                        <div class='bottomSection' style='display: flex;'>
                            <span class='viewCount' style='color: rgba(17, 17, 17, 0.6); font-size: 16px; flex: 1;'>$views</span>
                            $controls
                        </div>
                    </div>";
        } 

        private function createSecondaryInfo() {
            
        } 
    }
?>