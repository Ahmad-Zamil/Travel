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
5. Contact Form Section
6. About
7. Travelix Map
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
@font-face
{
font-family: 'Beyond';
src: url('../fonts/beyond_the_mountains.otf')  format('truetype'),
     url('../fonts/beyond_the_mountains.ttf')  format('opentype');
}

/*********************************
2. Body and some general stuff
*********************************/

*
{
margin: 0;
padding: 0;
-webkit-font-smoothing: antialiased;
-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
body
{
font-family: 'Open Sans', sans-serif;
font-size: 14px;
font-weight: 400;
background: #FFFFFF;
color: #a5a5a5;
}
div
{
display: block;
position: relative;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
ul
{
list-style: none;
margin-bottom: 0px;
}
p
{
font-family: 'Open Sans', sans-serif;
font-size: 14px;
line-height: 2;
font-weight: 400;
color: #929191;
-webkit-font-smoothing: antialiased;
-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
p a
{
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
a, a:hover, a:visited, a:active, a:link
{
text-decoration: none;
-webkit-font-smoothing: antialiased;
-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
p a:active
{
position: relative;
color: #FF6347;
}
p a:hover
{
color: #FFFFFF;
background: #ffa07f;
}
p a:hover::after
{
opacity: 0.2;
}
::selection
{

}
p::selection
{

}
h1{font-size: 48px;}
h2{font-size: 36px;}
h3{font-size: 24px;}
h4{font-size: 18px;}
h5{font-size: 14px;}
h1, h2, h3, h4, h5, h6
{
font-family: 'Open Sans', sans-serif;
-webkit-font-smoothing: antialiased;
-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
text-shadow: rgba(0,0,0,.01) 0 0 1px;
}
h1::selection,
h2::selection,
h3::selection,
h4::selection,
h5::selection,
h6::selection
{

}
.form-control
{
color: #db5246;
}
section
{
display: block;
position: relative;
box-sizing: border-box;
}
.clear
{
clear: both;
}
.clearfix::before, .clearfix::after
{
content: "";
display: table;
}
.clearfix::after
{
clear: both;
}
.clearfix
{
zoom: 1;
}
.float_left
{
float: left;
}
.float_right
{
float: right;
}
.trans_200
{
-webkit-transition: all 200ms ease;
-moz-transition: all 200ms ease;
-ms-transition: all 200ms ease;
-o-transition: all 200ms ease;
transition: all 200ms ease;
}
.trans_300
{
-webkit-transition: all 300ms ease;
-moz-transition: all 300ms ease;
-ms-transition: all 300ms ease;
-o-transition: all 300ms ease;
transition: all 300ms ease;
}
.trans_400
{
-webkit-transition: all 400ms ease;
-moz-transition: all 400ms ease;
-ms-transition: all 400ms ease;
-o-transition: all 400ms ease;
transition: all 400ms ease;
}
.trans_500
{
-webkit-transition: all 500ms ease;
-moz-transition: all 500ms ease;
-ms-transition: all 500ms ease;
-o-transition: all 500ms ease;
transition: all 500ms ease;
}
.fill_height
{
height: 100%;
}
.super_container
{
width: 100%;
overflow: hidden;
}
.prlx_parent
{
overflow: hidden;
}
.prlx
{
height: 130% !important;
}
.nopadding
{
padding: 0px !important;
}
.button
{
display: inline-block;
height: 53px;
border-radius: 27px;
overflow: hidden;
z-index: 1;
}
.button_bcg
{
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
.button:hover .button_bcg
{
left: -100%;
}
.button a
{
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
.button span
{
display: inline-block;
vertical-align: middle;
width: 5.75px;
height: 5.63px;
background: #FFFFFF;
border-radius: 50%;
margin-right: 2px;
}
.button span:first-child
{
margin-left: 10px;
}
.button span:nth-child(2)
{
opacity: 0.6;
}
.button span:last-child
{
opacity: 0.4;
margin-right: 0px;
}
.parallax-window
{
min-height: 400px;
background: transparent;
}

/*********************************
3. Header
*********************************/

.header
{
position: fixed;
width: 100%;
background: rgba(54, 19, 84, 0.6);
z-index: 12;
}
.header.scrolled
{
background: rgba(54, 19, 84, 0.85);
}

/*********************************
3.1 Top Bar
*********************************/

.top_bar
{
width: 100%;
height: 36px;
background: #350a4e;
-webkit-transition: all 400ms ease;
-moz-transition: all 400ms ease;
-ms-transition: all 400ms ease;
-o-transition: all 400ms ease;
transition: all 400ms ease;
}
.header.scrolled .top_bar
{
visibility: hidden;
opacity: 0;
height: 0px;
}
.phone
{
display: inline-block;
margin-right: 36px;
line-height: 36px;
font-size: 10px;
font-weight: 600;
color: #FFFFFF;
}
.social_list_item
{
position: relative;
display: inline-block;
margin-right: 3px;
}
.social_list_item:last-child
{
margin-right: 0px;
}
.social_list_item a
{
display: block;
width: 100%;
padding-left: 10px;
padding-right: 10px;
line-height: 36px;
}
.social_list_item:hover a i
{
color: #fa9e1c;
}
.social_list_item a i
{
font-size: 12px;
color: #FFFFFF;
-webkit-transition: all 200ms ease;
-moz-transition: all 200ms ease;
-ms-transition: all 200ms ease;
-o-transition: all 200ms ease;
transition: all 200ms ease;
}
.social_list_item a:hover
{
color: #FFFFFF;
}
.user_box_link
{
display: inline-block;
}
.user_box_link a
{
display: block;
font-size: 10px;
line-height: 36px;
font-weight: 600;
color: #FFFFFF;
text-transform: uppercase;
}
.user_box_link a:hover
{
color: #fa9e1c;
}
.user_box_login
{
margin-right: 15px;
}
.user_box_login::after
{
display: block;
position: absolute;
top: 15px;
right: -9px;
background: #FFFFFF;
width: 1px;
height: 9px;
content: '';
}
.main_nav_col
{
height: 90px;
-webkit-transition: all 400ms ease;
-moz-transition: all 400ms ease;
-ms-transition: all 400ms ease;
-o-transition: all 400ms ease;
transition: all 400ms ease;
}
.header.scrolled .main_nav_col
{
height: 90px;
}

/*********************************
3.2 Logo
*********************************/

.logo_container
{
-webkit-transform: translateY(-6px);
-moz-transform: translateY(-6px);
-ms-transform: translateY(-6px);
-o-transform: translateY(-6px);
transform: translateY(-6px);
}
.header.scrolled .logo_container
{
-webkit-transform: none;
-moz-transform: none;
-ms-transform: none;
-o-transform: none;
transform: none;
}
.logo a
{
font-family: 'Open Sans', sans-serif;
font-size: 30px;
color: #f4f4f8;
font-weight: 800;
text-transform: uppercase;
}
.logo a img
{
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

.main_nav_container
{
margin-right: 221px;
}
.main_nav_item
{
position: relative;
display: inline-block;
margin-right: 40px;
}
.main_nav_item:last-child
{
margin-right: 0px;
}
.main_nav_item a
{
font-family: 'Open Sans', sans-serif;
font-size: 13px;
font-weight: 600;
color: #FFFFFF;
text-transform: uppercase;
padding-bottom: 10px;
padding-top: 10px;
}
.main_nav_item::after
{
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
.main_nav_item:hover::after
{
opacity: 1;
}
.content_search
{
-webkit-transform: translateY(-1px);
-moz-transform: translateY(-1px);
-ms-transform: translateY(-1px);
-o-transform: translateY(-1px);
transform: translateY(-1px);
cursor: pointer;
}
.header.scrolled .content_search
{
-webkit-transform: none;
-moz-transform: none;
-ms-transform: none;
-o-transform: none;
transform: none;
}
.mag_glass
{
-webkit-transition: all 200ms ease;
-moz-transition: all 200ms ease;
-ms-transition: all 200ms ease;
-o-transition: all 200ms ease;
transition: all 200ms ease;
}
.content_search img
{
width: 17px;
height: 17px;
}
.content_search:hover .mag_glass
{
fill: #fa9e1c;
}
.content_search:hover .mag_glass
{
fill: #fa9e1c;
}
.search_form
{
position: absolute;
right: 15px;
top: 120px;
width: 237px;
height: 40px;
visibility: hidden;
opacity: 0;
}
.search_form.active
{
top: 105px;
visibility: visible;
opacity: 1;
}
.search_content_input
{
width: 100%;
height: 100%;
background: #FFFFFF;
color: #1b0b32;
padding-left: 20px;
outline: none !important;
border: none !important;
box-shadow: 0px 8px 20px rgba(0,0,0,0.15);
}
.bez_1
{
-webkit-transition: all 0.3s cubic-bezier(0.7, 0, 0.3, 1);
-moz-transition: all 0.3s cubic-bezier(0.7, 0, 0.3, 1);
-ms-transition: all 0.3s cubic-bezier(0.7, 0, 0.3, 1);
-o-transition: all 0.3s cubic-bezier(0.7, 0, 0.3, 1);
transition: all 0.3s cubic-bezier(0.7, 0, 0.3, 1);
}

/*********************************
3.4 Menu
*********************************/

.hamburger
{
display: none;
-webkit-transform: translateY(-3px);
-moz-transform: translateY(-3px);
-ms-transform: translateY(-3px);
-o-transform: translateY(-3px);
transform: translateY(-3px);
cursor: pointer;
margin-left: 20px;
}
.header.scrolled .hamburger
{
-webkit-transform: none;
-moz-transform: none;
-ms-transform: none;
-o-transform: none;
transform: none;
}
.hamburger i
{
font-size: 24px;
color: #FFFFFF;
}
.hamburger:hover i
{
color: #fa9e1c;
}
.menu
{
position: fixed;
width: 100vw;
height: 40vh;
background: linear-gradient(to right, #fa9e1b, #8d4fff);
z-index: 100;
opacity: 0;
visibility: hidden;
}
.menu.active
{
opacity: 0.95;
visibility: visible;
}
.menu_content
{
width: 100%;
height: 100%;
}
.menu_item
{
position: relative;
margin-bottom: 10px;
}
.menu_item:last-child
{
margin-bottom: 0px;
}
.menu_logo
{
margin-bottom: 28px;
}
.menu_logo a img
{
width: 40px !important;
}
.menu_item a
{
display: inline-block;
position: relative;
font-family: 'Beyond';
font-size: 36px;
color: #FFFFFF;
font-weight: 400;
}
.menu_item a::after
{
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
.menu_item:hover a::after
{
width: 100%;
}
.menu_close_container
{
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
.menu_close
{
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
.menu_close::after
{
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
.menu_close_container:hover .menu_close::after
{
background: #fa9e1c;
}

/*********************************
4. Home
*********************************/

.home
{
width: 100%;
height: 465px;
background: transparent;
}
.home_background
{
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-repeat: no-repeat;
background-size: cover;
background-position: center center;
}
.home_content
{
position: absolute;
bottom: 106px;
left: 50%;
-webkit-transform: translateX(-50%);
-moz-transform: translateX(-50%);
-ms-transform: translateX(-50%);
-o-transform: translateX(-50%);
transform: translateX(-50%);
}
.home_title
{
font-size: 72px;
font-weight: 800;
color: #FFFFFF;
text-transform: uppercase;
}

/*********************************
5. Contact Form Section
*********************************/

.contact_form_section
{
padding-top: 105px;
}
.contact_form_container
{
padding-top: 74px;
padding-left: 98px;
padding-right: 98px;
padding-bottom: 88px;
background: linear-gradient(to top right, #fa9e1b, #8d4fff);
}
.contact_title
{
font-size: 30px;
font-weight: 700;
color: #FFFFFF;
text-transform: uppercase;
}
.contact_form
{
margin-top: 52px;
font-size: 0px;
}
.input_field
{
height: 48px;
font-size: 12px;
font-weight: 400;
border: none;
outline: none;
background: transparent;
color: #FFFFFF;
border-bottom: solid 2px #e1e1e1;
}
.contact_form_name
{
width: calc((100% - 30px) / 2);
margin-right: 30px;
}
.contact_form_email
{
width: calc((100% - 30px) / 2);
}
.contact_form_subject
{
width: 100%;
margin-top: 11px;
}
.contact_form_message
{
height: 126px;
width: 100%;
border: none;
outline: none;
margin-top: 19px;
background: transparent;
font-size: 12px;
font-weight: 400;
color: #FFFFFF;
border-bottom: solid 2px #e1e1e1;
padding-top: 11px;
}
.form_submit_button
{
font-size: 13px;
font-weight: 700;
color: #fff;
text-transform: uppercase;
line-height: 53px;
padding-left: 29px;
padding-right: 29px;
background: #31124b;
-webkit-transform: translateY(15px);
-moz-transform: translateY(15px);
-ms-transform: translateY(15px);
-o-transform: translateY(15px);
transform: translateY(15px);
border: none;
outline: none;
margin-top: 37px;
cursor: pointer;
}
.form_submit_button:hover
{
opacity: 0.8;
}
.input_field::-webkit-input-placeholder,
.text_field::-webkit-input-placeholder
{
font-size: 12px !important;
font-weight: 400 !important;
color: #FFFFFF !important;
}
.input_field:-moz-placeholder,
.text_field:-moz-placeholder
{
font-size: 12px !important;
font-weight: 400 !important;
color: #FFFFFF !important;
}
.input_field::-moz-placeholder,
.text_field::-moz-placeholder
{
font-size: 12px !important;
font-weight: 400 !important;
color: #FFFFFF !important;
}
.input_field:-ms-input-placeholder,
.text_field:-ms-input-placeholder
{
font-size: 12px !important;
font-weight: 400 !important;
color: #FFFFFF !important;
}
.input_field::input-placeholder,
.text_field::input-placeholder
{
font-size: 12px !important;
font-weight: 400 !important;
color: #FFFFFF !important;
}

/*********************************
6. About
*********************************/

.about
{
padding-top: 105px;
padding-bottom: 146px;
z-index: 1;
}
.about_image
{
position: absolute;
top: -38px;
left: 15px;
}
.about_content
{
padding-top: 93px;
}
.about_logo
{
position: absolute;
left: 0;
top: 4px;
}
.about_logo a
{
color: #2e2e2e;
font-weight: 800;
text-transform: uppercase;
}
.about_text
{
font-size: 14px;
font-weight: 600;
line-height: 2.29;
color: #929191;
}
.about_social_list
{
margin-top: 40px;
}
.about_social_item
{
display: inline-block;
width: 47px;
height: 47px;
border: solid 2px #fa9e1b;
border-radius: 50%;
text-align: center;
-webkit-transition: all 200ms ease;
-moz-transition: all 200ms ease;
-ms-transition: all 200ms ease;
-o-transition: all 200ms ease;
transition: all 200ms ease;
margin-right: 15px;
}
.about_social_item:last-child
{
margin-right: 0px;
}
.about_social_item a
{
display: block;
position: relative;
width: 100%;
height: 100%;
}
.about_social_item a i
{
display: block;
position: relative;
color: #fa9e1b;
top: 50%;
-webkit-transform: translateY(-50%);
-moz-transform: translateY(-50%);
-ms-transform: translateY(-50%);
-o-transform: translateY(-50%);
transform: translateY(-50%);
font-size: 20px;
-webkit-transition: all 200ms ease;
-moz-transition: all 200ms ease;
-ms-transition: all 200ms ease;
-o-transition: all 200ms ease;
transition: all 200ms ease;
}
.about_social_item:hover
{
background: #fa9e1b;
}
.about_social_item:hover a i
{
color: #FFFFFF;
}
.about_info
{
padding-top: 100px;
}
.about_info .contact_info_item:last-child
{
margin-bottom: 0px;
}
.about_info .contact_info_list
{
margin-top: 0px;
}
.about_info .contact_info_text,
.about_info .contact_info_text a
{
color: #2e2e2e;
}

/*********************************
7. Travelix Map
*********************************/

.travelix_map
{
width: 100%;
}
.google_map
{
width: 100%;
height: 581px;
}
.map_container
{
width: 100%;
height: 100%;
overflow: hidden;
}
#map
{
width: 100%;
height: calc(100% + 30px);
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


/**************************** reponsive ******************************/
@charset "utf-8";
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

@media only screen and (max-width: 1600px)
{

}

/************
2. 1440px
************/

@media only screen and (max-width: 1440px)
{

}

/************
3. 1380px
************/

@media only screen and (max-width: 1380px)
{

}

/************
3. 1280px
************/

@media only screen and (max-width: 1280px)
{

}

/************
4. 1199px
************/

@media only screen and (max-width: 1199px)
{
.main_nav_container
{
    margin-right: 121px;
}
.footer_blog_content
{
    padding-left: 74px;
}
.about_social_item
{
    margin-right: 7px;
}
}

/************
4. 1100px
************/

@media only screen and (max-width: 1100px)
{

}

/************
5. 1024px
************/

@media only screen and (max-width: 1024px)
{

}

/************
6. 991px
************/

@media only screen and (max-width: 991px)
{
.main_nav_container
{
    display: none;
}
.hamburger
{
    display: block;
}
.about
{
    padding-bottom: 105px;
}
.about_image
{
    position: relative;
    width: 100%;
    text-align: center;
    top: auto;
    left: auto;
    margin-top: -38px;
}
.about_image img
{
    max-width: 50vw;
}
.about_content
{
    margin-top: 20px;
}
.about_info
{
    padding-top: 90px;
}
.footer_column
{
    margin-bottom: 60px;
}
.footer_column:last-child
{
    margin-bottom: 0px;
}
.copyright
{
    padding-top: 30px;
    padding-bottom: 30px;
}
.copyright_content
{
    height: auto;
    margin-top: 15px;
}
.footer_nav_container
{
    height: auto;
}
.footer_nav_item
{
    display: block;
}
}

/************
7. 959px
************/

@media only screen and (max-width: 959px)
{

}

/************
8. 880px
************/

@media only screen and (max-width: 880px)
{

}

/************
9. 768px
************/

@media only screen and (max-width: 768px)
{
.home_title
{
    font-size: 48px;
}
.contact_form_container
{
    padding-left: 30px;
    padding-right: 30px;
}
}

/************
10. 767px
************/

@media only screen and (max-width: 767px)
{

}

/************
11. 575px
************/

@media only screen and (max-width: 575px)
{
p{font-size: 13px;}
h1{font-size: 28px;}
.top_bar
{
    display: none;
}
.button
{
    height: 44px;
    border-radius: 22px;
    line-height: 44px;
}
.button a
{
    line-height: 44px;
    padding-left: 36px;
    padding-right: 36px;
}
.logo a img
{
    width: 24px;
}
.logo a
{
    font-size: 24px;
}
.main_nav_col
{
    height: 60px;
}
.header.scrolled .main_nav_col
{
    height: 60px;
}
.logo_container
{
    -webkit-transform: none;
    -moz-transform: none;
    -ms-transform: none;
    -o-transform: none;
    transform: none;
}
.content_search
{
    -webkit-transform: translateY(2px);
    -moz-transform: translateY(2px);
    -ms-transform: translateY(2px);
    -o-transform: translateY(2px);
    transform: translateY(2px);
}
.header.scrolled .content_search
{
    -webkit-transform: translateY(2px);
    -moz-transform: translateY(2px);
    -ms-transform: translateY(2px);
    -o-transform: translateY(2px);
    transform: translateY(2px);
}
.hamburger
{
    -webkit-transform: none;
    -moz-transform: none;
    -ms-transform: none;
    -o-transform: none;
    transform: none;
}
.logo a
{
    font-size: 16px;
}
.logo a img
{
    width: 16px;
    margin-right: 7px;
}
.hamburger i
{
    font-size: 18px;
}
.content_search svg
{
    width: 15px;
    height: 15px;
}
.menu_close_container
{
    top: 15px;
    right: 28px;
}
.menu_logo
{
    margin-bottom: 17px;
}
.menu_logo a img
{
    width: 28px !important;
}
.menu_item a
{
    font-size: 17px;
}
.section_title
{
    font-size: 21px;
}
.home
{
    width: 100%;
    height: 375px;
    background: transparent;
}
.home_title
{
    font-size: 24px;
}
.contact_title
{
    font-size: 24px;
}
.about_content
{
    padding-top: 61px;
    margin-top: 37px;
}
.about_text
{
    font-size: 13px;
}
.about_info
{
    padding-top: 70px;
}
.contact_info_text
{
    font-size: 13px;
}
.about_social_item
{
    width: 40px;
    height: 40px;
}
.about_social_item a i
{
    font-size: 18px;
}
.google_map
{
    height: 75vh;
}
.footer_about
{
    padding-top: 47px;
}
.footer_about_text
{
    font-size: 13px;
}
}

/************
11. 539px
************/

@media only screen and (max-width: 539px)
{

}

/************
12. 480px
************/

@media only screen and (max-width: 480px)
{

}

/************
13. 479px
************/

@media only screen and (max-width: 479px)
{
h2{font-size: 24px;}
p{font-size: 13px;}
.contact_form_container
{
    padding-left: 15px;
    padding-right: 15px;
}
}

/************
14. 400px
************/

@media only screen and (max-width: 400px)
{

}
</style>



	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">contact</div>
		</div>
	</div>

	<!-- Contact -->


	<!-- About -->
	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">

					<!-- About - Image -->

					<div class="about_image">
						<img src="images/man.png" alt="">
					</div>

				</div>

				<div class="col-lg-4">

					<!-- About - Content -->

					<div class="about_content">
						<div class="logo_container about_logo">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelix</a></div>
						</div>
						<p class="about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula iaculis consequat nisl. Nunc et suscipit urna pretium.</p>
						<ul class="about_social_list">
							<li class="about_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>

				</div>

				<div class="col-lg-3">

					<!-- About Info -->

					<div class="about_info">
						<ul class="contact_info_list">
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
								<div class="contact_info_text">Gulshan-2, Dhaka-1212, Dhaka, Bangladesh</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
								<div class="contact_info_text">2556-808-8613</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
								<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">bangladesh@unicoit.com</a></div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
								<div class="contact_info_text"><a href="https://unicoit.com">www.unicoit.com</a></div>
							</li>
						</ul>
					</div>

				</div>

			</div>
		</div>
	</div>

	<!-- Google Map -->

	<div class="travelix_map">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<div id="map"></div>
			</div>
		</div>
	</div>

@endsection