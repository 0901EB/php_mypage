<?php
    header("Content-type: text/css; charset: UTF-8");
?>

#chatBox{
    border-style: solid;
    border-color: grey;
    border-radius: 5px;
    height: 400px;
    width: 85%;
    overflow-x: hidden;
    display: flex;
    margin-top: 20px;
    
}

#chatText{
    display: flex;
    flex-direction: column;
    width: auto;
}

.note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #bdc3c7, #2c3e50);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
    margin-top: 2%;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: grey;
    color: #fff;
    margin-bottom: 20px;
}

.btnSubmit:hover{
  opacity: 0.5;
}

.carousel{
    background: #2f4357;
    margin-top: px;
}
.carousel-item{
    text-align: center;
    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.bs-example{
	margin: 0px;
}

#indicator{
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 10px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}

#cardRow{
  margin-top: 40px;

}

#footer{
  background-color: #343A40;
  height: 60px;
}

.jumbotron{
  margin-top: 40px;
  width: 40%;
}

.btn{
  background-color: grey;
  border-color: grey;
}

.btn:hover{
  opacity: 0.7;
  background-color: grey;
  border-color: grey;
}

.text-block{
  background-color: #E9ECEF;
  border-radius: 5px;
  margin-bottom: 20px;
  padding: 20px;
}

a {
    color: #0060B6;
    text-decoration: none;
}

a:hover 
{
     color:#00A0C6; 
     text-decoration:none; 
     cursor:pointer;  
}

.text-block-img{
  border-radius: 5px;
  margin-bottom: 10px;
}

#footer{
  color: #D1D1D1;
}

#article-container{
  padding: 10px;
}

#container-about{
  height: 40%;
}

#user-name{
  
}