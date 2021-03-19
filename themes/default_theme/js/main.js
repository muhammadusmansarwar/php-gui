window.addEventListener('load', _ => {

    const _BODY = document.querySelector('body');
    const TOP_BAR = _BODY.querySelector('#top_bar');
    const MAIN_SIDEBAR = _BODY.querySelector('#main_sidebar');
    const PAGE_BODY = _BODY.querySelector('#page_body');


    let site_title, toggle_sidebar, toggle_topbar, top_bar_div;

    site_title = TOP_BAR.querySelector('#site_title');
    toggle_sidebar = TOP_BAR.querySelector('#toggle_sidebar');
    toggle_topbar = TOP_BAR.querySelector('#toggle_topbar');
    top_bar_div = TOP_BAR.querySelector('#top_bar_div');


    // <nav id="main_sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"></nav>
    // { /* <main id="page_body" class="col-md-9 ms-sm-auto col-lg-10 px-md-4"></main> */ }

    toggle_topbar.addEventListener('click', _ => {

        if (top_bar_div.classList.contains('d-none')) {

            top_bar_div.classList.remove('d-none');

            TOP_BAR.classList.add('navbar');
            TOP_BAR.classList.add('sticky-top');
            TOP_BAR.classList.add('flex-md-nowrap');
            TOP_BAR.classList.add('p-2');
            TOP_BAR.classList.add('shadow');
            TOP_BAR.classList.add('bg-light');
            // top_bar_div.classList.add('d-md-block');


        } else {

            // navbar sticky-top flex-md-nowrap p-2 shadow bg-light
            TOP_BAR.classList.remove('navbar');
            TOP_BAR.classList.remove('sticky-top');
            TOP_BAR.classList.remove('flex-md-nowrap');
            TOP_BAR.classList.remove('p-2');
            TOP_BAR.classList.remove('shadow');
            TOP_BAR.classList.remove('bg-light');
            top_bar_div.classList.add('d-none');
        }
    });

    toggle_sidebar.addEventListener('click', _ => {

        if (MAIN_SIDEBAR.classList.contains('d-md-none')) {

            MAIN_SIDEBAR.classList.remove('d-md-none');
            MAIN_SIDEBAR.classList.add('d-md-block');

            PAGE_BODY.classList.add('col-md-9');
            PAGE_BODY.classList.add('col-lg-10');
            PAGE_BODY.classList.remove('col-12');

            site_title.classList.remove('d-none');


        } else {

            MAIN_SIDEBAR.classList.remove('d-md-block');
            MAIN_SIDEBAR.classList.add('d-md-none');

            PAGE_BODY.classList.remove('col-md-9');
            PAGE_BODY.classList.remove('col-lg-10');
            PAGE_BODY.classList.add('col-12');

            site_title.classList.add('d-none');



        }
    });







});