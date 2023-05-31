<?php
require "header.php";
  require_once "post.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Project</title>
</head>
<body>
  <div id="snippetContent"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css"> <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"><div class="container blog-page"><div class="row clearfix"><div class="col-lg-4 col-md-12"><div class="card single_post"><div class="header"><h2><strong>Latest</strong> Post</h2></div><div class="body"><h3 class="m-t-0 m-b-5"><a href="blog-details.html">Apple Introduces Search Ads Basic</a></h3><ul class="meta"><li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li><li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-amber"></i>Technology</a></li><li><a href="javascript:void(0);"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li></ul></div><div class="body"><div class="img-post m-b-15"> <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="Awesome Image"><div class="social_share"> <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button> <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button> <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button></div></div><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p> <a href="blog-details.html" title="read more" class="btn btn-round btn-info">Read More</a></div></div></div><div class="col-lg-4 col-md-12"><div class="card single_post"><div class="header"><h2><strong>Popular</strong> Post</h2></div><div class="body"><h3 class="m-t-0 m-b-5"><a href="blog-details.html">Apple Introduces Search Ads Basic</a></h3><ul class="meta"><li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li><li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-amber"></i>Technology</a></li><li><a href="javascript:void(0);"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li></ul></div><div class="body"><div class="img-post m-b-15"> <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Awesome Image"><div class="social_share"> <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button> <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button> <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button></div></div><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p> <a href="blog-details.html" title="read more" class="btn btn-round btn-info">Read More</a></div></div></div><div class="col-lg-4 col-md-12"><div class="card single_post"><div class="header"><h2><strong>Most</strong> View</h2></div><div class="body"><h3 class="m-t-0 m-b-5"><a href="blog-details.html">Apple Introduces Search Ads Basic</a></h3><ul class="meta"><li><a href="javascript:void(0);"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li><li><a href="javascript:void(0);"><i class="zmdi zmdi-label col-amber"></i>Technology</a></li><li><a href="javascript:void(0);"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li></ul></div><div class="body"><div class="img-post m-b-15"> <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Awesome Image"><div class="social_share"> <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button> <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button> <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button></div></div><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p> <a href="blog-details.html" title="read more" class="btn btn-round btn-info">Read More</a></div></div></div></div></div><style type="text/css">body{
    margin-top:20px;
    background:#eee;
}
.blog-page .single_post {
    -webkit-transition: all .4s ease;
    transition: all .4s ease
}

.blog-page .single_post .img-post {
    position: relative;
    overflow: hidden;
    max-height: 500px
}

.blog-page .single_post .img-post>img {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    -webkit-transition: -webkit-transform .4s ease, opacity .4s ease;
    transition: transform .4s ease, opacity .4s ease;
    max-width: 100%;
    filter: none;
    -webkit-filter: grayscale(0);
    -webkit-transform: scale(1.01)
}

.blog-page .single_post .img-post:hover img {
    -webkit-transform: scale(1.02);
    -ms-transform: scale(1.02);
    transform: scale(1.02);
    opacity: .7;
    filter: gray;
    -webkit-filter: grayscale(1);
    -webkit-transition: all .8s ease-in-out
}

.blog-page .single_post .img-post:hover .social_share {
    display: block
}

.blog-page .single_post .img-post .social_share {
    position: absolute;
    bottom: 10px;
    left: 10px;
    display: none
}

.blog-page .single_post .meta {
    list-style: none;
    padding: 0;
    margin: 0
}

.blog-page .single_post .meta li {
    display: inline-block;
    margin-right: 15px
}

.blog-page .single_post .meta li a {
    font-style: italic;
    color: #959595;
    text-decoration: none;
    font-size: 12px
}

.blog-page .single_post .meta li a i {
    margin-right: 6px;
    font-size: 12px
}

.blog-page .single_post h3 {
    font-size: 20px;
    line-height: 26px;
    -webkit-transition: color .4s ease;
    transition: color .4s ease
}

.blog-page .single_post h3 a {
    color: #242424;
    text-decoration: none
}

.blog-page .single_post p {
    font-size: 15px
}

.blog-page .single_post .blockquote p {
    margin-top: 0 !important
}

.blog-page .right-box .categories-clouds li {
    display: inline-block;
    margin-bottom: 5px
}

.blog-page .right-box .categories-clouds li a {
    display: block;
    font-size: 14px;
    border: 1px solid #ccc;
    padding: 6px 10px;
    border-radius: 3px;
    color: #242424
}

.blog-page .right-box .instagram-plugin {
    overflow: hidden
}

.blog-page .right-box .instagram-plugin li {
    float: left;
    overflow: hidden;
    border: 1px solid #fff
}

.blog-page .comment-reply li {
    margin-bottom: 15px
}

.blog-page .comment-reply li:last-child {
    margin-bottom: none
}

.blog-page .comment-reply li h5 {
    font-size: 18px
}

.blog-page .comment-reply li p {
    margin-bottom: 0px;
    font-size: 15px;
    color: #777
}

.blog-page .comment-reply .list-inline li {
    display: inline-block;
    margin: 0;
    padding-right: 20px
}

.blog-page .comment-reply .list-inline li a {
    font-size: 13px
}

.page.with-sidebar.right .left-box {
    margin-right: -20px
}

@media (max-width: 414px) {
    .section.blog-page {
        padding: 20px 0
    }
    .blog-page .left-box .single-comment-box>ul>li {
        padding: 25px 0
    }
    .blog-page .left-box .single-comment-box ul li .icon-box {
        display: inline-block
    }
    .blog-page .left-box .single-comment-box ul li .text-box {
        display: block;
        padding-left: 0;
        margin-top: 10px
    }
}
.card {
    background: #fff;
    margin-bottom: 30px;
    transition: .5s;
    border: 0;
    border-radius: .55rem;
    position: relative;
    width: 100%;
    box-shadow: 0 1px 2px 0 rgba(0,0,0,0.1);
}

.card .body {
    font-size: 14px;
    color: #424242;
    padding: 20px;
    font-weight: 400;
}
.card .header {
    color: #424242;
    padding: 20px;
    position: relative;
    box-shadow: none;
}
.card .header h2 {
    font-size: 15px;
    color: #757575;
    position: relative;
}
.card .header h2:before {
    background: #a27ce6;
}
.card .header h2::before {
    position: absolute;
    width: 20px;
    height: 1px;
    left: 0;
    top: -20px;
    content: '';
}
.m-b-15 {
    margin-bottom: 15px;
}</style> <script type="text/javascript"></script> </div>
</body>
</html>

<?php
 require "footer.php";
?>
 
