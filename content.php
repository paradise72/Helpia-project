<!DOCTYPE >
<html>
    <head>
        <title> helpia content</title>


    </head>
<body class="contain_all">
<style>
.contain_all{
background-color: burlywood;

}
.features {
    max-width: 1200px;
    max-height: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
    background-color: #fff;
}

.features h2 {
    font-size: 24px;
    margin-bottom: 30px;
}
.features .feature {
    border: 2px solid #009688;
    padding: 20px;
    margin: 10px;
    text-align: center;
    border-radius: 10px;
    background-color: #fff;
    transition: transform 0.3s;
    cursor: pointer;
    display: inline-block;
    width: calc(45% - 20px); /* 20% width with 10px spacing */
}
.features .feature:hover {
    transform: scale(1.05);
}

.features .feature img {
    max-width: 100%;
    margin-bottom: 10px;
}

    </style>

<p><h2>Dear student, welcome to helpia content here you can choose ENGLISH if you want to learn english.</h2></p>
<p><h2>Munyeshuri nshuti yacu, urakaza neze kuri helpia wifuza kwiga ururimi rw'ikinyarwanda wahitamo KINYARWANDA</h2></p>

<section id="features" class="features">

<div class="feature" onclick="displayContent('content3')">
            <img src="english.jpeg" alt="Feature 1" height="360" width="500">
            <h3>LEARN BASIC CONTENT FOR ENGLISH LANGUAGE</h3>
            <p></p>
</div>
<div class="feature" onclick="displayContent('content3')">
            <img src="kinyarwanda.jpeg" alt="Feature 1">
            <h3>KWIGA URURIMI RW'IKINYARWANDA</h3>
            <p></p>
</div>
</section>
</body>