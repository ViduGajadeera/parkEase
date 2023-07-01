<!DOCTYPE html>
<html>
<head>
  <title>ParkEase-STAFF REGISTRATION</title> 
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style type="text/css">

@import "compass/css3";

*, :before, :after {
  box-sizing: border-box;
}

.unstyled {
  list-style: none;
  padding: 0;
  margin: 0;
}
.unstyled a {
  text-decoration: none;
}

.list-inline {
  overflow: hidden;
}
.list-inline li {
  float: left;
}

.header {
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
  width: 17.5em;
  background: #35302D;
}

.logo {
/*  text-transform: lowercase;*/

  font: 300 2em "Source Sans Pro", Helvetica, Arial, sans-serif;
  text-align: center;
  padding: 0;
  margin: 0;
}
.logo a {
  display: block;
  padding: 1em 0;
  color: #DFDBD9;
  text-decoration: none;
  transition: .15s linear color;
}
.logo a:hover {
  color: #fff;
}
.logo a:hover span {
  color: #DF4500;
}
.logo span {
  font-weight: 700;
  transition: .15s linear color;
}

.main-nav ul {
  border-top: solid 1px #3C3735;
}
.main-nav li {
  border-bottom: solid 1px #3C3735;
}
.main-nav a {
  padding: 1.1em 0;
  color: #DFDBD9;
  font: 400 1.125em "Source Sans Pro", Helvetica, Arial, sans-serif;
  text-align: center;
 /* text-transform: lowercase; */
}
.main-nav a:hover {
  color: #fff;
}

.social-links {
  border-bottom: solid 1px #3C3735;
}
.social-links li {
  width: 25%;
  border-left: solid 1px #3C3735;
}
.social-links li:first-child {
  border: none;
}
.social-links a {
  display: block;
  height: 5.5em;
  text-align: center;
  color: #3C3735;
  font: 0.75em/5.5em "Source Sans Pro", Helvetica, Arial, sans-serif;
}
.social-links a:hover {
  color: #DFDBD9;
}

.list-hover-slide li {
  position: relative;
  overflow: hidden;
}
.list-hover-slide a {
  display: block;
  position: relative;
  z-index: 1;
  transition: .35s ease color;
}
.list-hover-slide a:before {
  content: '';
  display: block;
  z-index: -1;
  position: absolute;
  left: -100%;
  top: 0;
  width: 100%;
  height: 100%;
  border-right: solid 5px #DF4500;
  background: #3C3735;
  transition: .35s ease left;
}
.list-hover-slide a.is-current:before, .list-hover-slide a:hover:before {
  left: 0;
}

.body{
  background: #35302d;



}
#heed{
  color: white; 
  
}
#div{
background-color:#35302d;
padding: 18px; 
position: fixed;
width: 100%;


}

.formee{

   
  margin-left: 210px;
}


/* mapp css start */

.grid {
  display: grid;
  grid-template-rows: repeat(6, 1fr);
  grid-template-columns: repeat(12, 1fr);
  width: 40%;
  padding: 35px 40px;
  /*margin: 202px;*/
  
}
.box {
  color: black;
  font-size: 1vw;
  padding: 1px;
  background: gold;
  text-align: center;
  /*height: 40px;
  width: 40px;*/

}
.box:nth-child(1) {
  grid-column: span 12;
  background-color: white;
  font-size: 20px;
  font-weight: bold;

  }
.box:nth-child(8){
  grid-column: span 1;
  grid-row: span 22;
  background-color: black;

}

.box:nth-child(14){
  grid-column: span 6;
  background-color: black;
}
.box:nth-child(15){
  grid-column: span 5;
  background-color: black;
}

.box:nth-child(27){
  grid-column: span 6;
  background-color: black;
}

.box:nth-child(28){
  grid-column: span 5;
  background-color: black;
}
.box:nth-child(40){
  grid-column: span 6;
  background-color: black;
}
.box:nth-child(41){
  grid-column: span 5;
  background-color: black;
}
.box:nth-child(53){
  grid-column: span 6;
  background-color: black;
}
.box:nth-child(54){
  grid-column: span 5;
  background-color: black;
}
.box:nth-child(66){
  grid-column: span 6;
  background-color: black;
}
.box:nth-child(67){
  grid-column: span 5;
  background-color: black;
}
.box:nth-child(79){
  grid-column: span 6;
  background-color: black;
}
.box:nth-child(80){
  grid-column: span 5;
  background-color: black;
}
.box:nth-child(92){
  grid-column: span 6;
  background-color: black;
}
.box:nth-child(93){
  grid-column: span 5;
  background-color: black;
}
.box:nth-child(105){
  grid-column: span 6;
  background-color: black;
}
.box:nth-child(106){
  grid-column: span 5;
  background-color: black;
}
.box:nth-child(118){
  grid-column: span 6;
  background-color: black;
}
.box:nth-child(119){
  grid-column: span 5;
  background-color: black;
}
.box:nth-child(120){
  grid-area: 20/6/20/6;
}

.box:nth-child(121){
  grid-column: span 6;
  background-color: black;
}
.box:nth-child(122){
  grid-column: span 5;
  background-color: black;
}


@media screen and (max-width: 575px) {
    .grid {
      display: block;
      }
    .box {
      margin: 10px 0;
    }
  }
/* map css ends */
  
</style>








</head>
<body>  
  <section> 
  <div class="navbar navbar-inverse navbar-static-top">
    <div id="div">
  <div class="container">
    <div align="center" id="heed" ><h3> <b> AUTOMATED PARKING MANAGEMENT SYSTEM </b></h3></div>

    </div>
  </div>




<header class="header" role="banner">
  <h1 class="logo">
    <table><tr><td>
    <img src="logo.png" height="80px" width="80px"></td> 

    <td><a href="#">Park <span>Ease</span></a></td>
    </tr>
</table>
  </h1>
  <div class="nav-wrap">
    <nav class="main-nav" role="navigation">
      <ul class="unstyled list-hover-slide">
        <li><a href="">HOME</a></li>
        <li><a href="index.html">STAFF REGISTRATION</a></li>
        <li><a href="#">RESERVATIONS</a></li>
        <li><a href="">GATE IN</a></li>
        <li><a href="#">DEPARTURE</a></li>
        <li><a href="#">REPORTS</a></li>
        <li><a href="#">FEEDBACKS</a></li>
      </ul>
    </nav>
   <!-- <ul class="social-links list-inline unstyled list-hover-slide">
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Google+</a></li>
      <li><a href="#">GitHub</a></li>
      <li><a href="#">CodePen</a></li>
    </ul>-->
  </div>
</header>
</div>

<div class="formee"> 
<main class="grid">
  
  <div class="box">Zone A - Map</div>
  <div class="box">1</div>
  <div class="box">2</div>
  <div class="box">3</div>
  <div class="box">4</div>
  <div class="box">5</div>
  <div class="box">6</div>
  <div class="box"></div>
  <div class="box">7</div>
  <div class="box">8</div>
  <div class="box">9</div>
  <div class="box">10</div>
  <div class="box">11</div>
  <div class="box">Lane A-1</div>
  <div class="box">Lane A-2</div>
  <div class="box">12</div>
  <div class="box">13</div>
  <div class="box">14</div>
  <div class="box">15</div>
  <div class="box">16</div>
  <div class="box">17</div>
  <div class="box">18</div>
  <div class="box">19</div>
  <div class="box">20</div>
  <div class="box">21</div>
  <div class="box">22</div>
  <div class="box">Lane A-2</div>
  <div class="box">Lane A-2</div>
  <div class="box">23</div>
  <div class="box">24</div>
  <div class="box">25</div>
  <div class="box">26</div>
  <div class="box">27</div>
  <div class="box">28</div>
  <div class="box">29</div>
  <div class="box">30</div>
  <div class="box">31</div>
  <div class="box">32</div>
  <div class="box">33</div>
   <div class="box">Lane A-2</div>
    <div class="box">Lane A-2</div>
  <div class="box">34</div>
  <div class="box">35</div>
  <div class="box">36</div>
  <div class="box">37</div>
  <div class="box">38</div>
  <div class="box">39</div>
  <div class="box">40</div>
  <div class="box">41</div>
  <div class="box">42</div>
  <div class="box">43</div>
  <div class="box">44</div>
   <div class="box">Lane A-2</div>
    <div class="box">Lane A-2</div>
  <div class="box">45</div>
  <div class="box">46</div>
  <div class="box">47</div>
  <div class="box">48</div>
  <div class="box">49</div>
  <div class="box">50</div>
  <div class="box">51</div>
  <div class="box">52</div>
  <div class="box">53</div>
  <div class="box">54</div>
  <div class="box">55</div>
   <div class="box">Lane A-2</div>
    <div class="box">Lane A-2</div>
  <div class="box">56</div>
  <div class="box">57</div>
  <div class="box">58</div>
  <div class="box">59</div>
  <div class="box">60</div>
  <div class="box">61</div>
  <div class="box">62</div>
  <div class="box">63</div>
  <div class="box">64</div>
  <div class="box">65</div>
  <div class="box">66</div>
   <div class="box">Lane A-2</div>
    <div class="box">Lane A-2</div>
  <div class="box">67</div>
  <div class="box">68</div>
  <div class="box">69</div>
  <div class="box">70</div>
  <div class="box">71</div>
  <div class="box">72</div>
  <div class="box">73</div>
  <div class="box">74</div>
  <div class="box">75</div>
  <div class="box">76</div>
  <div class="box">77</div>
   <div class="box">Lane A-2</div>
    <div class="box">Lane A-2</div>
  <div class="box">78</div>
  <div class="box">79</div>
  <div class="box">80</div>
  <div class="box">81</div>
  <div class="box">82</div>
  <div class="box">83</div>
  <div class="box">84</div>
  <div class="box">85</div>
  <div class="box">86</div>
  <div class="box">87</div>
  <div class="box">88</div>
    <div class="box">Lane A-2</div>
    <div class="box">Lane A-2</div>
  <div class="box">89</div>
  <div class="box">90</div>
  <div class="box">91</div>
  <div class="box">92</div>
  <div class="box">93</div>
  <div class="box">94</div>
  <div class="box">95</div>
  <div class="box">96</div>
  <div class="box">97</div>
  <div class="box">98</div>
  <div class="box">99</div>
  <div class="box">Lane A-2</div>
  <div class="box">Lane A-2</div>
  <div class="box">100</div>
  <div class="box">Lane A-2</div>
  <div class="box">Lane A-2</div>

 
</main>
</div>
</div>


        
</section>

</body>
</html>