window.addEventListener('load', _ => {

    const _BODY = document.querySelector('body');
    const _NAV = _BODY.querySelector('#nav');
    const _SIDEBAR = _BODY.querySelector('#_sidebar');
    const PAGE_BODY = _BODY.querySelector('#page_body');


    let site_title, toggle_sidebar, toggle_topbar, show_nav;

    site_title = _NAV.querySelector('#site_title');
    toggle_sidebar = _NAV.querySelector('#toggle_sidebar');
    toggle_topbar = _NAV.querySelector('#toggle_topbar');
    show_nav = _BODY.querySelector('#show_nav');


    show_nav.classList.add('d-none');


    toggle_topbar.addEventListener('click', _ => {

        if (_NAV.classList.contains('d-none')) {
            _NAV.classList.remove('d-none');
            show_nav.classList.add('d-none');

        } else {
            _NAV.classList.add('d-none');
            show_nav.classList.remove('d-none');
            _SIDEBAR.style.padding = "0px 0px 0px 0px";
        }
    });

    show_nav.addEventListener('click', _ => {

        if (_NAV.classList.contains('d-none')) {
            _NAV.classList.remove('d-none');
            show_nav.classList.add('d-none');

        } else {
            _NAV.classList.add('d-none');
            show_nav.classList.remove('d-none');
            _SIDEBAR.style.padding = "0px 0px 0px 0px";
        }
    });

    toggle_sidebar.addEventListener('click', _ => {

        if (_SIDEBAR.classList.contains('d-md-none')) {

            _SIDEBAR.classList.remove('d-md-none');
            _SIDEBAR.classList.add('d-md-block');
            PAGE_BODY.classList.add('col-md-9');
            PAGE_BODY.classList.add('col-lg-10');
            PAGE_BODY.classList.remove('col-12');

            site_title.classList.remove('d-none');

        } else {

            _SIDEBAR.classList.remove('d-md-block');
            _SIDEBAR.classList.add('d-md-none');

            PAGE_BODY.classList.remove('col-md-9');
            PAGE_BODY.classList.remove('col-lg-10');
            PAGE_BODY.classList.add('col-12');

            site_title.classList.add('d-none');

        }
    });







});