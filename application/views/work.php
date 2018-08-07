<div class="submenu-container">
    <a href="<?php echo base_url("work"); ?>" class="submenu active" data-section="0">WORK</a>
    <a href="<?php echo base_url("clients"); ?>" class="submenu" data-section="1">CLIENTS</a>
</div>
<div class="section section-1">
    <div class="section-inner">
        <div class="section-title">Discover Our Work</div>
        <div class="filter">
            <div class="select select-industry" data-type="industry" data-value="-1">
                <div class="select-text">ALL INDUSTRIES</div>
                <span class="dropdown-icon" style="background-image: url(<?php echo base_url("assets/icons/ic_keyboard_arrow_down_black_24px.svg"); ?>);"></span>
                <div class="dropdown-container dropdown-container-industry" data-type="industry">
                    <div class="dropdown-item" data-value="1">Industry 1</div>
                    <div class="dropdown-item" data-value="2">Industry 2</div>
                    <div class="dropdown-item" data-value="3">Industry 3</div>
                    <div class="dropdown-item" data-value="4">Industry 4</div>
                    <div class="dropdown-item" data-value="5">Industry 5</div>
                    <div class="dropdown-item" data-value="6">Industry 6</div>
                    <div class="dropdown-item" data-value="7">Industry 7</div>
                </div>
            </div>
            <div class="select select-region" data-type="region" data-value="-1">
                <div class="select-text">ALL REGIONS</div>
                <span class="dropdown-icon" style="background-image: url(<?php echo base_url("assets/icons/ic_keyboard_arrow_down_black_24px.svg"); ?>);"></span>
                <div class="dropdown-container dropdown-container-region" data-type="region">
                    <div class="dropdown-item" data-value="1">Region 1</div>
                    <div class="dropdown-item" data-value="2">Region 2</div>
                    <div class="dropdown-item" data-value="3">Region 3</div>
                </div>
            </div>
            <div class="select select-category" data-type="category" data-value="-1">
                <div class="select-text">ALL CATEGORIES</div>
                <span class="dropdown-icon" style="background-image: url(<?php echo base_url("assets/icons/ic_keyboard_arrow_down_black_24px.svg"); ?>);"></span>
                <div class="dropdown-container dropdown-container-category" data-type="category">
                    <div class="dropdown-item" data-value="1">Category 1</div>
                    <div class="dropdown-item" data-value="2">Category 2</div>
                    <div class="dropdown-item" data-value="3">Category 3</div>
                    <div class="dropdown-item" data-value="4">Category 4</div>
                    <div class="dropdown-item" data-value="5">Category 5</div>
                </div>
            </div>
            <div class="select select-sort" data-type="sort" data-value="-1">
                <div class="select-text">SORT BY</div>
                <span class="dropdown-icon" style="background-image: url(<?php echo base_url("assets/icons/ic_keyboard_arrow_down_black_24px.svg"); ?>);"></span>
                <div class="dropdown-container dropdown-container-sort" data-type="sort">
                    <div class="dropdown-item" data-value="1">Sort 1</div>
                    <div class="dropdown-item" data-value="2">Sort 2</div>
                    <div class="dropdown-item" data-value="3">Sort 3</div>
                </div>
            </div>
            <div class="button btn-go"><div class="button-text">GO</div></div>
        </div>
        <div class="filter-mobile">
            <div class="select-mobile-container">
                <select class="select-mobile select-industry" data-type="industry">
                    <option class="dropdown-item" value="1">ALL INDUSTRIES</option>
                    <option class="dropdown-item" value="1">Industry 1</option>
                    <option class="dropdown-item" value="1">Industry 2</option>
                    <option class="dropdown-item" value="1">Industry 3</option>
                    <option class="dropdown-item" value="1">Industry 4</option>
                    <option class="dropdown-item" value="1">Industry 5</option>
                    <option class="dropdown-item" value="1">Industry 6</option>
                    <option class="dropdown-item" value="1">Industry 7</option>
                </select>
                <span class="dropdown-icon" style="background-image: url(<?php echo base_url("assets/icons/ic_keyboard_arrow_down_black_24px.svg"); ?>);"></span>
            </div>
            <div class="select-mobile-container">
                <select class="select-mobile select-region" data-type="region">
                    <option class="dropdown-item" value="1">ALL REGION</option>
                    <option class="dropdown-item" value="1">Region 1</option>
                    <option class="dropdown-item" value="1">Region 2</option>
                    <option class="dropdown-item" value="1">Region 3</option>
                </select>
                <span class="dropdown-icon" style="background-image: url(<?php echo base_url("assets/icons/ic_keyboard_arrow_down_black_24px.svg"); ?>);"></span>
            </div>
            <div class="select-mobile-container">
                <select class="select-mobile select-category" data-type="category">
                    <option class="dropdown-item" value="1">ALL CATEGORIES</option>
                    <option class="dropdown-item" value="1">Category 1</option>
                    <option class="dropdown-item" value="1">Category 2</option>
                    <option class="dropdown-item" value="1">Category 3</option>
                </select>
                <span class="dropdown-icon" style="background-image: url(<?php echo base_url("assets/icons/ic_keyboard_arrow_down_black_24px.svg"); ?>);"></span>
            </div>
            <div class="select-mobile-container">
                <select class="select-mobile select-sort" data-type="sort">
                    <option class="dropdown-item" value="1">SORT BY</option>
                    <option class="dropdown-item" value="1">Sort 1</option>
                    <option class="dropdown-item" value="1">Sort 2</option>
                    <option class="dropdown-item" value="1">Sort 3</option>
                </select>
                <span class="dropdown-icon" style="background-image: url(<?php echo base_url("assets/icons/ic_keyboard_arrow_down_black_24px.svg"); ?>);"></span>
            </div>
            <div class="btn-go">GO</div>
        </div>
        <div class="work-container">
            <?php
            $iLength = sizeof($works);
            for ($i = 0; $i < $iLength; $i++) {
                $url_name = str_replace(" ", "-", str_replace("-", "", strtolower($works[$i]->work_title)));
                $url = base_url("work/detail/" . $url_name . "-" . $works[$i]->work_id);
                echo "<a href='" . $url . "' class='work' data-index='" . ($i + 1) . "' data-anim='show-up' data-anim-threshold='self'>";
                echo "<div class='work-inner' data-src='" . base_url("assets/images/works/work_" . $works[$i]->work_id . "." . $works[$i]->work_image_extension . "?d=" . strtotime($works[$i]->modified_date)) . "'>";
                echo "<div class='work-text'>";
                echo "<div class='work-text-title'>" . $works[$i]->work_title . "</div>";
                echo "<div class='work-text-description'>" . $works[$i]->work_description . "</div>";
                echo "</div>";
                echo "</div>";
                echo "</a>";
            }
            ?>
        </div>
        <div class="paging">
            <div class="page-prev disabled"><</div>
            <div class="page active">1</div>
            <!--<div class="page">2</div>
            <div class="page">3</div>
            <div class="page-dot">...</div>
            <div class="page">10</div>-->
            <div class="page-next disabled">></div>
        </div>
        <!--<div class="view-all">VIEW ALL</div>-->
    </div>
</div>