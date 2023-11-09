@extends('frontend.layouts.app')
@section('content')

<style>
    @charset "utf-8";
    /* CSS Document */

    /******************************

[Table of Contents]

1. Fonts
2. Body and some general stuff
3. Header
3.1 Top Bar
3.2 Logo
3.3 Main Nav
3.4 Menu
4. Home
4.1 Home Slider
4.2 Home Slider Nav
4.3 Home Slider Dots
5. Search
6. Blog
7. Sidebar
8. Footer
8.1 Footer - About
8.2 Footer - Blog
8.3 Footer - Tags
8.4 Footer - Contact Info
9. Copyright


******************************/

    /***********
1. Fonts
***********/

    @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800');

    @font-face {
        font-family: 'Beyond';
        src: url('../fonts/beyond_the_mountains.otf') format('truetype'),
            url('../fonts/beyond_the_mountains.ttf') format('opentype');
    }

    /*********************************
2. Body and some general stuff
*********************************/

    * {
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    }

    body {
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        font-weight: 400;
        background: #FFFFFF;
        color: #a5a5a5;
    }

    div {
        display: block;
        position: relative;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    ul {
        list-style: none;
        margin-bottom: 0px;
    }

    p {
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        line-height: 2;
        font-weight: 400;
        color: #929191;
        -webkit-font-smoothing: antialiased;
        -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    }

    p a {
        display: inline;
        position: relative;
        color: inherit;
        border-bottom: solid 1px #ffa07f;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    a,
    a:hover,
    a:visited,
    a:active,
    a:link {
        text-decoration: none;
        -webkit-font-smoothing: antialiased;
        -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    }

    p a:active {
        position: relative;
        color: #FF6347;
    }

    p a:hover {
        color: #FFFFFF;
        background: #ffa07f;
    }

    p a:hover::after {
        opacity: 0.2;
    }

    ::selection {}

    p::selection {}

    h1 {
        font-size: 48px;
    }

    h2 {
        font-size: 36px;
    }

    h3 {
        font-size: 24px;
    }

    h4 {
        font-size: 18px;
    }

    h5 {
        font-size: 14px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Open Sans', sans-serif;
        -webkit-font-smoothing: antialiased;
        -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    }

    h1::selection,
    h2::selection,
    h3::selection,
    h4::selection,
    h5::selection,
    h6::selection {}

    .form-control {
        color: #db5246;
    }

    section {
        display: block;
        position: relative;
        box-sizing: border-box;
    }

    .clear {
        clear: both;
    }

    .clearfix::before,
    .clearfix::after {
        content: "";
        display: table;
    }

    .clearfix::after {
        clear: both;
    }

    .clearfix {
        zoom: 1;
    }

    .float_left {
        float: left;
    }

    .float_right {
        float: right;
    }

    .trans_200 {
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .trans_300 {
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .trans_400 {
        -webkit-transition: all 400ms ease;
        -moz-transition: all 400ms ease;
        -ms-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
    }

    .trans_500 {
        -webkit-transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        transition: all 500ms ease;
    }

    .fill_height {
        height: 100%;
    }

    .super_container {
        width: 100%;
        overflow: hidden;
    }

    .prlx_parent {
        overflow: hidden;
    }

    .prlx {
        height: 130% !important;
    }

    .nopadding {
        padding: 0px !important;
    }

    .button {
        display: inline-block;
        height: 53px;
        border-radius: 27px;
        overflow: hidden;
        z-index: 1;
    }

    .button_bcg {
        position: absolute;
        top: 0;
        left: 0;
        width: 200%;
        height: 100%;
        background: linear-gradient(to right, #fa9e1b, #8d4fff, #fa9e1b);
        z-index: -1;
        -webkit-transition: all 400ms ease;
        -moz-transition: all 400ms ease;
        -ms-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
    }

    .button:hover .button_bcg {
        left: -100%;
    }

    .button a {
        display: block;
        font-size: 13px;
        font-weight: 700;
        color: #fff;
        text-transform: uppercase;
        line-height: 53px;
        padding-left: 46px;
        padding-right: 46px;
        white-space: nowrap;
        z-index: 2;
    }

    .button span {
        display: inline-block;
        vertical-align: middle;
        width: 5.75px;
        height: 5.63px;
        background: #FFFFFF;
        border-radius: 50%;
        margin-right: 2px;
    }

    .button span:first-child {
        margin-left: 10px;
    }

    .button span:nth-child(2) {
        opacity: 0.6;
    }

    .button span:last-child {
        opacity: 0.4;
        margin-right: 0px;
    }

    .parallax-window {
        min-height: 400px;
        background: transparent;
    }

    /*********************************
3. Header
*********************************/

    .header {
        position: fixed;
        width: 100%;
        background: rgba(54, 19, 84, 0.6);
        z-index: 12;
    }

    .header.scrolled {
        background: rgba(54, 19, 84, 0.85);
    }

    /*********************************
3.1 Top Bar
*********************************/

    .top_bar {
        width: 100%;
        height: 36px;
        background: #350a4e;
        -webkit-transition: all 400ms ease;
        -moz-transition: all 400ms ease;
        -ms-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
    }

    .header.scrolled .top_bar {
        visibility: hidden;
        opacity: 0;
        height: 0px;
    }

    .phone {
        display: inline-block;
        margin-right: 36px;
        line-height: 36px;
        font-size: 10px;
        font-weight: 600;
        color: #FFFFFF;
    }

    .social_list_item {
        position: relative;
        display: inline-block;
        margin-right: 3px;
    }

    .social_list_item:last-child {
        margin-right: 0px;
    }

    .social_list_item a {
        display: block;
        width: 100%;
        padding-left: 10px;
        padding-right: 10px;
        line-height: 36px;
    }

    .social_list_item:hover a i {
        color: #fa9e1c;
    }

    .social_list_item a i {
        font-size: 12px;
        color: #FFFFFF;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .social_list_item a:hover {
        color: #FFFFFF;
    }

    .user_box_link {
        display: inline-block;
    }

    .user_box_link a {
        display: block;
        font-size: 10px;
        line-height: 36px;
        font-weight: 600;
        color: #FFFFFF;
        text-transform: uppercase;
    }

    .user_box_link a:hover {
        color: #fa9e1c;
    }

    .user_box_login {
        margin-right: 15px;
    }

    .user_box_login::after {
        display: block;
        position: absolute;
        top: 15px;
        right: -9px;
        background: #FFFFFF;
        width: 1px;
        height: 9px;
        content: '';
    }

    .main_nav_col {
        height: 90px;
        -webkit-transition: all 400ms ease;
        -moz-transition: all 400ms ease;
        -ms-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
    }

    .header.scrolled .main_nav_col {
        height: 90px;
    }

    /*********************************
3.2 Logo
*********************************/

    .logo_container {
        -webkit-transform: translateY(-6px);
        -moz-transform: translateY(-6px);
        -ms-transform: translateY(-6px);
        -o-transform: translateY(-6px);
        transform: translateY(-6px);
    }

    .header.scrolled .logo_container {
        -webkit-transform: none;
        -moz-transform: none;
        -ms-transform: none;
        -o-transform: none;
        transform: none;
    }

    .logo a {
        font-family: 'Open Sans', sans-serif;
        font-size: 30px;
        color: #f4f4f8;
        font-weight: 800;
        text-transform: uppercase;
    }

    .logo a img {
        display: inline-block;
        vertical-align: baseline;
        margin-right: 9px;
        -webkit-transform: translateY(2px);
        -moz-transform: translateY(2px);
        -ms-transform: translateY(2px);
        -o-transform: translateY(2px);
        transform: translateY(2px);
    }

    /*********************************
3.3 Main Nav
*********************************/

    .main_nav_container {
        margin-right: 221px;
    }

    .main_nav_item {
        position: relative;
        display: inline-block;
        margin-right: 40px;
    }

    .main_nav_item:last-child {
        margin-right: 0px;
    }

    .main_nav_item a {
        font-family: 'Open Sans', sans-serif;
        font-size: 13px;
        font-weight: 600;
        color: #FFFFFF;
        text-transform: uppercase;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .main_nav_item::after {
        display: block;
        position: absolute;
        left: -1px;
        bottom: -11px;
        width: calc(100% + 2px);
        height: 2px;
        background: linear-gradient(to right, #fa9e1b, #8d4fff);
        content: '';
        opacity: 0;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .main_nav_item:hover::after {
        opacity: 1;
    }

    .content_search {
        -webkit-transform: translateY(-1px);
        -moz-transform: translateY(-1px);
        -ms-transform: translateY(-1px);
        -o-transform: translateY(-1px);
        transform: translateY(-1px);
        cursor: pointer;
    }

    .header.scrolled .content_search {
        -webkit-transform: none;
        -moz-transform: none;
        -ms-transform: none;
        -o-transform: none;
        transform: none;
    }

    .mag_glass {
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .content_search img {
        width: 17px;
        height: 17px;
    }

    .content_search:hover .mag_glass {
        fill: #fa9e1c;
    }

    .content_search:hover .mag_glass {
        fill: #fa9e1c;
    }

    .search_form {
        position: absolute;
        right: 15px;
        top: 120px;
        width: 237px;
        height: 40px;
        visibility: hidden;
        opacity: 0;
    }

    .search_form.active {
        top: 105px;
        visibility: visible;
        opacity: 1;
    }

    .search_content_input {
        width: 100%;
        height: 100%;
        background: #FFFFFF;
        color: #1b0b32;
        padding-left: 20px;
        outline: none !important;
        border: none !important;
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
    }

    .bez_1 {
        -webkit-transition: all 0.3s cubic-bezier(0.7, 0, 0.3, 1);
        -moz-transition: all 0.3s cubic-bezier(0.7, 0, 0.3, 1);
        -ms-transition: all 0.3s cubic-bezier(0.7, 0, 0.3, 1);
        -o-transition: all 0.3s cubic-bezier(0.7, 0, 0.3, 1);
        transition: all 0.3s cubic-bezier(0.7, 0, 0.3, 1);
    }

    /*********************************
3.4 Menu
*********************************/

    .hamburger {
        display: none;
        -webkit-transform: translateY(-3px);
        -moz-transform: translateY(-3px);
        -ms-transform: translateY(-3px);
        -o-transform: translateY(-3px);
        transform: translateY(-3px);
        cursor: pointer;
        margin-left: 20px;
    }

    .header.scrolled .hamburger {
        -webkit-transform: none;
        -moz-transform: none;
        -ms-transform: none;
        -o-transform: none;
        transform: none;
    }

    .hamburger i {
        font-size: 24px;
        color: #FFFFFF;
    }

    .hamburger:hover i {
        color: #000;
    }

    .menu {
        position: fixed;
        width: 100vw;
        height: 40vh;
        background: linear-gradient(to right, #fa9e1b, #8d4fff);
        z-index: 100;
        opacity: 0;
        visibility: hidden;
    }

    .menu.active {
        opacity: 0.95;
        visibility: visible;
    }

    .menu_content {
        width: 100%;
        height: 100%;
    }

    .menu_item {
        position: relative;
        margin-bottom: 10px;
    }

    .menu_item:last-child {
        margin-bottom: 0px;
    }

    .menu_logo {
        margin-bottom: 28px;
    }

    .menu_logo a img {
        width: 40px !important;
    }

    .menu_item a {
        display: inline-block;
        position: relative;
        font-family: 'Beyond';
        font-size: 36px;
        color: #FFFFFF;
        font-weight: 400;
    }

    .menu_item a::after {
        display: block;
        position: absolute;
        top: 60%;
        left: 0;
        width: 0;
        height: 4px;
        background: #FFFFFF;
        letter-spacing: 2px;
        content: '';
        z-index: 10;
        pointer-events: none;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 400ms ease;
    }

    .menu_item:hover a::after {
        width: 100%;
    }

    .menu_close_container {
        position: absolute;
        top: 94px;
        right: 122px;
        width: 21px;
        height: 21px;
        cursor: pointer;
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .menu_close {
        top: 9px;
        width: 21px;
        height: 3px;
        background: #FFFFFF;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .menu_close::after {
        display: block;
        position: absolute;
        top: -9px;
        left: 9px;
        content: '';
        width: 3px;
        height: 21px;
        background: #FFFFFF;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .menu_close_container:hover .menu_close,
    .menu_close_container:hover .menu_close::after {
        background: #fa9e1c;
    }

    /*********************************
              Home
    *********************************/

    .home {
        width: 100%;
        height: 465px;
        background: transparent;
    }

    .home_background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }

    .home_content {
        position: absolute;
        bottom: 106px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    .home_title {
        font-size: 72px;
        font-weight: 800;
        color: #FFFFFF;
        text-transform: uppercase;
    }

    /*********************************
6. Blog
*********************************/

    .blog {
        padding-top: 40px;
        padding-bottom: 30px
    }

    .blog_post_container {
        width: 100%;
    }

    .blog_post:not(:last-child) {
        margin-bottom: 74px;
    }

    .blog_post_image {}

    .blog_post_image img {
        width: 100%;
    }

    .blog_post_date {
        position: absolute;
        top: 30px;
        left: 27px;
        width: 114px;
        height: 74px;
        border-radius: 37px;
        background: #fa9e1b;
    }

    .blog_post_day {
        font-size: 30px;
        font-weight: 700;
        color: #FFFFFF;
        line-height: 1;
    }

    .blog_post_month {
        font-size: 12px;
        color: #FFFFFF;
        margin-top: 3px;
    }

    .blog_post_meta {
        margin-top: 10px;
    }

    .blog_post_meta_item {
        display: inline-block;
        position: relative;
        margin-right: 27px;
    }

    .blog_post_meta_item:last-child {
        margin-right: 0px;
    }

    .blog_post_meta_item::after {
        display: block;
        position: absolute;
        top: 7px;
        right: -15px;
        width: 1px;
        height: 12px;
        background: #929191;
        content: '';
    }

    .blog_post_meta_item:last-child::after {
        display: none;
    }

    .blog_post_meta_item a {
        font-size: 12px;
        font-weight: 600;
        color: #929191;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .blog_post_meta_item a:hover {
        color: #2b2b2b;
    }

    .blog_post_title {
        margin-top: 5px;
    }

    .blog_post_title a {
        font-size: 26px;
        font-weight: 600;
        color: #2b2b2b;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .blog_post_title a:hover {
        color: #fa9e1b;
    }

    .blog_post_text {
        margin-top: 19px;
    }

    .blog_post_text p {
        color: #929191;
        line-height: 2.14;
    }

    .blog_post_text p:last-of-type {
        margin-bottom: 0px;
    }

    .blog_post_link {
        margin-top: 32px;
    }

    .blog_post_link a {
        font-size: 14px;
        font-weight: 700;
        color: #fa9e1b;
        text-transform: uppercase;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .blog_post_link a:hover {
        color: #361f5d;
    }

    .blog_navigation {
        margin-top: 100px;
    }

    .blog_dot {
        display: inline-block;
        position: relative;
        height: 35px;
        line-height: 35px;
        color: #2b2b2b;
        cursor: pointer;
        font-size: 13px;
        font-weight: 600;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .blog_dot:hover {
        color: #fa9e1c;
    }

    .blog_dot:hover.active div {
        border-color: #fa9e1c;
    }

    .blog_dot.active {
        padding-left: 13px;
        padding-right: 9px;
        margin-right: 3px;
        color: #fa9e1c;
    }

    .blog_dot div {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: solid 2px transparent;
        border-radius: 18px;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .blog_dot.active div {
        border: solid 2px #fa9e1c;
    }

    /*********************************
7. Sidebar
*********************************/

    .sidebar_search {
        width: 100%;
    }

    .sidebar_search_input {
        width: 100%;
        height: 44px;
        border: none;
        border-bottom: solid 2px #e6e7f4;
        outline: none;
    }

    .sidebar_search_button {
        position: absolute;
        top: 0;
        right: 0;
        width: 17px;
        height: 44px;
        border: none;
        outline: none;
        background: transparent;
        cursor: pointer;
    }

    .sidebar_search_button .mag_glass {
        fill: #fa9e1b;
    }

    .sidebar_search_button:hover .mag_glass {
        fill: #371d5a;
    }

    .sidebar_archives {
        margin-top: 94px;
    }

    .sidebar_title {
        font-size: 18px;
        font-weight: 600;
        color: #404551;
    }

    .sidebar_list {
        margin-top: 40px;
    }

    .sidebar_list li:not(:last-child) {
        margin-bottom: 19px;
    }

    .sidebar_list li a {
        font-size: 14px;
        font-weight: 600;
        color: #929191;
    }

    .sidebar_list li a:hover {
        color: #404551;
    }

    .sidebar_categories {
        margin-top: 89px;
    }

    .sidebar_latest_posts {
        margin-top: 89px;
    }

    .latest_posts_container {
        margin-top: 35px;
    }

    .latest_post:not(:last-child) {
        margin-bottom: 23px;
    }

    .latest_post_image {
        float: left;
        z-index: 2;
    }

    .latest_post_content {
        padding-left: 98px;
    }

    .latest_post_title a {
        font-size: 15px;
        font-weight: 600;
        color: #2b2b2b;
    }

    .latest_post_title a:hover {
        color: #fa9e1b;
    }

    .latest_post_meta {
        margin-top: 3px;
    }

    .latest_post_author {
        display: inline-block;
        margin-right: 8px;
    }

    .latest_post_author a {
        font-size: 12px;
        font-weight: 600;
        color: #929191;
    }

    .latest_post_author a:hover {
        color: #2b2b2b;
    }

    .latest_post_author::after {
        display: block;
        position: absolute;
        top: 1px;
        right: -8px;
        content: '/';
    }

    .latest_post_date {
        display: inline-block;
    }

    .latest_post_date a {
        font-size: 12px;
        font-weight: 600;
        color: #929191;
    }

    .latest_post_date a:hover {
        color: #2b2b2b;
    }

    .sidebar_gallery {
        margin-top: 94px;
    }

    .gallery_container {
        margin-top: 42px;
    }

    .gallery_item {
        width: calc((100% - 18px) / 3);
        margin-bottom: 9px;
    }

    .gallery_item img {
        width: 100%;
    }

    
        /*********************************
13. Footer
*********************************/

.footer {
            width: 100%;
            padding-top: 55px;
            padding-bottom: 0px;
            background: #31124b;
        }

        .footer_title {
            font-size: 15px;
            font-weight: 700;
            color: #FFFFFF;

            /* text-transform: uppercase; */
        }

        /*********************************
13.1 Footer - About
*********************************/

        .footer_about {
            padding-top: 61px;
            padding-right: 70px;
        }

        .footer_logo {
            position: absolute;
            left: 0;
            top: -24px;
        }

        .footer_about_text {
            font-size: 14px;
            font-weight: 600;
            color: #FFFFFF;
        }

        .footer_social_item {
            display: inline-block;
            width: 31px;
            height: 31px;
            border: solid 1px #fa9e1b;
            border-radius: 50%;
            text-align: center;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
            margin-right: 9px;
        }

        .footer_social_item:last-child {
            margin-right: 0px;
        }

        .footer_social_item a {
            display: block;
            position: relative;
            width: 100%;
            height: 100%;
        }

        .footer_social_item a i {
            display: block;
            position: relative;
            color: #FFFFFF;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            font-size: 12px;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .footer_social_item:hover {
            background: #fa9e1b;
        }

        .footer_social_item:hover a i {
            color: #31124b;
        }

        /*********************************
13.2 Footer - Blog
*********************************/

        .footer_blog {
            margin-top: 39px;
        }

        .footer_blog_item {
            margin-bottom: 21px;
        }

        .footer_blog_item:last-child {
            margin-bottom: 0px;
        }

        .footer_blog_image {
            width: 60px;
            height: 60px;
            float: left;
        }

        .footer_blog_image img {
            width: 100%;
        }

        .footer_blog_content {
            padding-left: 81px;
        }

        .footer_blog_title {
            margin-top: -4px;
            padding-left: 1px;
        }

        .footer_blog_title a {
            font-size: 14px;
            font-weight: 400;
            color: #FFFFFF;
        }

        .footer_blog_title a:hover {
            color: #fa9e1b;
        }

        .footer_blog_date {
            font-size: 12px;
            font-weight: 400;
            color: #fa9e1b;
            margin-top: 7px;
        }

        /*********************************
13.3 Footer - Tags
*********************************/

        .footer_tags {
            margin-top: 40px;
        }

        .tag_item {
            height: 35px;
            width: 50%;

            /* float: left; */
            /* margin-left: 115px;
margin-right: 85px; */
            margin-bottom: 9px;
            border: solid 1px #dd9128;
            border-radius: 5px;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .tag_item:hover {
            background: #dd9128;
        }

        .tag_item a {
            display: block;
            font-size: 12px;
            font-weight: 600;
            color: #FFFFFF;
            line-height: 33px;
            padding-left: 25px;
            padding-right: 25px;
        }

        /*********************************
13.4 Footer - Contact Info
*********************************/

        .contact_info_list {
            margin-top: 40px;
        }

        .contact_info_item {
            margin-bottom: 22px;
        }

        .contact_info_icon {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .contact_info_icon img {
            display: block;
            width: 100%;
        }

        .contact_info_text,
        .contact_info_text a {
            color: #FFFFFF;
            line-height: 2.14;
            margin-top: -4px;
        }

        .contact_info_item:hover .contact_info_text,
        .contact_info_item:hover .contact_info_text a {
            color: #fa9e1b;
        }

        /*********************************
14. Copyright
*********************************/

        .copyright {
            background: #1f0733;
        }

        .copyright_content {
            height: 52px;
        }

        .copyright_content div {
            font-size: 12px;
            font-weight: 600;
            color: #685677;
        }

        .footer_nav_container {
            height: 52px;
        }

        .footer_nav {}

        .footer_nav_list {
            font-size: 0px;
        }

        .footer_nav_item {
            display: inline-block;
            margin-right: 40px;
        }

        .footer_nav_item a {
            font-size: 12px;
            font-weight: 600;
            color: #685677;
            text-transform: uppercase;
            line-height: 2;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .footer_nav_item a:hover {
            color: #FFFFFF;
        }


    /* blog responsive */

    /* @charset "utf-8"; */
    /* CSS Document */

    /******************************

[Table of Contents]

1. 1600px
2. 1440px
3. 1280px
4. 1199px
5. 1024px
6. 991px
7. 959px
8. 880px
9. 768px
10. 767px
11. 539px
12. 479px
13. 400px

******************************/

    /************
1. 1600px
************/

    @media only screen and (max-width: 1600px) {}

    /************
2. 1440px
************/

    @media only screen and (max-width: 1440px) {}

    /************
3. 1380px
************/

    @media only screen and (max-width: 1380px) {}

    /************
3. 1280px
************/

    @media only screen and (max-width: 1280px) {}

    /************
4. 1199px
************/

    @media only screen and (max-width: 1199px) {
        .main_nav_container {
            margin-right: 121px;
        }

        .footer_blog_content {
            padding-left: 74px;
        }
    }

    /************
4. 1100px
************/

    @media only screen and (max-width: 1100px) {}

    /************
5. 1024px
************/

    @media only screen and (max-width: 1024px) {}

    /************
6. 991px
************/

    @media only screen and (max-width: 991px) {
        .main_nav_container {
            display: none;
        }

        .hamburger {
            display: block;
        }

        .sidebar_col {
            margin-top: 105px;
        }

        .footer_column {
            margin-bottom: 60px;
        }

        .footer_column:last-child {
            margin-bottom: 0px;
        }

        .copyright {
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .copyright_content {
            height: auto;
            margin-top: 15px;
        }

        .footer_nav_container {
            height: auto;
        }

        .footer_nav_item {
            display: block;
        }
    }

    /************
7. 959px
************/

    @media only screen and (max-width: 959px) {}

    /************
8. 880px
************/

    @media only screen and (max-width: 880px) {}

    /************
9. 768px
************/

    @media only screen and (max-width: 768px) {
        .home_title {
            font-size: 48px;
        }
    }

    /************
10. 767px
************/

    @media only screen and (max-width: 767px) {}

    /************
11. 575px
************/

    @media only screen and (max-width: 575px) {
        p {
            font-size: 13px;
        }

        h1 {
            font-size: 28px;
        }

        .top_bar {
            display: none;
        }

        .button {
            height: 44px;
            border-radius: 22px;
        }

        .button a {
            line-height: 44px;
            padding-left: 36px;
            padding-right: 36px;
        }

        .logo a img {
            width: 24px;
        }

        .logo a {
            font-size: 24px;
        }

        .main_nav_col {
            height: 60px;
        }

        .header.scrolled .main_nav_col {
            height: 60px;
        }

        .logo_container {
            -webkit-transform: none;
            -moz-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }

        .content_search {
            -webkit-transform: translateY(2px);
            -moz-transform: translateY(2px);
            -ms-transform: translateY(2px);
            -o-transform: translateY(2px);
            transform: translateY(2px);
        }

        .header.scrolled .content_search {
            -webkit-transform: translateY(2px);
            -moz-transform: translateY(2px);
            -ms-transform: translateY(2px);
            -o-transform: translateY(2px);
            transform: translateY(2px);
        }

        .hamburger {
            -webkit-transform: none;
            -moz-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }

        .logo a {
            font-size: 16px;
        }

        .logo a img {
            width: 16px;
            margin-right: 7px;
        }

        .hamburger i {
            font-size: 18px;
        }

        .content_search svg {
            width: 15px;
            height: 15px;
        }

        .menu_close_container {
            top: 15px;
            right: 28px;
        }

        .menu_logo {
            margin-bottom: 17px;
        }

        .menu_logo a img {
            width: 28px !important;
        }

        .menu_item a {
            font-size: 17px;
        }

        .section_title {
            font-size: 21px;
        }

        .home {
            width: 100%;
            height: 375px;
            background: transparent;
        }

        .home_title {
            font-size: 24px;
        }

        .blog_post_date {
            top: 15px;
            left: 15px;
            width: 85px;
            height: 55px;
        }

        .blog_post_day {
            font-size: 24px;
        }

        .blog_post_month {
            font-size: 10px;
            margin-top: 1px;
        }

        .blog_post_meta_item a {
            font-size: 10px;
        }

        .blog_post_title a {
            font-size: 21px;
        }

        .footer_about_text {
            font-size: 13px;
        }
    }

    /************
11. 539px
************/

    @media only screen and (max-width: 539px) {}

    /************
12. 480px
************/

    @media only screen and (max-width: 480px) {}

    /************
13. 479px
************/

    @media only screen and (max-width: 479px) {
        h2 {
            font-size: 24px;
        }

        p {
            font-size: 13px;
        }
    }

    /************
14. 400px
************/

    @media only screen and (max-width: 400px) {}
</style>



<!-- Tour deatils -->

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll"
        data-image-src="images/blog_background.jpg"></div>
    <div class="home_content">
        <div class="home_title">Tour Details</div>
    </div>
</div>

<!-- Blog -->

<div class="blog">
    <div class="container">
        <div class="row">

            <!-- Blog Content -->

            <div class="col-lg-9">

                <div class="blog_post_container">

                    <!-- Blog Post -->

                    <div class="blog_post">
                        <div class="blog_post_image">
                            <img src="images/pexels-nandu-vasudevan-17650851.jpg"
                                alt="https://unsplash.com/@anniespratt" style="width: 100%; height: 28rem;">
                            <!-- <div
                                class="blog_post_date d-flex flex-column align-items-center justify-content-center">
                                <div class="blog_post_day">01</div>
                                <div class="blog_post_month">Dec, 2017</div>
                            </div> -->
                        </div>
                        <div class="blog_post_meta">
                            <ul>
                                <li class="blog_post_meta_item"><a href="">Famous Hills Track Area</a></li>
                        </div>
                        <div class=""><a href="#" style="font-weight: 600; font-size: 28px;color: #000; ">Sajek Regualr Package (3 Nights 2
                                Days)</a></div>
                        <div class="blog_post_text">
                            <p style="color: #3a3333;">সাজেক ভ্যালি সাজেক ভ্যালি (Sajek Valley), বর্তমান সময়ে
                                ভ্রমণ পিপাসু মানুষের
                                সবচেয়ে জনপ্রিয় গন্তব্য সাজেক। রাঙামাটি জেলার বাঘাইছড়ি উপজেলায় অবস্থিত সাজেক
                                বাংলাদেশের সবচেয়ে বড় ইউনিয়ন হিসাবে খ্যাত। সমুদ্রপৃষ্ঠ থেকে যার উচ্চতা ১৮০০ ফুট।
                                সাজেকের অবস্থান রাঙামাটি জেলায় হলেও ভৌগলিক কারণে খাগড়াছড়ির দীঘিনালা থেকে সাজেক
                                যাতায়াত অনেক সহজ। খাগড়াছড়ি জেলা থেকে সাজেকের দূরত্ব ৭০ কিলোমিটার আর দীঘিনালা
                                থেকে ৪০ কিলোমিটার। কি দেখবেন? চারপাশে মনোরম পাহাড় সারি, সাদা তুলোর মত মেঘের
                                ভ্যালি আপনাকে মুগ্ধ করবেই। সাজেক এমনই আশ্চর্য্যজনক জায়গা যেখানে একই দিনে
                                প্রকৃতির তিন রকম রূপের সান্নিধ্যে আপনি হতে পারেন চমৎকৃত।</p>
                        </div>
                        <!-- <div class="blog_post_link"><a href="#">read more</a></div> -->
                    </div>



                    <style>
                        .accordion {
                            background-color: #f1f1f1;
                            color: #444;
                            cursor: pointer;
                            padding: 20px 15px;
                            width: 100%;
                            border: none;
                            text-align: left;
                            outline: none;
                            font-size: 15px;
                            margin-bottom: 20px;
                            border: #ccc solid 1px;
                            border-radius: 5px;
                        }

                        .active,
                        .accordion:hover {
                            background-color: #ddd;
                        }

                        .panel {
                            padding: 0 18px;
                            display: none;
                            background-color: #fff;
                            overflow: hidden;
                        }
                    </style>

                    <div class="blog_post">

                        <div class="">
                            <p style="font-weight: 600; font-size: 28px;color: #000; ">Day Wise Detailed
                                Itinerary</p>
                        </div>

                        <div class="blog_post_text">

                            <p style="font-size: 25px; font-weight: 600; color: #000;"> <i
                                    class="fa-regular fa-moon" style="font-size: 25px;"></i> 1st Night :</p>
                            <p style="font-size: 16px; color: #3a3333;margin-left: 28px;">বাস কাউন্টারে
                                (কলাবাগান/ফকিরাপুল/আরামবাগ) আমাদের প্রতিনিধির সাথে দেখা করুন, আসন নিন এবং
                                খাগড়াছড়ির যাত্রা শুরু করুন।</p>

                        </div>

                        <div class="blog_post_text">
                            <p style="font-size: 25px; font-weight: 600; color: #000;"> <i
                                    class="fa-regular fa-sun" style="font-size: 25px;"></i> 1st Day :</p>
                            <p style="font-size: 16px; color: #3a3333;margin-left: 28px;">বাস কাউন্টারে
                                (কলাবাগান/ফকিরাপুল/আরামবাগ) আমাদের প্রতিনিধির সাথে দেখা করুন, আসন নিন এবং
                                খাগড়াছড়ির যাত্রা শুরু করুন।</p>
                        </div>

                        <div class="blog_post_text">

                            <p style="font-size: 25px; font-weight: 600; color: #000;"> <i
                                    class="fa-regular fa-moon" style="font-size: 25px;"></i> 2nd Night :</p>
                            <p style="font-size: 16px; color: #3a3333;margin-left: 28px;">বাস কাউন্টারে
                                (কলাবাগান/ফকিরাপুল/আরামবাগ) আমাদের প্রতিনিধির সাথে দেখা করুন, আসন নিন এবং
                                খাগড়াছড়ির যাত্রা শুরু করুন।</p>
                        </div>

                        <div class="blog_post_text">

                            <p style="font-size: 25px; font-weight: 600; color: #000;"> <i
                                    class="fa-regular fa-sun" style="font-size: 25px;"></i> 2nd Day :</p>
                            <p style="font-size: 16px; color: #3a3333;margin-left: 28px;">বাস কাউন্টারে
                                (কলাবাগান/ফকিরাপুল/আরামবাগ) আমাদের প্রতিনিধির সাথে দেখা করুন, আসন নিন এবং
                                খাগড়াছড়ির যাত্রা শুরু করুন।</p>
                        </div>

                        <div style="margin-top: 50PX;">

                            <button class="accordion" style="font-weight: 600; font-size: 18px;"><i
                                    class="fa-solid fa-square-check"></i> Included Services</button>
                            <div class="panel">
                                <p style="color: #444;">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do eiusmod
                                    tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>

                            <button class="accordion" style="font-weight: 600; font-size: 18px;"><i
                                    class="fa-solid fa-square-xmark"></i> Excluded Services</button>
                            <div class="panel">
                                <p style="color: #444;">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do eiusmod
                                    tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>

                            <button class="accordion" style="font-weight: 600; font-size: 18px;"><i
                                    class="fa-solid fa-coins"></i> Emi Facilities</button>
                            <div class="panel">
                                <p style="color: #444;">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do eiusmod
                                    tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>

                        </div>



                    </div>

                </div>

                <!-- <div class="blog_navigation">
                    <ul>
                        <li class="blog_dot active">
                            <div></div>01.
                        </li>
                        <li class="blog_dot">
                            <div></div>02.
                        </li>
                        <li class="blog_dot">
                            <div></div>03.
                        </li>
                    </ul>
                </div> -->
            </div>

            <!-- Blog Sidebar -->

            <div class="col-lg-3 sidebar_col">

                <!-- Sidebar Search -->
                <!-- <div class="sidebar_search">
                    <form action="#">
                        <input id="sidebar_search_input" type="search" class="sidebar_search_input"
                            placeholder="" required="required">
                        <button id="sidebar_search_button" type="submit"
                            class="sidebar_search_button trans_300" value="Submit">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="17px" height="17px" viewBox="0 0 512 512"
                                enable-background="new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <g>
                                        <g>
                                            <path class="mag_glass" fill="#FFFFFF"
                                                d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
                                        s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
                                        C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
                                        M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
                                        c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class="mag_glass" fill="#FFFFFF"
                                                d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
                                        c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
                                        C-2.019,484.77-2.019,497.865,6.057,505.942z" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </form>
                </div> -->

                <!-- Booking -->
                <div class="sidebar_latest_posts" style="margin-top: 0px;">
                    <div class="latest_posts_container" style="border: #ddd solid 1px; margin-top: 0px;">
                        <div class="sidebar_title"
                            style="border: #636060 solid 2px; text-align: center; background-color: #636060; color: #fff;padding: 8px 0;  font-weight: 800;font-size: 18px; ">
                            Request For Booking</div>
                        <div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div>
                                        <div style="padding: 6px;">
                                            <a href="booking.html">
                                                <p
                                                    style="font-size: 20px; font-weight: 600;color: #e8672c; margin-bottom: 0rem !important; text-align: center; font-family:Quicksand, sans-serif; font-weight: 800;"">
                                                    Click Here</p>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Call us Archives -->
                <div class="sidebar_latest_posts" style="margin-top: 0px;">
                    <div class="latest_posts_container" style="border: #ddd solid 1px;">
                        <div class="sidebar_title"
                            style="border: #636060 solid 2px; text-align: center; background-color: #636060; color: #fff;padding: 8px 0; font-weight: 800;font-size: 18px; ">
                            Help & Support</div>
                        <div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div>
                                        <div style="padding: 6px;">
                                            <a href="#">
                                                <p
                                                    style="font-size: 20px; font-weight: 600;color: #e8672c; margin-bottom: 0rem !important; text-align: center; font-family:Quicksand, sans-serif; font-weight: 800;">
                                                    Call Us Now</p>
                                            </a>

                                            <a href="#">
                                                <p
                                                    style="font-size: 20px; font-weight: 600;color: #736bb3; margin-bottom: 0rem !important; text-align: center; font-family:Quicksand, sans-serif; font-weight: 700;">
                                                    +8801723768349</p>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="sidebar_latest_posts" style="margin-top: 0px;">
                    <div class="latest_posts_container" style="border: #ddd solid 1px;">
                        <div class="sidebar_title"
                            style="border: #636060 solid 2px; text-align: center; background-color: #636060; color: #fff;padding: 8px 0;  font-weight: 800;font-size: 18px; ">
                            Share This Package</div>
                        <div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div>
                                        <div style="padding: 3px;">
                                            <a href="#">
                                                <p
                                                    style="font-size: 30px; font-weight: 600;color: #1367e5; margin-bottom: 0rem !important; text-align: center; font-family:Quicksand, sans-serif; font-weight: 800;"">
                                                    <i class="fa-brands fa fa-facebook"></i></p>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>



                <!-- Sidebar Latest Posts -->

                <div class="sidebar_latest_posts" style="margin-top: 0px;">

                    <div class="latest_posts_container" style="border: #ccc solid 1px;">
                        <div class="sidebar_title"
                            style="border-bottom: #ccc solid 1px; text-align: center; background-color: #636060; color: #fff;padding: 10px 0;">
                            Popular Packages</div>
                        <div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div>
                                        <div style="padding: 13px; padding-bottom: 0px;">
                                            <img src="images/pexels-quang-nguyen-vinh-6874988.jpg"
                                                alt="" style="width: 100%; height: 9rem;">
                                        </div>

                                        <div style="padding: 13px;">
                                            <p
                                                style="font-size: 20px; font-weight: 600;color: #000; margin-bottom: 0rem !important;">
                                                Sajek Regular Tour Package</p>
                                            <p
                                                style="margin-bottom: 0rem !important; color: #868686; font-weight: 600;">
                                                Duration : 3 Nights/ 2 Days</p>
                                            <p
                                                style="margin-bottom: 0rem !important; color: #868686;font-weight: 600;">
                                                Price Starts : ৳5500</p>
                                            <button
                                                style="border-radius: 4px; border: none; width: 100%; color: #fff; background-color: rgb(6, 140, 6); padding: 8px 0px; margin-top: 20px; font-weight: 600; font-size: 16px;">View
                                                Package</button>
                                        </div>
                                    </div>

                                    <div>
                                        <div style="padding: 13px; padding-bottom: 0px;">
                                            <img src="images/pexels-magda-ehlers-17475691.jpg" alt=""
                                                style="width: 100%; height: 9rem;">
                                        </div>

                                        <div style="padding: 13px;">
                                            <p
                                                style="font-size: 20px; font-weight: 600;color: #000; margin-bottom: 0rem !important;">
                                                Cox's Bazar Regular Tour Package</p>
                                            <p
                                                style="margin-bottom: 0rem !important; color: #868686; font-weight: 600;">
                                                Duration : 3 Nights/ 2 Days</p>
                                            <p
                                                style="margin-bottom: 0rem !important; color: #868686;font-weight: 600;">
                                                Price Starts : ৳5500</p>
                                            <button
                                                style="border-radius: 4px; border: none; width: 100%; color: #fff; background-color: rgb(6, 140, 6); padding: 8px 0px; margin-top: 20px; font-weight: 600; font-size: 16px;">View
                                                Package</button>
                                        </div>
                                    </div>

                                    <div>
                                        <div style="padding: 13px; padding-bottom: 0px;">
                                            <img src="images/pexels-tom-fisk-5718323.jpg" alt=""
                                                style="width: 100%; height: 9rem;">
                                        </div>

                                        <div style="padding: 13px;">
                                            <p
                                                style="font-size: 20px; font-weight: 600;color: #000; margin-bottom: 0rem !important;">
                                                Sreemangal Regular Tour Package</p>
                                            <p
                                                style="margin-bottom: 0rem !important; color: #868686; font-weight: 600;">
                                                Duration : 3 Nights/ 2 Days</p>
                                            <p
                                                style="margin-bottom: 0rem !important; color: #868686;font-weight: 600;">
                                                Price Starts : ৳5500</p>
                                            <button
                                                style="border-radius: 4px; border: none; width: 100%; color: #fff; background-color: rgb(6, 140, 6); padding: 8px 0px; margin-top: 20px; font-weight: 600; font-size: 16px;">View
                                                Package</button>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Sidebar Gallery -->
                <!-- <div class="sidebar_gallery">
                    <div class="sidebar_title">Instagram</div>
                    <div class="gallery_container">
                        <ul
                            class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
                            <li class="gallery_item">
                                <a class="colorbox"
                                    href="https://images.unsplash.com/photo-1473625247510-8ceb1760943f?ixlib=rb-0.3.5&s=c0996cd16eda8c6f54c398de02d03cd3&auto=format&fit=crop&w=720&q=80">
                                    <img src="images/gallery_1.jpg"
                                        alt="https://unsplash.com/@mantashesthaven">
                                </a>
                            </li>
                            <li class="gallery_item">
                                <a class="colorbox"
                                    href="https://images.unsplash.com/photo-1495162048225-6b3b37b8a69e?ixlib=rb-0.3.5&s=861dd3c7b9d3e735d7fd7cbb1eefed64&auto=format&fit=crop&w=720&q=80">
                                    <img src="images/gallery_2.jpg" alt="https://unsplash.com/@kensuarez">
                                </a>
                            </li>
                            <li class="gallery_item">
                                <a class="colorbox"
                                    href="https://images.unsplash.com/photo-1502646275263-04be86afa386?ixlib=rb-0.3.5&s=682a41d7d9bf6e3feabc73a5fdd61dd2&auto=format&fit=crop&w=720&q=80">
                                    <img src="images/gallery_3.jpg" alt="https://unsplash.com/@jakobowens1">
                                </a>
                            </li>
                            <li class="gallery_item">
                                <a class="colorbox"
                                    href="https://images.unsplash.com/photo-1484820301304-0b43512779dc?ixlib=rb-0.3.5&s=7a3393e9f507fb4718c36337a8014c52&auto=format&fit=crop&w=720&q=80">
                                    <img src="images/gallery_4.jpg" alt="https://unsplash.com/@seefromthesky">
                                </a>
                            </li>
                            <li class="gallery_item">
                                <a class="colorbox"
                                    href="https://images.unsplash.com/photo-1490380169520-0a4b88d52565?ixlib=rb-0.3.5&s=7e6b68b1911fb4ffeea4c0750b8a5269&auto=format&fit=crop&w=720&q=80">
                                    <img src="images/gallery_5.jpg" alt="https://unsplash.com/@deannaritchie">
                                </a>
                            </li>
                            <li class="gallery_item">
                                <a class="colorbox"
                                    href="https://images.unsplash.com/photo-1504434026032-a7e440a30b68?ixlib=rb-0.3.5&s=2cc35bf903b78ba4f7f7ed69bc2abe3f&auto=format&fit=crop&w=720&q=80">
                                    <img src="images/gallery_6.jpg" alt="https://unsplash.com/@benobro">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
</div>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>


@endsection