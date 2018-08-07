<div class="submenu-container">
    <a href="<?php echo base_url("work"); ?>" class="submenu active" data-section="0">WORK</a>
    <a href="<?php echo base_url("clients"); ?>" class="submenu" data-section="1">CLIENTS</a>
</div>
<div class="section section-1">
    <div class="section-inner">
        <div class="section-navigate-container">
            <a class="section-navigate section-navigate-left" href="<?php echo $prev_work_url; ?>"><span><</span> Previous Work</a>
            <div class="section-navigate-line"></div>
            <a class="section-navigate section-navigate-right" href="<?php echo $next_work_url; ?>">Next Work <span>></span></a>
        </div>
        <div class="section-title"><?php echo $work->work_title; ?></div>
        <div class='title-description'><pre><?php echo $work->work_detail; ?></pre></div>
        <div class="work-image-container image-container">
            <img class="work-image" src="<?php echo base_url("assets/images/works/work_" . $work->work_id . "." . $work->work_image_extension . "?d=" . strtotime($work->modified_date)); ?>" data-src="<?php echo base_url("assets/images/works/work_" . $work->work_id . "." . $work->work_image_extension . "?d=" . strtotime($work->modified_date)); ?>" />
        </div>
        <?php
        $iLength = sizeof($work_content);
        for ($i = 0; $i < $iLength; $i++) {
            if ($work_content[$i]->work_content_type == "2") {
                echo "<div class='work-image-container image-container'>";
                echo "<img class='work-image' src='" . base_url("assets/images/works/work_content_" . $work_content[$i]->work_content_id . "." . $work_content[$i]->work_content_image_extension . "?d=" . strtotime($work_content[$i]->modified_date)) . "' data-src='" . base_url("assets/images/works/work_content_" . $work_content[$i]->work_content_id . "." . $work_content[$i]->work_content_image_extension . "?d=" . strtotime($work_content[$i]->modified_date)) . "' />";
                echo "</div>";
            } else if ($work_content[$i]->work_content_type == "1") {
                echo "<div class='description'><pre>" . $work_content[$i]->work_content_value . "</pre></div>";
            }
        }
        ?>
        <!--<div class="title">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
        <div class="description"><pre>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.

It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
        </pre></div>-->
        <div class="button-container"> 
            <div class="button button-back">
                <div class="button-text">BACK</div>
            </div>
            <div class="button button-share">
                <div class="button-text">SHARE</div>
            </div>
        </div>
        <div class="related-post-container">
            <div class="related-post-title">Related Posts</div>
            <a href="#" class="related-post-item">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
            <a href="#" class="related-post-item">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
            <a href="#" class="related-post-item">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
        </div>
    </div>
</div>
<div class="share-dialog">
    <div class="white-background">
        <div class="dialog-box">
            <div class="dialog-close-button">
                <div class="dialog-close-button-image" style="background-image: url(<?php echo base_url("assets/icons/ic_close_white_24px.svg"); ?>);"></div>
            </div>
            <div class="dialog-box-inner">
                <div class="share-to">
                    <div class="share-to-title">Share To</div>
                    <div class="share-to-item-container">
                        <a class="share-to-item" style="background-image: url(<?php echo base_url("assets/icons/facebook.png"); ?>);"></a>
                        <a class="share-to-item" style="background-image: url(<?php echo base_url("assets/icons/twitter.png"); ?>);"></a>
                        <a class="share-to-item" style="background-image: url(<?php echo base_url("assets/icons/whatsapp.png"); ?>);"></a>
                        <a class="share-to-item" style="background-image: url(<?php echo base_url("assets/icons/line.png"); ?>);"></a>
                    </div>
                </div>
                <div class="url">
                    <div class="url-title">Url</div>
                    <input type="text" class="url-input" />
                </div>
                <div class="caption">
                    <div class="caption-title">Caption</div>
                    <textarea class="caption-input"></textarea>
                </div>
                <div class="button button-post">
                    <div class="button-text">POST</div>
                </div>
            </div>
        </div>
    </div>
</div>