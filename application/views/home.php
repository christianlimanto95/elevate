<div class="section section-1">
    <div class="section-1-image" data-src="<?php echo base_url("assets/images/building.jpg"); ?>" ></div>
    <div class="section-1-center">
        <div class="section-1-text">
            <div data-anim="show-up">Develop Your Newborn Brand to </div>
            <div data-anim="show-up">Successfully Standing in The Market.</div>
        </div>
        <div class="button section-1-button" data-anim="show-up">
            <div class="button-text">Know How</div>
        </div>
    </div>
</div>
<div class="section section-2">
    <div class="section-2-text">
        <div class="section-2-title" data-anim="show-up" data-anim-threshold="self">
            <div>Rise Your Brand<br /> to The Higher State</div>
            <div class="red-line section-2-red-line"></div>
        </div>
        <div class="section-2-description">
            <div class="section-2-description-text" data-anim="show-up" data-anim-threshold="self">
                <pre>Branding menjadi dasar dari kesemuanya. Setiap dari kita bahkan tidak lepas dari brand dan branding. Meskipun kita tidak memiliki sebuah merek, kita secara tidak langsung telah membangun personal branding yang menjadi style kita. Demikian pula perusahaan atau merek yang kita miliki memerlukan kegiatan intensif untuk membangun brand-nya terutama di zaman yang memiliki persaingan ketat.</pre>
            </div>
            <div class="section-2-button-container">
                <a href="<?php echo base_url("about"); ?>" class="section-2-button button section-2-button-1" data-anim="show-up" data-anim-threshold="self">
                    <div class="button-text">Who We Are</div>
                </a>
                <a href="<?php echo base_url("work"); ?>" class="section-2-button button section-2-button-2" data-anim="show-up" data-anim-threshold="self">
                    <div class="button-text">Our Works</div>
                </a>
                <a href="<?php echo base_url("talks"); ?>" class="section-2-button button section-2-button-3" data-anim="show-up" data-anim-threshold="self">
                    <div class="button-text">Our Talks</div>
                </a>
            </div>
        </div>
    </div>
    <div class="section-2-work-container">
        <?php
        $iLength = sizeof($works);
        for ($i = 0; $i < $iLength; $i++) {
            $url_name = str_replace(" ", "-", str_replace("-", "", strtolower($works[$i]->work_title)));
            $url = base_url("work/detail/" . $url_name . "-" . $works[$i]->work_id);
            echo "<a href='" . $url . "' class='section-2-work' data-index='" . ($i + 1) . "' data-anim='show-up' data-anim-threshold='self'>";
            echo "<div class='work-inner' data-src='" . base_url("assets/images/works/work_" . $works[$i]->work_id . "." . $works[$i]->work_image_extension . "?d=" . strtotime($works[$i]->modified_date)) . "'>";
            echo "<div class='section-2-work-text'>";
            echo "<div class='section-2-work-text-title'>" . $works[$i]->work_title . "</div>";
            echo "<div class='section-2-work-text-description'>" . $works[$i]->work_description . "</div>";
            echo "</div>";
            echo "</div>";
            echo "</a>";
        }
        ?>
    </div>
</div>
<div class="section section-3">
    <div class="section-title" data-anim="show-up" data-anim-threshold="self">Our Services</div>
    <div class="service-item" data-src="<?php echo base_url("assets/images/service1.jpg"); ?>">
        <div class="service-image-wrapper">
            <div class="service-number">01</div>
            <div class="service-text">Branding Consulting</div>
            <div class="service-description">
                <pre>•  Brand Assessment Center
•  New Brand Concept Formulation
•  Re-Branding
•  Strategic Brand Management
•  Brand Franchise Ready
•  Brand Visual Concept &amp; Execution</pre>
            </div>
            <div class="red-line service-red-line"></div>
        </div>
    </div>
    <div class="service-item" data-src="<?php echo base_url("assets/images/service2.jpg"); ?>">
        <div class="service-image-wrapper">
            <div class="service-number">02</div>
            <div class="service-text">Business Consulting</div>
            <div class="service-description">
                <pre>•  Strategic Business Management
•  Operation Management
•  Customer Management
•  Human Capital Management
•  Sales &amp; Distribution Management
•  Finance &amp; Accounting</pre>
            </div>
            <div class="red-line service-red-line"></div>
        </div>
    </div>
    <div class="service-item" data-src="<?php echo base_url("assets/images/service3.jpg"); ?>">
        <div class="service-image-wrapper">
            <div class="service-number">03</div>
            <div class="service-text">Creative Design</div>
            <div class="service-description">
                <pre>•  Creative Concept
•  Company Profile, Annual Report &amp; Product Catalog
•  Product &amp; Packaging Design
•  Corporate Logo, Mascot &amp; Identity
•  Corporate Merchandise Design
•  Web &amp; Multimedia Design Interface
•  Illustration, 3D &amp; Video Animation
•  Commercial Interior &amp; Architect</pre>
            </div>
            <div class="red-line service-red-line"></div>
        </div>
    </div>
    <div class="service-item" data-src="<?php echo base_url("assets/images/service4.jpg"); ?>">
        <div class="service-image-wrapper">
            <div class="service-number">04</div>
            <div class="service-text">Printing &amp; Production</div>
            <div class="service-description">
                <pre>•  Offset &amp; Digital Printing
•  Product Packaging Printing
•  Indoor &amp; Outdoor Advertising Media
•  Cutting Sticker &amp; Acrylic Art
•  Corporate Merchandise
•  Web &amp; Software Application
•  Interactive Multimedia (Presentation, Video Profile, CD Interactive)</pre>
            </div>
            <div class="red-line service-red-line"></div>
        </div>
    </div>
</div>
<div class="section section-4">
    <div class="section-4-inner">
        <div class="section-title" data-anim="show-up" data-anim-threshold="self">Meet Our Passionate Team</div>
        <div class="person-container">
            <div class="person" data-anim="show-up" data-anim-threshold="self">
                <div class="person-image" data-src="<?php echo base_url("assets/images/photo1.jpg?v=1"); ?>"></div>
                <div class="person-name">Franky K. Nugroho</div>
                <div class="person-job">Managing Director</div>
            </div>
            <div class="person" data-anim="show-up" data-anim-threshold="self">
                <div class="person-image" data-src="<?php echo base_url("assets/images/photo2.jpg?v=1"); ?>"></div>
                <div class="person-name">Grace Octaviani</div>
                <div class="person-job">Creative Director</div>
            </div>
            <div class="person" data-anim="show-up" data-anim-threshold="self">
                <div class="person-image" data-src="<?php echo base_url("assets/images/photo3.jpg?v=1"); ?>"></div>
                <div class="person-name">Ian Christian Darmawan</div>
                <div class="person-job">Brand Designer</div>
            </div>
            <div class="person" data-anim="show-up" data-anim-threshold="self">
                <div class="person-image" data-src="<?php echo base_url("assets/images/photo4.jpg?v=1"); ?>"></div>
                <div class="person-name">Ime Kristalydia</div>
                <div class="person-job">Brand Designer</div>
            </div>
            <div class="person" data-anim="show-up" data-anim-threshold="self">
                <div class="person-image" data-src="<?php echo base_url("assets/images/photo5.jpg?v=1"); ?>"></div>
                <div class="person-name">Ira Wijaya</div>
                <div class="person-job">Brand Designer</div>
            </div>
            <div class="person" data-anim="show-up" data-anim-threshold="self">
                <div class="person-image" data-src="<?php echo base_url("assets/images/photo7.jpg?v=1"); ?>"></div>
                <div class="person-name">Nidya Megayanti Djatmiko</div>
                <div class="person-job">Brand Designer</div>
            </div>
            <div class="person" data-anim="show-up" data-anim-threshold="self">
                <div class="person-image" data-src="<?php echo base_url("assets/images/photo8.jpg?v=1"); ?>"></div>
                <div class="person-name">Stella Hadiprodjo</div>
                <div class="person-job">Brand Designer</div>
            </div>
        </div>
    </div>
</div>
<!--<div class="person-detail-container">
    <div class="person-detail-close" style="background-image: url(<?php //echo base_url("assets/icons/ic_close_black_24px.svg") ?>);"></div>
    <div class="person-detail">
        <div class="person-detail-photo" data-src="<?php //echo base_url("assets/images/photo1.jpg?v=1"); ?>"></div>
        <div class="person-detail-text">
            <div class="person-detail-title">Lorem Ipsum Dolor Sit Amet Consec</div>
            <div class="person-detail-name">Franky K. Nugroho</div>
            <div class="person-detail-job">Managing Director</div>
            <div class="person-detail-description"><pre>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</pre></div>
        </div>
    </div>
</div>-->