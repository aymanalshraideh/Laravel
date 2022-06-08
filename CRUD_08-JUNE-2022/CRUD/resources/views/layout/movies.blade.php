<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Netflix Inspired Movie Gallery</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css'><link rel="stylesheet" href="./style.css">
<style>@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;800&display=swap");

    body,
    html {
        background: #000000;
        padding: 0;
        margin: 0;
        padding-bottom: 6rem;
        font-family: "Montserrat", sans-serif;
        width: 100%;
    }
    .container {
        padding-bottom: 3rem;
    }
    img {
        -webkit-box-reflect: below 5px
            linear-gradient(transparent, transparent, rgba(0, 0, 0, 0.4));
        -webkit-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    .container img:hover {
        -webkit-transform: scale(1.1);
        -ms-transform: scale(1.1);
        transform: scale(1.1);
    }
    .last {
        margin-top: 6.5rem;
    }
    .featured_wrapper {
        position: relative;
    }
    .featured_wrapper img {
        width: 100%;
        width: 100%;
        height: 350px;
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: top;
        object-position: top;
    }
    .title_wrapper {
        position: absolute;
        width: 100%;
        left: 2rem;
        bottom: 2rem;
        padding: 20px 40px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    .title_wrapper h1 {
        width: 70%;
    }
    button {
        background: #f40612 !important;
        color: #fff !important;
        font-size: 18px;
        padding: 0.5rem 3rem;
        outline: none;
        border: 0 !important;
    }
    @media (max-width: 768px) {
        .title_wrapper {
            text-align: center;
            left: 0;
        }
        .title_wrapper h1 {
            font-size: 32px !important;
            width: 100%;
        }
        .container {
            padding: 20px;
        }
    }
    @media (max-width: 480px) {
        .column.is-one-quarter img {
            width: 100%;
            margin-bottom: 7rem;
        }
    }</style>
</head>
<body>
<!-- partial:index.partial.html -->
<!-- #CodePenChallenge: Reflections -->
<div class="top">
	<div class="columns">
		<div class="column is-full featured_wrapper p-0">
			<img src="https://raw.githubusercontent.com/brixiobodino/coffeholic/main/banner.jpg" class="featured">
			<div class="title_wrapper">
				<span class="has-text-white">Trending Today</span>
				<h1 class="title is-1 has-text-white">The Untold Story of the great Lorem Ipsum</h1>
			<a href="add">	<button class="button is-medium">Admin Page</button></a>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="columns is-multiline p-0 pt-6 last">
		<div class="column is-full">
			<p class="has-text-white">Action Movies Collection</p>
		</div>
        @foreach ($moves as $item)


		<div class="column is-one-quarter">
		<a href=""><img src="{{asset('storage/images/'.$item->movie_imag)}}" alt=""></a>
<p style="color: #fff">{{$item->movie_name}}</p>
		</div>
 @endforeach
	</div>
</div>
<!-- partial -->

</body>
</html>
