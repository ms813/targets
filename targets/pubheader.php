<style>
.pubToolsNavWrap{
  background: #003372;
  padding:10px;
  position: relative;
  top:-30px;
  z-index: 0;
  box-shadow:  0 0 20px 10px #555;
}

.pubToolsNav a {
  color: white;
  text-decoration: none;
  padding: 5px;
  font-family: sans-serif
}

.pubToolsNav a:first-child{
  margin-left:30px;
}

.pubToolsNav a:hover {
  background:#aa3371;
  border-radius: 3px;
}

#pubButton, #closePubButton {
  color: white;
  position: absolute;
  background: #003372;
  padding:5px 10px;
  border-radius:5px;
  cursor: pointer;
  z-index:2;
  font-weight: bold;
  text-shadow: 1px 2px 0 #000;
  transition: 0.2s all;
}

#pubButton:hover{
  padding-top:8px;
}


#closePubButton {
  top: 4px;
}

#closePubButton:hover {
  padding-top:3px;
}
</style>
<div class="pubToolsNavWrap">
    <div id="closePubButton">&uarr;</div>
    <div class="pubToolsNav">
        <a href="http://epsweb/wiki">Wiki</a>
        <a href="http://epsweb/PubTools">PubTools</a>
    </div>  
    <div id="pubButton">&darr;</div>
</div>  

<script>
$('#pubButton').click(function() {
  $('.pubToolsNavWrap').animate({
    "top":"+=30px"
  }, "fast");
  $('#pubButton').fadeOut('fast');
  $('#closePubButton').fadeIn('slow');
});    

$('#closePubButton').click(function() {
  $('.pubToolsNavWrap').animate({
    "top":"-=30px"
  }, "slow");
  $('#closePubButton').fadeOut('slow');
  $('#pubButton').fadeIn('slow');
});    
</script>