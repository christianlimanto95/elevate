<div class="submenu-container">
    <a href="<?php echo base_url("work"); ?>" class="submenu" data-section="0">WORK</a>
    <a href="<?php echo base_url("clients"); ?>" class="submenu active" data-section="1">CLIENTS</a>
</div>
<div class="section section-1">
    <div class="section-inner">
        <div class="section-title">Our Client List</div>
        <div class="filter">
            <div class="select select-sort" data-type="sort">
                SORT BY
                <span class="dropdown-icon" style="background-image: url(<?php echo base_url("assets/icons/ic_keyboard_arrow_down_black_24px.svg"); ?>);"></span>
                <div class="dropdown-container dropdown-container-sort" data-type="sort">
                    <div class="dropdown-item">Sort 1</div>
                    <div class="dropdown-item">Sort 2</div>
                    <div class="dropdown-item">Sort 3</div>
                </div>
            </div>
        </div>
        <div class="filter-mobile">
            <div class="select-mobile-container">
                <select class="select-mobile select-sort" data-type="sort">
                    <option class="dropdown-item" value="1">SORT BY</option>
                    <option class="dropdown-item" value="1">Sort 1</option>
                    <option class="dropdown-item" value="1">Sort 2</option>
                    <option class="dropdown-item" value="1">Sort 3</option>
                </select>
                <span class="dropdown-icon" style="background-image: url(<?php echo base_url("assets/icons/ic_keyboard_arrow_down_black_24px.svg"); ?>);"></span>
            </div>
        </div>
        <div class="client-container">
           
        </div>
        <div class="paging">
            <a href="#" class="page-prev"><</a>
            <a href="<?php echo base_url("clients?page=1"); ?>" class="page" data-page-number="1">1</a>
            <span class="dynamic-page-container">
            </span>
            <a href="#" class="page-next">></a>
        </div>
        <div class="view-all">VIEW ALL</div>
    </div>
</div>
<script>
var page = <?php echo $page; ?>;
var view_per_page = <?php echo $view_per_page; ?>;
var page_url = "<?php echo base_url("clients"); ?>";
var get_clients_url = "<?php echo base_url("work/get_clients"); ?>";
</script>