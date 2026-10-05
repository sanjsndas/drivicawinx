<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8">
        <title>Drivicawinx : Request accepted!</title>
        <meta property="og:title" content="Drivicawinx : Request accepted!" />
        <meta property="og:image" content="main.png"/>
        
        <meta property="og:description" content="Drivicawinx : Request accepted!">
        <meta name="description" content="Drivicawinx : Request accepted!">
        <meta name="twitter:title" content="Drivicawinx : Request accepted!">
        <meta name="twitter:image:src" content="main.png"/>
        <link rel="stylesheet" href="assets/st/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/st/bootstrap.css">
        <link rel="stylesheet" href="assets/st/slick.css">

        

        <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="main.png" type="image/x-icon">

        <script src="assets/scr/jquery-3.7.1.min.js"></script>
        <script src="assets/scr/slick.js"></script>
       
        
        </head>
        <body>

            
            
            
            <header class="promo__detailssk" id="header">
                <div class="container d-flex align-items-center justify-content-between">
                  <h1 class="logo"><a href="./">Drivicawinx</a></h1>
                  <nav id="navbar" class="navbar header__menu">
                    <ul>
                      <li><a class="nav-link" href="./">Home</a></li>
                      <li><a class="nav-link" href="./#service">Our Services</a></li>
                      <li><a class="nav-link" href="./#testimonials">Comments</a></li>
                      
                    </ul>
                    <div class="header__burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                  </nav>

                </div>
            </header>
            <div id="home">
                <div class="container">
                  <h2>Professional Suspension and Steering Repair Services</h2>
                  <div class="phoneBtn__block">
                    
                  </div>
                </div>
            </div>

            


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-price--rowwx{
		margin: 0px;
		padding: 0px;
		font-family: 'Ubuntu', sans-serif;
		width: 100%;
		font-size: 18px;
		padding: 313px 0px;
	}
	.bodyClass1-price--rowwx{
		background: #f4f9f9;
		color: #000000;
	}
	.bodyClass2-price--rowwx{
		background: #fff;
		color: #fff;
	}
	.bodyClass3-price--rowwx{
		background: #fff;
		color: #111;
	}
	.wrapage-block-price--rowwx{
		background-size: 100%;
		width: 100%;
	}
	.box_main-price--rowwx{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-price--rowwx h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-price--rowwx p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-price--rowwx{
		text-align: center;
	}
	.mainBlock-price--rowwx ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-price--rowwx ul>li span{
		font-weight: bold;
	}
	.mainBlock-price--rowwx{
		max-width: 894px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 15px;
	}
	.mainBlock-price--rowwx .cBlock-price--rowwx{
		text-align: center;
	}

	.bodyClass3-price--rowwx .mainBlock-price--rowwx{
		background: none;
		border-top: 2px dotted #eac8af;
		border-bottom: 2px dotted #eac8af;
	}
	.bodyClass2-price--rowwx .mainBlock-price--rowwx{
		background: #310B0B;
		color: #fff !important;
		box-shadow: 0px 0px 15px #310B0B;
	}
	.bodyClass2-price--rowwx .mainBlock-price--rowwx p{
		color: #fff !important;
	}
	.bodyClass1-price--rowwx .mainBlock-price--rowwx{
		background: #ffffff;
		color: #000000;
		border-left: 3px solid #83142C;
	}
	.bodyClass1-price--rowwx .mainBlock-price--rowwx p{
		color: #000000 !important;
	}
	.order-price--rowwx{
		font-size: 20px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-price--rowwx p{
			padding: 0px 15px;
		  }
		  .box_main-price--rowwx h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-price--rowwx{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-price--rowwx{
			height: 100%;
		}
	}
</style>
<div class="bodyClass1-price--rowwx" id="mainWrapp-price--rowwx">


	<div class="wrapage-block-price--rowwx">
		<div class="box_main-price--rowwx">
			<div class="mainBlock-price--rowwx">
				<p>We're truly grateful for your outreach and the confidence you've placed in us. Your support empowers our dedicated team to enhance the caliber of our offerings continually.</p>
<p>Remember, your insights, feedback, and suggestions are invaluable to our growth and evolution. If there's anything on your mind or if you require assistance, please feel free to reach out. Our commitment is to be readily available to assist you.</p>
<p class="cBlock-price--rowwx">With heartfelt thanks and warm wishes!</p>
			</div>
		</div>
	</div>


</div>




              <div class="podval">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 left__section">
                            <div class="podval__brand__section" href="./">
                                <a href="./"><img src=main.png ></a>
                                <a href="./"><h4>Drivicawinx</h4></a>
                            </div>
                        </div>
                        <div class="col-lg-6 right__section">
                            <div class="podval__poli">
                                <a href="privacyPolicy.html" >Privacy policy</a>
                                <a href="terms-of-service.html" >Terms & Conditions</a>
                                <a href="disclaimer.html" >Disclaimer</a>
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              <style>

                body{
                    direction: ltr;
                    font-family: 'Arvo', sans-serif !important;
                    font-size: 18px;
                    margin: 0;
                    padding: 0px;
                }
    
                .wow {
                    visibility: hidden;
                }
    
                #topbar {
                    background: #bbbbbb;
                    font-size: 13px;
                    transition: all 0.5s;
                    color: #fff;
                    padding-top: 13px;
                    padding-bottom: 13px;
                    display: flex;
                    align-items: center;
                }
    
                #topbar .contact__info  {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
    
                #topbar .contact__info .top__mail i,
                #topbar .contact__info .top__phone i {
                    font-style: normal;
                    color: #2B1F31;
                    display: flex;
                    align-items: center;
                }
    
                #topbar .contact__info .top__mail i a,
                #topbar .contact__info .top__phone i a {
                    display: flex;
                    align-items: center;
                    padding-left:  10px;
                    color: #2B1F31;
                    text-decoration: none;
                }
    
                #topbar .contact__info .top__mail i a {
                    display: flex;
                    align-items: center;
                    line-height: 0;
                    transition: 0.3s;
                    transition: 0.3s;
                    text-decoration: none;
                }
    
                #topbar .contact__info .top__mail i a:hover {
                    color: #2B1F31;
                    text-decoration: underline;
                }
    
                #header {
                    background: #fff;
                    transition: all 0.5s;
                    z-index: 997;
                    height: 86px;
                    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
                    display: flex;
                    align-items: center;
                }
    
                #header.fixed-top {
                    height: 70px;
                }
    
                #header .logo {
                    font-size: 30px;
                    margin: 0;
                    padding: 0;
                    line-height: 1;
                    font-weight: 600;
                    letter-spacing: 0.8px;
                    position: relative;
                }
    
                #header .logo a {
                    color: #2B1F31;
                    text-decoration: none;
                }
    
            
                #header .logo img {
                    max-height: 40px;
                }
    
                .scrolled-offset {
                    margin-top: 58px;
                }
    
                .navbar {
                    padding: 0;
                }
    
                .navbar ul {
                    flex-wrap: wrap;
                    gap: 8px;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    list-style: none;
                    align-items: center;
                }
    
                .navbar li {
                    position: relative;
                }
    
                .navbar>ul>li {
                    margin-top: 45px;
                    white-space: nowrap;
                }
    
                .navbar li a{
                    color: #2B1F31;
                }
    
                .header__burger{
                    display: none;
                    cursor: pointer;
                    padding: 13px;
                }
    
            
                #home {
                    width: 100%;
                    height: 75vh;
                    background: url("uploads/suspension-service-background.webp") top left;
                    background-size: cover;
                    position: relative;
                    display: flex;
                    align-items: center;
                }
    
                #home:before {
                    content: "";
                    background: rgba(255, 255, 255, 0.6);
                    position: absolute;
                    bottom: 0;
                    top: 0;
                    left: 0;
                    right: 0;
                }
    
                #home .container {
                    position: relative;
                }
    
                #home h1 {
                    margin: 0;
                    font-size: 48px;
                    font-weight: 600;
                    line-height: 56px;
                    color: #222222;
                    font-family: "Poppins", sans-serif;
                }
    
                #home h2 {
                    color: #2B1F31;
                    margin: 10px 0 28px 0;
                    font-size: 24px;
                    font-weight: 400;
                }
    
                #home .phoneBtn__block{
                    display: flex;
                }
    
                a.btnPhone-1{    
                    color:#000;
                    background: transparent;
                    background: #bbbbbb; 
                    border-radius: 5px 5px;
                    padding: 13px 28px;
                    display: inline-block;
                    font-size: 15px;
                    line-height: 24px;
                    font-weight: 600;
                    margin: 28px 0 5px 0;
                    transition: all 0.3s ease-in-out;
                    text-decoration: none;
                }
                
                a.btnPhone-1:hover{
                    color: #00C9B1;
                    background:#bbbbbb;
                    border:1px solid #2B1F31;
                }
    
                .btnPhone-2{
                    display: inline-block;
                    padding: 0.5em 1em;
                    text-decoration: none;
                    border-radius: 3px 30px;
                    font-weight: 600;
                    color: #000;
                    background:#bbbbbb;
                    transition: .4s;
                }
    
                .btnPhone-2:hover,
                .btnPhone-2:focus {
                    color: #00C9B1;
                    background:#bbbbbb;
                }
    
                .btnPhone-3 {
                    position: relative;
                    display: inline-block;
                    font-weight: 600;
                    padding: 8px 13px 5px 13px;
                    text-decoration: none;
                    color: #000;
                    background: #bbbbbb;
                    border-radius: 15px 15px 0 0;
                    transition: .4s;
                }
    
                .btnPhone-3:hover,
                .btnPhone-3:focus {
                    color: #00C9B1;
                    background:#bbbbbb;
                }
    
                .btnPhone-4{
                    display: inline-block;
                    padding: 0.5em 1em;
                    text-decoration: none;
                    color: #000;
                    background: #bbbbbb;
                    border: dashed 1px #67c5ff;
                    border-radius: 3px;
                    transition: .4s;
                }
    
                .btnPhone-4:hover,
                .btnPhone-4:focus {
                    color: #00C9B1;
                    background:#bbbbbb;
                }
    
                .btnPhone-5{
                    display: inline-block;
                    padding: 0.5em 1em;
                    text-decoration: none;
                    color: #000;
                    background: #bbbbbb;
                    font-weight: 600;
                    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
                }
    
                .btnPhone-5:hover,
                .btnPhone-5:focus {
                    color: #00C9B1;
                    background:#bbbbbb;
                }
    
                .services h2.service__title{
                    text-align: center;
                    font-size: 27px;
                    padding-bottom: 28px;
                }
    
                .services{
                    padding-top: 60px;
                    padding-bottom: 60px;
                }
               
                .services .icon-box {
                    display: flex;
                    padding: 28px;
                    position: relative;
                    overflow: hidden;
                    background: #fff;
                    box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);
                    transition: all 0.6s ease-in-out;
                    border-radius: 8px;
                    z-index: 1;
                    gap: 5px;
                }
    
                .services .icon-box::before {
                    content: "";
                    position: absolute;
                    background: #cbe0fb;
                    right: 0;
                    left: 0;
                    bottom: 0;
                    top: 100%;
                    transition: all 0.6s;
                    z-index: -1;
                }
    
                .services .icon-box:hover::before {
                    background:  #bbbbbb;
                    top: 0;
                    border-radius: 0px;
                }
    
                .services .icon {
                    display: flex;
                    justify-content: center;
                    font-size: 48px;
                    line-height: 1;
                    color: #bbbbbb;
                    transition: all 0.3s ease-in-out;
                    margin-bottom: 13px;
                }
    
                .services .title {
                    font-weight: 700;
                    margin-bottom: 13px;
                    font-size: 18px;
                }
    
                .services .title a {
                    color: #111;
                }
    
                .services .description {
                    font-size: 15px;
                    line-height: 28px;
                    margin-bottom: 0;
                }
    
                .services .icon-box:hover .title a,
                .services .icon-box:hover .description {
                    color: #00C9B1;
                }
    
                .services .icon-box:hover .icon i {
                    color: #00C9B1;
                }
                
                .core{
                    padding-top: 60px;
                    padding-bottom: 60px;
                    background: #00000009;
                }
    
                .core .row{
                    display: flex;
                }
    
                .core .core__title{
                    margin-bottom: 28px;
                }
                .core .core__title h4{
                    font-size:28px; 
                    letter-spacing:2px;
                    text-align:center;
                    font-weight: 700;
                }
    
                .core__box img{
                    float: none; 
                    max-width: 100%;
                    border-radius: 31% 69% 23% 77% / 66% 18% 82% 34%    
                }
    
                .core__block h5{
                    font-size: 24px;
                    font-weight: 700;
                    text-align: center;
                }
               
    
                .partners {
                    padding: 13px 0;
                    text-align: center;
                    background:  #bbbbbb;
                }
    
                .partners img {
                    max-width: 100%;
                    transition: all 0.4s ease-in-out;
                    display: inline-block;
                    padding: 13px 0;
                }
    
                .partners img:hover {
                    transform: scale(1.15);
                }
    
                .advantages{
                    padding-top: 60px;
                    padding-bottom: 60px;
                }
                
                .advantages .content {
                    display: flex;
                    align-items: center;
                }
    
                .advantages .content h3 {
                    padding-top: 15px;
                    padding-bottom: 15px;
                    font-weight: 600;
                    font-size: 26px;
                    color: #2B1F31;
                    text-align: center;
                }
    
                .advantages .content ul {
                    list-style: none;
                    padding: 0;
                }
    
                .advantages .content ul li {
                    padding-bottom: 13px;
                }
    
                .advantages .content ul i {
                    font-size: 20px;
                    padding-right: 4px;
                    color:#bbbbbb;
                }
    
                .advantages .content p:last-child {
                    margin-bottom: 0;
                }
    
                .advantages  .adv__right{
                    display: flex;
                    justify-content: center;
                }
                        
    
                .testimonials{
                    background: url("uploads/suspension-service-background.webp") top left;
                    padding-top: 28px;
                    padding-bottom: 15px;
                    width: 100%;
                    background-size: cover;
                    position: relative;
                    display: flex;
                    align-items: center;
                }
    
                .testimonials:before {
                    content: "";
                    background: rgba(255, 255, 255, 0.2);
                    position: absolute;
                    bottom: 0;
                    top: 0;
                    left: 0;
                    right: 0;
                }
    
                .testimonials .container {
                    position: relative;
                }
                
                .testimonials .testimonial-item{
                    background-color: rgba(0, 0, 0, 0.5);
                    padding:13px;
                    border-radius: 10px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    margin-left: 13px;
                    justify-content: center;
                }
    
                .testimonial-item img{
                    margin: 0 auto;
                    max-width: 130px;
                    padding: 5px 5px;
                    background-color: #fff;
                    border-radius: 31% 69% 23% 77% / 66% 18% 82% 34%
                }
    
                .testimonials h3{
                    color: #fff;
                    font-size: 20px;
                    margin: 0;
                    text-align: center;
                    padding: 15px 0;
                }
                .testimonials p {
                    color: #fff;
                    font-size: 20px;
                    font-weight: 400;
                    line-height: 35px;
                    margin: 0 0 28px;
                    text-align: center;
                    padding-top:13px;
                }
               
                .testimonial-item i{
                    font-size: 30px;
                    color: #fff;
                    margin-bottom: 28px;
                }
    
                .cost__tarif{
                    padding-top: 70px;
                    padding-bottom: 70px;
                }
    
                .cost__tarif .tarif__colAdapt{
                    display: flex;
                }
    
                .cost__tarif .box {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    padding: 15px;
                    background: #fff;
                    text-align: center;
                    box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.12);
                    border-radius: 5px;
                    position: relative;
                    overflow: hidden;
                }
    
                .cost__tarif .box h3 {
                    font-weight: 600;
                    margin: -20px -20px 20px -20px;
                    padding: 15px 13px;
                    font-size: 16px;
                    font-weight: 600;
                    color: #777777;
                    background: #f8f8f8;
                }
    
                .cost__tarif .box h4 {
                    font-size: 36px;
                    color: #2B1F31;
                    font-weight: 600;
                    margin-bottom: 15px;
                }
    
                .cost__tarif .box h4 sup {
                    font-size: 20px;
                    top: -15px;
                    left: -3px;
                }
    
                .cost__tarif .box h4 span {
                    color: #bababa;
                    font-size: 16px;
                    font-weight: 400;
                }
    
                .cost__tarif .box ul {
                    padding: 0;
                    list-style: none;
                    color: #444444;
                    text-align: center;
                    line-height: 20px;
                    font-size: 14px;
                }
    
                .cost__tarif .box ul li {
                    padding-bottom: 16px;
                }
    
                .cost__tarif .box ul i {
                    color: #106eea;
                    font-size: 18px;
                    padding-right: 4px;
                }
    
                .cost__tarif .box ul .na {
                    color: #ccc;
                    text-decoration: line-through;
                }
    
                .cost__tarif .btn-wrap {
                    margin: 20px -20px -20px -20px;
                    padding: 15px 13px;
                    text-align: center;
                }
    
                .cost__tarif .btn-buy {
                    background: #bbbbbb;
                    display: inline-block;
                    padding: 13px 35px;
                    border-radius: 4px;
                    color: #2B1F31;
                    transition: none;
                    font-size: 14px;
                    font-weight: 600;
                    transition: 0.3s;
                    text-decoration: none;
                }
    
                .cost__tarif .btn-buy:hover {
                    background: #2B1F31;
                    color:#fff;
                }
    
                .cost__tarif .featured h3 {
                    color: #2B1F31;
                    background:#bbbbbb;
                }
    
                .cost__tarif .advanced {
                    width: 200px;
                    position: absolute;
                    top: 18px;
                    right: -68px;
                    transform: rotate(45deg);
                    z-index: 1;
                    font-size: 14px;
                    padding: 1px 0 3px 0;
                    background: #bbbbbb;
                    color: #fff;
                }
    
    
                .btnPrice{
                    color: #2B1F31;
                    background: transparent;
                    border:1px solid #2B1F31;
                    border-radius: 5px 5px;
                    padding: 13px 28px;
                    display: inline-block;
                    font-size: 15px;
                    line-height: 24px;
                    font-weight: 600;
                    margin: 28px 0 5px 0;
                    transition: all 0.3s ease-in-out;
                    text-decoration: none;
                }
    
                .btnPrice:hover{
                    color: #fff;
                    background:#2B1F31;
                    border:1px solid #2B1F31;
                }
    
                .modal{
                    display: none;
                    position: fixed;
                    z-index: 9;
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    overflow: auto;
                    background-color: rgba(0, 0, 0, 0.5);
                    box-shadow: 16px 16px 32px #c8c8c8, -16px -16px 32px #fefefe;
                }
    
                .mCont{
                    background-color: #fff;
                    margin: 10% auto;
                    padding: 29px;
                    border: 1px solid #888;
                    width: 90%;
                }
                .close{
                    color: #888;
                    float: right;
                    font-size: 28px;
                    font-weight: 700;
                    cursor: pointer;
                }
    
                .close2{
                    color: #888;
                    float: right;
                    font-size: 28px;
                    font-weight: 700;
                    cursor: pointer;
                }
    
                .close3{
                    color: #888;
                    float: right;
                    font-size: 28px;
                    font-weight: 700;
                    cursor: pointer;
                }
    
                .mCont .fields{
                    text-align: left;
                    display: flex;
                    flex-direction: column;
                    gap: 13px;
                    padding-top: 28px;
                }
    
                .mCont .input-main__column--element{
                    border: 1px solid #eee;
                    border-radius: 5px;
                    color: #333;
                    height: 45px;
                    padding: 13px 18px;
                    transition: all 0.3s ease 0s;
                }
    
                .mCont .textarea-main__column--element{
                    border: 1px solid #eee;
                    border-radius: 5px;
                    box-shadow: none;
                    color: #333;
                    padding: 13px 18px;
                    height: 100px;
                }
    
                .mCont .form-check{
                    align-items: flex-start;
                    padding-top: 9px;
                    padding-left: 40px;
                    text-align: left;
                    padding-top: 10px;
                    padding-left: 40px;
                }
    
                .mCont .form-check a{
                    color: #000;
                }
    
                .contacts{
                    padding-top: 50px;
                    padding-bottom: 50px;
                }
    
                .contacts .contact__title{
                    padding-top: 13px;
                    padding-bottom: 15px;
                    text-align: center;
                    color: #2B1F31;
                }
    
                .contacts .info-box {
                    color: #444444;
                    text-align: center;
                    box-shadow: 0 0 30px rgba(214, 215, 216, 0.3);
                    padding: 15px 0 28px 0;
                }
    
                .contacts .info-box i {
                    font-size: 32px;
                    color: #bbbbbb;
                    padding: 8px;
                }
    
                .contacts .info-box h3 {
                    font-size: 20px;
                    color: #777777;
                    font-weight: 600;
                    margin: 13px 0;
                }
    
                .contacts .info-box p {
                    padding: 0;
                    line-height: 24px;
                    font-size: 14px;
                    margin-bottom: 0;
                }
    
                .contacts .info-box a{
                    text-decoration: none;
                    padding: 0;
                    line-height: 24px;
                    font-size: 14px;
                    margin-bottom: 0;
                    color: inherit;
                }
    
                .contacts .info-box 
    
                .form__block {
                    background: #fff none repeat scroll 0 0;
                    box-shadow: 0 0 30px 0px rgba(0, 0, 0, 0.1);
                    padding: 0 28px;
                }
    
                .contacts iframe{
                    height: 100%;
                }
              
    
                .contacts .fields{
                    text-align: left;
                    display: flex;
                    flex-direction: column;
                    gap: 13px;
                    padding-top: 28px;
                }
    
                .contacts .input-main__column--element{
                    border: 1px solid #eee;
                    border-radius: 5px;
                    color: #333;
                    height: 45px;
                    padding: 13px 18px;
                    transition: all 0.3s ease 0s;
                }
    
                .contacts .textarea-main__column--element{
                    border: 1px solid #eee;
                    border-radius: 5px;
                    box-shadow: none;
                    color: #333;
                    padding: 13px 18px;
                    height: 100px;
                }
    
                .contacts .form-check{
                    align-items: flex-start;
                    padding-top: 9px;
                    padding-left: 40px;
                    text-align: left;
                    padding-top: 10px;
                    padding-left: 40px;
                }
    
                .contacts .form-check a{
                    color: #000;
                }
                .slick-slide div {
                    margin: 0 13px;
                }
    
                .button-1{    
                    color:#000;
                    background: transparent;
                    background: #bbbbbb; 
                    border-radius: 5px 5px;
                    padding: 13px 28px;
                    display: inline-block;
                    font-size: 15px;
                    line-height: 24px;
                    font-weight: 600;
                    margin: 28px 0 5px 0;
                    transition: all 0.3s ease-in-out;
                    text-decoration: none;
                }
                
                .button-1:hover{
                    color: #00C9B1;
                    background:#bbbbbb;
                    border:1px solid #2B1F31;
                }
    
                .button-2{
                    display: inline-block;
                    padding: 0.5em 1em;
                    text-decoration: none;
                    border-radius: 3px 28px;
                    font-weight: 600;
                    color: #000;
                    background:#bbbbbb;
                    transition: .4s;
                }
    
                .button-2:hover,
                .button-2:focus {
                    color: #00C9B1;
                    background:#bbbbbb;
                }
    
                .button-3 {
                    position: relative;
                    display: inline-block;
                    font-weight: 600;
                    padding: 8px 13px;
                    text-decoration: none;
                    color: #000;
                    background: #bbbbbb;
                    border-radius: 15px 15px 0 0;
                    transition: .4s;
                }
    
                .button-3:hover,
                .button-3:focus {
                    color: #00C9B1;
                    background:#bbbbbb;
                }
    
                .button-4{
                    display: inline-block;
                    padding: 0.5em 1em;
                    text-decoration: none;
                    color: #000;
                    background: #bbbbbb;
                    border: dashed 1px #67c5ff;
                    border-radius: 3px;
                    transition: .4s;
                }
    
                .button-4:hover,
                .button-4:focus {
                    color: #00C9B1;
                    background:#bbbbbb;
                }
    
                .button-5{
                    display: inline-block;
                    padding: 0.5em 1em;
                    text-decoration: none;
                    color: #000;
                    background: #bbbbbb;
                    font-weight: 600;
                    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
                }
    
                .button-5:hover,
                .button-5:focus {
                    color: #00C9B1;
                    background:#bbbbbb;
                }
    
               
                .podval{
                    background: #bbbbbb;
                    padding-top: 21px;
                    padding-bottom: 21px;
                }
    
    
                .podval .podval__brand__section{
                    display: flex;
                    flex-direction: row;
                    align-items: baseline;
                    gap: 13px;
                }
    
                .podval .podval__brand__section a img{
                    width: 70px;
                    height: 70px;
                }
    
                .podval .podval__brand__section a{
                    text-decoration: none;
                }
    
                .podval .podval__brand__section a h4{
                    color: #000;
                }
    
                .podval .right__foot{
                    color: #000;
                }
    
                .podval .right__foot p a{
                    text-decoration: none;
                    color: #000;
                }
    
                .podval .left__section{
                    display: flex;
                    align-items: center;
                }
    
                .podval__poli{
                    display: flex;
                    justify-content: center;
                    padding-top: 13px;
                }
                .podval__poli a{
                    padding: 0 13px;
                    font-size:14px;
                    color: #000;
                } 
    
                .podval__poli a:hover{
                    font-size:14px;
                    color:#609752; 
                } 
    
    
                @media(max-width: 1200px){
    
                    .header__menu ul {
                        display: none; 
                        padding: 10px;
                    }
    
                    .header__burger {
                        display: block; 
                        z-index: 999;
                        position: relative;
                    }
    
                    .header__burger span{
                        display: block;
                        width: 25px;
                        height: 3px;
                        background-color: #000;
                        margin-bottom: 5px;
                    }
    
                    .header__menu .show {
                        margin-top: 40px;
                        display: block;
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        background-color: #bbbbbb;
                        z-index: 999;
                        text-align: center;
                    }
    
                    .servicees .serv__width{
                        width: 50% !important;
                    }
    
                }
    
                @media (min-width: 992px) and (max-width: 1200px){
                    .serv__width{
                        width: 50%;
                        padding: 28px;
                    }
                }
    
                @media (min-width: 1024px) {
                    #home {
                        background-attachment: fixed;
                    }
    
                    .testimonials {
                        background-attachment: fixed;
                    }
                }
    
                @media(max-width: 992px){
                    .podval .left__section{
                        justify-content: center;
                    }
    
                    .contacts iframe{
                        padding-top: 15px;
                        padding-bottom: 15px;
                        height: 100%;
                    }
                    .cost__tarif .tarif__colAdapt{
                        justify-content: center;
                    }
    
                    .map_form{
                        display: flex;
                        flex-direction: column !important;
                    }
                    .map{
                        width: 100% !important;
                    }
                    .form__block{
                        width: 100% !important;
                    }
                }
    
                @media (max-width: 768px) {
                    #home {
                        height: 100vh;
                    }
    
                    #home h1 {
                        font-size: 28px;
                        line-height: 36px;
                    }
    
                    #home h2 {
                        font-size: 18px;
                        line-height: 24px;
                        margin-bottom: 28px;
                    }
    
                    .clients img {
                        max-width: 40%;
                    }
    
                
                }
    
                @media(max-width: 767px){
                    .cost__tarif .tarif__colAdapt {
                        display: block;
                    }
    
                    #home h2 {
                        text-align: center;
                    }
    
                    #home .phoneBtn__block {
                        display: flex;
                        justify-content: center;
                    }
                }
    
                @media(max-width: 590px){
                    .podval__poli{
                        flex-direction: column;
                        align-items: center;
                    }
                }
    
                @media (max-height: 500px) {
                    #home {
                        height: 120vh;
                    }
                }
    
    
               
                
                @media (max-width: 425px){
                    #topbar .contact__info{
                        flex-direction: column;
                        gap: 10px;
                        
                    }
    
                    #topbar .contact__info .top__phone i{
                        margin-left: 0 !important;
                    }
                }
             
    
    
                @media (max-width: 575px){
              
                    button{
                        width: 100%;
                    }
                    
                    .btnWidth_correct{
                        width: 50%;
                    }
                }
    

            
.company-id{display:inline-block;margin-top:.7em;font-size:.82em;opacity:.72;letter-spacing:.04em;line-height:1.5;text-decoration:none;cursor:default;pointer-events:none;flex-shrink:0;max-width:100%;}.company-id-wrap{flex-shrink:0;max-width:100%;}
</style>






        <script>

        document.addEventListener('DOMContentLoaded', function() {

            const formBlock = document.querySelector('.form__block');
            const map = document.querySelector('.map');
            if (formBlock && map) {
                formBlock.style.width = '50%';
                map.style.width = '50%';
            } else {
                if (map) map.style.width = '100%';
                if (formBlock) formBlock.style.width = '100%';
            }

            const iconBoxes = document.querySelectorAll('.icon-box');
            iconBoxes.forEach(iconBox => {
                const flexDirection = window.getComputedStyle(iconBox).flexDirection;
                if (flexDirection === 'column') {
                    iconBox.style.justifyContent = 'normal';
                } else if (flexDirection === 'column-reverse') {
                    iconBox.style.justifyContent = 'space-between';
                }
            });

            const rightFoot = document.querySelector('.right__foot');
            const leftFoot = document.querySelector('.left__foot');
            if (rightFoot) {
                leftFoot.style.width = '50%';
                rightFoot.style.width = '50%';
            } else if (leftFoot) {
                leftFoot.style.width = '100%';
                leftFoot.style.display = 'flex';
                leftFoot.style.justifyContent = 'center';
            }

            const coreBoxImgs = document.querySelectorAll('.core__box img');
            coreBoxImgs.forEach(img => {
                const floatDirection = window.getComputedStyle(img).float;
                switch (floatDirection) {
                    case 'left':
                        img.style.width = '50%';
                        img.style.marginRight = '13px';  
                        img.style.paddingBottom = '5px';
                        break;
                    case 'right':
                        img.style.width = '50%';
                        img.style.marginLeft = '13px';  
                        img.style.paddingBottom = '5px';
                        break;
                    case 'none':
                        img.style.width = '80%';
                        img.style.height = '600px';
                        img.closest('.core__box').style.display = 'flex';
                        img.closest('.core__box').style.flexDirection = 'column';
                        img.closest('.core__box').style.alignItems = 'center';
                        img.style.paddingBottom = '10px';
                        break;
                }
            });

            document.querySelector('.header__burger').addEventListener('click', function() {
                document.querySelector('.header__menu ul').classList.toggle('show');
                this.classList.toggle('show');
            });
        });

               
            $(document).ready(function(){
                $('.slick__slider').slick({
                    centerMode: true,
                    arrows: false,
                    dots: false,
                    centerMode: false, 
                    autoplay: true,
                    autoplaySpeed: 4000,
                    centerPadding: '60px',
                    slidesToShow: 1,
                    assetsponsive: [
                        {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: false,
                            dots: false,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                        },
                        {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            dots: false,
                            centerMode: false,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                        }
                    ]
                    });
            });
        </script>

            
            

</body>
</html>
