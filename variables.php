<div class="page-header">
        <h1>Het gebruik van variabelen met LESS</h1>
</div>
<p class="lead">
<p>Met LESS kun je gebruik maken van variabelen. Hieronder staat een voorbeeld</p>
  <code>
     <pre>
@color1: #0000FF;
@borderWidth: 10;
@unit: px;
@path: "../images/";

#content
{
  border: ~"@{borderWidth}@{unit}" solid @color1;
  background-image: url("@{path}groenten_klein.jpg");
  width: 400px;
  height: 400px;
}
    </pre>
  </code>

<div id='content'>
    div#content
</div>

<hr>

<p>De onderstaande div heeft opmaak die is gemaakt met 7 LESS variabelen @colorText,
@borderWidth, @borderRadius, @backgroundColor, @fontSize, @width en @height.</p>
</p>

<code>
  <pre>
@borderColor: darken(@backgroundColor, 20%);
@borderThickness: 4;
@lineStyle: solid;
@width: 50%;
@height: 100px;
@backgroundColor: rgba(220, 220, 220, 1.0);
@color: lighten(@backgroundColor, 60%);
@padding: 0.8em;
@font_extension: family;


#divLessOpmaak
{
  border: ~"@{borderThickness}px" @lineStyle @borderColor;
  width: @width;
  height: @height;
  background-color: @backgroundColor;
  color: @color;
  padding: @padding;
  font-family: "Verdana";
}

  </pre>
</code>



<div id="divLessOpmaak">
    Dit is een div#divLessOpmaak waarvan de css properties zijn ingesteld met LESS.
</div>


