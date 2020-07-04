<?php
require_once("includes/classes/VideoInfoControls.php");
    class CommentSection {


        private $con, $video, $userLoggedInObj;

        public function __construct($con, $video, $userLoggedInObj) {
            $this->con = $con;
            $this->video = $video;
            $this->userLoggedInObj = $userLoggedInObj;
        }

        public function create() {
            return $this->createCommentSection();
        }

        private function createCommentSection() {
            $numComments = $this->video->getNumberOfComments();
            $postedBy = $this->userLoggedInObj->getUsername();
            $videoId = $this->video->getId();

            $profileButton = ButtonProvider::createUserProfileButton($this->con, $postedBy);
            $commentAction = "postComment(this, \"$postedBy\", $videoId, null, \"comments\")";
            $commentButton = ButtonProvider::createButton("COMMENT", null, $commentAction, "postComment");

            $comments = $this->video->getComments();
            $commentItems = "";
            foreach($comments as $comment) {
                $commentItems .= $comment->create();
            }

            return "<div class='commentSection'>
                        <div class='header' style=' margin-top: 24px;
    margin-bottom: 32px;
    display: flex;
    flex-direction: column;'>
                            <span class='commentCount' style='margin-bottom: 24px;'>$numComments Comments</span>
                            <div class='commentForm' style=' display: flex;
}'>
                                $profileButton
                                <textarea class='commentBodyClass' placeholder='Add a comment' style='flex: 1;
    border: none;
    background-color: transparent;
    font-size: 14px;
    color: #111;
    resize: none;
    height: 30px;'></textarea>
                                $commentButton
                            </div>
                        </div>
                        <div class='comments' style='display: flex;'>
                        $commentItems
                        </div>
                    </div>";
        }

        
    }
?>