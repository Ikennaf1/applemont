
var navBtn = document.querySelector('#nav_btn');
var mobileMenu2 = document.querySelector('#mobile-menu-2')
navBtn.onclick = () => {
    mobileMenu2.hidden = !mobileMenu2.hidden;
    navBtn.ariaHidden = !navBtn.ariaHidden;
    navBtn.ariaExpanded = !navBtn.ariaExpanded;
}

document.querySelector('#blinds_id').onclick = () => {
    blindsToggle();
};
let darkStyle = {
    ".body-bg": {
        "background-color": "#0a0a0a"
    },
    ".nav,.site-title-container,.link,.site-title,.post-card,.post-card-title,.sidebar-widget-body,.footer,.mob-menu,.mob-menu-site-name,.tag-line,.post-details,.post-card-desc,.newsletter-input,main article,main article h1,main article h3": {
        "background-color": "#0f0f0f",
        "color": "#c0c0c0"
    },
    ".newsletter-input,.post-card": {
        "border-color": "#1c1c1c"
    },
    "main article blockquote": {
        "color": "#909090",
        "border-color": "#909090",
        "background-color": "#1f1f1f"
    }
};
setBlindsStyles(darkStyle);
blindsInit();
